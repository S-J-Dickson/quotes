<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteCreateRequest;
use App\Models\Client;
use App\Models\Currency;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("quote.index", ["quotes" => Quote::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("quote.create", ["currencies" => Currency::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuoteCreateRequest $request)
    {
        $validatedData = $request->validated();

        $client = Client::create($validatedData);
        $quote = new Quote();
        $quote->client_id = $client->id;
        $quote->currency_id = $validatedData['currency_id'];
        $quote->title = $validatedData['title'];
        $quote->save();

        return redirect(route("quote.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
