<?php

namespace App\Http\Livewire;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use JsonException;
use Livewire\Component;
use App\Http\Services\GiphyService;


class GiphyGenerator extends Component
{
    private ?GiphyService $giService = null;
    private array $modes = ['random' => 'random', 'search' => 'search', 'infinite' => 'infinite'];
    public string $output = "";
    public string $selectedMode = 'random';
    public string $searchInput = "";
    public int $paginationCount = 1;
    public bool $loading = true;
    public bool $showFlash = false;

    protected $listeners = ['reload' => 'startInfinite'];

    public function boot(GiphyService $giService): void
    {
        $this->giService = $giService;
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function mount(): void
    {
        $this->output = $this->giService->getRandom();
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function nextGiphy(): void
    {
        switch ($this->selectedMode) {
            case 'infinite':
            case 'random':
                $this->output = $this->giService->getRandom();
                break;
            case 'search':
                $this->search();
                break;
            default:
                break;
        }
    }

    public function setMode(string $mode): void
    {
        if($mode === 'infinite') {
            $this->showFlashMessage('Loop started. Interval is 10sec');
        }
        $this->selectedMode = $this->modes[$mode];
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function startInfinite(): void
    {
        $this->nextGiphy();
    }

    public function updated(): void
    {
        $this->showFlashMessage('');
    }

    /**
     * @throws Exception|GuzzleException
     */
    public function search(): void
    {
        $random_offset = $this->paginationCount > 4999 ? random_int(1, 4999) : random_int(1, $this->paginationCount);
        $gMedia = $this->giService->getBySearch($this->searchInput, $random_offset);

        if (!$gMedia) {
            $this->showFlashMessage('No media found! Please retry...');
            return;
        }
        $this->output = $gMedia[0];
        $this->paginationCount = $gMedia[1] - 1;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.giphy-generator');
    }

    /**
     * @param String $msg
     * @return void
     */
    public function showFlashMessage(string $msg): void
    {
        $this->showFlash = true;
        flash($msg, 'flashmessage');
    }
}
