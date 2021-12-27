<?php

namespace App\Http\Livewire;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Http\Services\GiphyService;


class GiphyGenerator extends Component
{
    private ?GiphyService $giService = null;
    private array $modes = [0 => 'random', 1 => 'search', 2 => 'infinite'];
    public string $output = "";
    public int $selectedMode = 0;
    public string $searchInput = "";
    public int $paginationCount = 1;
    public bool $loading = true;
    public bool $showFlash = false;

    protected $listeners = ['reload' => 'startInfinite'];

    public function mount(GiphyService $giService): void
    {
        $this->giService = $giService;
        $this->output = $this->giService->getRandom();
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function nextGiphy(GiphyService $giService): void
    {
        $this->giService = $giService;

        switch ($this->selectedMode) {
            case 0:
            case 2:
                $this->output = $this->giService->getRandom();
                break;
            case 1:
                $this->search($this->giService);
                break;
            default:
                break;
        }
    }

    public function setMode(string $mode): void
    {
        switch ($mode) {
            case '0':
                $this->selectedMode = 0;
                break;
            case '1':
                $this->selectedMode = 1;
                break;
            case '2':
                $this->selectedMode = 2;
                break;
        }
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function startInfinite(GiphyService $giService): void
    {
        $this->giService = $giService;
        $this->nextGiphy($this->giService);
    }

    public function updated(): void
    {
        $this->showFlashMessage('');
    }

    /**
     * @throws Exception|GuzzleException
     */
    public function search(GiphyService $giService): void
    {
        $this->giService = $giService;

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
    public function showFlashMessage(String $msg): void
    {
        $this->showFlash = true;
        flash($msg, 'flashmessage');
    }
}
