@php
$logo = Backpack\Settings\app\Models\Setting::get('site_logo') ?: '';
$brand = Backpack\Settings\app\Models\Setting::get('site_brand') ?: '<b style="color:red">O</b><i>phimTV</i>';
@endphp
<header id="header" class="bg-[#151111] fixed w-full z-30 top-0">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
        <div class="w-1/2 lg:w-1/5 pl-2 md:pl-0"><a
                class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold" href="/">
                @if ($logo)
                    <img src="{{ $logo }}" alt="Logo">
                @endif
                {!! $brand !!}
            </a>
            <h1 class="cursor-pointer w-max inline-flex" style="text-indent:-9999px">Phim Mới | Phim hay |
                Phim online | Phim vietsub hay nhất</h1>
        </div>
        <div class="hidden lg:block w-3/5 relative pl-4 pr-4 md:pr-0">
            <form id="form-search" method="GET"><input type="search" name="search" placeholder="Tìm kiếm phim"
                    class="focus:bg-[#2b2821] w-full bg-[#212020] text-sm md:text-md text-gray-400 transition focus:border-gray-600 focus:outline-none rounded py-2 px-2 pl-10 appearance-none leading-normal"
                    value="{{ request('search') }}" />

                <div class="absolute search-icon" style="top:0.75rem;left:1.75rem"><svg
                        class="fill-current pointer-events-none text-gray-400 w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                        </path>
                    </svg>
                </div>
            </form>
        </div>
        <div class="w-1/2 lg:w-1/5 pr-0">
            <div class="flex flex-wrap items-center gap-2 float-right">
                <div class="block lg:hidden"><button aria-label="Search Movies"
                        class="text-white px-3 py-0.5 rounded border-[1px] border-[#212020] group-hover:bg-[#272727] group-hover:rounded-b-none shadow focus:outline-none"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="w-5 h-5 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
