<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventFormRequest;
use Illuminate\Http\Request;
use App\event;

class eventscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events= event::paginate(3);
       return view('pages.event',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {

       event::create([
        'title'=>$request->title,
        'description'=>$request->description,
        'start'=>$request->start,
        'hours'=>$request->hour,
        'price'=>$request->price,
        'location'=>$request->location,
        'city'=>$request->city
       ]);
        flashy('Evénement creé avec succès');
       

       return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        
       return view('pages.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
       return view('pages.edit',compact('event'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, event $event)
    {

       $event->update([
        'title'=>$request->title,
        'description'=>$request->description,
        'start'=>$request->start,
        'hours'=>$request->hour,
        'price'=>$request->price,
        'location'=>$request->location,
        'city'=>$request->city
       ]);
        flashY(sprintf('Evénement %s Modifié avec succès',$event->title));

       return redirect()->route('events.show',$event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
      $event->delete();
   flashy()->error(sprintf('Evénement %s supprimer avec succès',$event->title),'danger');
     

    return redirect()->route('home');
    }
}
