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
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="###" />
    <meta property="og:locale" content="vi_VN" />
<meta name="robots" content="index, follow, noodp">
<link href="//cdn.jsdelivr.net/gh/hh-api/animehay@main/includes/styles.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/hh-api/animehay@main/includes/fun.js"></script>
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
    category</span>Thể Loại</a>
<a href="#" class="item-tab-link" bind="tab-years"><span class="material-icons-round margin-0-5">
    auto_awesome</span>Năm</a>
<a href="#" class="item-tab-link"><span class="material-icons-round margin-0-5">
    filter_alt</span>Lọc phim</a>
                </div>
                <div class="tab-content">
<div id="tab-cate" class="item-tab-content display-block">
<div class="flex flex-wrap">
<a href="/index.php?type=Tu Tiên" title="Thể Loại Tu Tiên">Tu Tiên</a>
<a href="/index.php?type=Luyện Cấp" title="Thể Loại Luyện Cấp">Luyện Cấp</a>
<a href="/index.php?type=Trùng Sinh" title="Thể Loại Trùng Sinh">Trùng Sinh</a>	
<a href="/index.php?type=Viễn Tưởng" title="Thể Loại Viễn Tưởng">Viễn Tưởng</a>
<a href="/index.php?type=Hành Động" title="Thể Loại Hành Động">Hành Động</a>
<a href="/index.php?type=Cổ Trang" title="Thể Loại Cổ Trang">Cổ Trang</a>
<a href="/index.php?type=Thần Thoại" title="Thể Loại Thần Thoại">Thần Thoại</a>
<a href="/index.php?type=Dị Giới" title="Thể Loại Dị Giới">Dị Giới</a>
<a href="/index.php?type=Tình Yêu" title="Thể Loại Tình Yêu">Tình Yêu</a>
<a href="/index.php?type=Âm Nhạc" title="Thể Loại Âm Nhạc">Âm Nhạc</a>	
</div>
</div>

<div id="tab-years" class="item-tab-content">
<div class="flex flex-wrap">
<a href="/index.php?type=2023">2023</a>
<a href="/index.php?type=2022">2022</a>
<a href="/index.php?type=2021">2021</a>
<a href="/index.php?type=2020">2020</a>
<a href="/index.php?type=2019">2019</a>
<a href="/index.php?type=2018">2018</a>
<a href="/index.php?type=2017">2017</a>
<a href="/index.php?type=2016">2016</a>
<a href="/index.php?type=2015">2015</a>
<a href="/index.php?type=2014">2014</a>
<a href="/index.php?type=2013">2013</a>
<a href="/index.php?type=2012">2012</a>
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
        <script>
            var live_search = new liveSearch;
            live_search.action();
            var isLoadNoti = false;

            function clickEventDropDown(this_dropdown, icon_default = "Null") {
                var _name = this_dropdown.getAttribute("bind");
                var _dropdown_menu = document.getElementById(_name);
                if (!_dropdown_menu.style.display || _dropdown_menu.style.display === "none") {
                    this_dropdown.innerHTML = `<span class="material-icons-round">highlight_off</span>`;
                    if (icon_default !== "expand_more") {
                        this_dropdown.style.backgroundColor = "#ab3e3e";
                    }
                    _dropdown_menu.style.display = "flex";
                    setTimeout(function() {
                        _dropdown_menu.style.transform = "scale(1)";
                    }, 50)
                } else {
                    _dropdown_menu.style = null;
                    this_dropdown.style = null;
                    this_dropdown.innerHTML = `<span class="material-icons-round">${icon_default}</span>`;
                }
            }
    </script>
