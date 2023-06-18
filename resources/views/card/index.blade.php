@extends('layouts.main')
@extends('partials.navbar')


<div>
    <body class="h-screen" style="background-color: #001b35">
        <section class="h-screen" style="background-color: #001b35">
            <div class="mt-28">
                <h1 class="text-white text-center text-5xl">{{ $cards->title }}</h1>
            </div>
            <div class="flex flex-row items-center justify-center mt-10">
                <img class="w-64 h-auto" src="{{ $cards->image }}" alt="">
                <div class="box-content text-white mx-10 w-96 rounded-xl p-10 text-lg text-justify" style="background: #243b55">
                    <h1 style="white-space: pre-line;">{{ str_replace('<br />', '', nl2br(str_replace('/', "\n", $cards->lore))) }}</h1>
                </div>                
            </div>
            <div class="flex flex-col items-center mt-5">
                <a href="/inventory">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-44">
                        Back
                    </button>
                </a>
            </div>
        </section>
    </body>
</div>