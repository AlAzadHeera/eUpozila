<?php

namespace App\Http\Controllers\Admin;

use App\Player;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('Admin.Player.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Player.create');
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

            if (!file_exists('uploads/player')){
                mkdir('uploads/player',007,true);
            }else{
                $image->move('uploads/player',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $player = new Player();
        $player->name = $request->name;
        $player->brief_note = $request->brief_note;
        $player->description = $request->description;
        $player->birthday = $request->birthday;
        $player->deathday = $request->deathday;
        $player->image = $imagename;
        $player->save();
        Toastr::success('Data Added Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.player.index');
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
        $player = Player::find($id);
        return view('Admin.Player.edit',compact('player'));
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

        $player = Player::find($id);

        if (isset($image)){

            $player = Player::find($id);

            if (file_exists('uploads/player/'.$player->image)){
                unlink('uploads/player/'.$writer->image);
            }
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


            if (!file_exists('uploads/player')){
                mkdir('uploads/player',007,true);
            }else{
                $image->move('uploads/player',$imagename);
            }

        }else{
            $imagename = $player->image;
        }


        $player->name = $request->name;
        $player->birthday = $request->birthday;
        $player->deathday = $request->deathday;
        $player->brief_note = $request->brief_note;
        $player->description = $request->description;
        $player->image = $imagename;
        $player->save();
        Toastr::success('Data Updated Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->route('admin.player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        if (file_exists('uploads/player/'.$player->image)){
            unlink('uploads/player/'.$player->image);
        }
        $player->delete();
        Toastr::error('Data Deleted Successfully!!!','Success',['positionClass'=>'toast-top-right']);
        return redirect()->back();
    }
}
