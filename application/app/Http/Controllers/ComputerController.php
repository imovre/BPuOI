<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = \App\Computer::with(['cpu','hdd','worksite'])->paginate();
        return view('computers/index', ['computers' => $computers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hdds = \App\Hdd::all();
        $cpus = \App\Cpu::all();
        $worksites = \App\Worksite::all();
        return view('computers/create', ['hdds' => $hdds, 'cpus' => $cpus, 'worksites' => $worksites]);
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
            'computer_number' => 'required|unique:computers|digits:5',
            'computer_name' => 'required|max:45',
            'odd' => 'required|boolean',
            'purchase_date' => 'required|date',
            'guarantee_date' => 'required|date',
            'expiry_date' => 'date',
            'remark' => 'max:200',
            'hdd_id' => 'required',
            'cpu_id' => 'required',
            'worksite_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('ComputerController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Computer::create($data);
        return redirect()->action('ComputerController@index');
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
