@extends('ophim_themes::vietphimtv.layout')

@section('content')
    <div class="breadcrumb w-full py-[5px] px-[10px] mb-2 list-none bg-[#151111] rounded" itemscope=""
        itemtype="https://schema.org/BreadcrumbList">
        <a href="/">
            <span class="text-xs font-bold text-white" itemprop="name">Trang Chủ ></span>
        </a>
        <span class="truncate">
            @foreach ($movie->categories as $category)
                <a href="{{ $category->getUrl() }}">
                    <span class="text-xs font-bold text-white" itemprop="name">{{ $category->name }} ></span>
                </a>
            @endforeach
        </span>
        <a href="{{ $movie->getUrl() }}"><span
                class="text-gray-400 text-xs font-bold italic whitespace-normal truncate">{{ $movie->name }}
            </span>
        </a>
    </div>
    <div class="w-full">
        <div class="block-player flow-root mt-2.5 border-gray-900 border-solid border-[1px] rounded-sm p-2 bg-[#272727]">
            <div class="h-content">
                <div class="iframe w-full h-[15em] sm:h-[25em] xl:h-[36em]">
                    @if ($episode->type == 'embed')
                        <iframe width="100%" height="100%" src="{{ $episode->link }}" frameborder="0" scrolling="no"
                            allowfullscreen=""></iframe>
                    @else
                    @endif

                </div>
            </div>
            <div class="flex justify-between mt-1"><span></span><span
                    class="bg-[#151111] hover:bg-gray-900 font-bold text-sm text-white shadow text-center py-1 px-2 rounded cursor-pointer"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true" class="w-5 h-5 inline">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Báo Lỗi</span></div>
            <div class="text-white mb-2 font-bold text-sm mt-2">
                <h2>Bạn đang xem {{ $movie->name }}</h2>
            </div>
            <div class="text-[#FDB813] mb-2 font-bold text-sm mt-2">Mẹo: Chọn phần của tập phim hoặc đổi nguồn phát
                dự phòng ở bên dưới nếu lỗi!</div>
            <div class="server-backup border-t-[1px] border-solid border-[#555] py-3 text-white">
                @foreach ($movie->episodes->where('slug', $episode->slug) as $episode)
                    <a href="#"
                        class="btn uppercase current bg-slate-600 px-3 py-2 mr-1 rounded @if ($loop->first) bg-slate-900 @endif">
                        <i class="playing"></i> {{ $episode->type }} #{{ $loop->index }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col my-3 border-gray-900 border-solid border-[1px] rounded-sm p-2 bg-[#272727]">
            @foreach ($movie->episodes->groupBy('server') as $server => $data)
                <div class="block mb-2.5">
                    <div class="mb-4 text-blue-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"
                            class="w-4 h-4 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                        {{ $server }}
                    </div>
                    <div class="list-episode">
                        @foreach ($data->groupBy('name') as $name => $item)
                            <a class="episode"><a
                                    class="btn shadow text-white mx-1 px-3 py-2 bg-slate-600 rounded @if ($item->contains($episode)) bg-slate-900 @endif"
                                    href="{{ $item->first()->getUrl() }}"
                                    title="{{ $name }}">{{ $name }}</a>
                            </a>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col border-gray-900 border-solid border-[1px] rounded-sm bg-[#272727] px-2 mb-3">
            <span class="text-sm font-bold text-[#dacb46] uppercase mt-3">Từ Khóa:</span>
            <div class="tag-list mb-3">
                @foreach ($movie->tags as $tag)
                    <a class="tag-item inline-block whitespace-pre-line text-gray-400 hover:text-yellow-300 text-sm"
                        href="{{ $tag->getUrl() }}">
                        {{ $tag->name }},
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
