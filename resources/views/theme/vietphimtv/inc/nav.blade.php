<nav id="navbar" class="bg-[#151111] fixed w-full z-20 top-10 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-[#151111] z-20"
            id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                @foreach ($menu as $item)
                    <li class="mr-6 my-2 md:my-0 dropdown relative group">
                        <a class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline group-hover:text-[#e50914]"
                            href="{{ $item['link'] }}">
                            <span class="pb-1 md:pb-0 text-sm md:text-xs uppercase font-bold">{{ $item['name'] }}</span>
                        </a>
                        @if (count($item['children']))
                            <div
                                class="dropdown-menu hidden md:block absolute w-full lg:w-max shadow-2xl bg-[#212020] z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <ul class="grid lg:grid-flow-row lg:grid-cols-3 sm:grid-cols-1 text-gray-100">
                                    @foreach ($item['children'] as $children)
                                        <li class="inline-block p-1">
                                            <a href="{{ $children['link'] }}"
                                                class="group-focus:opacity-0 group-focus:invisible hover:bg-[#151111] py-0 px-0 md:py-1 md:px-2 block whitespace-no-wrap cursor-pointer text-sm text-center md:text-base">{{ $children['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
