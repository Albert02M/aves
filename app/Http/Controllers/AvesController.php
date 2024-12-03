<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aves;
use Illuminate\Support\Str;

class AvesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aves = Aves::paginate(10);
        return view('aves.index', compact('aves'));
    }


    public function inicio()
    {
        $aves = Aves::all();
        return view('inicio')->with(['aves' => $aves]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'familia' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'nombrecientifico' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'nombrecomun' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
        // Definir mensajes personalizados de validación
        $messages = [
            'familia.required' => 'Ingrese la familia del ave',
            'familia.regex' => 'La familia solo puede contener letras y espacios',
            'nombrecientifico.required' => 'Ingrese el nombre científico',
            'nombrecientifico.regex' => 'El nombre científico solo puede contener letras y espacios',
            'nombrecomun.required' => 'Ingrese el nombre común',
            'nombrecomun.regex' => 'El nombre común solo puede contener letras y espacios',
            'categoria.regex' => 'La categoría solo puede contener letras y espacios',
            'caracteristicas.regex' => 'Las características solo pueden contener letras y espacios',
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.mimes' => 'La imagen debe ser de tipo jpeg, png o jpg',
            'imagen.max' => 'La imagen no debe superar los 2MB',
        ];

        // Validar la solicitud
        $request->validate($rules, $messages);

        $aves = new Aves($request->all());

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            // Crear el nombre de la imagen usando el campo nombrecientifico
            $nombreImagen = Str::slug($request->nombrecientifico) . '.' . $imagen->getClientOriginalExtension();
            // Mover la imagen a la carpeta public/img/ave con el nombre generado
            $imagen->move(public_path('img/ave'), $nombreImagen);
            // Asignar el nombre de la imagen al campo correspondiente en el modelo
            $aves->imagen = $nombreImagen;
        }

        $aves->save();

        return redirect('aves');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aves = Aves::find($id);
        return view('aves.update')->with('aves', $aves);
    }

    /**
     * Update the specified resource in sstorage.
     */
    public function update(Request $request, string $id)
    {
        $aves = Aves::find($id);
        $aves->familia = $request->input('familia');
        $aves->nombrecientifico = $request->input('nombrecientifico');
        $aves->nombrecomun = $request->input('nombrecomun');
        $aves->categoria = $request->input('categoria');
        $aves->caracteristicas = $request->input('caracteristicas');
        $aves->save();
        return redirect('aves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aves = Aves::findOrFail($id);
        $aves->delete();
        return redirect('/aves');
    }
}
