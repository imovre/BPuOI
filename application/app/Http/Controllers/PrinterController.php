<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printers = \App\Printer::with(['printer_type','worksite'])->paginate();
        return view('printers/index', ['printers' => $printers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $printer_types = \App\PrinterType::all();
        $worksites = \App\Worksite::all();
        return view('printers/create', ['printer_types' => $printer_types, 'worksites' => $worksites]);
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
            'printer_number' => 'required|unique:printers|digits:5',
            'printer_name' => 'required|max:45',
            'purchase_date' => 'required|date',
            'guarantee_date' => 'required|date',
            'expiry_date' => 'date',
            'remark' => 'max:200',
            'printer_type_id' => 'required',
            'worksite_id' => 'required'     
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('PrinterController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Printer::create($data);
        return redirect()->action('PrinterController@index');
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
