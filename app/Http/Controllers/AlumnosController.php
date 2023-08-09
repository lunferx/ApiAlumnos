<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function alumnos(){
        $datos = [
            [
                "nombre" => "FERNANDO LUNA MENDOZA",
                "matricula" => "DEF456789",
                "curp" => "ROGP800303HDFLMS02",
                "sexo" => "Hombre",
                "edad" => 20,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "GABRIELA RAMIREZ GOMEZ ",
                "matricula" => "XYZ789012",
                "curp" => "GAMM880212MDFRRT08",
                "sexo" => "Mujer",
                "edad" => 35,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "CARLOS HERNANDEZ SANCHEZ",
                "matricula" => "ABC123001",
                "curp" => "HESS871124HDFTRR01",
                "sexo" => "Hombre",
                "edad" => 25,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "ISABEL RODRIGUEZ LOPEZ",
                "matricula" => "DEF456002",
                "curp" => "RODL900203MDFLPS09",
                "sexo" => "Mujer",
                "edad" => 22,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "JAVIER GONZALEZ MARTINEZ",
                "matricula" => "GHI789003",
                "curp" => "GOMJ880314MDFZBN03",
                "sexo" => "Hombre",
                "edad" => 28,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "LAURA FLORES RAMIREZ",
                "matricula" => "JKL012004",
                "curp" => "FLRL910415MDFBNZ01",
                "sexo" => "Mujer",
                "edad" => 19,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "MIGUEL LOPEZ HERRERA",
                "matricula" => "MNO345005",
                "curp" => "LOPH950515MDFNRT07",
                "sexo" => "Hombre",
                "edad" => 24,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "ANA SANCHEZ GOMEZ",
                "matricula" => "PQR678006",
                "curp" => "SNGA920616MDFRRQ05",
                "sexo" => "Mujer",
                "edad" => 30,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ],
            [
                "nombre" => "RICARDO MARTINEZ LOPEZ",
                "matricula" => "STU901007",
                "curp" => "MRLR860717MDFRCD08",
                "sexo" => "Hombre",
                "edad" => 26,
                "imagen" => "https://cdn-icons-png.flaticon.com/512/6073/6073873.png"
            ]
        ];
        return response()->json($datos);
    }
}