<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $characters = Character::all() ;
        return  view('characters.index') ->with(['characters'=>$characters , 'var2'=>"LOL"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $title = $request->input('title');
        $cid = $request->input('cid');
        $position = $request->input('position');
        $difficulty = $request->input('difficulty');
        Character::create
        (
            [
                'name' =>$name,
                'title' =>$title,
                'cid' =>$cid,
                'position' =>$position,
                'difficulty' =>$difficulty
            ]
        );
        return redirect('characters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::findOrFail($id);
        return  view('characters.show')->with(['character'=>$character]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::findOrFail($id);
        return  view('characters.edit')->with(['character'=>$character]) ;

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
        $character = Character::findOrFail($id);

        $character->name = $request->input('name');
        $character->title = $request->input('title');
        $character->cid = $request->input('cid');
        $character->position = $request->input('position');
        $character->difficulty = $request->input('difficulty');
        $character->save();

        return  redirect('characters');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $character =Character::findOrFail($id);
        $character ->delete();
        return  redirect('characters');
    }
    
}
