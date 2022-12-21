<div class="flex-1 flex shadow-sm mb-2 justify-between items-center p-2 bg-gray-100 border-gray-100 border-b-2">
    <p class="font-bold text-sm text-gray-500">
        {{ request()->routeIs('contact.create') ? 'Create New Contact' : (request()->routeIs('contact.index') ? "Latest Contact" : (request()->routeIs('birthday') ? "Birthday" : "Dashboard" ))}}
    </p>
    <div class="flex sm:justify-between items-center">
        <form id="search" action="{{ route("search") }}" method="get"></form>
        <input type="search"
               form="search"
               name="search"
               placeholder="Search + Enter"
               required
               value="{{ old('search',request()->search) }}"
               class="border-2 border-gray-200 mr-2 p-1 rounded-lg">
        <p class="rounded font-bold uppercase dark:text-white text-center bg-blue-300 w-8 h-8 flex justify-center items-center">
            {{ substr(auth()->user()->name,0,2) }}
        </p>
    </div>
</div>
