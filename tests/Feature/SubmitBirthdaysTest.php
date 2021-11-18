<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitBirthdaysTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function guest_can_submit_a_new_birthday() {

        $response = $this->post('/submit', [
            'first_name' => 'Larry',
            'last_name' => 'Lion',
            'birthday' => '1978-05-29',
            'age' => '3',
        ]);
        $this->assertDatabaseHas('birthdays', [
            'first_name' => 'Larry'
        ]);

        $response
            ->assertStatus(302)
            ->assertHeader('Location', url('/'));
        $this
            ->get('/')
            ->assertSee('Welcome');
    }
    /** @test */
    function birthday_is_not_created_if_validation_fails() {
        $response = $this->post();
    }
    /** @test */
    function birthday_is_not_created_with_an_invalid_date() {}
    /** @test */
    function max_length_fails_when_too_long() {}
    /** @test */
    function max_length_succeeds_when_under_max() {}
}
