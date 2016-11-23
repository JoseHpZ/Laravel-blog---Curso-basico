<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use App\Models\Comment;

class CommentController extends Controller
{
	public function postCreatecomment() {
	    
	    $input = Input::all();

	    $comment = new Comment();

	    $comment->username = $input['user'];
	    $comment->text = $input['comment'];
	    $comment->post_id = $input['post_id'];

	    $comment->save();

	    return 'Comentario creado!';
	}
 
	public function getDeletecomment($id) {
	    $comment = Comment::find($id);

	    if($comment == null)
	    	return 'El comentario no existe';
	    else
	    	$comment->delete();

	    return 'Comentario eliminado';
	}
}