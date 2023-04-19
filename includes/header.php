<?php
error_reporting(E_ERROR | E_PARSE);
function curl($url){
		$ch = @curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		$head[] = "Connection: keep-alive";
		$head[] = "Keep-Alive: 300";
		$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
		$head[] = "Accept-Language: en-us,en;q=0.5";
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
		$page = curl_exec($ch);
		curl_close($ch);
		return $page;
}
$slogan = 'Xem Hoạt Hình 3D, Anime Nhanh Nhất';
$description = 'Web xem phim anime online tiếng việt, phim anime vietsub, tổng hợp phim hoạt hình nhật bản mới nhất & hay, hoạt hình trung quốc việt hoá, hoạt hình 3D';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="icon" href="https://animehay.live/themes/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="###" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="robots" content="index, follow, noodp">
    <link href="https://animehay.live/themes/styles/css.css?v=1.4.4" rel="stylesheet" />
    <script src="https://polyfill.io/v3/polyfill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    
<link rel="stylesheet" href="https://animehay.live/themes/styles/carousel/owl.carousel.min.css">
<link rel="stylesheet" href="https://animehay.live/themes/styles/carousel/owl.theme.default.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://animehay.live/themes/js_ob/object.js?v=1.7.5"></script>
<script type="text/javascript" src="https://animehay.live/themes/js_ob/class.js?v=1.7.5"></script>
<script type="text/javascript" src="https://animehay.live/themes/js_ob/function.js?v=1.7.5"></script>

</head>

<body class="scroll-bar">

    <div id="fb-root"></div>
    <div id="ah_wrapper">
        <div id="navbar">
            <div class="flex flex-hozi-center padding-10">
                <div class="logo">
                    <a href="/"><img src="https://media.discordapp.net/attachments/924155580124385280/1072038465899859999/zuighe4.png" alt="logo" /></a>
                </div>
                <div id="drop-down-4" class="search-bar flex flex-1 margin-0-10 flex-ver-center">
                    <form class="flex" id="form-search" action="/search.php?s=">
                        <input id="s" type="text" placeholder="Nhập từ khoá..." class="padding-10 bg-black color-gray" name="s">
                        <button type="submit" class="flex flex-hozi-center bg-black color-green green"><span class="material-icons-round">
                                search
                            </span></button>
                    </form>
                </div>
                <div class="nav-items flex-wrap flex">
                    <a href="#" onclick="clickEventDropDown(this,'search')" class="toggle-search toggle-dropdown" bind="drop-down-4">
                        <span class="material-icons-round">
                            search
                        </span>
                    </a>
                    <a href="#" onclick="clickEventDropDown(this,'reorder')" class="toggle-dropdown" bind="drop-down-1">
                        <span class="material-icons-round">
                            reorder
                        </span>
                    </a>
                    <a href="/#"><span class="material-icons-round">
                            history
                    </a>
                    <a href="/#"><span class="material-icons-round">
                            bookmarks
                        </span></a>

                    
                </div>
            </div>
            <div id="drop-down-1" class="dropdown-menu bg-black w-100-percent flex-column">
                <div class="tab-links flex-1">
                    <a href="#" class="item-tab-link active" bind="tab-cate"><span class="material-icons-round margin-0-5">
    category
</span>Thể loại</a>
                    <a href="#" class="item-tab-link" bind="tab-years"><span class="material-icons-round margin-0-5">
    auto_awesome
</span>Năm</a>
                    <a href="/loc-phim/" class="item-tab-link"><span class="material-icons-round margin-0-5">
    filter_alt
</span>Lọc phim</a>
                    <a href="/loc-phim/W1tdLFtdLFs5OTk5XSxbXV0=" class="item-tab-link"><span class="material-icons-round margin-0-5">
    auto_awesome
