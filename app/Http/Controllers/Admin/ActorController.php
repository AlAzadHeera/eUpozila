<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();
        return view('Admin.Actor.index',compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Actor.create');
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

            if (!file_exists('uploads/actor')){
                mkdir('uploads/actor',007,true);
            }else{
                $image->move('uploads/actor',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $actor = new Actor();
        $actor->name = $request->name;
        $actor->brief_note = $request->brief_note;
        $actor->description = $request->description;
        $actor->birthday = $request->birthday;
        $actor->deathday = $request->deathday;
        $actor->image = $imagename;
        $actor->save();
        Toastr::success('Data Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.actor.index');
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
        $actor = Actor::find($id);
        return view('Admin.Actor.edit',compact('actor'));
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

        $actor = Actor::find($id);

        if (isset($image)){

            $actor = Actor::find($id);

            if (file_exists('uploads/actor/'.$actor->image)){
                unlink('uploads/actor/'.$actor->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/actor')){
                mkdir('uploads/actor',007,true);
            }else{
                $image->move('uploads/actor',$imagename);
            }

        }else{
            $imagename = $actor->image;
        }


        $actor->name = $request->name;
        $actor->birthday = $request->birthday;
        $actor->deathday = $request->deathday;
        $actor->brief_note = $request->brief_note;
        $actor->description = $request->description;
        $actor->image = $imagename;
        $actor->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.actor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        if (file_exists('uploads/actor/'.$actor->image)){
            unlink('uploads/actor/'.$actor->image);
        }
        $actor->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
