<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $list_courses = [
            ["nome" => "Curso 1"],
            ["nome" => "Curso 2"],
            ["nome" => "Curso 3"],
            ["nome" => "Curso 4"],
        ];
        return view('cursos.index', \compact("list_courses"));
    }
}
