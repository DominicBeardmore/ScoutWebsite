<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('timeline', ['events' => $events]);
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
    public function store(StoreEventRequest $request)
    {

        $request = $request->all();
        $event = new Event;

        $event->event_title = $request['eventTitle'];
        $event->event_description = $request['eventDescription'];
        $event->event_location = $request['eventLocation'];
        $event->event_date = \Carbon\Carbon::parse($request['eventDate']);
        $event->event_start_time = $request['eventStart'];
        $event->event_finish_time = $request['eventEnd'];

        $event->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $event)
    {
        $request = $event->all();

        $id = $request['eventID'];

        Event::destroy($id);

        return redirect('timeline')->with('status', 'Event deleted');

    }
}
