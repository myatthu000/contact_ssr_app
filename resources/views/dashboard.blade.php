<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden">
        Dashboard
{{--        @include('contact.home')--}}
{{--        @isset($contacts)--}}
{{--            @foreach($contacts as $contact)--}}
{{--                {{ $contact->name }}--}}
{{--                @if($contact->user_id == auth()->id())--}}
{{--                    <a href="{{ route('contact.show',$contact->id) }}">--}}
{{--                        <div class="py-2 px-5 mb-3 border-b-2 border-blue-200 hover:bg-gray-50" id="{{ $contact->id }}">--}}
{{--                            <div class="flex justify-start items-center">--}}
{{--                                <p class="bg-blue-300 uppercase mr-6 text-white font-bold flex justify-center items-center w-8 h-8 rounded">--}}
{{--                                    {{ $contact->name[0].$contact->name[1] }}--}}
{{--                                </p>--}}
{{--                                <div class="text-xs font-semibold tracking-wide">--}}
{{--                                    <p>{{ $contact->name }}</p>--}}
{{--                                    <p class="text-gray-500">{{ $contact->company }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            {{ __('No DATA') }}--}}
{{--        @endisset--}}

    </div>

</x-app-layout>
