<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        function validarName(Request $request, Product $product)
        {
            $nombreProducto = $request->name;
            if ($nombreProducto === '' || $nombreProducto == null || is_numeric($nombreProducto)) {
                return "El nombre no es correcto";
            } else {
                $product->name = $nombreProducto;
            }
        }

        function validarPrecio(Request $request, Product $product)
        {
            $precioProducto = $request->price;
            if (is_float($precioProducto)) {
                $product->name = $precioProducto;
            } else {
                return "El precio no es valido";
            }
        }

        function validarTasa(Request $request, Product $product)
        {
            $tasaProducto = $request->taxe;
            if (is_int($tasaProducto)) {
                $product->taxe = $tasaProducto;
            } else {
                return "La tasa ha de ser un numero";
            }
        }

        function validarDescuento(Request $request, Product $product)
        {
            $descuentoProducto = $request->discount;
            if (is_int($descuentoProducto)) {
                $product->discount = $descuentoProducto;
            } else {
                return "El descuento ha de ser un numero";
            }
        }

        function validarDisponible(Request $request, Product $product)
        {
            $disponible = $request->disponible;
            if ($disponible === 1 || $disponible === 0) {
                $product->disponible = $disponible;
            } else {
                return "La disponibilidad ha de ser 1 o 0";
            }
        }

        function validarCategoria(Request $request, Product $product)
        {
            $categoria = $request->category;
            $categoria = trim($categoria);
            if ($categoria === "Muebles" || $categoria === "Patas" || $categoria === "Espejos" || $categoria === "Accesorios") {
                $product->category = $categoria;
            } else {
                return "La categoria ha de ser Muebles, Patas, Espejos o Accesorios";
            }
        }
        $product = new Product();
        $product->image = $request->image;
        $product->save();

        return response()->json(["nombre" => $product->name], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */






    public function update(Request $request, Product $product)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->disponible = $request->disponible;
        $product->taxe = $request->taxe;
        $product->discount = $request->discount;
        $product->image = $request->image;
        $product->category = $request->category;

        $product->save();

        return response()->json(["nombre" => $product->name], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::destroy($request->id);
        return "El producto " . $product . "ha sido eliminado";
    }
}
