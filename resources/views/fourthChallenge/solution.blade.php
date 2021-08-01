@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-3">
        Fourth solution
    </h2>
    <div class="card">
        <div class="card-header">
            <h6 class="text-center">
                ¿qué es Laravel Jetstream? 
            </h6>
        </div>
        <div class="card-body">
            <p>
                La gran novedad que trae Laravel 8, es la posibilidad de instalar el paquete laravel/jetstream y ¿Qué nos ofrece jetstream? Nos ofrece un sistema de loggin, registro y todo lo que gira al rededor de esto profesional e implementando las medidas de seguridad necesarias para hacer de nuestra aplicación, muy segura. Es una manera de no reinventar la rueda con un sistema de loggin que de necesitarlo, será muy semejante a todos los sistemas que implementes con la desventaja de invertir una cantidad grande de tiempo en esto que ya te soluciona jetstream.
            </p>
            <p>
                Cuando decidimos usar esta tecnología podemos irnos por dos caminos en cuanto al desarrollo del front-end, podemos usar Livewire + Blade o Inertia.js + Vue.js, diseñado con Tailwind CSS.
            </p>
            <p>
                <strong>Nota</strong>: en versiones anteriores también se podia implementar un sistema de login prearmado con la librería laravel/ui, implementando el comando <strong>php artisan ui boostrap --auth</strong>. Dicho comando también admite vue y react como parámetros. Esto usa un archivo webpack para configurar las carpetas y paquetes, hay que instalas las dependecias y ejecutar un comando definido en el packpage.json.
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h6 class="text-center">
                ¿qué permite Livewire a los programadores?
            </h6>
        </div>
        <div class="card-body">
            <p>
                El principio de Livewire gira en torno a crear interfaces dinámicas de forma simple y sencilla, la gran ventaja que tiene Livewire es que nos permite trabajar en base a componentes y nos ofrece una vista y una clase asociada que sirve como una especie controlador donde podemos hacer consultas a la base de datos y pasarlos al componente visual de livewire.
            </p>
            <p>
                Trabajar con componente es una ventaja enorme, dado que te permite separar las vistas en componentes y trabajar en cada componente de manera individual, baso esa lógica tambien puedes escribir un componente y usarlos en varias vistas si es necesario. Si escribes un componente button, por ejemplo, y luego de usarlos en diversos lugares el cliente desea cambiar el color de ese button en vez de alterar todas las vistas, sólo hará falta que modifiques el componente visual de livewire y se renderizará con los cambios en todas las vistas.
            </p>
            <p>
                De esta manera, el controlador se hará cargo de llamar a las vistas requeridas y las vistas a su vez llamaran a cada componente de livewire que necesite, y este a su vez tiene su propio controlador que demanda la información con eloquent y pasa esos datos al componente visual de livewire. Ese sería el recorrido hecho al usar Livewire.
            </p>
        </div>
    </div>

@endsection