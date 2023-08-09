<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AlumnosController;

Route::get('/alumno', ['as' => 'alumnos', 'uses' => 'App\Http\Controllers\AlumnosController@alumnos']); 
