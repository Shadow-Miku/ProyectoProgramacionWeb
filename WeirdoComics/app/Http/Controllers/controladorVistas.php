<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistro;

class controladorVistas extends Controller
{
    public function procesarRegistroComic(ValidadorRegistro $req){
        return redirect('RegistroComic')->with('confirmacion1','Registro de Comic Correcto');
    } /* Funcion para registrar los comics en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

    public function procesarRegistroArticulo(ValidadorRegistro $req){
        return redirect('RegistroArticulo')->with('confirmacion2','Registro de Articulo Correcto');
    } /* Funcion para registrar los articulos en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

    public function procesarRegistroProveedor(ValidadorRegistro $req){
        return redirect('Proveedores')->with('confirmacion3','Registro de Proveedor Correcto');
    } /* Funcion para registrar los comics en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

    public function procesarRegistroPedido(ValidadorRegistro $req){
        return redirect('Pedidos')->with('confirmacion4','Registro de Articulo Correcto');
    } /* Funcion para registrar los comics en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

    /*Funciones para cada vista de la pagina*/
    public function showWelcome(){
        return view('Welcome');
    }

    public function showPrincipal(){
        return view('Principal');
    } 

    public function showRegistroComic(){
        return view('RegistroComic');
    } 

    public function showRegistroArticulo(){
        return view('RegistroArticulo');
    } 

    public function showProveedores(){
        return view('Proveedores');
    } 

    public function showPedidos(){
        return view('Pedidos');
    } 

    public function showStock(){
        return view('Stock');
    } 

    public function showVentas(){
        return view('Ventas');
    } 

}
