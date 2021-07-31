<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class PageController extends Controller
{
    protected $invoice;
    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function firstChallenge()
    {
        $invoices = $this->invoice::all();

        foreach ($invoices as $invoice) {
            $invoice->productOverOneHundred = false;
            $invoice->productsOverMillions = collect();

            foreach ($invoice->products as $product) {
                $subTotal = $product->price * $product->quantity;
                $invoice->totalOneChallenge += $subTotal;
                
                //boolean to productOverOneHundred
                if ($product->quantity > 100) {
                    $invoice->productOverOneHundred = true;
                }
                
                if ($subTotal > 1000000) {
                    //add productsOverMillions collection
                    $invoice->productsOverMillions->push($product);
                }
            }
        }
        return view('firstChallenge.solution',compact('invoices'));
    }
    public function secondChallenge()
    {
        return view('secondChallenge.solution');
    }
    
    

    public function thirdChallenge()
    {
        $invoices = $this->invoice::all();

        return view('thirdChallenge.solution',compact('invoices'));

    }
}
