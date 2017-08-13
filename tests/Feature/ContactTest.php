<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \Mail;
use App\Mail\CustomerContact;
use App\Mail\CustomerContactConfirmation;

class ContactTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        Mail::fake();
    }

    /** @test */
    public function sends_emails_when_sending_valid_information()
    {
        $response = $this->post('/contacto', [
            'name' => 'John Smith',
            'email' => 'johnsmith@example.com',
            'body' => 'hello I want cakes!'
        ]);

        Mail::assertSent(CustomerContact::class, function($mail) {
            return $mail->hasFrom('johnsmith@example.com');
        });

        Mail::assertSent(CustomerContactConfirmation::class, function($mail) {
            return $mail->hasTo('johnsmith@example.com');
        });

        $response->assertRedirect('/contacto');
    }
}