</span>Phim lẻ</a>
                </div>
                <div class="tab-content">
                    <div id="tab-cate" class="item-tab-content display-block">
                        <div class="flex flex-wrap">
                                                                                                                        <a href="/the-loai/anime-1.html" title="Thể loại Anime">Anime</a>
                                                                                            <a href="/the-loai/hanh-dong-2.html" title="Thể loại Hành động">Hành động</a>
                                                                                            <a href="/the-loai/hai-huoc-3.html" title="Thể loại Hài hước">Hài hước</a>
                                                                                            <a href="/the-loai/tinh-cam-4.html" title="Thể loại Tình cảm">Tình cảm</a>
                                                                                            <a href="/the-loai/harem-5.html" title="Thể loại Harem">Harem</a>
                                                                                            <a href="/the-loai/bi-an-6.html" title="Thể loại Bí ẩn">Bí ẩn</a>
                                                                                            <a href="/the-loai/bi-kich-7.html" title="Thể loại Bi kịch">Bi kịch</a>
                                                                                            <a href="/the-loai/gia-tuong-8.html" title="Thể loại Giả tưởng">Giả tưởng</a>
                                                                                            <a href="/the-loai/hoc-duong-9.html" title="Thể loại Học đường">Học đường</a>
                                                                                            <a href="/the-loai/doi-thuong-10.html" title="Thể loại Đời thường">Đời thường</a>
                                                                                            <a href="/the-loai/vo-thuat-11.html" title="Thể loại Võ thuật">Võ thuật</a>
                                                                                            <a href="/the-loai/tro-choi-12.html" title="Thể loại Trò chơi">Trò chơi</a>
                                                                                            <a href="/the-loai/tham-tu-13.html" title="Thể loại Thám tử">Thám tử</a>
                                                                                            <a href="/the-loai/lich-su-14.html" title="Thể loại Lịch sử">Lịch sử</a>
                                                                                            <a href="/the-loai/sieu-nang-luc-15.html" title="Thể loại Siêu năng lực">Siêu năng lực</a>
                                                                                            <a href="/the-loai/shounen-16.html" title="Thể loại Shounen">Shounen</a>
                                                                                            <a href="/the-loai/shounen-ai-17.html" title="Thể loại Shounen AI">Shounen AI</a>
                                                                                            <a href="/the-loai/shoujo-18.html" title="Thể loại Shoujo">Shoujo</a>
                                                                                            <a href="/the-loai/shoujo-ai-19.html" title="Thể loại Shoujo AI">Shoujo AI</a>
                                                                                            <a href="/the-loai/the-thao-20.html" title="Thể loại Thể thao">Thể thao</a>
                                                                                            <a href="/the-loai/am-nhac-21.html" title="Thể loại Âm nhạc">Âm nhạc</a>
                                                                                            <a href="/the-loai/psychological-22.html" title="Thể loại Psychological">Psychological</a>
                                                                                            <a href="/the-loai/mecha-23.html" title="Thể loại Mecha">Mecha</a>
                                                                                            <a href="/the-loai/quan-doi-24.html" title="Thể loại Quân đội">Quân đội</a>
                                                                                            <a href="/the-loai/drama-25.html" title="Thể loại Drama">Drama</a>
                                                                                            <a href="/the-loai/seinen-26.html" title="Thể loại Seinen">Seinen</a>
                                                                                            <a href="/the-loai/sieu-nhien-27.html" title="Thể loại Siêu nhiên">Siêu nhiên</a>
                                                                                            <a href="/the-loai/phieu-luu-28.html" title="Thể loại Phiêu lưu">Phiêu lưu</a>
                                                                                            <a href="/the-loai/kinh-di-29.html" title="Thể loại Kinh dị">Kinh dị</a>
                                                                                            <a href="/the-loai/ma-ca-rong-30.html" title="Thể loại Ma cà rồng">Ma cà rồng</a>
                                                                                            <a href="/the-loai/tokusatsu-31.html" title="Thể loại Tokusatsu">Tokusatsu</a>
                                                                                            <a href="/the-loai/samurai-32.html" title="Thể loại Samurai">Samurai</a>
                                                                                            <a href="/the-loai/vien-tuong-33.html" title="Thể loại Viễn tưởng">Viễn tưởng</a>
                                                                                            <a href="/the-loai/cn-animation-34.html" title="Thể loại CN Animation">CN Animation</a>
                                                                                            <a href="/the-loai/tien-hiep-35.html" title="Thể loại Tiên hiệp">Tiên hiệp</a>
                                                                                            <a href="/the-loai/kiem-hiep-36.html" title="Thể loại Kiếm hiệp">Kiếm hiệp</a>
                                                                                            <a href="/the-loai/xuyen-khong-37.html" title="Thể loại Xuyên không">Xuyên không</a>
                                                                                            <a href="/the-loai/trung-sinh-38.html" title="Thể loại Trùng sinh">Trùng sinh</a>
                                                                                            <a href="/the-loai/huyen-ao-39.html" title="Thể loại Huyền ảo">Huyền ảo</a>
                                                                                            <a href="/the-loai/cna-ngon-tinh-40.html" title="Thể loại [CNA] Ngôn tình">[CNA] Ngôn tình</a>
                                                                                            <a href="/the-loai/di-gioi-41.html" title="Thể loại Dị giới">Dị giới</a>
                                                                                            <a href="/the-loai/cna-hai-huoc-42.html" title="Thể loại [CNA] Hài hước">[CNA] Hài hước</a>
                                                                                            <a href="/the-loai/dam-my-43.html" title="Thể loại Đam mỹ">Đam mỹ</a>
                                                                                            <a href="/the-loai/vo-hiep-44.html" title="Thể loại Võ hiệp">Võ hiệp</a>
                                                                                            <a href="/the-loai/ecchi-45.html" title="Thể loại Ecchi">Ecchi</a>
                                                                                            <a href="/the-loai/demon-46.html" title="Thể loại Demon">Demon</a>
                                                                                            <a href="/the-loai/live-action-47.html" title="Thể loại Live Action">Live Action</a>
                                                                                            <a href="/the-loai/thriller-48.html" title="Thể loại Thriller">Thriller</a>
                                                                                            <a href="/the-loai/khoa-huyen-49.html" title="Thể loại Khoa huyễn">Khoa huyễn</a>
                                                    </div>
                    </div>
                    <div id="tab-years" class="item-tab-content">
                        <div class="flex flex-wrap">
                                                                                        <a href="/loc-phim/W1tdLFsyMDIzXSxbXSxbXV0=">2023</a>
                                                            <a href="/loc-phim/W1tdLFsyMDIyXSxbXSxbXV0=">2022</a>
                                                            <a href="/loc-phim/W1tdLFsyMDIxXSxbXSxbXV0=">2021</a>
                                                            <a href="/loc-phim/W1tdLFsyMDIwXSxbXSxbXV0=">2020</a>
                                                            <a href="/loc-phim/W1tdLFsyMDE5XSxbXSxbXV0=">2019</a>
                                                            <a href="/loc-phim/W1tdLFsyMDE4XSxbXSxbXV0=">2018</a>
                                                            <a href="/loc-phim/W1tdLFsyMDE3XSxbXSxbXV0=">2017</a>
                                                            <a href="/loc-phim/W1tdLFsyMDE2XSxbXSxbXV0=">2016</a>
                                                        <a href="/loc-phim/W1tdLFsxMTExXSxbXSxbXV0=">Trước 2014</a>
                        </div>
                    </div>
                </div>

            </div>
                        <div id="drop-down-3" class="dropdown-menu bg-black flex-column">
                <div class="fw-500 margin-10 flex flex-hozi-center">
                    <div class="flex-1 fs-19">Thông Báo</div>
                    <div>
                        <a href="/thong-bao">Xem tất cả</a>
                    </div>
                </div>
                <div id="list-item-notification" class="scroll-bar"></div>
            </div>
        </div>
