<x-app-layout>

    <div class="h-50 overflow-hidden">
        <h3 class="py-3 px-5"> search by <b>"{{ request()->search }}"</b> </h3>
        @isset($contacts)
            @foreach($contacts as $contact)
                @if($contact->user_id == auth()->id())
                    <a href="{{ route('contact.show',$contact->id) }}">
                        <div class="py-3 px-5 border-b-2 border-blue-200 hover:bg-gray-50" id="{{ $contact->id }}">
                            <div class="flex justify-start items-center">
                                <p class="bg-blue-300 uppercase mr-6 text-white font-bold flex justify-center items-center w-8 h-8 rounded">
                                    {{ substr($contact->name,0,2) }}
                                </p>
                                <div class="text-xs font-semibold tracking-wide">
                                    <p>{{ $contact->name }}</p>
                                    <p class="text-gray-500">{{ substr($contact->company,0,20)."  ...." }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @elseif($contact)
                    <div class="bg-gray-100 px-5 py-3 w-full h-20 dark:text-black text-center flex justify-center items-center">
                        Search not found.
                    </div>
                @endif

            @endforeach
        @elseif($contacts)
            <div class="bg-gray-100 px-5 py-3 w-full h-20 dark:text-black text-center flex justify-center items-center">
                Search not found.
            </div>
        @endisset
    </div>

</x-app-layout>
