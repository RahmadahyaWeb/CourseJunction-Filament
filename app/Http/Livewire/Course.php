<?php

namespace App\Http\Livewire;

use App\Models\Course as ModelsCourse;
use Livewire\Component;
use Livewire\WithPagination;

class Course extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.course', [
            'courses' => ModelsCourse::with('material')
                ->where('title', 'like', '%' . $this->search . '%')
                ->simplePaginate(2)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
