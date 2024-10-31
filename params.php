<?php
/**
Author: Shape 5 - Professional Theme & Template Community
Available for download at www.shape5.com
*/

print('<script language="javascript" type="text/javascript">var s5_verticalhorizontal = "null";</script>');

$jslibrary = $this->get( 'jslibrary' );
if ($jslibrary == "") { $jslibrary = "mootools"; }
$s5_dropdowntext = $this->get( 's5_dropdowntext' );
if ($s5_dropdowntext == "") { $s5_dropdowntext = "Open Gallery"; }
$s5_verticalhorizontal = $this->get( 's5_verticalhorizontal' );
if ($s5_verticalhorizontal == "") { $s5_verticalhorizontal = "false"; }
$s5_thumbnailstretch = $this->get( 's5_thumbnailstretch' );
if ($s5_thumbnailstretch == "") { $s5_thumbnailstretch = "true"; }
$s5_randomorder = $this->get( 's5_randomorder' );
if ($s5_randomorder == "") { $s5_randomorder = "no"; }
$s5_hidecar = $this->get( 's5_hidecar' );
if ($s5_hidecar == "") { $s5_hidecar = "truee"; }
if ($s5_hidecar == "falsee") {$s5_hidecar = "false";}
if ($s5_hidecar == "truee") {$s5_hidecar = "true";}
$s5_hidebut = $this->get( 's5_hidebut' );
if ($s5_hidebut == "") {$s5_hidebut = "truee";}
if ($s5_hidebut == "falsee") {$s5_hidebut = "false";}
if ($s5_hidebut == "truee") {$s5_hidebut = "true";}
$s5_hidetext = $this->get( 's5_hidetext' );
if ($s5_hidetext == "") {$s5_hidetext = "truee";}
if ($s5_hidetext == "falsee") {$s5_hidetext = "false";}
if ($s5_hidetext == "truee") {$s5_hidetext = "true";}
$s5_hideh2 = $this->get( 's5_hideh2', 'false' );
if ($s5_hideh2 == "") { $s5_hideh2 = "true"; }
$s5_delay = $this->get( 's5_delay' );
if ($s5_delay == "") { $s5_delay = "9000"; }
$s5_hide_time = $this->get( 's5_hide_time' );
if ($s5_hide_time == "") { $s5_hide_time = "500"; }
$s5_opacity_time = $this->get( 's5_opacity_time' );
if ($s5_opacity_time == "") { $s5_opacity_time = "500"; }
$s5_slide_opacity = $this->get( 's5_slide_opacity' );
if ($s5_slide_opacity == "") { $s5_slide_opacity = "1000"; }
$s5_slide_opacity = $s5_slide_opacity/100;
$s5stretchimage = $this->get( 's5stretchimage' );
if ($s5stretchimage == "") {$s5stretchimage = "actualsize";}
$s5pixelwidth = $this->get( 's5pixelwidth' );
if ($s5pixelwidth == "") {$s5pixelwidth = "0px";}
$hoverstopplay = $this->get( 'hoverstopplay' );
if ($hoverstopplay == "") {$hoverstopplay = "yes";}
$fullscreenheight = $this->get( 'fullscreenheight' );
if ($fullscreenheight == "") {$fullscreenheight = "no";}
$s5_hidefaderimages = $this->get( 's5_hidefaderimages' );
if ($s5_hidefaderimages == "") {$s5_hidefaderimages = "no";}
$jseffect = $this->get( 'jseffect' );
if ($jseffect == "") { $jseffect = "fade"; }
$background_s5_iacf = $this->get( 'background' );
$pretext_s5_iacf = $this->get( 'pretext' );
$tween_time_s5_iacf = "0.5";
$height_s5_iacf = $this->get( 'height' );
if ($height_s5_iacf == "") { $height_s5_iacf = "900px"; }
$width_s5_iacf = $this->get( 'width' );
if ($width_s5_iacf == "") { $width_s5_iacf = "100%"; }
$s5zoomeffect_size = $this->get( 's5zoomeffect_size' );
if ($s5zoomeffect_size == "") { $s5zoomeffect_size = "130"; }
$s5zoomeffect_time = $this->get( 's5zoomeffect_time' );
if ($s5zoomeffect_time == "") { $s5zoomeffect_time = "14"; }
$s5zoomeffect_width_disable = $this->get( 's5zoomeffect_width_disable' );
if ($s5zoomeffect_width_disable == "") { $s5zoomeffect_width_disable = "750px"; }
$s5zoom_image = $this->get( 's5zoom_image' );
if ($s5zoom_image == "") { $s5zoom_image = "no"; }
$s5pixelwidth_mobile = $this->get( 's5pixelwidth_mobile' );
if ($s5pixelwidth_mobile == "") { $s5pixelwidth_mobile = "0px"; }
$s5mobile_height = $this->get( 's5mobile_height' );
if ($s5mobile_height == "") { $s5mobile_height = "300px"; }

