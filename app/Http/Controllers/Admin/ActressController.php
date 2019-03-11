<?php

namespace App\Http\Controllers\Admin;

use App\Actress;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actresses = Actress::all();
        return view('Admin.Actress.index',compact('actresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Actress.create');
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

            if (!file_exists('uploads/actress')){
                mkdir('uploads/actress',007,true);
            }else{
                $image->move('uploads/actress',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $actress = new Actress();
        $actress->name = $request->name;
        $actress->brief_note = $request->brief_note;
        $actress->description = $request->description;
        $actress->birthday = $request->birthday;
        $actress->deathday = $request->deathday;
        $actress->image = $imagename;
        $actress->save();
        Toastr::success('Data Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.actress.index');
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
        $actress = Actress::find($id);
        return view('Admin.Actress.edit',compact('actress'));
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

        $actress = Actress::find($id);

        if (isset($image)){

            $actress = Actress::find($id);

            if (file_exists('uploads/actress/'.$actress->image)){
                unlink('uploads/actress/'.$actress->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/actress')){
                mkdir('uploads/actress',007,true);
            }else{
                $image->move('uploads/actress',$imagename);
            }

        }else{
            $imagename = $actress->image;
        }


        $actress->name = $request->name;
        $actress->birthday = $request->birthday;
        $actress->deathday = $request->deathday;
        $actress->brief_note = $request->brief_note;
        $actress->description = $request->description;
        $actress->image = $imagename;
        $actress->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.actress.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actress = Actress::find($id);
        if (file_exists('uploads/actress/'.$actress->image)){
            unlink('uploads/actress/'.$actress->image);
        }
        $actress->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
