<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'jumlah',
        'total_harga',
    ];

    /**
     * Relasi ke transaksi.
     */
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    /**
     * Relasi ke produk.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    protected static function booted()
    {
        // Saat membuat item transaksi
        static::creating(function ($item) {
            // Cari produk berdasarkan produk_id
            $produk = \App\Models\Produk::find($item->produk_id);
            if (!$produk) {
                throw new \Exception("Produk tidak ditemukan!");
            }

            // Validasi stok yang tersedia
            if ($produk->stok < $item->jumlah) {
                throw new \Exception("Stok tidak mencukupi untuk produk: " . $produk->name);
            }

            // Hitung total_harga untuk item ini
            $item->total_harga = $produk->harga * $item->jumlah;

            // Kurangi stok produk
            $produk->stok -= $item->jumlah;
            $produk->save();
        });

        // Setelah item dibuat, perbarui perhitungan di transaksi
        static::created(function ($item) {
            if ($item->transaksi) {
                $item->transaksi->recalculateTotals();
            }
        });

        // Jika terjadi update pada item, perbarui perhitungan di transaksi
        static::updated(function ($item) {
            if ($item->transaksi) {
                $item->transaksi->recalculateTotals();
            }
        });

        // Jika item dihapus, perbarui perhitungan di transaksi
        static::deleted(function ($item) {
            if ($item->transaksi) {
                $item->transaksi->recalculateTotals();
            }
        });
    }
}
