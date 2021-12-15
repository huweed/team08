<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Character;
use Illuminate\Http\Request;

class CampsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $camps = Camp::all() ;
        return  view('camps.index') ->with(['camps'=>$camps , 'var2'=>"LOL"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('camps.create');
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
        $camp = $request->input('camp');
        $rule = $request->input('rule');
        $city = $request->input('city');
        $environment = $request->input('environment');
        $level = $request->input('level');

        Camp::create
        (
            [
                'camp' =>$camp,
                'rule' =>$rule,
                'city' =>$city,
                'environment' =>$environment,
                'level' =>$level
            ]
        );
        return  redirect('camps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $camp = Camp::findOrFail($id);
        return  view('camps.show')->with(['camp'=>$camp]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $camp = Camp::findOrFail($id);
        return  view('camps.edit')->with(['camp'=>$camp]) ;
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
        $camp = Camp::findOrFail($id);

        $camp->camp = $request->input('camp');
        $camp->rule = $request->input('rule');
        $camp->city = $request->input('city');
        $camp->environment = $request->input('environment');
        $camp->level = $request->input('level');
        $camp->save();

        return  redirect('camps');
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
        $camp =Camp::findOrFail($id);
        $camp ->delete();
        return  redirect('camps');
    }
}
