<?php

namespace App\Livewire\Tables;

use App\Models\User;
use App\Models\Bengkel;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class BengkelTable extends Component
{
    use WithPagination;
    #[Url(history: true)]
    public $search = '';
    #[Url(history: true)]
    public $perPage = 10;
    public $sortDir = 'DESC';
    public $sortBy = 'created_at';

    public function doSort($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDir = ($this->sortDir === "ASC") ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $column;
        $this->sortDir = 'DESC';
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function placeholder()
    {
        return view('includes.layouts.preloader');
    }
    public function render()
    {

        return view('livewire.tables.bengkel-table', [
            'bengkels' => Bengkel::paginate($this->perPage)
        ]);
    }
}
