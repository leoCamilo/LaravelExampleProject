<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Team;

class TeamController extends Controller
{
    public function index()
    {
        return view('pages/office/edit_team', 
        [
            'name' => 'Equipe',
            'team' => Team::find(1)
        ]);
    }

    public function create() { }

    public function store(Request $request) { }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id)
    {
        $data = $request->validate([ 'content' => 'required' ]);

        $team = Team::find($id);
        $team->content = $data['content'];
        $team->save();

        return redirect('team');
    }

    public function destroy($id) { }
}
