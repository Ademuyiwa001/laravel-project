<?php
    namespace Tests\Controllers;

    use Illuminate\Http\Response;
    use Tests\TestCase;


    class VendorController extends TestCase{
        public function testIndexReturnsDataInValidFormat() {
    
            $this->json('get', 'api/user')
                 ->assertStatus(Response::HTTP_OK)
                 ->assertJsonStructure(
                     [
                         'data' => [
                             '*' => [
                             ]
                         ]
                     ]
                 );
        }
    }

?>