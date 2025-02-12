<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'name',
        'kategori_id',
        'harga',
        'stok',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Method untuk mengurangi stok
    public function reduceStock($amount)
    {
        if ($this->stok < $amount) {
            throw new \Exception("Stok tidak mencukupi untuk produk: {$this->name}");
        }
        $this->stok -= $amount;
        $this->save();
    }
}
