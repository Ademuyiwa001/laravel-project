<?php
    namespace Tests\Controllers;

    use Illuminate\Http\Response;
    use Tests\TestCase;


    class AssetAssignmentController extends TestCase{
        public function testIndexReturnsDataInValidFormat() {
    
            $this->json('get', 'api/asset_assign')
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