<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
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
        $user = new User();
        $user->name = $request->name;
        $user->rol = $request->rol;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->avatar = $request->avatar;
        $user->password = $request->password;
        $user->save();

        return response()->json(["nombre" => $user->name], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    /*

    $emailValidar=$request->email; */

    public function comprobarNombre(Request $request, User $user)
    {
        $nameValidar = $request->name;
        if ($nameValidar === '' || $nameValidar == null || is_numeric($nameValidar)) {
            return "El nombre no es correcto";
        } else {
            $nameValidar = $user->name;
        }
    }

    public function comprobarDNI(Request $request, User $user)
    {
        $cadenaValidar = $request->dni;
        if ($request->dni === '' || $request->dni == null) {
            return "La cadena del DNI esta vacia";
        }

        $cadenaValidacion = "TRWAGMYFPDXBNJZSQVHLCKE";
        $cadenaValidar = rtrim($cadenaValidar);
        $cadenaValidar = substr($cadenaValidar, 0, -1);
        $charValidar = $cadenaValidar % 23;

        if ($charValidar !== $cadenaValidacion[$charValidar]) {
            return "DNI erroneo";
        } else {
            $user->dni = $cadenaValidar;
            return $cadenaValidar;
        }
    }

    public function comprobarRol(Request $request, User $user)
    {
        $rolValidar = $request->rol;
        if ($rolValidar  === '' || $rolValidar == null ||  is_numeric($rolValidar) || $rolValidar !== "Admin" || $rolValidar !== "Cliente") {
            return "El rol no es valido";
        } else {
            return $user->rol = $rolValidar;
        }
    }

    public function update(Request $request, User $user)
    {
        $user->email = $request->email;
        $user->avatar = $request->avatar;
        $user->password = $request->password;

        $user->save();

        return response()->json(["nombre" => $user->name], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::destroy($request->id);
        return $user;
    }
}
