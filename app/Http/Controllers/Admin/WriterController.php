<?php

namespace App\Http\Controllers\Admin;

use App\Writer;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();
        return view('Admin.Writer.index',compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Writer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'brief_note' => 'required',
            'description' => 'required',
            'birthday' => 'required',
            'deathday' => '',
            'image'       => 'required | mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)){
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/writer')){
                mkdir('uploads/writer',007,true);
            }else{
                $image->move('uploads/writer',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $writer = new Writer();
        $writer->name = $request->name;
        $writer->brief_note = $request->brief_note;
        $writer->description = $request->description;
        $writer->birthday = $request->birthday;
        $writer->deathday = $request->deathday;
        $writer->image = $imagename;
        $writer->save();
        Toastr::success('Writer Profile Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.writer.index');
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
        $writer = Writer::find($id);
        return view('Admin.Writer.edit',compact('writer'));
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
            'name' => 'required',
            'birthday' => 'required',
            'deathday' => '',
            'brief_note' => 'required',
            'description' => 'required',
            'image'     => 'mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        $writer = Writer::find($id);

        if (isset($image)){

            $writer = Writer::find($id);

            if (file_exists('uploads/writer/'.$writer->image)){
                unlink('uploads/writer/'.$writer->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/writer')){
                mkdir('uploads/writer',007,true);
            }else{
                $image->move('uploads/writer',$imagename);
            }

        }else{
            $imagename = $writer->image;
        }


        $writer->name = $request->name;
        $writer->birthday = $request->birthday;
        $writer->deathday = $request->deathday;
        $writer->brief_note = $request->brief_note;
        $writer->description = $request->description;
        $writer->image = $imagename;
        $writer->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.writer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $writer = Writer::find($id);
        if (file_exists('uploads/writer/'.$writer->image)){
            unlink('uploads/writer/'.$writer->image);
        }
        $writer->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
