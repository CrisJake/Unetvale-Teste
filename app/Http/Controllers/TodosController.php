<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class TodosController extends Controller
{
    public function list(Request $request) {
        $todos = todos::all();  
        
        return view('html',['todos' => $todos]);
    }
}