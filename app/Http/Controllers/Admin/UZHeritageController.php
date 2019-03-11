<?php

namespace App\Http\Controllers\Admin;

use App\UZHeritage;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UZHeritageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heritages = UZHeritage::all();
        return view('admin.UZHeritage.index',compact('heritages'));
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
        $heritage = UZHeritage::find($id);
        return view('Admin.UZHeritage.edit',compact('heritage'));
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
            'heading1' => 'required',
            'heading2' => 'required',
            'paragraph' => 'required',
            'image'     => 'mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->heading1);

        $heritage = UZHeritage::find($id);

        if (isset($image)){

            $heritage = UZHeritage::find($id);

            if (file_exists('uploads/dish/'.$heritage->image)){
                unlink('uploads/dish/'.$heritage->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/heritage')){
                mkdir('uploads/heritage',007,true);
            }else{
                $image->move('uploads/heritage',$imagename);
            }

        }else{
            $imagename = $heritage->image;
        }


        $heritage->heading1 = $request->heading1;
        $heritage->heading2 = $request->heading2;
        $heritage->paragraph = $request->paragraph;
        $heritage->image = $imagename;
        $heritage->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.heritage.index');
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
