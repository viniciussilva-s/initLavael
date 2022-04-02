<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Auth;
use Alert;

class loginController extends Controller
{
    public function index(Request $r)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dados = $r->all();
            if (Auth::attempt(["email" =>$dados["email"]  , "password" => $dados["password"]])) {
                return redirect()->route("movie.list");
            }
            toast('Usuário e/ou senha inválido(s)', 'error');
        }
        return view("login");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("home.cursos");
    }
}
