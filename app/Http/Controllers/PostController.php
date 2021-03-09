<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Users;


class PostController extends Controller
{
   public function getAllPost(){
      $posts = DB::table('posts')->get(); //Here posts is the table name;
      return view('posts', ['posts' => $posts]);
   }

   public function addPost() {
      return view('add-post');
   }

   public function addPostSubmit(Request $req) {
      DB::table('posts')->insert([
         'title' => $req->title,
         'body' => $req->body
      ]);

      return back()->with('post-created', 'Post Has been created Successfully');
   }

   public function getPostById($id) {
      $post = DB::table('posts')->where('id', $id)->first();
      return view('single-post', ['post'=>$post]);
   }


   public function deletePost($id){
      DB::table('posts')->where('id', $id)->delete();
      return back()->with('post-deleted', 'Post Has Been Deleted successfully');
   }

   public function editPost($id){
      $post = DB::table('posts')->where('id', $id)->first();
      return view('edit-post', ['post' => $post]);
   }

   public function updatePost(Request $req){
      DB::table('posts')->where('id', $req->id)->update([
         'title' => $req->title,
         'body' => $req->body
      ]);

      return back()->with('post-updated', "Post has been updated successsfully");
   }

    public function innerJoinClause() {
      $results = DB::table('students')->join('posts','students.sid', '=', 'posts.student_id')->select('students.name','posts.title','posts.body')->get();
      return view('inner-join', ['results' => $results]);
   }

   public function leftJoin() {
      $results = DB::table('students')->leftJoin('posts', 'students.sid', '=', 'posts.student_id')->get();
      return $results;
   }

   public function rightJoin() {
      $result = DB::table('students')->rightJoin('posts', 'students.sid', '=', 'posts.student_id')->get();
      return $result;
   }

   public function getAllPostUsingModel() {
      $post = Users::all();
      return $post;
   }
}