$display_time_s5_iacf   	= "10";
$tween_time_s5_iacf = $tween_time_s5_iacf*1000;
$display_time_s5_iacf = $display_time_s5_iacf*1000;
$text_display_effect = $tween_time_s5_iacf * 0.75;
$text_display_time_s5_iacf = $display_time_s5_iacf - $text_display_effect;

$picture1_s5_iacf		= $this->get( 'picture1' );
$picture1link_s5_iacf		= $this->get( 'picture1link' );
$picture1target_s5_iacf		= $this->get( 'picturetarget' );
$picture2_s5_iacf		= $this->get( 'picture2' );
$picture2link_s5_iacf		= $this->get( 'picture2link' );
$picture2target_s5_iacf		= $this->get( 'picturetarget' );
$picture3_s5_iacf		= $this->get( 'picture3' );
$picture3link_s5_iacf		= $this->get( 'picture3link' );
$picture3target_s5_iacf		= $this->get( 'picturetarget' );
$picture4_s5_iacf		= $this->get( 'picture4' );
$picture4link_s5_iacf		= $this->get( 'picture4link' );
$picture4target_s5_iacf		= $this->get( 'picturetarget' );
$picture5_s5_iacf		= $this->get( 'picture5' );
$picture5link_s5_iacf		= $this->get( 'picture5link' );
$picture5target_s5_iacf		= $this->get( 'picturetarget' );
$picture6_s5_iacf		= $this->get( 'picture6' );
$picture6link_s5_iacf		= $this->get( 'picture6link' );
$picture6target_s5_iacf		= $this->get( 'picturetarget' );
$picture7_s5_iacf		= $this->get( 'picture7' );
$picture7link_s5_iacf		= $this->get( 'picture7link' );
$picture7target_s5_iacf		= $this->get( 'picturetarget' );
$picture8_s5_iacf		= $this->get( 'picture8' );
$picture8link_s5_iacf		= $this->get( 'picture8link' );
$picture8target_s5_iacf		= $this->get( 'picturetarget' );
$picture9_s5_iacf		= $this->get( 'picture9' );
$picture9link_s5_iacf		= $this->get( 'picture9link' );
$picture9target_s5_iacf		= $this->get( 'picturetarget' );
$picture10_s5_iacf		= $this->get( 'picture10' );
$picture10link_s5_iacf		= $this->get( 'picture10link' );
$picture10target_s5_iacf	= $this->get( 'picturetarget' );

$title1	= $this->get( 'title1' );
$title2	= $this->get( 'title2' );
$title3	= $this->get( 'title3' );
$title4	= $this->get( 'title4' );
$title5	= $this->get( 'title5' );
$title6	= $this->get( 'title6' );
$title7	= $this->get( 'title7' );
$title8	= $this->get( 'title8' );
$title9	= $this->get( 'title9' );
$title10 = $this->get( 'title10' );

$title1 = str_replace('"',"'",$title1);
$title2 = str_replace('"',"'",$title2);
$title3 = str_replace('"',"'",$title3);
$title4 = str_replace('"',"'",$title4);
$title5 = str_replace('"',"'",$title5);
$title6 = str_replace('"',"'",$title6);
$title7 = str_replace('"',"'",$title7);
$title8 = str_replace('"',"'",$title8);
$title9 = str_replace('"',"'",$title9);
$title10 = str_replace('"',"'",$title10);

