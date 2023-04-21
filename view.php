<?php
include 'includes/header.php';
header('Cache-Control: max-age=500');
$slug = $_GET['phim'];
$movie = './movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';
$list_tm = './list-tm/'.$slug.'.php';
if (file_exists($movie)) {
include $movie;
if (time() > ($time + 600)) {
$html = curl('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
$info = explode('</div>', explode('<div class="home">', $html)['1'])['0'];
$thumb = explode('"', explode('src="', $info)['1'])['0'];
$noidung = explode('</td>', explode('max-width:1px;">', $info)['1'])['0'];
$phim = explode("<td>", $info);
$tenphim = explode("</td>", $phim['2'])['0'];
$tengoc = explode("</td>", $phim['3'])['0'];
$stt = explode("</td>", $phim['4'])['0'];
$nam = explode("</td>", $phim['5'])['0'];
$hd = explode("</td>", $phim['6'])['0'];
$quocgia = explode("</td>", $phim['7'])['0'];

$nd = '<?php $time="'.time().'"; $tenphim="'.$tenphim.'"; $tengoc="'.$tengoc.'"; $noidung="'.$noidung.'"; $quocgia="'.$quocgia.'"; $stt="'.$stt.'"; $nam="'.$nam.'"; $hd="'.$hd.'"; $thumb="'.$thumb.'"; ?>';
$myfile = fopen($movie, "w");
fwrite($myfile, $nd);
fclose($myfile);
include $movie;

$list0 = explode('</div>', explode('<div class="list">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list, "w");
fwrite($myfile1, $list0);
fclose($myfile1);  

if (strpos($html, 'div class="list-tm"') == true) {
$list0 = explode('</div>', explode('<div class="list-tm">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list_tm, "w");
fwrite($myfile1, $list0);
fclose($myfile1);    
}    

}

} else {
$html = curl('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
$info = explode('</div>', explode('<div class="home">', $html)['1'])['0'];
$thumb = explode('"', explode('src="', $info)['1'])['0'];
$noidung = explode('</td>', explode('max-width:1px;">', $info)['1'])['0'];
$phim = explode("<td>", $info);
$tenphim = explode("</td>", $phim['2'])['0'];
$tengoc = explode("</td>", $phim['3'])['0'];
$stt = explode("</td>", $phim['4'])['0'];
$nam = explode("</td>", $phim['5'])['0'];
$hd = explode("</td>", $phim['6'])['0'];
$quocgia = explode("</td>", $phim['7'])['0'];

$nd = '<?php $time="'.time().'"; $tenphim="'.$tenphim.'"; $tengoc="'.$tengoc.'"; $noidung="'.$noidung.'"; $quocgia="'.$quocgia.'"; $stt="'.$stt.'"; $nam="'.$nam.'"; $hd="'.$hd.'"; $thumb="'.$thumb.'"; ?>';
$myfile = fopen($movie, "w");
fwrite($myfile, $nd);
fclose($myfile);
include $movie;

$list0 = explode('</div>', explode('<div class="list">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list, "w");
fwrite($myfile1, $list0);
fclose($myfile1);

if (strpos($html, 'div class="list-tm"') == true) {
$list0 = explode('</div>', explode('<div class="list-tm">', $html)['1'])['0'];
$list0 = preg_replace('/\R+/', "\n", trim($list0));
$myfile1 = fopen($list_tm, "w");
fwrite($myfile1, $list0);
fclose($myfile1);    
}

}
?>

<title><?php echo $tenphim;?> - <?php echo $tengoc;?></title>
<meta name="description" content="<?php echo $tenphim;?> - <?php echo $tengoc;?>" />
<link rel="canonical" href="###" />
<meta property="og:title" content="<?php echo $tenphim;?> - <?php echo $tengoc;?>" />
<meta property="og:description" content="<?php echo $tenphim;?> - <?php echo $tengoc;?>" />
<meta property="og:url" content="###" />
<meta property="og:image" content="<?php echo $thumb;?>" />
  

<div class="ah_content">
<div class="info-movie">

    <h1 class="heading_movie"><font color="yellow"><?php echo $tenphim; ?></font></h1>
    <div class="head ah-frame-bg">
        <div class="first">
            <img src="<?php echo $thumb; ?>" alt="<?php echo $tenphim; ?>" />
        </div>
        <div class="last">
                            <div class="name_other">
                    <div>Tên Khác</div>
                    <div><?php echo $tengoc; ?></div>
                </div>
            <div class="status">
                <div>Trạng Thái</div>
                <div>Tập <?php echo $stt; ?></div>
            </div>    
            <div class="list_cate">
                <div>Thể Loại</div>
                <div>Updating</div>
            </div>
            <div class="score">
                <div>Điểm</div>
                <div>
                    9.1 || 1906 đánh giá                </div>
            </div>
            <div class="update_time">
                <div>Phát Hành</div>
                <div><?php echo $nam; ?></div>
            </div>
            <div class="duration">
                <div>Lượt Xem</div>
                <div><?php $view = './view/'.$slug.'.php'; echo $view1 = file_get_contents($view) + mt_rand(1, 9); $myfile2 = fopen($view, "w"); fwrite($myfile2, $view1); fclose($myfile2); ?></div>
            </div>
        </div>
    </div>
    <div class="flex ah-frame-bg flex-wrap">
        <div class="flex flex-wrap flex-1">
<?php
$list0 = file_get_contents($list);
$first = explode('|', $list0)['0'];
?>            
            <a href="<?php echo '/'.$first.'/'.$slug; ?>.html" class="padding-5-15 fs-35 button-default fw-500 fs-15 flex flex-hozi-center bg-lochinvar" title="Xem Ngay"><span class="material-icons-round">play_circle_outline</span></a>
            <a href="javascript:void(0)" id="toggle_follow" class="bg-green padding-5-15 fs-35 button-default fw-500 fs-15 flex flex-hozi-center" title="Theo dõi phim này"><span class="material-icons-round">bookmark_add</span></a>
        </div>
    </div>

        <div class="body">
        <div class="list_episode ah-frame-bg">
            <div class="heading flex flex-space-auto fw-700">
                <span>Danh Sách Tập</span>
                <span id="newest-ep-is-readed" class="fs-13"></span>
            </div>
            <div class="list-item-episode scroll-bar">
<?php
$list1 = preg_replace('~\\R~u', "\n", $list0);
$list1 = explode("\n", $list1);
foreach ($list1 as $list1) {
if (strpos($list1, '|') == true) {    
$get_tap = explode("|", $list1)['0'];    
?>                
<a href="<?php echo '/'.$get_tap.'/'.$slug; ?>.html" title="Tập <?php echo $get_tap; ?>"><span><?php echo $get_tap; ?></span></a>
<?php } } ?>
            </div>
        </div>
        <div class="desc ah-frame-bg">
            <div>
                <h2 class="heading">
                    Nội Dung
                </h2>
            </div>
            <?php echo $noidung; ?>
        </div>
    </div>


</div>


<script>
localStorage.setItem('<td><a href="/<?php echo $slug; ?>.html"><img width="20px" src="<?php echo $thumb; ?>"/></a></td><td><a href="/<?php echo $slug; ?>.html"><?php echo $tenphim; ?><br/><?php echo $tengoc; ?></a></td>', '<?php echo date("l jS F Y h:i:s A"); ?>');  
</script>
<?php
include 'includes/footer.php';
?>
