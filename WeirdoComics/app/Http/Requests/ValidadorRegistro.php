<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /*Validador Articulos */
            'tipo'=>'required',
            'marca'=>'required',
            'descripcion'=>'required',
            'cantidadArticulos'=>'numeric|required',
            'precioCompraAr'=>'numeric|required',
            'precioVentaAr'=>'numeric|required',
            'fechaIngresoAr'=>'required',
            /* Validador Comic
            'nombre'=>'required',
            'edicion'=>'required',
            'compañia'=>'required',
            'cantidadComics'=>'numeric|required',
            'precioCompraCm'=>'numeric|required',
            'precioVentaCm'=>'numeric|required',
            'fechaIngresoCm'=>'required',
            Validador Proveedores
            'empresa'=>'required',
            'direccion'=>'required',
            'pais'=>'required',
            'contacto'=>'required',
            'noFijo'=>'numeric|required|min:7|max:15',
            'noCelular'=>'numeric|required|min:7|max:15',
            'correo'=>'email|required',
            Validador de Filtro Stock
            'filtro'=>'required' */
        ];
    }
}
