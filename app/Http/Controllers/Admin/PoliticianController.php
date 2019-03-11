<?php

namespace App\Http\Controllers\Admin;

use App\Politician;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoliticianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $politicians = Politician::all();
        return view('Admin.Politician.index',compact('politicians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Politician.create');
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

            if (!file_exists('uploads/politician')){
                mkdir('uploads/politician',007,true);
            }else{
                $image->move('uploads/politician',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $politician = new Politician();
        $politician->name = $request->name;
        $politician->brief_note = $request->brief_note;
        $politician->description = $request->description;
        $politician->birthday = $request->birthday;
        $politician->deathday = $request->deathday;
        $politician->image = $imagename;
        $politician->save();
        Toastr::success('Data Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.politician.index');
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
        $politican = Politician::find($id);
        return view('Admin.Politician.edit',compact('politican'));
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

        $politician = Politician::find($id);

        if (isset($image)){

            $politician = Politician::find($id);

            if (file_exists('uploads/politician/'.$politician->image)){
                unlink('uploads/politician/'.$politician->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/politician')){
                mkdir('uploads/politician',007,true);
            }else{
                $image->move('uploads/politician',$imagename);
            }

        }else{
            $imagename = $politician->image;
        }


        $politician->name = $request->name;
        $politician->birthday = $request->birthday;
        $politician->deathday = $request->deathday;
        $politician->brief_note = $request->brief_note;
        $politician->description = $request->description;
        $politician->image = $imagename;
        $politician->save();
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
        $politician = Politician::find($id);
        if (file_exists('uploads/politician/'.$politician->image)){
            unlink('uploads/politician/'.$politician->image);
        }
        $politician->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
