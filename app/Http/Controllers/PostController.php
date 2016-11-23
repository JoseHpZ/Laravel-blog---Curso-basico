<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Comment;
use Input;

class PostController extends Controller
{
 
    public function getList() {

        $data['posts'] = Post::all();

        return view('index', $data);
    }
 
    public function getPost($id) {
        
        $post = Post::find($id);

        if($post == null)
            return 'No existe el post';
        else {
            $data['post'] = $post;
            $data['comments'] = Comment::where('post_id', $id)->get();
            return view('post', $data);
        }

    }
 
    public function postSavepost() {

        $input = Input::all();

        if(isset($input['post_id'])) {
            $post = Post::find($input['post_id']);
        } else {
            $post = new Post();
        }

        $post->title = $input['title'];
        $post->resume = $input['resume'];
        $post->description = $input['description'];
        $post->publish_date = $input['publish_date'];
        $post->status = $input['status'];

        $post->save(); // Guarda el objeto en la BD

        return "Post guardado";
    }
 
    public function getEditpost($id = null) {
        
        if ($id == null)
            return view('edit-post');
        else {
            $data['post'] = Post::find($id);
            if($data['post'] == null)
                return 'El post no existe';

            return view('edit-post', $data);
        }

    }
 
    public function getDeletepost($id) {
        $post = Post::find($id);

        if($post == null)
            return "No existe este post";
        else
            $post->delete();
    }
 
}