$picture1text_s5_iacf = $this->get( 'picture1text' );
$picture1spacing_s5_iacf = "12px";
$picture1textsize_s5_iacf = $this->get( 'picture1textsize' );
$picture1textcolor_s5_iacf = "ffffff";
$picture1textbg_s5_iacf = "333333";
$picture2text_s5_iacf = $this->get( 'picture2text' );
$picture2spacing_s5_iacf = "12px";
$picture2textsize_s5_iacf = $this->get( 'picture2textsize' );
$picture2textcolor_s5_iacf = "ffffff";
$picture2textbg_s5_iacf = "333333";
$picture3text_s5_iacf = $this->get( 'picture3text' );
$picture3spacing_s5_iacf = "12px";
$picture3textsize_s5_iacf = $this->get( 'picture3textsize' );
$picture3textcolor_s5_iacf = "ffffff";
$picture3textbg_s5_iacf = "333333";
$picture4text_s5_iacf = $this->get( 'picture4text' );
$picture4spacing_s5_iacf = "12px";
$picture4textsize_s5_iacf = $this->get( 'picture4textsize' );
$picture4textcolor_s5_iacf = "ffffff";
$picture4textbg_s5_iacf = "333333";
$picture5text_s5_iacf = $this->get( 'picture5text' );
$picture5spacing_s5_iacf = "12px";
$picture5textsize_s5_iacf = $this->get( 'picture5textsize' );
$picture5textcolor_s5_iacf = "ffffff";
$picture5textbg_s5_iacf = "333333";
$picture6text_s5_iacf = $this->get( 'picture6text' );
$picture6spacing_s5_iacf = "12px";
$picture6textsize_s5_iacf = $this->get( 'picture6textsize' );
$picture6textcolor_s5_iacf = "ffffff";
$picture6textbg_s5_iacf = "333333";
$picture7text_s5_iacf = $this->get( 'picture7text' );
$picture7spacing_s5_iacf = "12px";
$picture7textsize_s5_iacf = $this->get( 'picture7textsize' );
$picture7textcolor_s5_iacf = "ffffff";
$picture7textbg_s5_iacf = "333333";
$picture8text_s5_iacf = $this->get( 'picture8text' );
$picture8spacing_s5_iacf = "12px";
$picture8textsize_s5_iacf = $this->get( 'picture8textsize' );
$picture8textcolor_s5_iacf = "ffffff";
$picture8textbg_s5_iacf = "333333";
$picture9text_s5_iacf = $this->get( 'picture9text' );
$picture9spacing_s5_iacf = "12px";
$picture9textsize_s5_iacf = $this->get( 'picture9textsize' );
$picture9textcolor_s5_iacf = "ffffff";
$picture9textbg_s5_iacf = "333333";
$picture10text_s5_iacf = $this->get( 'picture10text' );
$picture10spacing_s5_iacf = "12px";
$picture10textsize_s5_iacf = $this->get( 'picture10textsize' );
$picture10textcolor_s5_iacf = "ffffff";
$picture10textbg_s5_iacf = "333333";
$picture1textweight_s5_iacf   	= "normal";
$picture2textweight_s5_iacf   	= "normal";
$picture3textweight_s5_iacf   	= "normal";
$picture4textweight_s5_iacf   	= "normal";
$picture5textweight_s5_iacf   	= "normal";
$picture6textweight_s5_iacf   	= "normal";
$picture7textweight_s5_iacf   	= "normal";
$picture8textweight_s5_iacf   	= "normal";
$picture9textweight_s5_iacf   	= "normal";
$picture10textweight_s5_iacf   	= "normal";
$picture1textopac_s5_iacf   	= "25";
$picture2textopac_s5_iacf   	= "25";
$picture3textopac_s5_iacf   	= "25";
$picture4textopac_s5_iacf   	= "25";
$picture5textopac_s5_iacf   	= "25";
$picture6textopac_s5_iacf   	= "25";
$picture7textopac_s5_iacf   	= "25";
$picture8textopac_s5_iacf   	= "25";
$picture9textopac_s5_iacf   	= "25";
$picture10textopac_s5_iacf   	= "25";
$non_ie_picture1textopac_s5_iacf = 55/ 100;
$non_ie_picture2textopac_s5_iacf = 55 / 100;
$non_ie_picture3textopac_s5_iacf = 55 / 100;
$non_ie_picture4textopac_s5_iacf = 55 / 100;
$non_ie_picture5textopac_s5_iacf = 55 / 100;
$non_ie_picture6textopac_s5_iacf = 55 / 100;
$non_ie_picture7textopac_s5_iacf = 55 / 100;
$non_ie_picture8textopac_s5_iacf = 55 / 100;
$non_ie_picture9textopac_s5_iacf = 55 / 100;
$non_ie_picture10textopac_s5_iacf = 55 / 100;

