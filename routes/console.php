<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('send-mail', function () {
    $response = Http::withToken(env('978736473ead23badb98bd7591184d56'))
        ->post('https://send.api.mailtrap.io/api/send', [
            'from' => [
                'email' => 'hello@example.com',
                'name' => 'Mailtrap Test',
            ],
            'to' => [
                ['email' => 'amandaaulia03034@gmail.com'],
            ],
            'subject' => 'You are awesome!',
            'category' => 'Integration Test',
            'text' => 'Congrats for sending test email with Mailtrap!',
        ]);

    var_dump($response->json());
})->purpose('Send Mail');