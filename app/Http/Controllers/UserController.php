<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'USUARIOS';
    }
    public function show($id){
        return "Detalle de usuario: {$id}";
    }
    public function create(){
        return "Crear nuevo usuario" ;
    }
}
