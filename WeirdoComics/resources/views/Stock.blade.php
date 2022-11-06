@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Articulo xxxxxxxx registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Stock </h1>

        
        <!--Errores arriba del formulario
            @if ($errors->any())
            @foreach ( $errors->all() as $error )
                <div class="alert alert-warning alert-disimissible fade show" role="alert">
                <strong> {{ $error }} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button></div>
            @endforeach
      
        @endif--> 

        <form class="m-4" method="POST" action="Stock">
            @csrf
            <!--Errores individuales y guardar los datos escritos-->
            
            <div class="mb-3">
                <label class="form-label">Filtrado de stock: </label>
                <select  id="lista" required name="filtro" value="{{old('filtro')}}">
                    <option value="Articulos">Articulos</option>
                    <option value="comics">Comics</option>
                </select>
            </div>

            <label for="site-search">Buscar: </label>
                <input type="search" required id="stock" name="stock">

                <button>Buscar</button>
            <br>

    </div>

    <div>
    
        <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Articulo o Comic</th>
                    <th scope="col">Cantidad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Figura de Starwars Bad Batch</td>
                    <td>8</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td >El Batman que rie</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>The Punisher</td>
                    <td>4</td>
                </tr>
                <tr class="table-danger">
                    <th scope="row">4</th>
                    <td>Figura de Milim</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Capitan America</td>
                    <td>6</td>
                </tr>
                <tr class="table-danger">
                    <th scope="row">6</th>
                    <td>The amazing Hulk</td>
                    <td>1</td>
                </tr>
              </tbody> 
        </table>

    </form>

        
    
@stop