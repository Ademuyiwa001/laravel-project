<?php
    namespace Tests\Controllers;

    use Illuminate\Http\Response;
    use Tests\TestCase;


    class UserController extends TestCase{
        public function testIndexReturnsDataInValidFormat() {
    
            $this->json('get', 'api/user')
                 ->assertStatus(Response::HTTP_OK)
                 ->assertJsonStructure(
                     [
                         'data' => [
                             '*' => [
                                 'id',
                                 'firstName',
                                 'lastName',
                                 'email',
                                 'phoneNumber',
                             ]
                         ]
                     ]
                 );
        }
    }

?>