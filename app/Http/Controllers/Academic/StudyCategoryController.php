<?php

namespace App\Http\Controllers\Academic;

use App\Domain\StudyCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudyCategoryController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy'); }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/academic/list_categories', 
        [
            'name' => 'Categorias',
            'categories' => StudyCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/academic/create_category', [ 'name' => 'Categorias' ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('img_url'))
        {
            $image = $request->file('img_url');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/study_category');
            $image->move($destinationPath, $name);
            
            $data = $request->validate([ 'title' => 'required|max:255' ]);
            $data['img_url'] = "/img/study_category/".$name;

            tap(new StudyCategory($data))->save();
            return redirect('category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\StudyCategory  $studyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(StudyCategory $studyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\StudyCategory  $studyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyCategory $studyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\StudyCategory  $studyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudyCategory $studyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\StudyCategory  $studyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = StudyCategory::find($id);
        $image = $category->img_url;
        $path = public_path('/img/study_category').'/'.str_replace("/img/study_category/", "", $image);

        if (file_exists($path))
        {
            @unlink($path);
            $category->delete();
        }

        return response()->json([ 'success' => 'true' ]);
    }
}