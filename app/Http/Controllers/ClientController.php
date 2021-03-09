<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{

    //Fetching All data from the API
    public function getAllPost() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    //Fetching a single date from the API
    public function getPostById($id){
        $id = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $id->json();
    }

    //Adding a new post to the API 
    public function addPost() {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'userId' => 1,
            'title' => 'New post Title',
            'body' => 'New post Description'
        ]);
        
        return $post->json();
    }

    //Updating the post in API
    public function updatePost() {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'Updated Title',
            'body' => 'Updated Description'
        ]);

        return $post->json();

    }

    //Deleting the data according to the id into the API
    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
