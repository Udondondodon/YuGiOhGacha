@extends('layouts.main')
@extends('partials.navbar')

<div>
    <section class="h-screen" style="background-color: #001b35">
        <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-auto bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-3 space-y-4">
                    <h1 class="text-xl font-bold md:text-2xl text-white text-center">Choose Beetwen One Of This</h1>
                </div>
                <div class="p-4 space-y-4 items-center flex justify-center">
                    <a href="/grind">
                        <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10">
                            Grind
                        </button>
                    </a>
                </div>
                <div class="p-4 space-y-4 items-center flex justify-center">
                    <a href="/gacha">
                        <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10">
                            Gacha
                        </button>
                    </a>
                </div>
            </div>
        </div>
      </section>
</div>