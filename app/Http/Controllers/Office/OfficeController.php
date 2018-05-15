<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Office;

class OfficeController extends Controller
{
    public function index()
    {
        return view('pages/office/edit_office', 
        [
            'name' => 'Escritório',
            'office' => Office::find(1)
        ]);
    }

    public function create() { }

    public function store(Request $request) { }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id)
    {
        $data = $request->validate([ 'content' => 'required' ]);

        $office = Office::find($id);
        $office->content = $data['content'];
        $office->save();

        return redirect('office');
    }

    public function destroy($id) { }
}
