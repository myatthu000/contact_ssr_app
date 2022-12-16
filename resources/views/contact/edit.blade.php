<x-app-layout>
    {{--    @section('content')--}}
    <div class="py-2 px-5 mb-3 mt-8">
        <form action="{{ route("contact.update",$contact->id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="relative mb-6">
                <label for="name" class="absolute font-bold uppercase text-xs text-blue-700">
                    Name
                </label>
                <input type="text" id="name" name="name"
                       value="{{ $contact->name }}"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">

            </div>

            <div class="relative mb-6">

                <label for="email" class="absolute font-bold uppercase text-xs text-blue-700">
                    email
                </label>
                <input type="email" id="email" name="email"
                       value="{{ $contact->email }}"
                       class="border-b-2 pt-6 border-0 w-full border-gray-300 focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">

            </div>

            <div class="relative mb-6">

                <label for="date" class="absolute font-bold uppercase text-xs text-blue-700">
                    Birthday
                </label>
                <input type="date" id="date" name="birthday"
                       value="{{ $contact->birthday }}"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">

            </div>

            <div class="relative mb-6">

                <label for="company" class="absolute font-bold text-xs uppercase text-blue-700">
                    company
                </label>
                <input type="text" id="company" name="company"
                       value="{{ $contact->company }}"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">

            </div>

            <div class="relative mb-6">

                <label for="description" class="absolute uppercase font-bold text-xs text-blue-700">
                    Description
                </label>
                <input type="text" id="description" name="description"
                       value="{{ $contact->description }}"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">

            </div>

            <div class="flex justify-end items-center">
                <button class="text-red-300 font-bold border-2 border-gray-200 p-3 hover:bg-gray-300 hover:text-red-600 tracking-wide rounded-sm">Cancel</button>
                <button class="bg-blue-700 p-3 text-white font-bold tracking-wide mx-4 rounded-sm">Update Contact</button>
            </div>
        </form>
    </div>
    {{--        @endsection--}}
</x-app-layout>


