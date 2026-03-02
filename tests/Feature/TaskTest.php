<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     */
    use RefreshDatabase;

    public function test_main_screen_is_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_new_tasks_can_be_added()
    {
        $response = $this->post('/api/tasks', [
            'title' => 'Test Title',
            'description' => 'Test Description',
            'status_id' => '2',
        ]);
        $response->dump();
        /*$this->assertDatabaseHas('tasks', [
            'title' => 'Test Title',
        ]);*/
    }

}
