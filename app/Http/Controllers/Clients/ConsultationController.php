<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Consultation;

class ConsultationController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'get_all'); }

    public function index()
    {
        return view('pages/clients/list_consultations', 
        [
            'name' => 'Consulta',
            'consultations' => Consultation::all()
        ]);
    }

    public function get_all()
    {
        return response()->json(Consultation::all());
    }

    public function create()
    {
        return view('pages/clients/create_consultation', [ 'name' => 'Consulta' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 'title' => 'required|max:255', 'link' => 'required|max:255' ]);
        tap(new Consultation($data))->save();
        return redirect('consultations');
    }
    
    public function destroy($id)
    {
        $consultation = Consultation::find($id);
        $consultation->delete();

        return response()->json([ 'success' => 'true' ]);
    }
}
