<?php

namespace App\Http\Controllers\Admin;

use App\Union;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unions = Union::all();
        return view('Admin.Union.index',compact('unions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Union.create');
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
            'cchairman' => 'required',
            'details' => 'required',
            'phone' => '',
            'mobile' => '',
            'email' => 'email',
            'image'       => 'required | mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)){
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/union')){
                mkdir('uploads/union',007,true);
            }else{
                $image->move('uploads/union',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $union = new Union();
        $union->name = $request->name;
        $union->cchairman = $request->cchairman;
        $union->details = $request->details;
        $union->phone = $request->phone;
        $union->email = $request->email;
        $union->mobile = $request->mobile;
        $union->location = $request->location;
        $union->image = $imagename;
        $union->save();
        Toastr::success('Data Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.union.index');
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
        $union = Union::find($id);
        return view('Admin.Union.edit',compact('union'));
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
            'cchairman' => 'required',
            'details' => 'required',
            'phone' => '',
            'mobile' => '',
            'email' => 'email',
            'location' => 'required',
            'image'     => 'mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        $union = Union::find($id);

        if (isset($image)){

            $union = Union::find($id);

            if (file_exists('uploads/union/'.$union->image)){
                unlink('uploads/union/'.$union->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/union')){
                mkdir('uploads/union',007,true);
            }else{
                $image->move('uploads/union',$imagename);
            }

        }else{
            $imagename = $union->image;
        }


        $union->name = $request->name;
        $union->cchairman = $request->cchairman;
        $union->details = $request->details;
        $union->phone = $request->phone;
        $union->email = $request->email;
        $union->mobile = $request->mobile;
        $union->location = $request->location;
        $union->image = $imagename;
        $union->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.union.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $union = Union::find($id);
        if (file_exists('uploads/union/'.$union->image)){
            unlink('uploads/union/'.$union->image);
        }
        $union->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
