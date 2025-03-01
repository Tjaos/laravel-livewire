<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public string $message = 'Apenas um teste 2';

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
