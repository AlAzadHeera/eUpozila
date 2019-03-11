<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Actress;
use App\Player;
use App\Politician;
use App\Union;
use App\UZHeritage;
use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function UZHeritage(){
        $heritage = DB::table('u_z_heritages')->latest()->first();
        return view('pages.UZHeritage',compact('heritage'));
    }

    public function language(){
        $language = DB::table('languages')->latest()->first();
        return view('pages.language',compact('language'));
    }

    public function sport(){
        $sport = DB::table('sports')->latest()->first();
        return view('pages.sport',compact('sport'));
    }

    public function complain(){
        return view('pages.complain');
    }

    public function player(){
        $players = Player::all();
        return view('pages.player',compact('players'));
    }

    public function PlayerDetails($id){
        $player = Player::find($id);
        return view('pages.playerDetails',compact('player'));
    }

    public function politician(){
        $politicians = Politician::all();
        return view('pages.politician',compact('politicians'));
    }
    public function writer(){
        $writers = Writer::all();
        return view('pages.writer',compact('writers'));
    }

    public function writerDetails($id){
        $writer = Writer::find($id);
        return view('pages.writerDetails',compact('writer'));
    }

    public function actor(){
        $actors = Actor::all();
        return view('pages.actor',compact('actors'));
    }

    public function actress(){
        $actresses = Actress::all();
        return view('pages.actress',compact('actresses'));
    }

    public function union(){
        $unions = Union::all();
        return view('pages.union',compact('unions'));
    }

    public function unionDetails($id){
        $union = Union::find($id);
        return view('pages.unionDetails',compact('union'));
    }
}
