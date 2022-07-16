@extends('ophim_themes::vietphimtv.layout')

@section('content')
    <div class="flex flex-row flex-wrap flex-grow">
        @foreach ($data ?? [] as $movie)
            <a class="block w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-2" href="{{ $movie->getUrl() }}">
                <div class="flex justify-center items-center">
                    <div
                        class="max-w-xs container bg-[#151111] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                        <img class="w-full cursor-pointer rounded-t-lg" style="aspect-ratio: 256/340"
                            src="{{ $movie->thumb_url }}" alt="" />
                        <div class="flex p-4 justify-between">
                            <div class="flex w-full justify-between space-x-2">
                                <h2 class="text-gray-200 font-bold cursor-pointer truncate">{{ $movie->name ?? '' }}
                                </h2>
                                <h2 class="text-gray-200 cursor-pointer uppercase badge badge-success float-right">
                                    {{ $movie->quality ?? '' }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="text-center w-full mt-5">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">
                <li>
                    <a href="#"
                        class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
