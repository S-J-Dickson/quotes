<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\Currency;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuoteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @created 08-06-2023
     */
    public function test_quote_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/quote');

        $response->assertOk();
    }

    /**
     * @return array
     * @created 08-06-2023
     */
    public  function storeRequestData(): array
    {
        return [
            "User sends empty request" => [
                [],
            ]
        ];
    }

    /**
     * @created 08-06-2023
     * @dataProvider storeRequestData
     */
    public function test_quote_store_validation($request): void
    {
        $user = User::factory()->create();

        $this
            ->actingAs($user)
            ->post(route("quote.store", $request))
            ->assertSessionHasErrors();
    }


    /**
     * @created 08-06-2023
     */
    public function test_user_can_create_quote(): void
    {
        $user = User::factory()->create();

        #TODO:: MAKE FACTORY
        $currency = Currency::create([
            'code' => "GBP",
            'exchange_rate' => 2,
            'decimal_digits' => 2,
        ]);


        #TODO:: Use faker data
        $request = [
            'title' => 'Test Title',
            'name' => 'Test Name',
            'contact_name' => 'Matt Smith',
            'contact_email' => 'smith@example.com',
            'currency_id' => $currency->id,
        ];

        $this
            ->actingAs($user)
            ->post(route("quote.store", $request))
            ->assertSessionHasNoErrors();


        self::assertEquals(1, Client::all()->count());
        self::assertEquals(1, Quote::all()->count());
    }

}
