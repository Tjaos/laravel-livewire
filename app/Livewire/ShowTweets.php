<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public string $message = 'Apenas um teste 2';

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }
}
