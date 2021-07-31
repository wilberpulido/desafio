@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-3">
        Second solution
    </h2>
    <div class="card">
        <div class="card-header">
            <h6 class="text-center">
                Procedimiento para instalar proyecto Laravel 8
            </h6>
        </div>
        <div class="card-body">
            <p>
                Laravel es un potente framework desarrollado en PHP, que se ha perfeccionado desde su creación versión tras versión y se ha adaptado a las nuevas tecnologías. Muestra de ello es Laravel 8  poseé una serie de nuevas herramientas y alternativas bien interesantes,  entre la que destaca la posibilidad de usar Docker para instalar un proyecto nuevo, con un entorno de desarrollo previamente configurado y fácilmente personalizado a nuestras necesidades.
            </p>
            <p>
                Por otro lado, hay que destacar que Laravel permite su instalación en Linux, Mac OS, y Windows, a través de dos vías, que son Docker y Composer y que requiere PHP ^7.3|^8.0 <strong>(IMPORTANTE)</strong>. Si bien, personalmente recomiendo usar docker, también haré la descripción de cómo sería el procedimiento si requerimos hacer la instalación con composer. También debo aclarar que describiré como instalar paso a paso en Linux con Docker, pero que la misma descripción detallada se extiende al resto de los sistemas operativos con pequeñas diferencias de sintaxis en los comandos. 
            </p>
            <p>
                ** Si aún no tienes docker, sólo debes ir a la <a target="__blank" href="https://docs.docker.com/get-docker/">página oficial de Docker</a>, seguir sus instrucciones según tu sistema operativo y listo.
            </p>
            <p>
                ** Si aún no tienes composer, debes visitar la <a target="__blank" href="https://getcomposer.org/doc/00-intro.md">página oficial de Composer</a>, seguir sus instrucciones y puedes intalarlo globalmente según tu sistema operativo y listo.
            </p>
            {{-- Linux --}}
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Procedimientos para instalar proyecto Laravel 8 con Linux y Docker
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Con docker instalado en tu distribución Linux, sólo es necesario abrir una terminal, avanzar a la carpeta donde quieras instalar el proyecto y una vez en el directorio apropiado debes correr el comando:
                    </p>
                    <p>
                        <strong>
                            <em>
                                curl -s https://laravel.build/example-app | bash
                            </em>
                        </strong>
                    </p>
                    <p>
                        <strong>curl(Client URL)</strong>: Es un binario ubicado en /usr/bin/curl, que tiene la capacidad de hacer solicitudes a la dirección que le preceda.
                    </p>
                    <p>
                        <strong>-s</strong>: Es una opción de curl que se usa para hacer una "instalación silente"
                    </p>
                    <p>
                        <strong> https://laravel.build/example-app </strong>: Es la dirección a la que curl hará la solicitud, hay destacar que "example-app" será el nombre del proyecto que desees, si quienes que tu proyecto se llame "primer-proyecto", debes cambiar esta dirección por: https://laravel.build/primer-proyecto:
                    </p>
                    <p>
                        <strong>|</strong>: Pipe operation, es un operador de la consola que convierte el output <strong>(curl -s https://laravel.build/example-app)</strong> del comando que tiene a la izquierda en el input del comando de la derecha (bash)
                    </p>
                    <p>
                        Para explicarle de mejor manera, corrí este comando en mi consola:
                        <strong>
                            curl -s https://laravel.build/example-app > secondChallange.txt
                        </strong>, dentro del directorio raíz. Con esto generé un archivo secondChallange.txt en el directorio principal donde pueden ver que retorna de la consulta <strong> curl -s https://laravel.build/example-app</strong>.
                        Al abrir secondChallange.txt, podrán observar que de esa consulta retornan una serie de comandos para ser ejecutador por una consola.
                    </p>
                    <p>
                        <strong>bash</strong>: Es un intérprete de lenguaje de comandos derivado de sh que puede ejecutar comandos ingresados ​​en un símbolo del sistema y procesar el archivo de texto datos de entrada. Y acá es donde todo cierra, gracias al pipe operator (|), la consulta hecha previamente <strong>(curl -s https://laravel.build/example-app)</strong> que ya vimos retornan una serie de comandos son pasados como el input para <strong>bash</strong> que ejecutan en nuestra computadora dichas instrucciones.
                    </p>
                    <p>
                        Una vez ejecutado el consola antes explicado, se comenzar el nuevo proyecto. Al finalizar te pedirá que escribas en consola <strong> cd example-app && ./vendor/bin/sail up</strong>. Con esta instrucción lo que haremos será ejecutar el archivo sail que es un link de scripts de shell, lo que derivará con el reconocimiento del archivo <strong>.env</strong> donde se configuran las variables de entorno y el levantamiento/ejecusión del docker-compose.yml de la carpena raíz.
                    </p>
                    <p>
                        <strong>NOTA</strong>: Por defecto laravel configura las conecciones para mysql, redis, meilisearch, mailhog, y selenium. Sino deseas usar todo el stack o prefieres postgres y redis por ejemplo, puedes ejecutar:
                    </p>
                    <p>
                        <strong>
                            <em>
                                curl -s "https://laravel.build/example-app?with=pgsql,redis" | bash
                            </em>
                        </strong>
                    </p>
                    <p>
                        --De esta manera, el ambiene viene preconfigurado solo para postgres y redis. Despues de la coma puedes pasar los siguientes parametros segun necesites en tu proyecto: mysql, pgsql, mariadb, redis, memcached, meilisearch, selenium, y mailhog.                 
                    </p>
                    <p>
                        - En el archivo .env veras todos los datos necesarios para luego de ejecutar la consola interactiva, ver los datos insertados en una DB dentro de uno de los contenedores que se generen, por ejemplo mysql. 
                    </p>
                    <p>
                        - Si ya tienes mysql o postgres en tu computadora, será necesario apagar los servicios respectivos. Para postgresql con <strong> sudo service postgresql stop </strong>. ¿Por qué? porque nuestros contenedores expondran sus puertos por el puerto por defecto que usa postgres en nuestra computadora, si está ocupado generará un error.
                    </p>
                    <p>
                        - En la misma linea de idea, también será necesario que apagues el servicio apache2 con <strong>sudo service apache2 stop</strong> ¿Por qué? porque habrá un contenedor de linux corriendo en el puerto 80, donde por defecto corre apache2.
                    </p>
                    <p>
                        - Otra alternativa es ir al <strong>.env</strong> y cambiar los puertos de conexios. Sin embargo, se mantendrán corriendo servicios que no usaremos durante el desarrollo de nuestra aplicación y será como pedirle a nuestra computadora que trabaje doble sin razón (Aunque Docker sea muy eficiente, especialmente con linux, consume recursos).
                    </p>
                    <p>
                        - Con un vistazo al docker-compose.yml podremos ver que versión de cada tecnología usamos, ademas de detalles como la ubicación del dockerfile que el docker-composer.yml ejecuta como contexto de build. Y un sin fin de información interesante que no viene al caso.
                    </p>
                    <p>
                        <strong>Visualizar el nuevo proyecto</strong>: Para eso, sólo debes escribir en el navegador: <a href="http://localhost/" target="_blank" rel="noopener noreferrer">http://localhost/</a>.
                    </p>
                </div>
            </div>
            {{-- McOS --}}
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Procedimientos para instalar proyecto Laravel 8 con MacOS y Docker
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Con docker instalado en tu distribución MacOS(basada en linux), sólo es necesario abrir una terminal, avanzar a la carpeta donde quieras instalar el proyecto y una vez en el directorio apropiado debes correr el comando:
                    </p>
                    <p>
                        <strong>
                            <em>
                                curl -s "https://laravel.build/example-app" | bash
                            </em>
                        </strong>
                    </p>
                    <p>
                        única diferencia con Linux, las comillas que encierran el link de descarga. La explicación detallada es la misma que para linux.
                    </p>
                </div>
            </div>
            {{-- Windows --}}
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Procedimientos para instalar proyecto Laravel 8 con Windows y Docker
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Con docker desktop instalado en tu distribución Windows, debes asegurarte de tener Windows Subsystem for Linux 2 (WSL2), que te permitirá ejecutar comando de linux de manera nativa.
                    </p>
                    <p>
                        Cabe acotar que correr docker en Windows tiende a ser más lento, dado a que Docker usa el kernel de linux de la máquina anfitriona para funcionar, la versión para Windows incluye una cantidad importante de archivos que en linux y MacOs ya vienen como parte de su propio sistema operativo.
                    </p>
                    <p>
                        Claro este punto e instalado lo necesario, el comando es el siguiente:
                    </p>
                    <p>
                        <strong>
                            <em>
                                curl -s https://laravel.build/example-app | bash
                            </em>
                        </strong>
                    </p>
                    <p>
                        La explicación detallada es la misma que para linux.
                    </p>
                </div>
            </div>
            {{-- Composer --}}
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">
                        Procedimientos para instalar proyecto Laravel 8 con composer
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Con composer será necesario correr la libreria de laravel y este manejador de paquetes se encargará del resto. Para eso, es necesario ir al directorio donde queremos descargar nuestro proyecto y correr:
                    </p>
                    <p>
                        <strong>
                            <em>
                                composer create-project laravel/laravel example-app
                            </em>
                        </strong>
                    </p>
                    <p>
                        <strong>composer</strong>: manejador de paquetes para PHP, este se encargara de descargar e instalar en el proyecto todas las librerias que le pidamos. 
                    </p>
                    <p>
                        <strong>create-project</strong>: parametro esperado por el paquete de laravel.
                    </p>
                    <p>
                        <strong>laravel/laravel</strong>: Nombre del paquete que buscará.
                    </p>
                    <p>
                        <strong>example-app</strong>: Nombre que tendrá nuestra aplicación.
                    </p>
                    <p>
                        El detalle de todas las dependecias que instala, las vemos <a target="__blank" href="https://packagist.org/packages/laravel/laravel">aquí</a>. Si bien son las mismas dependencias que cuando usamos docker, vía composer tenemos que contar en nuestra computadora con cada tecnología que vayamos a usar y hacer unas configuraciones previas como crear una base de datos con el nombre definido en el .env según cada herramienta que usemos.
                    </p>
                    <p>
                        Despues de descargado e instalado el proyecto, será necesario que escribas en consola:
                    </p>
                    <p>
                        <strong>
                            <em>
                                cd example-app
                                <br>
                                php artisan serve
                            </em>
                        </strong>
                    </p>
                    <p>
                        Con el primer comando entras al proyecto y con el segundo corres el server. Para ver nuestro proyecto debemos ir a: http://example-app.test
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection