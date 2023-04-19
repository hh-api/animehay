<?php
include 'includes/header.php';
header('Cache-Control: max-age=300');
$s = $_GET['s'];
$s1 = str_replace(' ', '+', $s);
?>
<title><?php echo $slogan;?></title>
<meta name="description" content="<?php echo $description;?>" />
<link rel="canonical" href="###" />
<meta property="og:title" content="<?php echo $slogan;?>" />
<meta property="og:description" content="<?php echo $description;?>" />
<meta property="og:url" content="###" />
<meta property="og:image" content="https://media.discordapp.net/attachments/924155580124385280/1072038465899859999/zuighe4.png" />
    
<div class="ah_content">

<div class="margin-10-0 bg-gray-2 flex flex-space-auto">
    <div class="fs-17 fw-700 padding-0-20 color-gray inline-flex height-40 flex-hozi-center bg-black border-l-t">
        Mới cập nhật
    </div>
    <div class="margin-r-5 fw-500">
        <a href="/index.php?type=NB" class="bg-red padding-5-10 border-default">Nhật Bản</a>
        <a href="/index.php?type=TQ" class="bg-blue padding-5-10 border-default">Trung Quốc</a>
    </div>
</div>
<div class="movies-list ah-frame-bg">
<?php $html = file_get_contents('https://api-hh.blogspot.com/search?q='.$s1);
$all_links = explode('<div class="home">', $html);
foreach ($all_links as $all_links) {
if (strpos($all_links, '<div class="list">') == true) {  
$url = explode("'", explode("window.location='/", $all_links)['1'])['0'];
$slug = explode('/', $url)['2'];
$thumb = explode('"', explode('src="', $all_links)['1'])['0'];
$phim = explode("<td>", $all_links);
$tenphim = explode("</td>", $phim['2'])['0'];
$tengoc = explode("</td>", $phim['3'])['0'];
$stt = explode("</td>", $phim['4'])['0'];
$nam = explode("</td>", $phim['5'])['0'];
$hd = explode("</td>", $phim['6'])['0'];
$quocgia = explode("</td>", $phim['7'])['0'];
?>    
        <div class="movie-item" id="movie-id-3755">
            <a href="/<?php echo $slug;?>.html" title="<?php echo $tenphim;?> - <?php echo $tengoc;?>">
                <div class="episode-latest"> <span>Tập <?php echo $stt;?></span></div>
                <div>
                    <img src="<?php echo $thumb;?>" alt="<?php echo $tenphim;?> - <?php echo $tengoc;?>" />
                </div>
                <div class="score"><?php $view = './view/'.$slug.'.php'; echo number_format(file_get_contents($view), 0, '', '.'); ?></div>
                <div class="name-movie"><?php echo $tenphim;?></div>
            </a>
        </div>
<?php } } ?>            
</div>

<div class="pagination">
<a href="/index.php">Đầu</a>
<a href="/index.php?page=<?php if ($page > 1) { echo $page - 1; } else { echo '1'; }?>">Trước</a>
<a href="#"  class="active_page"><?php if ($page > 1) { echo $page; } else { echo '1'; }?></a>
<a href="/index.php?page=<?php if ($page > 1) { echo $page + 1; } else { echo '2'; }?>">Sau</a>
</div>
            
<?php
include 'includes/footer.php';
?>
