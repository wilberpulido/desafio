<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class PageController extends Controller
{
    public function firstChallenge()
    {
        $invoices = Invoice::all();

        foreach ($invoices as $invoice) {
            $invoice->productOverOneHundred = false;
            $invoice->productsOverMillions = collect();

            foreach ($invoice->products as $product) {
                $subTotal = $product->price * $product->quantity;
                $invoice->total += $subTotal;
                
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
    public function fourthChallenge()
    {
        return view('fourthChallenge.solution');
    }
}
