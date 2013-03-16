﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include('php/version.php');

	SESSION_START();
	include('php/seguridad.php');
	include('php/conexion.php');

	if(isset($_REQUEST['seccion'])){		
		$sql = 'SELECT `nombre`, `desp`,`imaurl` FROM `secciones` WHERE `id`='.$_REQUEST['seccion'].' LIMIT 0, 30';
	
		include('php/consultar.php');

		if($row = @mysql_fetch_assoc($result)) {
			$nombre = $row['nombre'];
			$desp = $row['desp'];
			$imaurl = $row['imaurl'];
			mysql_free_result($result);
		}
	}
?>
<!-- Meta-Information -->

<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">

<title>Muebles Troncoso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="ico/dde.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">

<link rel="stylesheet" type="text/css" href="css/glide.css" media="screen">	
<link rel="stylesheet" type="text/css" href="css/skinned_profile.css">

<style type="text/css">
.category-item {
font-weight: bold;
padding-bottom: 6px;
vertical-align: middle;
}
.category-item:last-child {
padding-bottom: 0px;
}
.search-item, .category-item {
list-style-type: none;
/*padding-right: 3px;*/
overflow-x: hidden;
}
.search-item {
height: 28px;
}
.search-item .item-link {
color: #333333;
text-transform: none;
font-weight: normal;
}
.selected-item {
background: #3996cc;
}
.highlighted-result {
color: #3996cc;
font-weight: bold;
}
.selected-item .item-link {
color: #cccccc;
}
.selected-item .highlighted-result {
color: white;
}
.item-image {
margin: 2px 3px 2px 2px;
height: 24px;
height: 24px;
width: 24px;
vertical-align: middle;
}
.autocomplete-result-list {
padding: 3px;
background: white;
border: 1px solid black;
position: absolute;
z-index: 10000;
zoom: 1;
width: auto;
overflow-x: hidden;
overflow-y: visible;
white-space: nowrap;
}
</style>


<style type="text/css">
#user-details { border: none; } 
#headerNameBg {  background-image: url(jpg/noJyYJ928932-03.jpg); } 
#headerName {  color: #e70c68; } #profile-nav {  background-image: url(jpg/5eRF2L024527-03.jpg); } 
#profile-nav a {  color: #ffffff; } .section h4 {  font-family: Arial; color: #ffffff; } div#PageContentContainer {  background-image: url(jpg/bG6bbT255854-03.jpg); background-repeat: repeat; background-position: top center; background-attachment: scroll; background-repeat: repeat-y; } 
#user-details .content {  background-image: url(jpg/I1cQWR763841-03.jpg); background-position: top; } #user-details { border: none;  } 
#user-details .footer {  background-image: url(jpg/AT47Ay999863-03.jpg); display: block; height: 27px; } .section a, .section a:hover, .section a:visited {  color: #e70c68; } .section h1 {  line-height: 30px; padding: 0 7px; background-image: url(jpg/8zMjLN417937-03.jpg); border:none; color: #e70c68; font-family: Arial; font-size: 14px; font-style: Arial; height: 30px;; } .section h2 {  background-image: url(jpg/8H0gD6851072-03.jpg); } .section h2 a, .section h2 a:hover, .section h2 a:visited {  color: #ffffff; } .section .content {  background-image: url(jpg/Kx0It6726520-03.jpg); background-position: top; color: #ffffff;; } .section .footer {  background-image: url(jpg/WLpY7o584547-03.jpg); display: block; height: 10px; }
#headerName {font-size:21px;margin-left: 20px;padding-top:4px;z-index:100;}
#headerNameBg {             width:956px;height:35px;margin-bottom:5px;z-index:99;}
</style>


</head><body>

<div id="PageLeader" class="pageContent">
<div id="PageLeaderAd">
<div class="pageLeaderAd"><img src="gif/3086428.gif" width="730" height="90"></div>
</div>
</div>

<div id="PageHeaderContainer">
<div id="PageHeader" class="pageContent">

<ul id="PageHeader-GlobalNav" class="inline-plain">

