<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        $data = [
            'users' => $users,
            'title' => "Usuarios"
        ];
        
        return view('index',$data);
    }


    public function show($id){
        return "Detalle de usuario: {$id}";
    }

    
    public function create(){
        return "Crear nuevo usuario" ;
    }
}