if ($picture1target_s5_iacf == "1") {
$picture1target_s5_iacf = "_blank"; }
if ($picture1target_s5_iacf == "0") {
$picture1target_s5_iacf = "_top"; }
if ($picture2target_s5_iacf == "1") {
$picture2target_s5_iacf = "_blank"; }
if ($picture2target_s5_iacf == "0") {
$picture2target_s5_iacf = "_top"; }
if ($picture3target_s5_iacf == "1") {
$picture3target_s5_iacf = "_blank"; }
if ($picture3target_s5_iacf == "0") {
$picture3target_s5_iacf = "_top"; }
if ($picture4target_s5_iacf == "1") {
$picture4target_s5_iacf = "_blank"; }
if ($picture4target_s5_iacf == "0") {
$picture4target_s5_iacf = "_top"; }
if ($picture5target_s5_iacf == "1") {
$picture5target_s5_iacf = "_blank"; }
if ($picture5target_s5_iacf == "0") {
$picture5target_s5_iacf = "_top"; }
if ($picture6target_s5_iacf == "1") {
$picture6target_s5_iacf = "_blank"; }
if ($picture6target_s5_iacf == "0") {
$picture6target_s5_iacf = "_top"; }
if ($picture7target_s5_iacf == "1") {
$picture7target_s5_iacf = "_blank"; }
if ($picture7target_s5_iacf == "0") {
$picture7target_s5_iacf = "_top"; }
if ($picture8target_s5_iacf == "1") {
$picture8target_s5_iacf = "_blank"; }
if ($picture8target_s5_iacf == "0") {
$picture8target_s5_iacf = "_top"; }
if ($picture9target_s5_iacf == "1") {
$picture9target_s5_iacf = "_blank"; }
if ($picture9target_s5_iacf == "0") {
$picture9target_s5_iacf = "_top"; }
if ($picture10target_s5_iacf == "1") {
$picture10target_s5_iacf = "_blank"; }
if ($picture10target_s5_iacf == "0") {
$picture10target_s5_iacf = "_top"; }
?>
<?php if ($s5stretchimage  == "stretch" && strrpos($width_s5_iacf,"%") > 1) { ?>
<script type="text/javascript">//<![CDATA[
    document.write('<style>.jdGallery .slideElement {background-size:100% auto;}<?php if ($s5pixelwidth  != "0px") { ?>@media screen and (max-width: <?php echo $s5pixelwidth; ?>) {#myGallery { height:<?php echo $height_s5_iacf ?> !important; } .jdGallery .slideElement {background-size:cover !important;}}<?php } ?></style>');
//]]></script>
<?php } ?>

<?php if ($s5stretchimage  == "stretch" && strrpos($width_s5_iacf,"%") > 1 && $s5pixelwidth_mobile != "0px") { ?>
<script type="text/javascript">//<![CDATA[
    document.write('<style>@media screen and (max-width: <?php echo $s5pixelwidth_mobile; ?>) {#myGallery { height:<?php echo $s5mobile_height ?> !important; } .jdGallery .slideElement {background-size:cover !important;}}</style>');
//]]></script>
<?php } ?>

<?php if ($s5zoom_image == "yes") { ?>
<script type="text/javascript">//<![CDATA[
    document.write('<style>.jdGallery .slideElement {transform: scale(1) !important;}.jdGallery .slideElement.active {transform: scale(<?php echo $s5zoomeffect_size / 100; ?>) !important;transition: transform <?php echo $s5zoomeffect_time * 1000; ?>ms ease-in !important;}<?php if ($s5zoomeffect_width_disable != "") { ?>@media screen and (max-width: <?php echo $s5zoomeffect_width_disable; ?>) {.jdGallery .slideElement,.jdGallery .slideElement.active{transform: scale(1) !important;}}<?php } ?></style>');
//]]>
</script>
<?php } ?>