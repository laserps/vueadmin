<?php

namespace Laraspace\Http\Controllers\gm;

use Illuminate\Http\Request;
use Laraspace\Http\Controllers\Controller;
use DataTables;
use Laraspace\Models\Example;


class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = \Laraspace\User::get();
        $data['menu'] = 'Example';
        return view('gm.example.index')->with($data);
    }

    public function list(){
        $model = Example::query();
        return DataTables::eloquent($model)
                    ->addColumn('action',function($rec){
                        $str = '<a href="#" class="btn btn-icon btn-outline-default"><i class="icon-fa icon-fa-edit"></i></a> 
                        <a href="#" class="btn btn-icon btn-outline-default" data-delete="'.$rec->id.'" data-confirmation="notie"><i class="icon-fa icon-fa-trash"></i></a>';
                        return $str;
                    })
                    ->addIndexColumn()
                    ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $example = Example::findOrFail($id);
        $example->delete();
        flash()->success('User Deleted');

        return redirect()->back();
    }
}
