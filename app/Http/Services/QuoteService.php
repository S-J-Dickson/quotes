<?php

namespace App\Http\Services;

use App\Models\Client;
use App\Models\Quote;

class QuoteService
{

    /**
     * @created 08-06-2023
     */
    public function store(Array $validatedData)
    {
        $client = Client::create($validatedData);
        $quote = new Quote();
        $quote->client_id = $client->id;
        $quote->currency_id = $validatedData['currency_id'];
        $quote->title = $validatedData['title'];
        $quote->save();
    }
}