<li class="first logo"><a href="inicio.php"><img src="jpg/especial_2.jpg" width="80" height="50"></a></li>
<?php
if ($_SESSION['priv']==0){
?>
<li class="selected"><a href="#">Catalogo</a>
<div class="sectionNav">
<ul class="sectionNav">
<li class="first"><a href="productos.php?seccion=1">Comedores</a></li>
<li class=""><a href="productos.php?seccion=2">Salas</a></li>
<li><a href="productos.php?seccion=3">Alcobas</a></li>
<li><a href="productos.php?seccion=4">Sillones</a></li>
<li><a href="productos.php?seccion=5">independientes</a></li>
</ul>
</div>
</li>
<?php
}
?>
<?php
if ($_SESSION['priv']==1){
?>
<li class="selected"><a href=" ">Clientes</a>
<div class="sectionNav">
<ul class="sectionNav">
<li class="first"><a href=" ">Agregar</a></li>
<li><a href=" ">Buscar</a></li>
<li><a href=" ">Editar</a></li>
<li><a href=" ">Eliminar</a></li>
</ul>
</div>
</li>
<li><a href=" ">Productos</a>
<div class="sectionNav">
<ul class="sectionNav">
<li class="first"><a href=" ">Agregar</a></li>
<li><a href=" ">Buscar</a></li>
<li><a href=" ">Editar</a></li>
<li><a href=" ">Eliminar</a></li>
</ul>
</div>
</li>
<?php
}
?>
</ul>
<div id="PageHeader-UserInfo"><a href="javascript:void(0);" id="PageHeader-Avatar"><img src="
<?php
	$sql='SELECT `imaurl` FROM `usuarios` WHERE `user`='.$_SESSION['user'].' LIMIT 0, 30';
	
	include('php/consultar.php');

	if($row = @mysql_fetch_assoc($result)) {
		echo $row["imaurl"];
		mysql_free_result($result);
	}
?>
" title="<?php echo $_SESSION['nom']; ?>" alt="<?php echo $_SESSION['nom']; ?>" style="height: 86px; width: 76px;"></a>
  <ul class="user-nav-top">
<li class="full-name"><?php echo $_SESSION['nom']; ?></li>
</ul>
<ul class="inline user-nav-bottom">
<li class="first"><a href="
<?php
if ($_SESSION['priv']==0){
?>
compras.php">cuenta
<?php
}
if ($_SESSION['priv']==1){
?>
inicio.php">cuenta
<?php
}
?>
</a></li>
<li><a href="php/salir.php">Salir</a></li>
</ul>
</div>
</div>
</div>
<div id="PageContentContainer">
<div id="PageContent" class="pageContent">
<a id="PageContentAnchor" name="PageContentAnchor"><span style="display: none;">&nbsp;</span></a>
<div id="headerNameBg">
<div id="headerName">
<?php
	echo $nombre;
?>
</div>
</div>


<div id="p_center" class="bg_content">
<table valign="top" width="100%" cellpadding="0px" cellspacing="0px">
<tbody><tr>
<td colspan="2" valign="top">
<table valign="top" width="100%" cellpadding="0px" cellspacing="0px">
<tbody><tr>
<td>
<div class="section" id="user-details">

<style type="text/css">

