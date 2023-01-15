<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllPanelController extends Controller
{
    public function index()
    {

        if (Auth::id()==1) {
            $categories=Category::all();
            $users=User::all();
            # code...
            return view('controllPanel.index')->with('categories',$categories)->with('users',$users);
        }else{

            return redirect()->back()->with('fail','You are not Admin');

        }

    }

    public function create()
    {
            $categories=Category::all();
         return view('controllPanel.create_category')->with('categories',$categories);
    }

    public function store(Request $request)
    {


        Category::create([

            'name'=>$request->name,
            'father'=>$request->father,
        ]);

         return redirect()->back()->with('status','Saved Successfully');
    }


}
