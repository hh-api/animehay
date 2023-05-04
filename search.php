<?php
include 'includes/header.php';
header('Cache-Control: max-age=600');
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
<table width='100%'><tr>
  <td width='14%'><a href='/index.php?type=T2'><button style='width:100%; color:white; padding: 10px 5px; background: #c31432;background: -webkit-linear-gradient(to right, #c31432, #240b36);background: linear-gradient(to right, #c31432, #240b36);'><b>T2</b></button></a></td>
  <td width='14%'><a href='/index.php?type=T3'><button style='width:100%; color:white; padding: 10px 5px; background: #009fff; background: -webkit-linear-gradient(to right, #009fff, #ec2f4b);background: linear-gradient(to right, #009fff, #ec2f4b);'><b>T3</b></button></a></td>
  <td width='14%'><a href='/index.php?type=T4'><button style='width:100%; color:white; padding: 10px 5px; background: #cc5333; background: -webkit-linear-gradient(to right, #cc5333, #23074d); background: linear-gradient(to right, #cc5333, #23074d);'><b>T4</b></button></a></td>
  <td width='14%'><a href='/index.php?type=T5'><button style='width:100%; color:white; padding: 10px 5px; background: #000000; background: -webkit-linear-gradient(to left, #000000, #0f9b0f); background: linear-gradient(to left, #000000, #0f9b0f);'><b>T5</b></button></a></td>
  <td width='14%'><a href='/index.php?type=T6'><button style='width:100%; color:white; padding: 10px 5px; background: #00bf8f; background: -webkit-linear-gradient(to right, #00bf8f, #001510); background: linear-gradient(to right, #00bf8f, #001510);'><b>T6</b></button></a></td>
  <td width='14%'><a href='/index.php?type=T7'><button style='width:100%; color:white; padding: 10px 5px;background: #eb5757; background: -webkit-linear-gradient(to right, #eb5757, #000000); background: linear-gradient(to right, #eb5757, #000000);'><b>T7</b></button></a></td>
  <td width='14%'><a href='/index.php?type=CN'><button style='width:100%; color:white; padding: 10px 5px;background: #03001e; background: -webkit-linear-gradient(to left, #03001e, #7303c0, #ec38bc, #fdeff9); background: linear-gradient(to left, #03001e, #7303c0, #ec38bc, #fdeff9);'><b>CN</b></button></a></td></tr></table>
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
<?php $html = curl('https://api-hh.blogspot.com/search?q='.$s1);
$all_links = explode('<div class="home">', $html);
foreach ($all_links as $all_links) {
if (strpos($all_links, '<div class="list">') == true) {  
$slug = explode(".html", explode("window.location='/2023/04/", $all_links)['1'])['0'];
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
                <div style="position: absolute;padding: 5px;background-color: green;right: 5px; top 0px;"><?php echo $hd; ?></div>
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
