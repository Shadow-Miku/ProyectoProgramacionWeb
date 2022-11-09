@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Articulo xxxxxxxx registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-13">

        <p class="text-left mb-5 fs-1"> Ventas </p>
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

                <div class="card-body col-md-11">
                    <table class="table table-secondary mb-10">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">Cantidad</th>
                                <th scope="col">Articulo/Cómic</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                            </tr>
                            <tr class="table-light">
                                <th scope="row">2</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                
                            </tr>
                            <tr class="table-light">
                                <th scope="row">4</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row g-3">
                    <div class="col-md-2">
                        <button class="rd">Realizar Compra</button>
                    </div>
                    <div class="col">
                        <button>Cancelar</button>
                    </div>
                </div> 
    </div>        

        
        <!--Errores arriba del formulario
            @if ($errors->any())
            @foreach ( $errors->all() as $error )
                <div class="alert alert-warning alert-disimissible fade show" role="alert">
                <strong> {{ $error }} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button></div>
            @endforeach
      
        @endif-->
    </div>        

        
    
@stop