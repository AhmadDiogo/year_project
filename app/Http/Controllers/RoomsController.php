<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


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

        $hotel_services = HotelService::all();
        // return $hotel_services;
        return view('single_room')->with('hotel_services', $hotel_services);
    }

    

    
}
