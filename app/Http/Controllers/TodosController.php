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

        $todos = new todos;

        

        if($request->has('completed')){
            $todos->completed = $request->completed;
        
        $todos->save();
        }else{
            //Checkbox not checked
        }

        return redirect('/')->with('msg', 'Salvo com sucesso!');
    }
}