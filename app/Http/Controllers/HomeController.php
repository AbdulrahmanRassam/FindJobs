<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index($id)
    {
            $categories=Category::all();
            $category_id=Category::where('name',$id)->value('id');

            $jobs=Job::where('category_id',$category_id)->latest()->paginate(10);
            return view('index')->with('jobs',$jobs)->with('categories',$categories)->with('filter',$id);
    }
    public function dashboard()
    {
            $categories=Category::all();
            $jobs=Job::latest()->paginate(10);

            return view('dashboard')->with('jobs',$jobs)->with('categories',$categories);


    }

}
