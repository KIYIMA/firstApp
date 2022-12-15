<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    function index($name, $nickname=null){
        //Pongo en mayuscula el primer caracter del nombre
    $name = ucfirst($name);

    if($nickname){
        return "Bienvenido {$name}, tu apodo es: {$nickname}";
    }else{
        return "Bienvenido {$name}.";
    }
    }
}
