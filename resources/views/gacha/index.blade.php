@extends('layouts.main')
@extends('partials.navbar')

@foreach ($cards as $card)
<div class="grid grid-cols-5">
    <div class="col-start-2">
        <img class="w-96" src="{{ $card->image }}" alt="">
    </div>
</div>
    
@endforeach
