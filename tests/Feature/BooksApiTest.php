<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BooksApiTest extends TestCase
{
    /**
     * A feature test for the Books API to check the response code received for each endpoint is accurate.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/v1/books');

        $response->assertStatus(200);
    }

    public function test_show_book()
    {   
        $id = 1;
        $response = $this->get('/api/v1/books/'.$id);

        $response->assertStatus(200);
    }

    public function test_create_book(){
        $payload = [
            "name" => "The AntMan",
            "isbn" => "123-3213243567",
            "authors" => [
                "Tom Jakeman"
            ],
            "number_of_pages" => 350,
            "publisher" => "Acme Books",
            "country" => "United States",
            "release_date" => "2019-08-01"
        ];

        $response = $this->post('/api/v1/books/', $payload);

        $response->assertStatus(201);
    }

    public function test_update_book(){
        $id = 5;
        $payload = [
            "name" => "My Test Book",
            "isbn" => "123456-789",
            "authors" => [
                    "Emmanuel Irabor",
                    "Julian Doe"
            ],
            "country" => "Nigeria",
            "number_of_pages" => strval(rand(100, 300)),
            "publisher" => "Maxmillian Books",
            "release_date" => "2022-11-07"
        ]; 

        $response = $this->patch('/api/v1/books/'.$id, $payload);

        $response->assertStatus(200);
    }

    public function test_delete_book(){
    $id = 2;
    $response = $this->delete('/api/v1/books/'.$id);

    $response->assertStatus(200);
    $response->assertJsonPath('status_code', 204);
    }

    public function test_external_api(){
        $name = "A Game of Thrones";

        $response = $this->get('/api/v1/external-books?name='.$name);

        $response->assertStatus(200);
    }
}