.box_profile_info_small_heading_empty {color:#9d9d9d !important;font-size:17px !important;}
#topic-edit-link {color:#9d9d9d;font-size:11px !important;}
#topic-edit-link:hover {color:#0e5fb3;}
#xabout-center {position:relative;overflow:visible;}
.section h4 {color:#007cd3 !important; font-size:14px !important;font-weight: bold !important;}
#todays-topic {z-index:9;background:url('png/status_box_485x115_inactive.png') no-repeat top left;position:absolute;top:4px;left:-36px;width:485px;height:90px; padding:10px 10px 0px 20px;}
#todays-topic:hover {background:url('png/status_box_485x115_active.png') no-repeat top left;}
.setHomeBox {width: 366px;background-color:#fff;}
#dialog-overlay.setHomeBox{background-color:#fff;width:366px;xheight:375px;margin-left: -183px;padding:0;}
#iframe-overlay.setHomeBox {margin-left: -183px;}
#dialog-overlay.setHomeBox #dialog-buttons {display:none;}
#dialog-overlay.setHomeBox #dialog-border {background:none; padding: 0;border:1px solid #999; }
#dialog-overlay.setHomeBox #dialog-body {padding:0px; }
#dialog-overlay.setHomeBox #dialog-title {display:none;}
#dialog-overlay {color:black;}
#dialog-overlay a {color:#085098;}
.about-column { float: none !important; padding: 8px; }
#about-left { float: none !important; width: 176px; overflow: hidden;padding-right:0px;}
#about-center {	float: none !important; width: 420px; overflow: visible;}
#about-right { float: none !important; width: 314px; overflow: visible;}
#user-links a img { height: 20px; margin-right:5px; }
.hotmod_body {width:428px; margin:0px;display:inline;float:left;background:#84B3F7 url('jpg/games_hp_bkgd_my_1x500.jpg') repeat top}
.hot1,.hot2,.hot3,.hot4 {border-left:1px solid #3996cc;border-right:1px solid #3996cc;background:#84B3F7 url('jpg/games_hp_bkgd_my_1x500.jpg') repeat top}
b.hot1 {margin: 0 5px}
b.hot2 {margin: 0 3px}
b.hot3 {margin: 0 2px}
b.hot4 {margin: 0 1px; height: 2px;}
b .hottop {display:block;width:428px;}
b.hottop b {display:block; height:1px; overflow: hidden;}
.sugmod_body {width:415px; margin:0px;display:inline;float:left;background:#84B3F7 url('jpg/games_hp_bkgd_my_1x500.jpg') repeat top}
.gamesmod .sug1,.gamesmod .sug2,.gamesmod .sug3,.gamesmod .sug4 {border-left:1px solid #3996cc;border-right:1px solid #3996cc;background:#84B3F7 url('jpg/games_hp_bkgd_hot_1x500.jpg') repeat 1px 300px}
.gamesmod b.sug1 {margin: 0 6px;border-left:416px solid #3996cc}
.gamesmod b.sug2 {margin: 0 3px;border-left:3px solid #3996cc;border-right:3px solid #3996cc}
.gamesmod b.sug3 {margin: 0 2px}
.gamesmod b.sug4 {margin: 0 1px; height: 2px;}
.gamesmodb.sugbottom {float:left;display:block;width:428px;}
.gamesmod b.sugbottom b {display:block; height:1px; overflow: hidden;}
.hotcont {zoom:1;height:65px}
.gamesmod {width:418px;height:257px}
.mygames {width:419px;overflow:hidden;height:100px;background:#84B3F7 url('jpg/games_hp_bkgd_hot_1x500.jpg') repeat scroll top;}
.suggestedgames {z-index:-5}
.suggestedgames .cont {height:130px;margin-top:5px}
#gameslist {padding-left:10px;overflow:hidden;zoom:1;}
.suggestedgamesmod_body {background-repeat: repeat-x;width:418px; margin:0px;display:inline;float:left;background:#84B3F7 url(jpg/games_hp_bkgd_hot_1x500.jpg) center 450px}
#recentlyplayed,#mostplayed {padding-left:7px;overflow:hidden;zoom:1;margin-top:5px}
.recentGame {width:80px;height:55px;float:left;margin-right:3px}
.suggestedGame {width:77px;height:130px;float:left;margin-right:9px;text-align:center;overflow:hidden}
.reflection  {height:25px;width:77px;overflow:hidden;margin-top:1px}
#recentfilter {z-index:5;margin-left:10px;float:left;}
#suggestedFilter {z-index:5;margin-left:10px;float:left;}
.mygames .tab {border-left:none;border-right:none;text-transform:uppercase;padding:2px 7px;background:#84B3F7 url('jpg/games_hp_bkgd_my_1x500.jpg') repeat fixed top;border-top:0px;color:#ffffff}
.suggestedgames .tab {border-left:none;border-right:none;text-transform:uppercase;padding:2px 7px;background:#FF3336;border-top:0px;color:#ffffff}
form.inplaceeditor-form input[type="text"] { /* Input box */
font-size: 16px;
font-family: tahoma, sans-serif;
width: 97%;
height: 97%;
}
form.inplaceeditor-form input[type="submit"] {
padding: 1px 7px;
_padding: 1px;
width: auto;
overflow: visible;
margin: 2px 0 0 2px;
}
form.inplaceeditor-form a {
text-transform: lowercase;
margin-left: 4px;
}
#topic {
font-size: 12px;
margin: 0;
padding: 0px;
background-color: #fff;
color: #666666 !important;
}
.cite, .cite a {
font-size:11px;
color:#9d9d9d;
}
#topic-noedit a:link, .cite a:link, #input-bubble a:link {
color: #3996cc !important;
text-decoration: none !important;
}
#topic-noedit a:visited, .cite a:visited, #input-bubble a:visited {
color: #3996cc !important;
text-decoration: none !important;
}
#topic-noedit a:hover, .cite a:hover, #input-bubble a:hover {
color: #ff9900 !important;
text-decoration: none !important;
}
#topic-noedit {
margin: 0;
padding: 5px 0 10px 0;
font-size:.85em;
background-color: transparent;
color: #666666 !important;
}
#topic-noedit a {
font-size: 16px;
background-color: transparent;
}
#topic {
cursor: pointer;
}
/* Input Bubble */
div.input-bubble {
width: 448px;
height: 97%;
border: 0px solid #085098;
}
div.input-bubble-noedit {
width: 455px;
height: 50px;
xborder-bottom: 1px solid #ccc;
}
#otherUserInfo div.input-bubble-noedit{
width:430px;
height: 36px;
overflow:hidden;
}
div.input-bubble blockquote {
margin: 0px;
padding: 0px;
}
div.input-bubble blockquote p {
margin: 10px;
padding: 0px;
}
#input-bubble-cite {
position: relative;
margin:0;
top:-6px;
padding: 5px 0 0 0;
font-style: normal;
font-size: 11px !important;
color:#9d9d9d;
}
/*Avatar Promo Styles*/
div.avatarPromoContent{
z-index:8;
position:absolute;
top:85px;
}
div.avPromo span.promoImage{z-index:4;width:447px;height:274px;position:absolute;top:0px;left:0px;}
div.avPromo p{
width=146px;
color:#333;
font-size:15px;
padding-bottom:45px;
background: url('png/av_blue_line.png')  66px bottom no-repeat;
margin:0px 0px 5px 270px;
}
div.avPromo span.promoHeading{
z-index:8;
position:absolute;
top:32px;
left:82px;
color:#333;
font-size:21px;
line-height:1;
font-family:Helvetica, Arial, sans-serif;
letter-spacing:-.1ex;
}
a#avatarPromoButton{
z-index:9;
float:right;
margin-right:10px;
display:block;
padding-right:26px;
min-width:130px;
font-size:14px;
color:#FFF;
font-weight:bold;
background:url('png/avatar_button_long.png') right top no-repeat;
}
a#avatarPromoButton span{
display:block;
height:32px;
margin-left:-18px;
padding:8px 0 0 10px;
background:url('png/avatar_button_long.png') left -40px no-repeat;
cursor:pointer;
}
a#avatarPromoButton2 span{
display:block;
height:122px;
margin-left:10px;
padding:8px 0 0 10px;
background:url('png/twitter.png') left 7px no-repeat;
cursor:pointer;
}
a#avatarPromoButton3 span{
display:block;
height:122px;
margin-left:10px;
padding:8px 0 0 10px;
background:url('png/facebook.png') left 7px no-repeat;
cursor:pointer;
}
a#avatarPromoButton:hover{background-position: right -126px;}
a#avatarPromoButton:hover span{background-position:left -85px;}
div.avPromo p.noCall{position:absolute;width:130px;left:270px;top:111px;z-index:8;background:none;margin-left:0;}
div#starsDown p.noCall{left:14px;top:94px; color:#000; font-size:19px;line-height:24px;width:210px;}
/*new top info box */
#userInfoTop {border-top:1px dotted #333; margin-top:6px;}
#userInfoTop div.info-box{width:135px;}
#userInfoTop .section h4, #userInfoTop .info-box{color:#4f4f4f !important;}
#userInfoTop .info-box, #userInfoTop h4, #userInfoTop .info-box div{font-size:11px !important; line-height:12px;}
#userInfoTop .info-box h4{margin-top:8px;}
/*edit button */
#editButton a span{color:#333;}
#editButton a:hover span{color:#FFF;}
</style>

