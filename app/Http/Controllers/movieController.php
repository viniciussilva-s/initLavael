<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Movie;
use File;

class movieController extends Controller
{
    public function index()
    {
        $list_courses = Movie::all();
        return view('cursos.list', \compact("list_courses"));
    }
    public function created(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dados = $req->all();
            if ($req->hasFile("img")) {
                $img = $req->file("img") ;
                $dir = "img/cursos/";
                $n_namefile = "imagem__".rand(11111, 99999)."." . $img->getClientOriginalExtension() ;
                $img->move($dir, $n_namefile) ;
                $dados["img"] = $dir . $n_namefile ;
            }
            Movie::create($dados);
            return redirect()->route("movie.list");
        }
        return view('cursos.created');
    }
    public function edit(Request $req, $id)
    {
        $result  = Movie::find($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dados = $req->all() ;

            if ($req->hasFile("img")) {
                $img = $req->file("img") ;
                $dir = "img/cursos/";
                $n_namefile = "imagem__".rand(11111, 99999)."." . $img->getClientOriginalExtension() ;
                $img->move($dir, $n_namefile) ;
                $dados["img"] = $dir . $n_namefile ;
            }
            Movie::find($id)->update($dados);
            return redirect()->route("movie.list");
        }
        return view('cursos.edit', compact("result"));
    }
    public function delete($id)
    {
        $movie=Movie::find($id);
        if (File::exists(public_path($movie->img))) {
            File::delete(public_path($movie->img));
        }
        $movie->delete($movie->id);
        return redirect()->route("movie.list");
    }
}
