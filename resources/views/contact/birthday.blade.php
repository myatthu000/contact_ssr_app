<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Birthday') }}
        </h2>
    </x-slot>

{{--    <h2 class="py-2 text-center justify-center items-center mb-1 bg-gray-200 dark:text-blue-900 font-bold">Birthdays In This Month</h2>--}}

    <div class="h-50 overflow-hidden">
        @isset($contacts)
            @foreach($contacts as $contact)
                @if($contact->user_id == auth()->id())
                    <a href="{{ route('contact.show',$contact->id) }}">
                        <div class="py-3 px-5 border-b-2 border-blue-200 hover:bg-gray-50" id="{{ $contact->id }}">
                            <div class="flex justify-start items-center">
                                <p class="bg-blue-300 uppercase mr-6 text-white font-bold flex justify-center items-center w-8 h-8 rounded">
                                    {{ $contact->name[0].$contact->name[1] }}
                                </p>
                                <div class="text-xs font-semibold tracking-wide">
                                    <p>{{ $contact->name }}</p>
                                    <p class="text-gray-500">{{ $contact->company }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        @else
            {{__('NO DATA')}}
        @endisset
    </div>


</x-app-layout>
