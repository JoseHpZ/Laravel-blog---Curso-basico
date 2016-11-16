<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
 
    public function getList() {
        return view('index');
        return "Lista de todos los post por GET";
    }
 
    public function getPost($id) {
        return "Ver post, se pasa como parámetro la ID para buscarlo";
    }
 
    public function postSavepost() {
        return "Guardar post por POST";
    }
 
    public function getEditpost($id) {
        return "Editar Post, ID para saber cual es.";
    }
 
    public function getDeletepost($id) {
        return "Borrar Post, ID para saber cual es.";
    }
 
}