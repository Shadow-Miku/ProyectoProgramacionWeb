@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'La venta se ha realizado exitosamente',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="text-left mb-5 fs-1"> Ventas </h1>

    <div class="container mt-10 col-md-10">
        <form action="">
            <div class="row g-3">
                <div class="col">
                    <label>Nombre Vendedor</label>
                </div>
                <div class="col-md-3">
                <input class="" type="text" placeholder="Buscar un producto..."> 
                </div>
            </div>
        </form>         
    </div>   

    <div class="card-body ">

        <form action="">
            <div class="container">
                <div class="row row-cols-4">
                    <div class="col"> 
                        </div>
                        <div class="col">
                            <label for="">CANTIDAD</label>
                        </div>
                        <div class="col">
                            <input type="text">
                        </div>
                        <div class="col">
                            <label for="">ARTICULO</label>
                        </div>
                        <div class="col">
                            <label for="">PRECIO</label>
                        </div>
                        <div class="col">
                            <label for="">REFERENCIA</label>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="0">
                        </div>
                        <div class="col">
                            <input type="text" placeholder="ARTICULO">
                        </div>
                        <div class="col">
                            <input type="text" placeholder="$0000.00">
                        </div>
                        <div class="col">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    
@stop