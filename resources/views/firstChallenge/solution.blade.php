@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-3">
        First solution
    </h2>
    {{-- Tables --}}
    <div class="row">
        {{-- table one --}}
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Invoices and totals
                    </h6>
                </div>
                <div class="card-body">
                    <table id="academiesTable" class="table">
                        <thead>
                            <tr>
                                <th class="col-3 text-center">
                                    ID
                                </th>
                                <th class="col-9 text-center">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td class="text-center">{{ $invoice->id }}</td>
                                    <td class="text-center">{{ $invoice->total }}</td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>            
                </div>
            </div>
        </div>
        {{-- table two --}}
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Invoices that have products with quantity greater than 100
                    </h6>
                </div>
                <div class="card-body">
                    <table id="academiesTable" class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    ID Invoice
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    @if ($invoice->productOverOneHundred)
                                        <td class="text-center">
                                            {{ $invoice->id }}
                                        </td>
                                    @endif
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>            
                </div>
            </div>
        </div>
        {{-- table three --}}
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Names of products whose final value is greater than 100
                    </h6>
                </div>
                <div class="card-body">
                    <table id="academiesTable" class="table">
                        <thead>
                            <tr>
                                <th class="col-4 text-center">
                                    ID Invoice
                                </th>
                                <th class="col-8 text-center">
                                    Product name
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                @if ($invoice->productsOverMillions->isNotEmpty())
                                    @foreach ($invoice->productsOverMillions as $productOverMillions)
                                    <tr>
                                        {{-- {{dd($invoice->productsOverMillions->isNotEmpty())}} --}}
                                        <td class="text-center">
                                            {{ $invoice->id }}
                                        </td>
                                        <td class="text-center">
                                            {{ $productOverMillions->name }}
                                        </td>
                                    </tr>    
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                    </table>            
                    <span>
                        **Consideré "valor final" como el resultado de multiplicar el precio por la cantidad
                    </span>
                </div>
            </div>
        </div>
</div>

@endsection