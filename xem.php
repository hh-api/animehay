<?php
include 'includes/header.php';
header('Cache-Control: max-age=300');
$slug = $_GET['phim'];
$tap = $_GET['tap'];
$movie = './movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';
$list_tm = './list-tm/'.$slug.'.php';
if (file_exists($movie)) {
include $movie;
if (time() > ($time + 600)) {
$html = file_get_contents('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
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
$html = file_get_contents('https://api-hh.blogspot.com/2023/04/'.$slug.'.html');
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

<?php

if (file_exists($list_tm)) {
$list0 = file_get_contents($list_tm);
$get_auto = explode('<br/>', explode($tap.'|', $list0)['1'])['0'];
$tm1 = explode('+++', $get_auto)['0'];
$tm2 = explode('+++', $get_auto)['1'];
$tm3 = explode('+++', $get_auto)['2'];
} 
if (file_exists($list)) { 
$list0 = file_get_contents($list);
$get_auto = explode('<br/>', explode($tap.'|', $list0)['1'])['0'];
$vs1 = explode('+++', $get_auto)['0'];
$vs2 = explode('+++', $get_auto)['1'];
$vs3 = explode('+++', $get_auto)['2'];
}   

?>

<title>Xem <?php echo $tenphim;?> - Tập <?php echo $tap;?></title>
<meta name="description" content="Xem <?php echo $tenphim;?> - Tập <?php echo $tap;?>" />
<link rel="canonical" href="###" />
<meta property="og:title" content="Xem <?php echo $tenphim;?> - Tập <?php echo $tap;?>" />
<meta property="og:description" content="Xem <?php echo $tenphim;?> - Tập <?php echo $tap;?>" />
<meta property="og:url" content="###" />
<meta property="og:image" content="<?php echo $thumb;?>" />
  

<div class="ah_content">
<div class="watching-movie">


    <div id="settings-while-watching" class="display-none">

        </div>
        <div class="ah-frame-bg fw-700 margin-10-0 bg-black">
            <a href="/<?php echo $slug;?>.html" class="fs-16 flex flex-hozi-center color-yellow border-style-1"><span class="material-icons-round margin-0-5">movie</span><?php echo $tenphim;?> - Tập <?php echo $tap;?></a>
</div>

    <div id="list_sv" class="flex flex-ver-center margin-10">
<?php if ($tm1) { ?>
<button class="yellow" onclick="document.getElementById('zuighe').src = '<?php echo $tm1; ?>'">VIPTM</button>
<?php } ?>

<?php if ($tm2) { ?>
<button class="green" onclick="document.getElementById('zuighe').src = '<?php echo $tm2; ?>'">SS-TM</button>
<?php } ?>

<?php if ($tm3) { ?>
<button class="green" onclick="document.getElementById('zuighe').src = '<?php echo $tm3; ?>'">ZO-TM</button>
<?php } ?> 

<?php if ($vs1) { ?>
<button class="<?php if ($tm1) { echo 'green'; } else { echo 'yellow'; }?>" onclick="document.getElementById('zuighe').src = '<?php echo $vs1; ?>'">VIPVS</button>
<?php } ?>

<?php if ($vs2) { ?>
<button class="green" onclick="document.getElementById('zuighe').src = '<?php echo $vs2; ?>'">SS-VS</button>
<?php } ?>

<?php if ($vs3) { ?>
<button class="green" onclick="document.getElementById('zuighe').src = '<?php echo $vs3; ?>'">ZO-VS</button>
<?php } ?>        
    </div>
<style>
.green{
    background-color: #3a79af;
    color:white;
    padding: 5px;
    border-radius: 3px;
    border: none;
    font-size: 15px;
    margin-left: 5px;
}
.yellow {
    background-color: #b73a3a;
    color:white;
    padding: 5px;
    border-radius: 3px;
    border: none;
    font-size: 15px;
    margin-left: 5px;
}
</style>
<script type="text/javascript">
function go(loc) {
    document.getElementById('zuighe').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('green');
  buttons.not(this).removeClass('yellow');
  $(this).addClass('yellow');
});
</script>            
    <div id="video-player">
<iframe id="zuighe" width="100%" height="450px" src="<?php if ($tm1) { echo $tm1; } else { echo $vs1; } ?>" frameborder="0" scrolling="0" allowfullscreen></iframe>        
    </div>
    
<div class="flex flex-ver-center margin-10">

<a href="<?php if ($tap > 1) { echo '/'.($tap-1).'/'.$slug.'.html'; } else { echo '#'; } ?>" class="button-default padding-10-20 flex flex-hozi-center fw-700" style="background-color: #3a79af;"><< Trước</a>
<a href="#" class="button-default padding-10-20 flex flex-hozi-center fw-700" style="background-color: #b73a3a;">Đang Xem - Tập <?php echo $tap; ?></a>
<a href="<?php if ($tap > 0 ) { echo '/'.($tap+1).'/'.$slug.'.html'; } else { echo '#'; } ?>" class="button-default padding-10-20 flex flex-hozi-center fw-700" style="background-color: #25867d;">Sau >></a>

</div>
    
    
                <div class="ah-frame-bg">
            <div class="heading flex flex-hozi-center fw-700 color-red-2">
                <span class="material-icons-round margin-0-5">
    note
</span>Nội Dung
            </div>
            <div><?php echo $noidung; ?></div>
        </div>
        <div class="list_episode ah-frame-bg" id="list-episode">
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
<a href="<?php echo '/'.$get_tap.'/'.$slug; ?>.html" title="Tập <?php echo $get_tap; ?>" <?php if ($get_tap == $tap) echo 'active'; ?> ><span><?php echo $get_tap; ?></span></a>
<?php }} ?>
                    </div>
    </div>
<script>
$(document).ready(function(){
    $(this).scrollTop(130);
});
</script>    
<?php
include 'includes/footer.php';
?>
