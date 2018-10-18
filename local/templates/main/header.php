<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset; Loc::loadMessages(__FILE__);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head profile="http://gmpg.org/xfn/11">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Load Jquery -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.js", true);?>
    <!-- End Load -->

    <!-- for IE6 i'm sorry but there is too much wrong with it, needs warning at least, you can disable it by delething this load. -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.badBrowser.js", true);?>
    <!-- End Load -->

    <!-- ALL jQuery Tools. No jQuery library -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.tools.js", true);?>

    <!-- End Load -->

    <!-- Load Jquery Easing -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.easing.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.css-transform.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.css-rotate-scale.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Cycle and adiacent CSS File -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.cycle.js", true);?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/jquery.cycle.css");?>
    <!-- End Load -->

    <!-- Load Cufon and Adiacent Font Files, and apply Cufon on used Styles -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/Museo_400-Museo_italic_400.font.js", true);?>
    <!-- End Load -->

    <!-- Load Pretty Photo -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/prettyPhoto.css");?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.prettyPhoto.js", true);?>
    <script type="text/javascript">
        /* pretty photo responds on rel='prettyPhoto' */
        jQuery(document).ready(function() { $("a[rel^='prettyPhoto']").prettyPhoto();   });
    </script>
    <!-- End Load -->

    <!-- Load Superfish Drowpdown Menu, and run it -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.hoverInt.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.bgiframe.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/superfish.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Roundabout, and adiacent JS & CSS file -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout-shapes-1.1.js", true);?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/jquery.roundabout.css");?>
    <!-- End Load -->

    <!-- Load SWFObject, used for video embedding -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/swfobject.js", true);?>
    <!-- End Load -->

    <!-- Load Quicksand -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.quicksand.js", true);?>
    <!-- End Load -->

    <!-- Load some small custom scripts -->
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/custom.js", true);?>
    <!-- End Load -->

    <!-- Load PNG Fix older IE Versions -->
    <!--[if lt IE 7]>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/pngfix.js", true);?>
    <script type="text/javascript">DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- End Load -->

    <!-- Load Main Stylesheet -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style.css");?>
    <!-- End Load -->

    <!-- Load Alternate Stylesheets, can be disabled if not used -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-orange.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-dirtyblue.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-redish.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-green.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-pink.css");?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/styleswitch.js", true);?>
    <!-- End Load -->

    <!-- Load Main Enhancements Stylesheet border radius, transparency and such things -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/style-enhance.css");?>
    <!-- End Load -->

    <!-- Load IE Stylesheet -->
    <!--[if IE]>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/ie.css");?>
    <![endif]-->
    <!-- End Load -->

    <!-- Load IE6 Stylesheet -->
    <!--[if IE 6]>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/_include/css/ie6.css");?>
    <![endif]-->
    <!-- End Load -->

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:photo.section",
// 	"",
// 	Array(
// 		"ADD_SECTIONS_CHAIN" => "N",
// 		"AJAX_MODE" => "N",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"BROWSER_TITLE" => "-",
// 		"CACHE_FILTER" => "N",
// 		"CACHE_GROUPS" => "Y",
// 		"CACHE_TIME" => "36000000",
// 		"CACHE_TYPE" => "A",
// 		"DETAIL_URL" => "",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"DISPLAY_TOP_PAGER" => "N",
// 		"ELEMENT_SORT_FIELD" => "sort",
// 		"ELEMENT_SORT_ORDER" => "asc",
// 		"FIELD_CODE" => array("ID", "NAME", "SORT", "PREVIEW_PICTURE", ""),
// 		"FILTER_NAME" => "arrFilter",
// 		"IBLOCK_ID" => "7",
// 		"IBLOCK_TYPE" => "content",
// 		"LINE_ELEMENT_COUNT" => "3",
// 		"MESSAGE_404" => "",
// 		"META_DESCRIPTION" => "-",
// 		"META_KEYWORDS" => "-",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "N",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_TEMPLATE" => ".default",
// 		"PAGER_TITLE" => "Фотографии",
// 		"PAGE_ELEMENT_COUNT" => "20",
// 		"PROPERTY_CODE" => array("URL", ""),
// 		"SECTION_CODE" => "",
// 		"SECTION_ID" => $_REQUEST["SECTION_ID"],
// 		"SECTION_URL" => "",
// 		"SECTION_USER_FIELDS" => array("", ""),
// 		"SET_LAST_MODIFIED" => "N",
// 		"SET_STATUS_404" => "N",
// 		"SET_TITLE" => "N",
// 		"SHOW_404" => "N"
// 	)
// );

