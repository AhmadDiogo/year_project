<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\HotelService;


class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        // return $rooms;
        return view('rooms')->with('rooms', $rooms);
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
        $room = Room::findOrFail($id);
        
        $any_2_rooms = Room::inRandomOrder()->limit(2)->get();

        // return $any_3_rooms;

        $hotel_services = HotelService::all();
        // return $hotel_services;
        return view('single_room')->with('room', $room)->with('any_2_rooms', $any_2_rooms)
        ->with('hotel_services', $hotel_services);
    }

    
}
