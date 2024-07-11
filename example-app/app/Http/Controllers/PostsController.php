<?php 
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;

  class PostsController extends Controller {

    public function index(Request $request) {
      $recordCreated = true;
      $componentName = null;
      
      if ($recordCreated) {
        $componentName = 'success';
      } else {
        $componentName = 'error';
      }
      
      return view ('posts.index', compact('componentName'));
    }

    public function update(Request $request, string $id) {
      return "UPDATING POST # " . $id;
    }

    public function the_path (Request $request) {
      // if ($request->is('posts/path')) {
      //   return "TRUE";
      // }

      if ($request->routeIs('posts.path')) {
        return "Route name: posts.path";
      }
    }
  }
?>