<div class="content window_content" style="position: relative;">
<!-- Defining gallery link to be used in photo comment under Stat -->


<table width="100%" cellpadding="0px" cellspacing="0px">
<tbody><tr>
<td class="about-column" id="about-left" valign="top">
<!-- TOP-LEFT -->

<input id="uploadPhotosLink" value=" " type="hidden">
<div id="Profile-TopLeft">
<div id="Profile-TopLeft-PhotoContainer">
<div id="Profile-TopLeft-PhotoContainerBackground"></div>
<div class="subsection" id="Profile-TopLeft-Photo">
<div style="position: relative; overflow: visible;">

<a href="http://www.altiviaot.webs.com">
<img src="jpg/jom.jpg" border="0" height="120">
</a>
<br>

</div>
</div>
<div class="subsection" id="Profile-TopLeft-UserNav">
<div style="position: relative; overflow: visible; border-top: 2px dotted rgb(0, 124, 211); padding-top: 5px;">


<span class="userNav-Meta"><font color="black">Buscanos en:</span>

<a href="http://twitter.com/" id="avatarPromoButton2">
<span>
</span>
</a>

<a href="http://www.facebook.com" id="avatarPromoButton3">
<span>g
</span>
</a>

</div>
</div>
</div>
</div>

</td>
<!-- TOP-CENTER -->
<td class="about-column" id="about-center" valign="top">
<div class="xabout-column" id="xabout-center">
<!-- MEMBER STATUS -->
<img src="
<?php
	echo $imaurl;
