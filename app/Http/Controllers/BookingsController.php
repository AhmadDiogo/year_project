<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;


class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('booking');
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

        // return $request->all();

        $booking = new Booking;

        // return $request->all();

        $room = Room::findOrFail(request()->room_id);
        $max_people = $room->number_guests;

        request()->validate([
            "name"=>'required|string',
            "surname"=>'required|string',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
            "email_confirmation"=>'required',
            "from_date"=>'required|date|after:yesterday|before:to_date',
            "to_date"=>'required|date|after:from_date',
            "number_guests"=>"required|numeric|max:$max_people",
            "phone_number"=>'required',
            "address"=>'required',
            "city"=>'required|string',
            "name_on_card"=>'required|string',
            "card_number"=>'required|string|numeric|digits:16',
            "cvc"=>'required|string|numeric|digits:3',
        ],[
            'from_date.after' => 'The check-in date must be today or after today.',
            'from_date.before' => 'The check-in date must be before the checkout date',
            'to_date.after' => 'The checkout date must be after to the check-in date',
        ]);


        $booking = new Booking;

        $booking->name = request('name');
        $booking->surname = request('surname');
        $booking->email = request('email');
        $booking->from_date = request('from_date');
        $booking->to_date = request('to_date');
        $booking->number_guests = request('number_guests');
        $booking->phone_number = request('phone_number');
        $booking->address = request('address');
        $booking->city = request('city');
        $booking->name_on_card = request('name_on_card');
        $booking->card_number = request('card_number');
        $booking->cvc = request('cvc'); 
        $booking->room_id = request('room_id'); 
        

        $booking->save();

        // send an email
        // make the payment 
        
        return redirect()->back()->with('message', 'Thank you for booking. Check your email for confirmation pdf');
        



        
        


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('booking')->with('room', $room);
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
        //
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
        //
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
