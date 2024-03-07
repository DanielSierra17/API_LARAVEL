<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    
    public function consumirApi()
    {
        try {
            // Realizar la petición al API
            $response = Http::get('https://rickandmortyapi.com/api/character');

            // Verificar si la respuesta es exitosa
            if ($response->successful()) {
                // Obtener los datos de la respuesta en formato JSON
                $data = $response->json();

                // Pasar los datos a la vista
                return view('api')->with('data', $data);
            } else {
                // Si la petición no fue exitosa, mostrar un mensaje de error
                return view('api')->with('error', 'Error al obtener los datos del API');
            }
        } catch (\Exception $e) {
            // Si ocurre una excepción, mostrar un mensaje de error
            return view('api')->with('error', 'Error al conectarse al API');
        }
    }
}
