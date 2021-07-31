<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Invoice extends Model
{
    use HasFactory;

    public Function products()
    {
        return $this->hasMany(Product::class,'invoice_id');
    }
}
