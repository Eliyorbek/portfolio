<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.about.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatsiya = $request->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
            'title'=>'required',
        ]);
        if ($validatsiya){
            $name = [
                'en'=>$request->name_en,
                'uz'=>$request->name_uz
            ];
            About::create([
                'name'=>$name,
                'title'=>$request->title
            ]);
            return redirect()->route('about.index')->with('success', 'Ma\'lumot muvofaqqiyatli qo\'shildi');
        }else{
            return redirect()->route('about.index')->with('error', 'Validatsiyada hatolik');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $request->validate([
                'name_uz'=>'required',
                'name_en'=>'required',
                'title'=>'required',
            ]);
            $name = [
                'uz'=>$request->name_uz,
                'en'=>$request->name_en
            ];
            About::find($id)->update([
                'name'=>$name,
                'title'=>$request->title,

            ]);
            return redirect()->route('about.index')->with('update' , 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (About::destroy($id)){
            return redirect()->route('about.index')->with('delete' , 'Ma\'lumot o\'chirildi');
        }else{
            return redirect()->route('about.index')->with('error' , 'Ma\'lumot o\'chirishda hato yuz berdi');
        }
    }
}
