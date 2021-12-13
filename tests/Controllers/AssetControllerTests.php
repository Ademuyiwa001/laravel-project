<?php
    namespace Tests\Controllers;

    use Illuminate\Http\Response;
    use Tests\TestCase;


    class AssetController extends TestCase{
        public function testIndexReturnsDataInValidFormat() {
    
            $this->json('get', 'api/user')
                 ->assertStatus(Response::HTTP_OK)
                 ->assertJsonStructure(
                     [
                         'data' => [
                             '*' => [
                                 'id',
                                 'first_name',
                                 'last_name',
                                 'email',
                                 'created_at',
                                 'wallet' => [
                                     'id',
                                     'balance'
                                 ]
                             ]
                         ]
                     ]
                 );
        }
    }

?>