<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Features\SupportRedirects\HandlesRedirects;

class ViewUserPage extends Component
{
    use HandlesRedirects;

    public User $user;

    public function render(): View
    {
        return view('livewire.view-user-page');
    }

    public function back(): void
    {
        $this->redirectRoute('overview');
    }
}
