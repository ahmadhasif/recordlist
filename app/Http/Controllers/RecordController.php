<?php

namespace App\Http\Controllers;

use App\Record;
use App\User;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('records.create');
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
        $request->validate([
            'name' => 'required',
            'ic_number' => 'required|numeric',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $record = new Record();
        $record->name = request('name');
        $record->ic_number = request('ic_number');
        $record->phone = request('phone');
        $record->email = request('email');

        $record->save();


        return redirect('record');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $record = Record::findOrFail($id);

        return view('records.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'ic_number' => 'required|numeric',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $record = Record::findOrFail($id);
        $record->name = request('name');
        $record->ic_number = request('ic_number');
        $record->phone = request('phone');
        $record->email = request('email');

        $record->save();

        return redirect('record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $record = Record::find($id);
        $record->delete();

        return back();
    }
}
