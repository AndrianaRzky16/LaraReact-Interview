<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'categories_id', 'jumlah_terjual', 'tanggal_transaksi'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
}