?>
" width="225" height="225" alt="">
<p style="color: #FFF; text-align:justify;">
<?php
	echo $desp;
?>
</p>
</div>
<div id="avatarMood" style="display: none;"></div>
<div id="profileAvatarContainer" style="position: absolute; top: 169px;">
<div id="editButton" style="display: none; z-index: 9; position: absolute; top: 8px; right: 242px; padding: 2px 5px;">
<img id="editBubbleTail" src="png/av_edit_bubble_bottom2.png" style="position: absolute; z-index: 6; bottom: -5px; right: 33px;">
<a href=" " class="button" style="font-size: 18px; font-weight: normal; z-index: 5;"><span class="b_c"><span class="b_tl"></span><span class="b_tr"></span><span class="b_br"></span><span class="b_bl"></span><span class="b_t">editar </span></span></a>
</div>
<div id="avatarPromo" class="avPromo" style="position: relative; width: 447px; height: 274px;">
</div><!--end avatarPromo-->
</div><!--end avatar assets-->
</div>
</td>
<td class="about-column" id="about-right" valign="top">
<div id="vanity-barsBg" class="transBox" style="margin-left: 20px;"></div>
<!-- TOP-RIGHT -->
<div class="xabout-column" id="xabout-right">
<div class="subsection" id="vanity-bars" style="margin-bottom: 0px ! important; margin-left: 20px; width: 280px; padding-right: 18px ! important;">
<div class="vanity-title" style="padding: 10px 0px 5px; margin-bottom: 5px;">
<span style="color: rgb(222, 133, 0); font-size: 18px; font-weight: bold;">ESTADISTICAS DE VENTAS</span>
</div>
<!-- Friends -->
<div class="vanity-bar" align="right">
<div style="width: 140px; height: 12px; overflow: hidden; background: url(&quot;gif/profile_graybar.gif&quot;) repeat scroll 0% 0% transparent;">
<div style="float: left; overflow: visible; background: url(&quot;gif/profile_orangebar.gif&quot;) repeat scroll 0% 0% transparent; width:
<?php
	$var='comedores';
	include('php/estadisticas.php');
?>
px;">&nbsp;
</div>
<div class="p_clear"></div>
</div>
</div>
<div class="vanity-title">
<a href=" ">COMEDORES</a>
</div>
<!-- Profile Comments -->
<div class="vanity-bar" align="right">
<div style="width: 140px; height: 12px; overflow: hidden; background: url(&quot;gif/profile_graybar.gif&quot;) repeat scroll 0% 0% transparent;">
<div style="float: left; background: url(&quot;gif/profile_orangebar.gif&quot;) repeat scroll 0% 0% transparent; width: 
<?php
	$var='salas';
	include('php/estadisticas.php');
