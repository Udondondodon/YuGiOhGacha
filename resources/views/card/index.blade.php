@extends('layouts.main')
{{-- @extends('partials.navbar') --}}


<div>
    <section class="" style="background-color: #001b35">
        <h1>{{ $cards->title }}</h1>
        <img src="{{ $cards->image }}" alt="">
    </section>
</div>