?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("ID","NAME","SORT","PREVIEW_PICTURE",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "8",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Социальные сети",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?><br>
<br>
<!-- start top and main menu -->
<div class="main-menu">
    <div class="ornament">
        <div class="containit">
            <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php" ) );?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(0=>""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "Y"
                )
            );?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- end top and main menu -->
<!-- start header alternate -->
<div class="header-alt">

    <div class="slide slide-roundabout bg1">
        <div class="containit ornament-right">
            <div class="roundaboutshadow">
                <h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
                <p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
                <!-- roundabout images targets, prettyphoto opens on click of the middle item -->

                <script type="text/javascript" charset="utf-8">
                    function roundaboutimage1(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase1.jpg', 'title', 'Some Brilliant Project'); }
                    function roundaboutimage2(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase2.jpg', 'title', 'Another One'); }
                    function roundaboutimage3(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase3.jpg', 'title', 'This is Insane'); }
                    function roundaboutimage4(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase4.jpg', 'title', 'Another Comment'); }
                    function roundaboutimage5(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase5.jpg', 'title', 'This roundabout Rules'); }
                    function roundaboutimage6(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase6.jpg', 'title', 'Awsome Commment'); }
                    function roundaboutimage7(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase7.jpg', 'title', 'And Another One'); }
                </script>
                <!-- the actual roundabout -->
                <ul id="roundabout">
                    <li id="roundaboutimage1"><a href="javascript:roundaboutimage1();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
                    <li id="roundaboutimage2"><a href="javascript:roundaboutimage2();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
                    <li id="roundaboutimage3"><a href="javascript:roundaboutimage3();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
                    <li id="roundaboutimage4"><a href="javascript:roundaboutimage4();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase4.jpg" alt="" /></a></li>
                    <li id="roundaboutimage5"><a href="javascript:roundaboutimage5();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
                    <li id="roundaboutimage6"><a href="javascript:roundaboutimage6();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
                    <li id="roundaboutimage7"><a href="javascript:roundaboutimage7();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
                </ul>
                <div id="filler"><!--  --></div>
            </div>
            <!-- start the roundabout with descriptions -->
            <script type="text/javascript">
                //<![CDATA[
                var descs = {
                    roundaboutimage1: 'Some text about the item <a href="#">a link</a> here. ',
                    roundaboutimage2: 'He has the look of a wise, fierce warrior.',
                    roundaboutimage3: 'Attention all mice: you&rsquo;ve been warned.',
                    roundaboutimage4: 'Some text about the item <a href="#">a link</a> here.',
                    roundaboutimage5: 'Introducing: the INCREDIBLE ROUNDABOUT!',
                    roundaboutimage6: 'Attention all mice: you&rsquo;ve been warned.',
                    roundaboutimage7: 'Yes you can have Video here if you want.'
                };
                // settings for first button, for each roundabout image one setting
                var linkone = {
                    roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>'
                };
                // settings for second button, for each roundabout image one setting
                var linktwo = {
                    roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Do Something Now</span></a>',
                    roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Cufon Buttons are Sexy</span></a>'
                };
                // what happens on focus and on blur
                $('#roundabout li').focus(function() {
                    var useLinkone = (typeof linkone[$(this).attr('id')] != 'undefined') ? linkone[$(this).attr('id')] : '';
                    $('#roundaboutlinkone').html(useLinkone).fadeIn(200);
                    var useLinktwo = (typeof linktwo[$(this).attr('id')] != 'undefined') ? linktwo[$(this).attr('id')] : '';
                    $('#roundaboutlinktwo').html(useLinktwo).fadeIn(200);
                    var useText = (typeof descs[$(this).attr('id')] != 'undefined') ? descs[$(this).attr('id')] : '';
                    $('#roundaboutdescription').html(useText).fadeIn(200);
                    Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
                }).blur(function() {
                    $('#roundaboutlinkone').fadeOut(200);
                    $('#roundaboutlinktwo').fadeOut(200);
                    $('#roundaboutdescription').fadeOut(200);
                });

                $(document).ready(function() {
                    var interval;
                    $('#roundabout')
                        .roundabout({
                            shape: 'lazySusan',
                            easing: 'swing',
                            minOpacity: 1, // 1 fully visible, 0 invisible
                            minScale: 0.5, // tiny!
                            duration: 400,
                            btnNext: '#roundaboutnext',
                            btnPrev: '#roundaboutprevious',
                            clickToFocus: true
                        });
                });
                function startAutoPlay() {
                    return setInterval(function() {
                        $('#roundabout').roundabout_animateToNextChild();
                    }, 3000);
                }
                //]]>
            </script>
        </div>

    </div>

</div>
<!-- end header alternate-->

