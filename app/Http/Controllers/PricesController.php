<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prices;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // Get most popular prices
        $allPrices = Prices::all();
        // Show the most popular prices
        return view('prices.index', compact('allPrices'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allPrices = Prices::all();
        return view('prices.create', compact('allPrices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->Validate($request, [
            'header'         => 'required',
            'cost'          => 'required',
            'description'      => 'required|max:50',
        ]);
        

        // Save the data

        $newPrices = new Prices();

        $newPrices->header = $request['header'];
        $newPrices->cost = $request['cost'];
        $newPrices->description = $request['description'];

        $newPrices->save();

        // Redirect away to some other pages
        return redirect('/prices/');
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
        $prices = Prices::findOrFail($id);
        return view('prices.edit', compact('allPrices'));
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
        // Validate the data
            $this->Validate($request, [
            'header'         => 'required',
            'cost'          => 'required',
            'description'      => 'required|max:50',
        ]);

        // Find the product that is being updated
        $prices = Prices::findOrFail($id);

        // Override the values with new ones
        

        $prices->header = $request['header'];
        $prices->cost = $request['cost'];
        $prices->description = $request['description'];

        

        // Save
        $prices->save();

        // Redirect back to product page
        return redirect('/prices/');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $prices = Prices::findOrFail($id);
        $prices->delete();

        return redirect('/prices/');
    
    }
}
