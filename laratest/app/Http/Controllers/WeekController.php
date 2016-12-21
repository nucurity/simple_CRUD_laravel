<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;

class WeekController extends Controller
{
    public function index(){
        $weeks = Week::all();
        return view('weeks.index')->with('weeks',$weeks);
    }
    public function show($id){
        $week = Week::find($id);
        return view('weeks.show')->with('week',$week);
    }

    public function create(){
        return view('weeks.create');
    }

    public function store(Request $request){


        $this->validate($request,
            [
                'name' => 'required',
                'description' => 'required'
            ]
        );

        $week =  new Week;
        $week->name = $request->name;
        $week->description =$request->description;

        $week->save();


        return Redirect('weeks');
    }

    public function edit($id){
        $week= Week::find($id);
        return view('weeks.edit')->with('week',$week);
    }

    public function update(Request $request,$id){
        $this->validate($request,
            [
                'name' => 'required',
                'description' => 'required'
            ]

        );
        $inputs = $request->all();
        $week = Week::find($id);
        $week->update($inputs);

        return Redirect('weeks');
    }
    public function destroy($id){

        Week::find($id)->delete();
        return Redirect('weeks');
    }
}
