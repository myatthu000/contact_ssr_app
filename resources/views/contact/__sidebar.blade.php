<div class="pl-6 bg-gray-200 w-56 h-screen border-gray-400 border-r-2">
    <nav class="pt-4">
        <!--                Left Section-->
        <div class="dark:text-blue-900 font-bold pt-4 pb-8">
            <h4>CONTACT APP</h4>
        </div>

        <p class="pb-4 font-bold uppercase text-xs text-gray-500">Create</p>
        <div class="mb-8">
            <a href="{{ route('contact.create') }}">
                <div class="flex py-2 hover:bg-blue-300 hover:text-black text-gray-500 {{ (request()->routeIs('contact.create')) ? 'hover:text-black border-r-4 border-blue-700 text-blue-700' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <p class="pl-4 font-bold tracking-wide text-sm">Add New</p>
                </div>
            </a>

        </div>

        <p class="pb-4 font-bold uppercase text-xs text-gray-500">General</p>
        <div class="mb-8">

            <a href="{{ route('contact.index') }}">
                <div class="flex py-2 hover:bg-blue-300 hover:text-black text-gray-500 {{ (request()->routeIs('contact.index')) ? 'hover:text-black border-r-4 border-blue-700 text-blue-700' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <p class="pl-4 font-bold tracking-wide text-sm">Latest</p>
                </div>
            </a>


            <a href="{{ route("birthday") }}">
                <div class="flex py-2 hover:bg-blue-300 hover:text-black text-gray-500 {{ (request()->routeIs('birthday')) ? 'hover:text-black border-r-4 border-blue-700 text-blue-700' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                        <polyline points="20 12 20 22 4 22 4 12"></polyline>
                        <rect x="2" y="7" width="20" height="5"></rect>
                        <line x1="12" y1="22" x2="12" y2="7"></line>
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                    </svg>
                    <p class="pl-4 font-bold tracking-wide text-sm">Birthday</p>
                </div>
            </a>

        </div>

        <p class="pb-4 font-bold uppercase text-xs text-gray-500">Setting</p>
        <div class="mb-8">
            <form method="POST" id="logout" action="{{ route('logout') }}">
                @csrf
            </form>
{{--            <button type="submit" form="logout" class="">--}}
                <div class="flex py-2 hover:bg-blue-300 hover:text-black text-gray-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <button type="submit" form="logout" class="pl-4 font-bold tracking-wide text-sm">Logout</button>
                </div>
{{--            </button>--}}

        </div>

    </nav>
</div>
