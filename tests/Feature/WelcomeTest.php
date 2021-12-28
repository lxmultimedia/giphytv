<?php

namespace Tests\Feature;

use App\Http\Clients\GiphyClient;
use App\Http\Livewire\GiphyGenerator;
use App\Http\Services\GiphyService;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use JsonException;
use Livewire\Livewire;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_welcome_page_return_status_ok(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_giphy_component_is_loaded(): void
    {
        $response = $this->get('/');

        $response->assertSeeLivewire(GiphyGenerator::class);
    }

    public function test_default_mode_is_random(): void
    {
        $response = $this->get('/');

        Livewire::test(GiphyGenerator::class)->assertSet('selectedMode', 'random');
    }

    public function test_selected_mode_is_random(): void
    {
        $response = $this->get('/');

        Livewire::test(GiphyGenerator::class)
            ->call('setMode', 'random')
            ->assertSet('selectedMode', 'random')
            ->assertSet('showFlash', false);
    }

    public function test_selected_mode_is_search(): void
    {
        $response = $this->get('/');

        Livewire::test(GiphyGenerator::class)
            ->call('setMode', 'search')
            ->assertSet('selectedMode', 'search')
            ->assertSet('showFlash', false);
    }

    public function test_selected_mode_is_infinite(): void
    {
        $response = $this->get('/');

        Livewire::test(GiphyGenerator::class)
            ->call('setMode', 'infinite')
            ->assertSet('selectedMode', 'infinite')
            ->assertSet('showFlash', true)
            ->assertSee('Loop started');
    }

    public function test_one_is_searching_no_results_flash_message(): void
    {
        $response = $this->get('/');

        Livewire::test(GiphyGenerator::class)
            ->call('setMode', 'search')
            ->call('search', 'yxcvyxcvyxcv')
            ->assertSet('selectedMode', 'search')
            ->assertSet('showFlash', true)
            ->assertSee('No media found! Please retry...');
    }
}