?>
px;">&nbsp;</div>
<div style="float: left; margin-left: -5px;"></div>
<div class="p_clear"></div>
</div>
</div>
<div class="vanity-title">
<a href=" ">SALAS</a>
</div>
<!-- Photo Comments -->
<div class="vanity-bar" align="right">

<div style="width: 140px; height: 12px; overflow: hidden; background: url(&quot;gif/profile_graybar.gif&quot;) repeat scroll 0% 0% transparent;">
<div style="float: left; background: url(&quot;gif/profile_orangebar.gif&quot;) repeat scroll 0% 0% transparent; width: 
<?php
	$var='alcobas';
	include('php/estadisticas.php');
?>
px;">&nbsp;</div>
<div style="float: left; margin-left: -5px;"></div>
<div class="p_clear"></div>
</div>
</div>
<div class="vanity-title">
<a href="">ALCOBAS</a>
</div>


<!-- Fives -->
<div class="vanity-bar" align="right">

<div style="width: 140px; height: 12px; overflow: hidden; background: url(&quot;gif/profile_graybar.gif&quot;) repeat scroll 0% 0% transparent;">
<div style="float: left; background: url(&quot;gif/profile_orangebar.gif&quot;) repeat scroll 0% 0% transparent; width: 
<?php
	$var='sillones';
	include('php/estadisticas.php');
?>
px;">&nbsp;</div>
<div style="float: left; margin-left: -5px;"></div>
<div class="clear"></div>
</div>
</div>
<div class="vanity-title">
<a href=" ">SILLONES</a>
</div>

<!-- Scraps -->
<div class="vanity-bar" align="right">

<div style="width: 140px; height: 12px; overflow: hidden; background: url(&quot;gif/profile_graybar.gif&quot;) repeat scroll 0% 0% transparent;">
<div style="float: left; background: url(&quot;gif/profile_orangebar.gif&quot;) repeat scroll 0% 0% transparent; width:
<?php
	$var='indep';
	include('php/estadisticas.php');
?>
px;">&nbsp;</div>
<div style="float: left; margin-left: -5px;"></div>
<div class="p_clear"></div>
</div>
</div>
<div class="vanity-title">
<a href=" ">INDEPENDIENTES</a>
</div>
<a href=" ">*Promedio de ventas a diario a nivel nacional en la region caribe.</a>
</div>
<br/><br/>

<div class="subsection-separator"></div>
</td>
</tr>
</tbody></table>
</div>
<div class="footer">&nbsp;</div>
<!-- fin de la primera seccion -->
</div>
<div style="clear: both;"></div>
<div class="section-separator"></div>

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
</tr><tr>
<td style="overflow: hidden;" valign="top" width="50%" align="left">
<!-- LEFT-COLUMN -->
<table valign="top" cellpadding="0px" cellspacing="0px">
<tbody><tr>
<td valign="top" align="left">
<div class="content-column" id="content-left">
<!-- LIFESTYLE -->
<div class="section" id="lifestyle">
<h1 class="bg_title box_profile_info_large_heading">Productos</h1>
<h2>
</h2>
<div class="content window_content">
<!-- Missing Info -->
<?php
	$sql = "SELECT `id`,`descripcion`,`precio`,`imaurl` FROM `productos` WHERE `id_tipo`= ".$_REQUEST['seccion']." LIMIT 0, 30 ";

	include('php/consultar.php');
	if (@mysql_num_rows($result) > 0) {
		while ($row = @mysql_fetch_assoc($result)) {
?>
			<div class="subsection">
			<table width="0%" cellpadding="0px" cellspacing="0px">
			<tbody><tr>
			<td>
			<div class="emptyProfileInfo">
				<table width="430" border="1">
 					 <tr>
   						 <th  width="145" scope="col">
    							<div class="albumWrapper" style="float: left; display: inline; padding: 0pt; width: 125px; margin-left: 20px; height: 100px;">
								<div class="album">
    									<?php
										echo '<img src="'.$row["imaurl"].'" width="100" border="0" height="100"></div>';
									?>
								</div>
							</div>
    						</th>
    						 <th scope="col" width="275" style="text-align:left;">
     							<?php
								echo $row["descripcion"];
							?>
     						</th>
  					</tr>
 					 <tr>
    						<th scope="row">
    							<?php
								echo '$ '.$row["precio"];
							?>
    						</th>
							<?php
								echo '<th scope="row" style="text-align:right"><a href="php/pedidos.php?prod='.$row["id"].'&seccion='.$_REQUEST['seccion'].'">Comprar</a></th>';
							?>
 					</tr>
				</table>
			</div>
			</td>
			</tr>
			</tbody></table>
			</div>
<?php
		}
		mysql_free_result($result);
	}
