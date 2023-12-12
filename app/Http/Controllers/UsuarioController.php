<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(): JsonResponse
    {
        $usuario = Usuario::all();
        return response()->json(['usuarios' => $usuario]);
    }

    // Mostrar un docente específico
    public function show(Usuario $id): JsonResponse
    {
        return response()->json(['usuario' => $id]);
    }

    // Almacenar un nuevo docente
    public function store(Request $request): JsonResponse
    {
        $id = Usuario::create($request->all());
        return response()->json(['docente' => $id], 201); // 201 significa "Created"
    }

    // Actualizar un docente existente
    public function update(Request $request, Usuario $id): JsonResponse
    {
            $id->update($request->all());
            return response()->json(['docente' => $id]);
    }

    // Eliminar un docente
    public function delete(Usuario $id): JsonResponse
    {
        $id->delete();
        return response()->json(null, 204); // 204 significa "No Content"
    } 
}
