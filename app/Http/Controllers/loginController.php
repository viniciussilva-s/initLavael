<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    public function index(Request $r)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dados = $r->all();
            if (Auth::attempt(["email" =>$dados["email"]  , "password" => $dados["password"]])) {
                return redirect()->route("movie.list");
            }
        }
        return view("login");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("home.cursos");
    }
}
