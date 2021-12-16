<?php
    namespace Tests\Controllers;

    use Illuminate\Http\Response;
    use Tests\TestCase;


    class UserController extends TestCase{
        public function testRegister() {

            $payload = [
                'firstName' => $this->faker->firstName,
                'middleName' => $this->faker->middleName,
                'lastName' => $this->faker->lastName,
                'email' => $this->faker->email,
            ];

            $this->json('get', 'api/auth/register', $payload)
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