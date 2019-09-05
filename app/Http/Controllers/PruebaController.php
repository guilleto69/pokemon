<?php

namespace App\Http\Controllers;



class PruebaController extends Controller
{
    public function prueba($param){
         return 'Estoy en pruebaController llego parametro: ' . $param;
    }
}
