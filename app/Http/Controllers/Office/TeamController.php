<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Team;

class TeamController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('get_team_description'); }

    public function index()
    {
        return view('pages/office/list_team', 
        [
            'name' => 'Equipe',
            'teams' => Team::all()
        ]);
    }

    public function get_team_description()
    {
        return response()->json(Team::all());
    }

    public function create()
    {
        return view('pages/office/create_team', [ 'name' => 'Equipe' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'title' => 'required', 'content' => 'required' ]);
        tap(new Team($data))->save();
        return redirect('team');
    }

    public function show($id)
    {
        return view('pages/office/edit_team', [ 'name' => 'Equipe', 'team' => Team::find($id) ]);
    }

    public function edit($id) { }

    public function update(Request $request, $id)
    {
        $data = $request->validate([ 'title' => 'required', 'content' => 'required' ]);
        $team = Team::find($id);

        $team->title = $data['title'];
        $team->content = $data['content'];
        $team->save();
        
        return redirect('team');
    }

    public function destroy($id) { }
}