<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;
    public Function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
}
