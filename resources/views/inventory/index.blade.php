@extends('layouts.main')
@extends('partials.navbar')

<div>
    <body class="h-screen" style="background-color: #001b35">  
        <section class="" style="background-color: #001b35">
            <div class="flex flex-col mt-20">
                <div class="flex flex-col items-start mx-20 mt-5">
                    <a href="/dashboard">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-44">
                        Back
                      </button>
                    </a>
                  </div>
                <div class="">
                    <div class="py-2 align-middle items-center flex flex-col px-8">
                        <div class="overflow-hidden rounded-lg">
                            <table>
                                <thead class="" style="background: #243b55">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-base w-10 text-white">
                                            No.
                                        </th>
                                        <th class="py-3 text-left text-base text-white w-96">
                                            Card Name
                                        </th>
                                        <th class="relative px-6 py-3">
                                            <span class="sr-only">Card Detail</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="background: #22446b">
                                    @php
                                    $uniqueCardIds = [];
                                    $count = 0;
                                    @endphp
                                    @foreach ($inventories as $item)
                                    @if (!in_array($item->card_id, $uniqueCardIds))
                                    @if ($item->user_id == auth()->user()->id)
                                    @php
                                    $count++;
                                    $uniqueCardIds[] = $item->card_id;
                                    @endphp
                                    <tr>
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-medium text-center text-white">
                                                {{ $count }}
                                            </div>
                                        </td>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <div class="text-sm font-medium text-white">
                                                        {{ $item->card->title }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right text-sm font-medium">
                                            <a href="{{ url('card') }}/{{ $item->card->id }}">
                                                <button class="text-indigo-600 hover:text-indigo-900">
                                                    Card Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</div>