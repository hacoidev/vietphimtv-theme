@php
$menu = \Ophim\Core\Models\Menu::getTree();
$tops = Cache::remember('tops2', 5, function () {
    $lists = explode('|', \Backpack\Settings\app\Models\Setting::get('site_top_lists'));

    $data = [];
    foreach ($lists as $list) {
        if (trim($list)) {
            [$label, $relation, $field, $val, $sortKey, $alg, $limit] = explode(':', $list);
            try {
                $data[] = [
                    'label' => $label,
                    'data' => \Ophim\Core\Models\Movie::when($relation, function ($query) use ($relation, $field, $val) {
                        $query->whereHas($relation, function ($rel) use ($field, $val) {
                            $rel->where($field, $val);
                        });
                    })
                        ->when(!$relation, function ($query) use ($field, $val) {
                            $query->where($field, $val);
                        })
                        ->orderBy($sortKey, $alg)
                        ->limit($limit)
                        ->get(),
                ];
            } catch (\Throwable $th) {
            }
        }
    }

    return $data;
});
@endphp

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta name="google-site-verification" content="1gjjSkXb6oeUY93m0OZ1o-M831hqA7DAnYzJqdqtuH0" />

    <link rel="shortcut icon" href="/movie-96.png" type="image/png" />

    <title>Xem Phim | Phim Hay | Phim online | Phim HD Vietsub | Phim HD online</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />

    <meta charSet="utf-8" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="ROBOTS" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="BingBOT" content="index,follow" />
    <meta name="yahooBOT" content="index,follow" />
    <meta name="slurp" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="description"
        content="Phim vietsub mới miễn phí nhanh chất lượng cao. Xem Phim online VietSub, Thuyết minh, lồng tiếng chất lượng Full HD. Xem phim nhanh online chất lượng cao cập nhật nhanh nhất" />
    <meta name="keywords" content="" />
    <meta name="author" content="VietPhim.Tv" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Xem Phim | Phim Hay | Phim online | Phim HD Vietsub | Phim HD online" />
    <meta name="twitter:description"
        content="Phim vietsub mới miễn phí nhanh chất lượng cao. Xem Phim online VietSub, Thuyết minh, lồng tiếng chất lượng Full HD. Xem phim nhanh online chất lượng cao cập nhật nhanh nhất" />
    <meta name="twitter:image"
        content="https://poster.vietphim.tv/uploads/movies/toi-van-chua-lam-tot-cong-viec-cua-minh.jpg" />
    <meta property="og:title" content="Xem Phim | Phim Hay | Phim online | Phim HD Vietsub | Phim HD online" />
    <meta property="og:description"
        content="Phim vietsub mới miễn phí nhanh chất lượng cao. Xem Phim online VietSub, Thuyết minh, lồng tiếng chất lượng Full HD. Xem phim nhanh online chất lượng cao cập nhật nhanh nhất" />
    <meta property="og:image"
        content="https://poster.vietphim.tv/uploads/movies/toi-van-chua-lam-tot-cong-viec-cua-minh.jpg"
        alt="Xem Phim | Phim Hay | Phim online | Phim HD Vietsub | Phim HD online" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="VietPhim.Tv" />
    <meta property="og:url" content="https://vietphim.tv/" />
    <meta property="og:locale" content="vi_VN" />
    <meta itemProp="description"
        content="Phim vietsub mới miễn phí nhanh chất lượng cao. Xem Phim online VietSub, Thuyết minh, lồng tiếng chất lượng Full HD. Xem phim nhanh online chất lượng cao cập nhật nhanh nhất" />
    <meta name="image"
        content="https://poster.vietphim.tv/uploads/movies/toi-van-chua-lam-tot-cong-viec-cua-minh.jpg" />
    <link rel="canonical" href="https://vietphim.tv/" />

    <link rel="alternate" href="https://vietphim.tv/" hrefLang="vi-vn" />

    <meta property="fb:admins" content="" />

    <meta property="fb:app_id" content="244824714144384" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>

<body class="bg-[#2f2f2f] font-sans leading-normal tracking-normal">
    @include('ophim_themes::vietphimtv.inc.header')
    @include('ophim_themes::vietphimtv.inc.nav')
    <div class="container px-5 w-full mx-auto pt-[63px] md:pt-[30px] lg:pt-20">
        <div class="w-full px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <div class="flex flex-row flex-wrap flex-grow mt-2">
                <div class="w-full lg:w-3/4 xl:w-3/4 py-3">
                    <div class="w-full">
                        @yield('content')
                    </div>
                </div>
                <div class="w-full lg:w-1/4 xl:w-1/4 p-3">
                    @foreach ($tops as $top)
                        <div class="rounded mb-3">
                            <a class="flex bg-[#1511116d] rounded-lg p-0 mx-2 mb-0">
                                <div class="section-heading bg-[red] rounded-l-lg">
                                    <h3 class="px-2 py-1"><span class="h-text text-white uppercase ">{{ $top['label'] }}</span></h3>
                                </div>
                            </a>
                            <div class="px-0">
                                <ul class="list-movies">
                                    @foreach ($top['data'] ?? [] as $movie)
                                        <a href="{{ $movie->getUrl() }}"
                                            class="flex bg-[#1511116d] rounded-lg p-0 m-2 w-15 h-20">
                                            <img class="object-cover rounded-t-lg md:rounded-none md:rounded-l-lg w-auto"
                                                src="{{ $movie->thumb_url }}" alt="">
                                            <div class="px-3 py-1 truncate">
                                                <p
                                                    class="capitalize block overflow-hidden overflow-ellipsis whitespace-nowrap text-[#44e2ff] hover:text-yellow-300">
                                                    {{ $movie->name }}</p>
                                                <p
                                                    class="text-gray-400 text-[12px] mt-[3px] italic block overflow-hidden overflow-ellipsis whitespace-nowrap">
                                                    {{ $movie->origin_name }} ({{ $movie->publish_year }})</p>
                                                <p class="text-gray-400 text-[12px] mt-[3px] italic"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="w-4 h-4 inline">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg> {{ $movie->total_view ?? 0 }} lượt xem</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('ophim_themes::vietphimtv.inc.footer')
</body>

</html>
