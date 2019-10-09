<?php

namespace Tests\Feature\Http\Controllers\Api\V1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Api\V1\RolesController
 */
class RolesControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->deleteJson(route('v1.roles.destroy', ['role' => $role]));

        $response->assertOk();
        $response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->getJson(route('v1.roles.index'));

        $response->assertOk();
        $response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->getJson(route('v1.roles.show', ['role' => $role]));

        $response->assertOk();
        $response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->postJson(route('v1.roles.store'), [
            // TODO: send request data
        ]);

        $response->assertOk();
        $response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->putJson(route('v1.roles.update', ['role' => $role]), [
            // TODO: send request data
        ]);

        $response->assertOk();
        $response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    // test cases...
}