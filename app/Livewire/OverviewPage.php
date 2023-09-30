<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class OverviewPage extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.overview-page', [
            'users' => User::paginate(10),
        ]);
    }
}
