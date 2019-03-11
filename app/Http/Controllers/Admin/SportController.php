<?php

namespace App\Http\Controllers\Admin;

use App\Sport;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::all();
        return view('Admin.Sport.index',compact('sports'));
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
        $sport = Sport::find($id);
        return view('Admin.Sport.edit',compact('sport'));
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
        $this->validate($request,[
            'title' => 'required',
            'heading' => 'required',
            'paragraph' => 'required',
            'image'     => 'mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->heading);

        $sport = Sport::find($id);

        if (isset($image)){

            $sport = Sport::find($id);

            if (file_exists('uploads/sport/'.$sport->image)){
                unlink('uploads/sport/'.$sport->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/sport')){
                mkdir('uploads/sport',007,true);
            }else{
                $image->move('uploads/sport',$imagename);
            }

        }else{
            $imagename = $sport->image;
        }


        $sport->title = $request->title;
        $sport->heading = $request->heading;
        $sport->paragraph = $request->paragraph;
        $sport->image = $imagename;
        $sport->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.sport.index');
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
