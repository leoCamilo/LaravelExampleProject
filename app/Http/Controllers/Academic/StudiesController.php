<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudiesController extends Controller
{
    public function index()
    {
        return view('pages/academic/list_quiz', [ 'name' => 'Estudo' ]);
    }

    public function create()
    {
        return view('pages/academic/create_study', [ 'name' => 'Estudo' ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
