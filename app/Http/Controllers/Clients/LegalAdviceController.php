<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Domain\LegalAdvice;

class LegalAdviceController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy'); }
    
    public function index()
    {
        return view('pages/clients/list_legal_advice', 
        [
            'name' => 'Assessoria Jurídica',
            'legaladvice' => DB::table('legal_advices')
                ->select('users.name as name', 'legal_advices.*')
                ->join('users', 'users.id', '=', 'legal_advices.user_id')
                ->orderBy('name')
                ->get()
        ]);
    }

    public function create()
    {
        return view('pages/clients/create_legal_advice',
        [
            'name' => 'Assessoria Jurídica',
            'users' => DB::table('users')
                ->orderBy('name')
                ->where('id', '>', 1)
                ->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'title' => 'required|max:300', 'user_id' => 'required' ]);

        if ($request->hasFile('attachment'))
        {
            $att = $request->file('attachment');
            $name = time().'.'.$att->getClientOriginalExtension();
            $att->move(public_path('/files/legal_advice'), $name);
            $data['link'] = '/files/legal_advice/'.$name;

            tap(new LegalAdvice($data))->save();
        }

        return redirect('legaladvice');
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
        $legal = LegalAdvice::find($id);
        $file = $legal->link;
        $path = public_path('/files/legal_advice').'/'.str_replace("/files/legal_advice/", "", $file);

        if (file_exists($path))
        {
            @unlink($path);
            $legal->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }
}