<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitors = \App\Monitor::with(['resolution','diagonal','worksite'])->paginate();
        return view('monitors/index', ['monitors' => $monitors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resolutions = \App\Resolution::all();
        $diagonals = \App\Diagonal::all();
        $worksites = \App\Worksite::all();
        return view('monitors/create', ['resolutions' => $resolutions, 'diagonals' => $diagonals, 'worksites' => $worksites]);
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
            'monitor_number' => 'required|unique:monitors|digits:5',
            'monitor_name' => 'required|max:45',
            'purchase_date' => 'required|date',
            'guarantee_date' => 'required|date',
            'expiry_date' => 'date',
            'remark' => 'max:200',
            'diagonal_id' => 'required',
            'resolution_id' => 'required',
            'worksite_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('MonitorController@create')
                ->withErrors($validator);
        }
        
        $data = $request->input();
        \App\Monitor::create($data);
        return redirect()->action('MonitorController@index');
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
