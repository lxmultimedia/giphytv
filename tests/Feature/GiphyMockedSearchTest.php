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

class GiphyMockedSearchTest extends TestCase
{
    use RefreshDatabase;

    private $giphyService;
    private $mockHandler;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockHandler = $this->swapGiphyClient();
        $this->giphyService = app(GiphyService::class);
    }

    /**
     * @throws JsonException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function test_one_can_search(): void
    {
        $response = $this->get('/');

        $this->mockHandler->append(new Response(200, [], MockedResponses::getMockedResponseBody()));

        $result = $this->giphyService->getBySearch('car');

        $this->assertEquals(
            'https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.gif&ct=g',
            $result[0]
        );
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws JsonException
     */
    public function test_one_is_searching_no_results(): void
    {
        $response = $this->get('/');

        $this->mockHandler->append(new Response(200, [], MockedResponses::getMockedResponseBodyNoResults()));

        $result = $this->giphyService->getBySearch('XYXYXYXYXYX');

        $this->assertEquals(
            null,
            $result
        );
    }

    private function swapGiphyClient(): MockHandler
    {
        $mockHandler = new MockHandler();

        $client = new GiphyClient([
                                      'handler' => HandlerStack::create($mockHandler),
                                  ]);

        $this->app->instance(GiphyClient::class, $client);

        return $mockHandler;
    }
}
