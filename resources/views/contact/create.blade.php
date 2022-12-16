<x-app-layout>
{{--    @section('content')--}}
    <div class="py-2 px-5 mb-3 mt-8">
        <form action="{{ route("contact.store") }}" method="post">
            @csrf
{{--            @method('post')--}}
            <div class="relative mb-6">

                <label for="name" class="absolute font-bold uppercase text-xs text-blue-700 @error('name') text-red-600 @enderror">
                    Name
                </label>
                <input type="text" id="name" name="name"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 @error('name') border-red-600 @enderror focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">
                @error('name')
                <p class="font-semibold text-red-600">{{$message}}</p>
                @enderror

            </div>

            <div class="relative mb-6">

                <label for="email" class="absolute font-bold uppercase text-xs text-blue-700 @error('email') text-red-600 @enderror">
                    email
                </label>
                <input type="email" id="email" name="email"
                       class="border-b-2 pt-6 border-0 w-full border-gray-300  @error('email') border-red-600 @enderror focus:outline-none focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">
                @error('email')
                <p class="font-semibold text-red-600">{{$message}}</p>
                @enderror

            </div>

            <div class="relative mb-6">

                <label for="date" class="absolute font-bold uppercase text-xs text-blue-700 @error('birthday') text-red-600 @enderror">
                    Birthday
                </label>
                <input type="date" id="date" name="birthday"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none @error('birthday') border-red-600 @enderror focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">
                @error('birthday')
                <p class="font-semibold text-red-600">{{$message}}</p>
                @enderror

            </div>

            <div class="relative mb-6">

                <label for="company" class="absolute font-bold text-xs uppercase text-blue-700 @error('company') text-red-600 @enderror">
                    company
                </label>
                <input type="text" id="company" name="company"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none focus:border-b-2 @error('company') border-red-600 @enderror focus:border-0 focus:border-blue-700"
                       placeholder="">
                @error('company')
                <p class="font-semibold text-red-600">{{$message}}</p>
                @enderror

            </div>

            <div class="relative mb-6">

                <label for="description" class="absolute uppercase font-bold text-xs text-blue-700 @error('description') text-red-600 @enderror">
                    Description
                </label>
                <input type="text" id="description" name="description"
                       class="border-b-2 border-0 pt-6 w-full border-gray-300 focus:outline-none @error('description') border-red-600 @enderror focus:border-b-2 focus:border-0 focus:border-blue-700"
                       placeholder="">
                @error('description')
                    <p class="font-semibold text-red-600">{{$message}}</p>
                @enderror

            </div>

            <div class="flex justify-end items-center">
                <button class="text-red-300 font-bold border-2 border-gray-200 p-3 hover:bg-gray-300 hover:text-red-600 tracking-wide rounded-sm">Cancel</button>
                <button class="bg-blue-700 p-3 text-white font-bold tracking-wide mx-4 rounded-sm">Add Contact</button>
            </div>
        </form>

{{--        {{ \Illuminate\Support\Facades\URL::current() }}--}}
{{--        <br>--}}
{{--        {{ request()->routeIs('contact.create') ? 'true' : '' }}--}}
{{--        <br>--}}
{{--        {{ request()->url() }}--}}
    </div>
{{--        @endsection--}}
</x-app-layout>


