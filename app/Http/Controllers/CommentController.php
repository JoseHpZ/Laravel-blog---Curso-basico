<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function postCreatecomment() {
        return "Crearmos el comentario";
    }
 
    public function getDeletecomment($id) {
        return "Borramos el comentario";
    }
}