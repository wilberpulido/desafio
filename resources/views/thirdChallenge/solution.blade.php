@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-3">
        Third Challenge solution
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
                    <table id="totalInvoiceObserver" class="table">
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
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Tabla de facturas
                    </h2>
                </div>
                <div class="card-body">
                    <p>
                        La información mostrara es el resultado de recuperar los datos sin alterar despues de realizar las migraciones con el seeder correspondiente. Y muestros los totales que son resultado de la acción de un observer.
                    </p>
                </div>
            </div>
        </div>
</div>

@endsection