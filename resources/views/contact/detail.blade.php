<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    @isset($contact)
        <div class="max-w-100 bg-gray-200 m-2 p-2 rounded-lg">
            <div class="flex justify-between items-center">
                <p class="text-blue-700 font-bold text-lg my-2">{{ $contact->name }}</p>
                <p class="text-gray-700 my-2">{{ $contact->created_at->diffForHumans() }}</p>
                <p class="text-gray-700 my-2">{{ $contact->created_at->format('d/m/Y') }}</p>
            </div>

            <hr>
            <p class="my-3">
            <span class="text-blue-700 font-semibold">
                EMAIL  :
            </span>
                <br>
                <span class="font-bold dark:text-gray-900">{{ $contact->email }}</span>
            </p>
            <p class="my-3">
           <span class="text-blue-700 font-semibold">
                BIRTHDAY  :
            </span>
                <br>
                <span class="font-bold dark:text-gray-900">{{ $contact->bithday == null ? $contact->birthday : 'No Data' }}</span>
            </p>
            <p class="my-3">
            <span class="text-blue-700 font-semibold">
                COMPANY  :
            </span>
                <br>
                <span class="font-bold dark:text-gray-900">{{ $contact->company }}</span>
            </p>
            <p class="dark:text-gray-900 my-3">
            <span class="text-blue-700 font-semibold">
                DESCRIPTION  :
            </span>
                <br>
                <span class="font-bold dark:text-gray-900">
                {{ $contact->description }}
            </span>
            </p>
            <hr>
            <div class="flex justify-end items-center my-2">
                <a href="{{ route("contact.edit",$contact->id) }}" class="mx-3 dark:bg-blue-300 px-3 py-1 rounded-lg">Edit</a>
                <form id="delete_from_{{$contact->id}}" method="post" action="{{ route("contact.delete",$contact->id) }}">
                    @csrf
                    @method('delete')
                </form>
                <button form="delete_from_{{$contact->id}}" class="mx-3 hover:bg-red-400 px-3 py-1 rounded-lg hover:text-gray-800 dark:text-red-600">
                    Delete
                </button>
{{--                <a href="{{ route("contact.delete",$contact->id) }}" class="mx-3 hover:bg-red-400 px-3 py-1 rounded-lg hover:text-gray-800 dark:text-red-600">Delete</a>--}}
            </div>
        </div>
    @else
        <div class="max-w-100 bg-gray-200 m-2 p-2 rounded-lg">
            <h1>No Data</h1>
        </div>
    @endisset

</x-app-layout>
