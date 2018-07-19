<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'email'
        ]);

        //Create listing

        $listing  = new Listing;

        //add everything from the controller except the "user_id". will get an error if we did "Listing::create($request->all()); "user_id" would be part of the "all()" and we don't want that.

        $listing->name = $request->input('name');
        $listing->address = $request->input('address');
        $listing->phone = $request->input('phone');
        $listing->email = $request->input('email');
        $listing->bio = $request->input('bio');
        $listing->website = $request->input('website');
              
        // user id authorization
        $listing->user_id = auth()->user()->id;

        // save it
        $listing->save();

        //return to the listing page after listing has been posted

        return redirect('/dashboard')->with('success', 'Listing Created Successfully');
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
