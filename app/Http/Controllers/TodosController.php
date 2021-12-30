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

    public function check(Request $request) {
        $var_dump("teste");
        $todos = new todos;

        $todos->completed = $request->completed;
        
        $todos->save();

        return view('welcome')->with('msg', 'Salvo com sucesso!');
    }
}