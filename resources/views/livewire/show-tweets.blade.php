<div>
    Show Tweets

    <p>{{ $message }}</p>

    <input type="text" id="message" name="message" wire:model="message">

    <hr>
    @foreach($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
