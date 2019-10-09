<?php

namespace Tests\Feature\Http\Controllers\Backend\Access\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Backend\Access\Role\RoleTableController
 */
class RoleTableControllerTest extends TestCase
{
    /**
     * @test
     */
    public function invoke_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin.access.role.get'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function __invoke_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Backend\Access\Role\RoleTableController::class,
            '__invoke',
            \App\Http\Requests\Backend\Access\Role\ManageRoleRequest::class
        );
    }

    // test cases...
}