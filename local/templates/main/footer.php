<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<!-- start big footer -->
<div class="big-footer">
    <div class="top-shadow-footer"><!--  --></div>
    <div class="containit">

        <div class="full-width clearfix">
            <div class="one-fourth panel">
                <div class="nopad">
                    <h4>Lorem Ipsum</h4>
                    <ul>
                        <li><a href="#">Nulla vel lorem</a></li>
                        <li><a href="#">Porttitor orci vulputate</a></li>

                        <li><a href="#">Placerat mollis</a></li>
                        <li><a href="#">Suscipit risus felis</a></li>
                        <li class="last"><a href="#">Nullam ligula felis</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">

                <div class="padleft">
                    <h4>Lorem Ipsum</h4>
                    <ul>
                        <li><a href="#">Nulla vel lorem</a></li>
                        <li><a href="#">Porttitor orci vulputate</a></li>
                        <li><a href="#">Placerat mollis</a></li>
                        <li><a href="#">Suscipit risus felis</a></li>
                        <li class="last"><a href="#">Nullam ligula felis</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">
                <div class="padleft">
                    <h4>Contact</h4>
                    <p>Curabitur placerat, urna eu fringilla placerat, urna eu venenatis</p>

                    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php" ) );?>
                    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/fax.php" ) );?>
                    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php" ) );?>

                </div>
            </div>
            <div class="one-fourth-last panel border-vert-left newsletter">
                <div class="padleft">

                    <h4>Join Our<br/> Newsletter</h4>
                    <p>Curabitur placerat, urna eu fringilla venenatis, orci mi tincidunt nulla, vitae iaculis augue.</p>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td><input name="" class="field"/></td>
                            <td><input type="image" name="go" src="<?=SITE_TEMPLATE_PATH;?>/images/newsletter-input-button.png" alt="Go" class="form-imagebutton" /></td>
                        </tr>

                    </table>
                    <span class="small">Lorem ipsum <a href="#">dorem mors</a>.</span>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:photo.section",
            "",
            Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_ORDER" => "asc",
                "FIELD_CODE" => array("PREVIEW_PICTURE","","","","",""),
                "FILTER_NAME" => "arrFilter",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "content",
                "LINE_ELEMENT_COUNT" => "3",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Фотографии",
                "PAGE_ELEMENT_COUNT" => "20",
                "PROPERTY_CODE" => array("URL",""),
                "SECTION_CODE" => "",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SET_LAST_MODIFIED" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N"
            )
        );?>
    </div>
</div>

<!-- end big footer -->

<!-- start small footer -->
<div class="small-footer">
    <div class="containit">

        <div class="copy">Copyright &copy; <?=date("Y")?>. All rights reserved.  Template on sale at: <a href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn">Themeforest</a>.</div>
        <div class="social">

            <ul>
                <li><a href="#"><img src="https://corp.imgsmail.ru/media/files/vklogo.png" width="26" height="27" alt="" class="vm"/>VK</a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/icon-facebook.png" width="26" height="25" alt="" class="vm"/>Facebook</a></li>
                <li><a href="#"><img src="https://im0-tub-ru.yandex.net/i?id=ed50acede158adc7a2a860fe0f87dc59&n=13&exp=1" width="26" height="26" alt="" class="vm"/>Odnoklassniki</a></li>
                <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/icon-rss.png" width="26" height="25" alt="" class="vm"/>Blog RSS</a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!-- end start small footer -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>