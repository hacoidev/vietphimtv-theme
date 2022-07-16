@extends('ophim_themes::vietphimtv.layout')

@section('content')
    <div class="breadcrumb w-full py-[5px] px-[10px] mb-2 list-none bg-[#151111] rounded" itemscope=""
        itemtype="https://schema.org/BreadcrumbList">
        <a href="/">
            <span class="text-xs font-bold text-white" itemprop="name">Trang Chủ ></span>
        </a>
        @foreach ($movie->categories as $category)
            <a href="{{ $category->getUrl() }}">
                <span class="text-xs font-bold text-white" itemprop="name">{{ $category->name }} ></span>
            </a>
        @endforeach
        <a href="{{ $movie->getUrl() }}"><span
                class="text-gray-400 text-xs font-bold italic whitespace-normal">{{ $movie->name }}
            </span>
        </a>
    </div>
    <div class="w-full bg-[#191717] text-gray-50 h-[fit-content] rounded">
        <div class="w-full p-2.5">
            <div class="block-movies-info flex-none md:flex lg:flex xl:flex">
                <div class="movies-image md:top-0 w-full md:w-1/3 lg:w-1/3 xl:w-1/3">
                    <div class="movie-l-img relative">
                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="display:block;box-sizing:border-box;padding-top:133.05439330543933%"></div><img
                                alt="{{ $movie->name }}"
                                sizes="(max-width: 480px) 300px, (max-width: 1000px) 232px, 232px"
                                src="{{ $movie->thumb_url }}" decoding="async" data-nimg="responsive"
                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; filter: none; background-size: cover; background-image: none; background-position: 0% 0%;"><noscript></noscript>
                        </div><span class="absolute top-1 right-2 flex gap-2"><button title="Thêm vào tủ phim"
                                class="relative transition duration-150 transform hover:scale-110 text-pink-400 hover:text-yellow-400 ease-in-out bg-gray-900 bg-opacity-80 rounded-full shadow-md focus:outline-none group"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-8 h-8 p-1 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg><span
                                    class="text-sm absolute -left-9 -top-8 whitespace-nowrap bg-gray-900 bg-opacity-60 p-1 rounded-md hidden group-hover:block">Thêm
                                    vào tủ phim</span></button></span>
                        <div class="btn-block absolute bottom-0 text-center w-full bg-black bg-opacity-80 py-2 m-0">
                            @if ($firstEpisode = $movie->episodes->first())
                                <a class="p-1 inline-block"><a
                                        class="bg-[#d9534f] text-gray-50 inline-block px-3 py-2 rounded"
                                        title="Thỏa Thuận Bán Thân - Dangerous Memorandum Signed By The Body (2021)"
                                        href="{{ $movie->episodes->first()->getUrl() }}">Xem phim</a></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 ml-0 md:ml-3 p-1">
                    <h1 class="md:ml-0"><span class="uppercase text-sm xl:text-xl text-[#dacb46] block font-bold">
                            <a href="{{ $movie->getUrl() }}"
                                title="{{ $movie->name }}">{{ $movie->name }}</a></span><span
                            class="text-gray-300 text-base">{{ $movie->origin_name ?? '' }}</span><span
                            class="text-gray-300 text-base"> (2021)</span></h1><span class="mb-1">
                        <div class="star-ratings" title="0 Stars"
                            style="position:relative;box-sizing:border-box;display:inline-block"><svg class="star-grad"
                                style="position:absolute;z-index:0;width:0;height:0;visibility:hidden">
                                <defs>
                                    <linearGradient id="starGrad296620489813547" x1="0%" y1="0%"
                                        x2="100%" y2="0%">
                                        <stop offset="0%" class="stop-color-first"
                                            style="stop-color:yellow;stop-opacity:1"></stop>
                                        <stop offset="0%" class="stop-color-first"
                                            style="stop-color:yellow;stop-opacity:1"></stop>
                                        <stop offset="0%" class="stop-color-final"
                                            style="stop-color:rgb(203, 211, 227);stop-opacity:1"></stop>
                                        <stop offset="100%" class="stop-color-final"
                                            style="stop-color:rgb(203, 211, 227);stop-opacity:1"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width: 20px; height: 20px; transition: transform 0.2s ease-in-out 0s;">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width: 20px; height: 20px; transition: transform 0.2s ease-in-out 0s;">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width: 20px; height: 20px; transition: transform 0.2s ease-in-out 0s;">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;padding-right:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width: 20px; height: 20px; transition: transform 0.2s ease-in-out 0s;">
                                    <path class="star"
                                        style="fill: rgb(203, 211, 227); transition: fill 0.2s ease-in-out 0s;"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                            <div class="star-container"
                                style="position:relative;display:inline-block;vertical-align:middle;padding-left:2px;cursor:pointer">
                                <svg viewBox="0 0 51 48" class="widget-svg"
                                    style="width:20px;height:20px;transition:transform .2s ease-in-out">
                                    <path class="star" style="fill:rgb(203, 211, 227);transition:fill .2s ease-in-out"
                                        d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"></path>
                                </svg>
                            </div>
                        </div>
                    </span><span class="text-xs text-white ml-2 align-middle block md:inline">(0 sao / 0 lượt đánh
                        giá)</span>
                    <div class="relative mt-1 w-auto">
                        <div
                            class="movie-meta-info overflow-y-scroll w-auto h-[fit-content] rounded-sm p-1 leading-6 text-[#bbb] bg-[#272727] text-lg">
                            <dl class="mt-0">
                                <dt class="inline font-bold text-sm">Trạng thái:</dt>
                                <dd class="movie-dd inline ml-1 text-sm status text-red-600">{{ $movie->status }}
                                </dd>
                                <br>
                                <dt class="inline font-bold text-sm">Đạo diễn:</dt>
                                <dd class="movie-dd inline ml-1 text-sm dd-director"><a
                                        class="director text-[#44e2ff] hover:text-yellow-400" href="/dao-dien/Lee+Ro-woon"
                                        title="Lee Ro-woon">{{ $movie->directors->pluck('name')->implode(', ') }}</a>
                                </dd><br>
                                <dt class="inline font-bold text-sm">Diễn viên:</dt>
                                <dd class="movie-dd inline ml-1 text-sm dd-actor">
                                    @foreach ($movie->actors as $actor)
                                        <a class="text-[#44e2ff] hover:text-yellow-400" href="{{ $actor->getUrl() }}"
                                            title="{{ $actor->name }}">{{ $actor->name }}</a>,
                                    @endforeach
                                </dd><br>
                                <dt class="inline font-bold text-sm">Quốc gia:</dt>
                                <dd class="movie-dd inline ml-1 text-sm dd-country">
                                    @foreach ($movie->regions as $region)
                                        <a class="text-[#44e2ff] hover:text-yellow-400" href="{{ $region->getUrl() }}"
                                            title="{{ $region->name }}">{{ $region->name }}</a>,
                                    @endforeach
                                </dd>
                                <br>
                                <dt class="inline font-bold text-sm">Năm:</dt>
                                <dd class="movie-dd inline ml-1 text-sm"><a title="Phim mới {{ $movie->publish_year }}"
                                        href="/danh-sach/phim-moi?year=2021">{{ $movie->publish_year }}</a></dd><br>
                                <dt class="inline font-bold text-sm">Ngày cập nhật:</dt>
                                <dd class="movie-dd inline ml-1 text-sm">{{ $movie->updated_at }}</dd><br>
                                <dt class="inline font-bold text-sm">Thời lượng:</dt>
                                <dd class="movie-dd inline ml-1 text-sm">{{ $movie->episode_time }}</dd><br>
                                <dt class="inline font-bold text-sm">Chất lượng:</dt>
                                <dd class="movie-dd inline ml-1 text-sm">{{ $movie->quality }}</dd><br>
                                <dt class="inline font-bold text-sm">Ngôn ngữ:</dt>
                                <dd class="movie-dd inline ml-1 text-sm">{{ $movie->language }}</dd><br>
                                <dt class="inline font-bold text-sm">Thể loại:</dt>
                                <dd class="movie-dd inline ml-1 text-sm dd-cat">
                                    @foreach ($movie->categories as $category)
                                        <a class="text-[#44e2ff] hover:text-yellow-400"
                                            href="{{ $category->getUrl() }}"
                                            title="{{ $category->name }}">{{ $category->name }}</a>,
                                    @endforeach
                                </dd><br>
                                <dt class="inline font-bold text-sm">Lượt xem:</dt>
                                <dd class="movie-dd inline ml-1 text-sm">{{ $movie->total_view }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <article class="mt-2.5 rounded-sm p-2.5 bg-[#272727] mb-3">
                <h2 class="text-sm font-bold text-[#dacb46] uppercase mt-1.5">Nội dung phim</h2>
                <div class="content text-white">
                    <pre>{{ $movie->content }}</pre>
                </div>
            </article>
            <div class="mt-2.5 border-t border-dashed border-gray-700"><span
                    class="text-sm font-bold text-[#dacb46] uppercase mt-1.5">Từ Khóa:</span>
                <div class="tag-list">
                    @foreach ($movie->tags as $tag)
                        <a class="tag-item inline-block whitespace-pre-line text-gray-400 hover:text-yellow-300 text-sm"
                            href="{{ $tag->getUrl() }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
