@extends('layouts.main')
@extends('partials.navbar')

<div>
    <section class="" style="background-color: #001b35">
        <div class="flex flex-col mt-20">
            <div class="my-2 overflow-x-auto">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 m-4 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium w-10 text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col" class="py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Card Name
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Card Detail</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @php
                                    $uniqueCardIds = [];
                                    $count = 0;
                                @endphp
                                @foreach ($inventories as $item)
                                    @if (!in_array($item->card_id, $uniqueCardIds))
                                        @php
                                            $count++;
                                            $uniqueCardIds[] = $item->card_id;
                                        @endphp
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-center text-gray-900">
                                                    {{ $count }}
                                                </div>
                                            </td>
                                            <td class="py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->card->title }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ url('card') }}/{{ $item->card->id }}">
                                                    <button class="text-indigo-600 hover:text-indigo-900">
                                                        Card Detail
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>