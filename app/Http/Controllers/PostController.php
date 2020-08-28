<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Yajra\Datatables\Datatables;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users_data = DB::table('posts')->get();

        return view('show_details')->with("users", $users_data);
    
    }


    
    
    public function datatable()
    {
        return view('datatable.index');
    }

    public function anyData()
    {
        return Datatables::of(Post::query())->make(true);
    }

}
