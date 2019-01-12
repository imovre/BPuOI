<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worksites = \App\Worksite::with('room')->paginate();
        return view('worksites/index', ['worksites' => $worksites]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = \App\Room::all();
        return view('worksites/create', ['rooms' => $rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'worksite_number' => 'required|unique:worksites|digits:5',
            'worksite_name' => 'required|max:45',
            'room_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('WorksiteController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Worksite::create($data);
        return redirect()->action('WorksiteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
