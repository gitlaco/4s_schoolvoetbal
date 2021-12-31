<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::all();

        return view('pages/fields')
            ->with(compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('admin.veld.create')
            ->with(['fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this -> validate($request,[

            'naam' => 'required',
            ]);


        $fields = new Field();
        $fields -> naam = $request-> naam;
        $fields->aangemaakt_door = Auth::user()->id;
       $fields->save();

        return redirect()->route('fields.index')
            ->with('success', 'Wedstrijd succesvol aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fields = Field::findOrFail($id);
        return view('admin.veld.show')
         ->with(compact('fields'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fields = Field::findOrFail($id);

        return view('admin.veld.edit')
            ->with(compact('fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this -> validate($request,[

            'naam' => 'required',
        ]);

        $fields = Field::findOrFail($id);
        $fields -> naam = $request-> naam;
        $fields->aangemaakt_door = Auth::user()->id;
        $fields->save();

        return redirect()->route('fields.index')
            ->with('success', 'Wedstrijd succesvol aangemaakt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fields = Field::destroy($id);

        return redirect()->route('fields.index')
            ->with('success', 'Wedstrijd succesvol verwijderd');
    }
}