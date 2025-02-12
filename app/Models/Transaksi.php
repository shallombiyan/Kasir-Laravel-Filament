<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'bayar',
        'kembalian',
        'status',
        'total_harga',
    ];

    /**
     * Relasi ke detail transaksi.
     */
    public function items()
    {
        return $this->hasMany(TransaksiItem::class);
    }

    /**
     * Recalculate total harga dan kembalian berdasarkan detail transaksi.
     */
    public function recalculateTotals(): void
    {
        // Pastikan relasi items terload
        $this->load('items');

        $total = $this->items->sum('total_harga');
        $kembalian = $this->bayar - $total;

        // Update transaksi tanpa memicu event lain (updateQuietly)
        $this->updateQuietly([
            'total_harga' => $total,
            'kembalian'   => $kembalian,
        ]);
    }
}