?>
</div>
<div class="footer">&nbsp;</div>
</div>
<div class="section-separator"></div>
</div>
</td>
<tr>
</table>
</td>
</tr>
</tbody></table>
</div>
<div class="window_yellow" style="position: absolute; display: none; width: 300px; float: none; left: 50%; margin-left: -255px; top: 300px;" id="div_abusechoice">
<h1> </h1>
<div class="xcontent" style="padding: 10px;">
</div>
</div>
<div id="wrapper">
<div id="PageSubFooterContainer">
<div class="bottomcover rounded">
<div id="bottom">
	<ul>
		<div class="botwid" style="height:50px; width:220px;"><h3 class="bothead">Barranquilla</h3>
			<ul class="list">
				<li><a href="javascript:void(0);" title=" "><b>Sede Norte</b> Cra. 38 N° 71-68 L-6 tel.: 3690175 - 3606571</a></li>
                <li><a href="javascript:void(0);" title=" "><b>Sede Centro</b> Cra. 37 N° 43-32 tel.: 3518596 - 3510339</a></li>
				<li><a href="javascript:void(0);" title=" "><b>Sede Sur</b> Clle. 47 N° 13C-65 tel.: 3460338 - 3659724</a></li>
			</ul>
		</div>
		<div class="botwid" style="height:50px; width:220px;"><h3 class="bothead">Santa Marta</h3>
			<ul class="list">
   				<li><a href="javascript:void(0);" title=" "><b>Sede Alcazares</b> Clle. 22 N° 14-21 tel.: 4315320</a></li>
                <li><a href="javascript:void(0);" title=" "><b>Sede Alcazares</b> Clle. 22 N° 14-21 tel.: 4315320</a></li>
				<li><a href="javascript:void(0);" title=" "><b>Sede Alcazares</b> Clle. 22 N° 14-21 tel.: 4315320</a></li>
			</ul>
		</div>
		<div class="botwid" style="height:50px; width:220px;"><h3 class="bothead">Cartagena</h3>
			<ul class="list">
				<li><a href="javascript:void(0);" title=" "><b>Sede Manga</b> Cra. 22 N° 29-14 tel.: 6609990 - 3013867056</a></li>
                <li><a href="javascript:void(0);" title=" "><b>Sede Pedro Heredia</b> 4 Vientos N° 50-74 tel.: 6629455 - 3014377137</a></li>
				<li><a href="javascript:void(0);" title=" "><b>Sede Bocagrande</b> Cra. 22 N° 29-14 tel.: 6651219 - 3157592841</a></li>
			</ul>
		</div>
		<div class="botwid" style="height:200px; width:220px;"><h3 class="bothead">Anuncios</h3>
			<div class="textwidget">
				<p>Soy un <b>desarrollador de páginas webs</b>, con manejo en PHP y maquetación usando HTML y CSS.</p>
    				<p>Trabajo con diversas herramientas como Joomla y carritos de compra como Zencart.</p>
				<p>[ <a href="http://www.AltiviaOT.webs.com/">más información </a> ]</p>
			</div>
		</div>
	</ul>
    <div class="clear"></div>
</div>

</div>
</div>
</div>
<div style="clear: both;"></div>
<div id="footer" class="rounded">
<div class="fleft" style="color:#FFF;">
<p>Design by: <a href="http://www.altiviaot.webs.com/">Ing Jonathan Olier</a><br>Copyright © 2011 AltiviaOt<br>Todos los derechos reservados.</br></p>
</div>
</div>
</body></html>