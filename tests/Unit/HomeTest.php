<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
	use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcome()
    {
    	// $this->assertTrue(True);
        $response = $this->get('/');

        /* Check Response Status 200 (OK) */
        $response->assertStatus(200);
        /* Check Response Display Text Laravel */
        $response->assertSee('Laravel');
    }

    public function testHomeTimeLine()
    {
        $response = $this->get('/hometimeline');

        $response->assertStatus(200);
    }

    public function testFormPostTweet()
    {
        $response = $this->get('/posttweet');

        $response->assertStatus(200);
        $response->assertSee('Post Tweet');
    }

    public function testPostTweet()
    {
        $response = $this->post('/posttweet', ['tweet' => str_random(10)]);

        $response->assertStatus(302);
        $response->assertRedirect('/hometimeline');
    }
}
