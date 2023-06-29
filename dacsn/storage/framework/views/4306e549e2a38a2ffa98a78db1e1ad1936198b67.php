<!DOCTYPE html>
<html lang="vi-VN" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <script>
        mwAdmin = true;
        admin_url = 'http://localhost/dacsn/admin/';
    </script>

    <link rel="stylesheet" id="mw-default-css" href="http://localhost/dacsn/userfiles/modules/microweber/default.css" type="text/css">
<link rel="stylesheet" id="mw-ui-css" href="http://localhost/dacsn/userfiles/modules/microweber/api/libs/mw-ui/grunt/plugins/ui/css/main_with_mw.css" type="text/css">
<script id="mw-api-js" src="http://localhost/dacsn/userfiles/cache/apijs_combined/api.combined.316279285.admin_2282622326.1.3.2.js"></script>

    <script type="text/javascript">
        mw.lib.require('jqueryui');
        mw.require("http://localhost/dacsn/userfiles/modules/microweber/api/libs/jquery_slimscroll/jquery.slimscroll.min.js");
        mw.require("liveadmin.js");
        mw.require("http://localhost/dacsn/userfiles/modules/microweber/css/wysiwyg.css");
        mw.require("http://localhost/dacsn/userfiles/modules/microweber/css/components.css");
        mw.require("wysiwyg.js");
        mw.require("url.js");
        mw.require("options.js");
        mw.require("events.js");
        mw.require("admin.js");
        mw.require("editor_externals.js");
        mw.require("keys.js");
        mw.require("css_parser.js");
        mw.require("custom_fields.js");
        mw.require("session.js");
        mw.require("content.js");
        mw.require("upgrades.js");
        mw.require("tree.js");

        mw.lib.require('mwui');
        mw.lib.require('mwui_init');
        mw.lib.require('flag_icons', true);
        mw.require("http://localhost/dacsn/userfiles/modules/microweber/css/admin.css", true);

                    </script>
            <script type="text/javascript">
            $(document).ready(function () {
                $('.mw-lazy-load-module').reload_module();

                if (self === top) {
                    window.onhashchange = function () {
                        mw.cookie.set('back_to_admin', location.href);
                    }
                    mw.cookie.set('back_to_admin', location.href);
                }

                mw.$("#mw-quick-content,#mw_edit_pages_content,#mw-admin-content").click(function () {
                    if (mw.helpinfo != undefined) {
                        mw.cookie.set('helpinfo', false, 4380);
                        $(".helpinfo_helper").fadeOut();
                    }
                });
            });
            // mw.require("http://localhost/dacsn/userfiles/modules/microweber/css/ui.css");
            mw.require("fonts.js");


        </script>
        
    <script src="http://localhost/dacsn/userfiles/cache/livewire/1.3.2/livewire/livewire.js" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = 'http://localhost/dacsn';window.livewire_token = 'anolBtb0Jl7atBLYUSGjLZXlU70o2phRwuGzWKSF';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    <!-- Alpine v3 -->
    <script defer src="http://localhost/dacsn/userfiles/modules/microweber/api/libs/alpine/alpine.min.js"></script>
    <!-- Livewire sortable -->
    <script defer src="http://localhost/dacsn/userfiles/modules/microweber/api/libs/livewire-sortable/livewire-sortable.js"></script>

    



</head>



<body class="is_admin loading view- action-">

<div>
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('sI94otA')) {
    $componentId = $_instance->getRenderedChildComponentId('sI94otA');
    $componentTag = $_instance->getRenderedChildComponentTagName('sI94otA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sI94otA');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('sI94otA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>




<script>
    $(document).ready(function () {
        $(".mw-admin-mobile-admin-sidebar-toggle").on('click', function () {
            $("#main-bar").toggleClass('mobile-active')
        })
        $("body").on('click', function (e) {
            if (!mw.tools.hasAnyOfClassesOnNodeOrParent(e.target, ['mw-admin-mobile-admin-sidebar-toggle'])) {
                $("#main-bar").removeClass('mobile-active')
            }

        })
    })


    function mw_admin_add_order_popup(ord_id) {
        var contentHolder = document.createElement('div');
        contentHolder.style.padding = '25px';
        var dlg = mw.dialog({
            content: contentHolder,
            title: !!ord_id ? 'Chỉnh sửa đơn hàng' : 'Thêm đơn hàng',
            width: 900
        });
        mw.spinner({element: contentHolder, size: 32})
        mw.load_module('shop/orders/admin/add_order', contentHolder, function (){
            contentHolder.style.padding = '0';
            mw.spinner({element: contentHolder, size: 32}).remove()
            dlg.center()
        }, { order_id: ord_id });
    }

</script>









<div id="mw-admin-container">
    <header class="position-sticky sticky-top bg-white admin-navigation-colorscheme">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-1">

                <ul class="nav" id="admin-header-logo-nav">
                    <li id="admin-logo-nav-toggle">
                        <span class="js-toggle-mobile-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </li>
                    <li id="admin-logo">
                                                <a href="http://localhost/dacsn/admin/view:dashboard">
                            <img alt="" src="http://localhost/dacsn/userfiles/modules/microweber/api/libs/mw-ui/assets/img/logo.svg">
                        </a>
                    </li>

                                            <li class="mx-1 d-none d-md-block">
                            <button type="button" class="btn btn-success btn-rounded btn-sm-only-icon " data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> <span class="d-none d-md-block">Thêm mới</span>
                            </button>
                            <div class="dropdown-menu ">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost/dacsn/admin/page/create"><span class="mai-page"></span> Trang</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost/dacsn/admin/post/create"><span class="mai-post"></span> Bài đăng</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost/dacsn/admin/category/create"><span class="mai-category"></span> thể loại</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost/dacsn/admin/shop/product/create"><span class="mai-product"></span> Sản phẩm</a>
                                                                                                </div>
                        </li>
                    
                </ul>

                <div class="mw-lazy-load-module module" id="admin-header-notification" type="admin/header_notifications"></div>


                
                <ul class="nav">
                                            <li class="mx-1">
                            <a href="http://localhost/dacsn/?editmode=n" class="btn btn-outline-success btn-rounded btn-sm-only-icon go-live-edit-href-set go-live-edit-href-set-view">
                                <i class="mdi mdi-earth"></i><span class="d-none d-md-block ml-1">Trang mạng</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="http://localhost/dacsn/?editmode=y" class="btn btn-primary btn-rounded btn-sm-only-icon go-live-edit-href-set">
                                <i class="mdi mdi-eye-outline"></i><span class="d-none d-md-block ml-1">Chỉnh sửa trực tiếp</span>
                            </a>
                        </li>
                    
                                    </ul>
            </div>
        </div>
    </header>
    
    <div class="main container my-3">
        <aside>
                                    
            
            


            <ul class="nav flex-column" id="mw-admin-main-navigation">
                <li class="nav-item">
                    <a href="http://localhost/dacsn/admin/" class="nav-link ">
                        <i class="mdi mdi-view-dashboard"></i> bảng điều khiển                    </a>
                </li>

                
                                    <li class="nav-item dropdown-no-js active">

                        <a href="http://localhost/dacsn/admin/content" class="nav-link dropdown-toggle  active">
                            <i class="mdi mdi-earth"></i>
                            <span class="badge-holder">Trang mạng</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="http://localhost/dacsn/admin/page" class="dropdown-item ">
                                Các trang                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm trang mới" data-href="http://localhost/dacsn/admin/page/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item  active " href="http://localhost/dacsn/admin/post">
                                Bài đăng                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm bài mới" data-href="http://localhost/dacsn/admin/post/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://localhost/dacsn/admin/view:content/action:categories">
                                Thể loại                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-href="http://localhost/dacsn/admin/category/create" data-bs-toggle="tooltip" title="Thêm danh mục mới"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>
                                                            <a href="http://localhost/dacsn/admin/shop/product" class="dropdown-item ">
                                    Các sản phẩm                                    <span data-href="http://localhost/dacsn/admin/shop/product/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm sản phẩm mới"><i class="mdi mdi-plus"></i></span>
                                </a>
                                                        <a class="dropdown-item " href="http://localhost/dacsn/admin/view:content/action:settings">
                                Cài đặt                            </a>
                        </div>
                    </li>
                
                                    <li class="nav-item dropdown-no-js ">
                        <a href="http://localhost/dacsn/admin/shop/product" class="nav-link dropdown-toggle ">
                            <i class="mdi mdi-shopping"></i>
                            <span class="badge-holder">cửa tiệm</span>
                        </a>
                        <div class="dropdown-menu">

                           <!-- <a href="" class="dropdown-item  active ">
                                                            </a>-->

                         <!--                                   <a href="view:shop/action:products" class="dropdown-item  active ">
                                                                        <span data-href="" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title=""><i class="mdi mdi-plus"></i></span>
                                </a>
                            -->
                                                            <a href="http://localhost/dacsn/admin/shop/product" class="dropdown-item ">
                                    Các sản phẩm                                    <span data-href="http://localhost/dacsn/admin/shop/product/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm sản phẩm mới"><i class="mdi mdi-plus"></i></span>
                                </a>
                            
                                                            <a href="http://localhost/dacsn/admin/order" class="dropdown-item ">
                                    Đơn hàng                                                                        <span data-href="javascript:mw_admin_add_order_popup()" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm đơn hàng"><i class="mdi mdi-plus"></i></span>
                                </a>
                            

                            
                                <a href="http://localhost/dacsn/admin/shop/category" class="dropdown-item ">
                                    Thể loại                                    <span data-href="http://localhost/dacsn/admin/shop/category/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm danh mục mới"><i class="mdi mdi-plus"></i></span>
                                </a>

                            
                                                            <a href="http://localhost/dacsn/admin/customers" class="dropdown-item ">
                                    Khách hàng                                </a>

                                                            
                            
                            <a href="http://localhost/dacsn/admin/view:shop/action:options" class="dropdown-item ">
                                Cài đặt                            </a>


                        </div>
                    </li>
                
                                    <li class="nav-item">
                                                <a href="http://localhost/dacsn/admin/view:modules" class="nav-link "><i class="mdi mdi-view-grid-plus"></i> Mô-đun </a>
                    </li>
                
                                    
                        
                        <li class="nav-item">
                            <a href="http://localhost/dacsn/admin/view:packages" class="nav-link ">
                                <i class="mdi mdi-fruit-cherries"></i> Thương trường                                                            </a>
                        </li>
                                    
                <li class="nav-item dropdown">
                    <a class="nav-link  " href="http://localhost/dacsn/admin/view:settings#option_group=all">
                        <i class="mdi mdi-cog"></i>
                        <span class="badge-holder">Cài đặt</span>
                    </a>

                </li>





                
                                <li class="nav-item dropdown ">
                    <a class="nav-link " href="http://localhost/dacsn/admin/view:modules/load_module:users/action:profile">
                        <i class="mdi mdi-account-multiple"></i> Người dùng                    </a>

                                                                        <!--                            <a class="dropdown-item" href="javascript:;" onmousedown="mw.contactForm();"><strong>--><!--</strong></a>-->
                                                                <!--                    <a href="--><!--?editmode=y" class="go-live-edit-href-set dropdown-item">--><!--</a>-->
                </li>

                <li class="nav-item"><a href="http://localhost/dacsn/logout" class="nav-link"><i class="mdi mdi-power"></i> Đăng xuất</a></li>



              

                <div class="mt-5">
                    
<div class="form-group text-center">
     <div class="plain-language-selector tip" data-tip="ngôn ngữ quản trị">
        <select name="lang" id="lang_selector_admin_footer" data-width="100%" data-title="Vietnamese">
            
                            <option value="en_US">
                    English [en_US]                </option>
            
                            <option value="af_ZA">
                    Afrikaans [af_ZA]                </option>
            
                            <option value="sq_AL">
                    Albanian [sq_AL]                </option>
            
                            <option value="ar_SA">
                    Arabic [ar_SA]                </option>
            
                            <option value="id_ID">
                    Bahasa Indonesia [id_ID]                </option>
            
                            <option value="ms_MY">
                    Bahasa Melayu [ms_MY]                </option>
            
                            <option value="bg_BG">
                    Bulgarian [bg_BG]                </option>
            
                            <option value="hr_HR">
                    Croatian [hr_HR]                </option>
            
                            <option value="da_DK">
                    Dansk [da_DK]                </option>
            
                            <option value="de_DE">
                    Deutsch [de_DE]                </option>
            
                            <option value="es_ES">
                    Español [es_ES]                </option>
            
                            <option value="fi_FI">
                    Finnish [fi_FI]                </option>
            
                            <option value="fr_FR">
                    Français [fr_FR]                </option>
            
                            <option value="el_GR">
                    Greek [el_GR]                </option>
            
                            <option value="it_IT">
                    Italiano [it_IT]                </option>
            
                            <option value="ja_JP">
                    Japanese [ja_JP]                </option>
            
                            <option value="hu_HU">
                    Magyar [hu_HU]                </option>
            
                            <option value="nl_NL">
                    Nederlands [nl_NL]                </option>
            
                            <option value="no_NO">
                    Norwegian [no_NO]                </option>
            
                            <option value="uz_UZ">
                    Oʻzbek [uz_UZ]                </option>
            
                            <option value="pl_PL">
                    Polski [pl_PL]                </option>
            
                            <option value="pt_BR">
                    Português [pt_BR]                </option>
            
                            <option value="ro_RO">
                    Română [ro_RO]                </option>
            
                            <option value="sk_SK">
                    Slovenčina [sk_SK]                </option>
            
                            <option value="sl_SI">
                    Slovenščina [sl_SI]                </option>
            
                            <option value="sv_SE">
                    Svenska [sv_SE]                </option>
            
                            <option value="th_TH">
                    Thai [th_TH]                </option>
            
                            <option value="tr_TR">
                    Türkçe [tr_TR]                </option>
            
                            <option value="uk_UA">
                    Ukrainian [uk_UA]                </option>
            
                            <option value="vi_VN" selected>
                    Vietnamese [vi_VN]                </option>
            
                            <option value="zu_ZA">
                    Zulu [zu_ZA]                </option>
            
                            <option value="cs_CZ">
                    Čeština [cs_CZ]                </option>
            
                            <option value="ru_RU">
                    Русский [ru_RU]                </option>
            
                            <option value="mk_MK">
                    македонски јазик [mk_MK]                </option>
            
                            <option value="he_IL">
                    עברית [he_IL]                </option>
            
                            <option value="fa_IR">
                    فارسی [fa_IR]                </option>
            
                            <option value="hi_IN">
                    हिन्दी [hi_IN]                </option>
            
                            <option value="zh_CN">
                    中文 (中国) [zh_CN]                </option>
            
                            <option value="ko_KR">
                    한국어 [ko_KR]                </option>
            
            <option value="edit_languages_redirect">✎ Edit languages...</option>
        </select>
    </div>
</div>
    <script>
        document.querySelector("#lang_selector_admin_footer").addEventListener("change", function () {

            if(this.value == 'edit_languages_redirect'){

               window.location.href = 'http://localhost/dacsn/admin/view:settings#option_group=language';

            } else {
                mw.admin.language(this.value);

            }
        });
    </script>
                </div>
            </ul>


            <script>

                var handleConfirmBeforeLeave = function (c) {
                    if (mw.askusertostay) {
                        mw.confirm(mw.lang("You have unsaved changes. Do you want to save them first") + '?',
                            function () {

                                c.call(undefined, true)
                            },
                            function (){
                                mw.askusertostay = false;
                                c.call(undefined, false)
                            });
                    } else {
                        c.call(undefined, false)
                    }
                };
                $(document).ready(function () {



                    mw.$('.go-live-edit-href-set').each(function () {
                        var el = $(this);

                        if(self !== top){
                            el.attr('target', '_parent');
                        }


                        var href = el.attr('href');

                        if (href.indexOf("editmode") === -1) {
                            href = href + ((href.indexOf('?') === -1 ? '?' : '&') + 'editmode:y');

                            el.attr('href', href);

                        }
                    }).on('mousedown touchstart', function (event){
                        var el = this;

                        if(event.which === 1 || event.type === 'touchstart') {
                            handleConfirmBeforeLeave(function (shouldSave){
                                if(shouldSave) {
                                    var edit_cont_form =  $('#quickform-edit-content');
                                    var edit_cont_form_is_disabled_btn =  $('#js-admin-save-content-main-btn').attr('disabled');
                                    var edit_cont_title =  $('#content-title-field').val();
                                    if (edit_cont_form.length /*&& mw.edit_content && edit_cont_title && !edit_cont_form_is_disabled_btn*/) {
                                        event.stopPropagation();
                                        event.preventDefault();
                                        mw.askusertostay = false;
                                        mw.edit_content.saving = false;
                                        if($(this).hasClass('go-live-edit-href-set-view')){
                                            mw.edit_content.handle_form_submit('n');
                                        } else {
                                            mw.edit_content.handle_form_submit('y');
                                        }
                                    }
                                } else {
                                    mw.askusertostay = false;
                                    location.href = el.getAttribute('href');

                                }
                            });
                        }

                    });
                });
            </script>
        </aside>


        
    <main class="module-">

                    <div class=" module module-content-edit " content_id="0" content_type="post" parent="0" id="main-content-edit-admin" category="0" data-type="content/edit" parent-module="content/edit" parent-module-id="main-content-edit-admin">
<div class="mw-edit-content-item-admin">


          <script>
    $(document).ready(function () {
        if (window.thismodal && thismodal.resize) {
            thismodal.resize(991);
        }
    });
</script>

    <style>
    #admin-user-nav {
        display: none;
    }
</style>

    <script>
        $(document).ready(function () {
            $('.fade-window .btn-fullscreen').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-close').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');

            });
            $('.fade-window .btn-close').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-fullscreen').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');
            });


            $('.fade-window').on('scroll', function () {
                var otop = $('.mw-iframe-editor').offset().top;
                $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[otop <= 0 ? 'addClass' : 'removeClass']('scrolled').css({
                    top: otop <= 0 ? Math.abs(otop) : 0
                });
            })

        });
    </script>

<script>
    $(document).ready(function () {
        $('body > #mw-admin-container > .main').removeClass('show-sidebar-tree');
    });
</script>

<script>

    var contentChanged = function (state) {
     //   document.querySelector('.btn-save').disabled = !state;
        mw.askusertostay = state;
        document.querySelector('#content-title-field-row .card-header').classList[state ? 'add' : 'remove']('post-header-content-changed')
    }

    $(document).ready(function () {
        var all = $(window);
        var header = document.querySelector('#mw-admin-container header');
        var postHeader = mw.element(document.querySelector('#content-title-field-row .card-header'));
        all.push(document)
        all.on('scroll load resize', function () {
            var stop = $(this).scrollTop(),
                otop = $('.mw-iframe-editor').offset().top,
                tbheight = $('.admin-toolbar').outerHeight(),
                is = (stop + tbheight) >= otop;


            $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[is ? 'addClass' : 'removeClass']('scrolled').css({
                top: is ? Math.abs((stop + tbheight) - otop) : 0
            });
            var fixinheaderTime = null;
            if (stop > $(".admin-toolbar").height()) {

                $(".top-bar").addClass("fix-in-header").css('left', $('.window-holder').offset().left);
                fixinheaderTime = setTimeout(function () {
                    $(".top-bar").addClass("after-fix-in-header")
                    // $("#create-content-btn").hide()
                }, 10)
            }
            else {
                $(".top-bar").removeClass("fix-in-header after-fix-in-header");
                //$("#create-content-btn").show()
                clearTimeout(fixinheaderTime)

            }
            var isFixed = (stop > (postHeader.get(0).offsetHeight + (header ? header.offsetHeight : 0) + $(postHeader).offset().top));
            postHeader[ isFixed ? 'addClass' : 'removeClass' ]('fixed')
            postHeader.width( isFixed ? postHeader.parent().width() : 'auto' )


        });







    });
</script>


<div class="in-window">

        <script>
        slugFromUrlField = function (field) {
            var val = $(field).val();
            var slug = mw.slug.create(val);

            if(val != slug){
                $(field).val(slug);
            }

        }

        slugEdited = !(mw.url.windowHashParam('action') || '').includes('new:');
        slugFromTitle = function () {
            if (slugEdited === false) {
                var slug = mw.slug.create($('#content-title-field').val());
                $('.js-slug-base-url-changed').val(slug);
                $('.js-slug-base-url').text(slug);
            }
        }

    </script>



    <form method="post" class="mw_admin_edit_content_form  " action="http://localhost/dacsn/api/post" id="quickform-edit-content" autocomplete="off">

        
        <input type="hidden" name="id" id="mw-content-id-value" value="0">
        <input type="hidden" name="subtype" id="mw-content-subtype" value="post">
        <input type="hidden" name="subtype_value" id="mw-content-subtype-value-904089025" value="">
        <input type="hidden" name="content_type" id="mw-content-type mw-content-type-value-904089025" value="post">
        <input type="hidden" name="parent" id="mw-parent-page-value-904089025" value="0" class="">
        <input type="hidden" name="layout_file" id="mw-layout-file-value-904089025" value="inherit">
        <input type="hidden" name="active_site_template" id="mw-active-template-value-904089025" value="">

        <script type="text/javascript">
        $(document).ready(function () {
           $('.mw-edit-page-layout-selector').change(function() {
              if ($(this).val() == 'layouts__blog.php') {
                  $('#mw-content-subtype').val('dynamic');
                  $('#mw-content-type').val('page');
              }
              if ($(this).val() == 'layouts__shop.php') {
                    $('#mw-content-subtype').val('dynamic');
                    $('#mw-content-type').val('page');
                    $('#is_shop').attr('checked','checked');
                    $('#is_shop').trigger('change');
              }
           });
        });
        </script>

        
        <div class="position-relative">
            <div class="main-toolbar mw-modules-toolbar-back-button-holder">
                <a href="http://localhost/dacsn/admin/post" class="btn btn-link text-silver px-0">
                    <i class="mdi mdi-chevron-left"></i> Quay lại Nội dung                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 manage-content-body">



                


                <div class="content-title-field-row card style-1 mb-3 border-0" id="content-title-field-row">
                    <div class="card-header-fix">
                        <div class="card-header">
                            <h5><i class="mdi mdi-text text-primary mr-3"></i> <strong>Thêm bài đăng</strong></h5>


                            <div id="content-title-field-buttons" class="mw-page-component-disabled">


                               
                                    
                                
                                <button id="js-admin-save-content-main-btn" type="submit" class="btn btn-sm btn-success btn-save js-bottom-save" form="quickform-edit-content"><span><i class="mdi mdi-content-save me-1"></i>Lưu lại</span></button>
                            </div>
                        </div>
                    </div>

                                            <div class="card-body pt-3">

                            <div class="form-group" id="slug-field-holder">
                                <label class="control-label">Bài đăng tiêu đề</label>

                                
                                <input type="text" class="form-control" name="title" value="" id="content-title-field" onkeyup="slugFromTitle();" autocomplete="">
                                                                <div class="mw-admin-post-slug">
                                    <i class="mdi mdi-link mdi-20px lh-1_3 mr-1 text-silver float-left" title="Copy link" onclick="copy_url_of_page();" style="cursor: copy"></i>
                                    <span class="mw-admin-post-slug-text">
                                            
                                        <span class="text-silver" id="slug-base-url">http://localhost/dacsn/</span>
                                        <span class="contenteditable js-slug-base-url" data-bs-toggle="tooltip" data-title="edit" data-placement="right" contenteditable="true"></span>
                                    </span>
                                  </div>

                                <div class="d-none">
                                    <input autocomplete="off" name="url" id="edit-content-url" class="js-slug-base-url-changed edit-post-slug" type="text" value="">

                                    <script>


                                        $('.js-slug-base-url').on('paste', function (e) {
                                            e.preventDefault();
                                            var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                                            document.execCommand("insertHTML", false, text);
                                            if(this.innerHTML.length > mw.slug.max) {
                                                this.innerHTML = this.innerHTML.substring(0, mw.slug.max)
                                            }
                                            contentChanged(true)
                                            slugEdited = true;
                                        })
                                        .on('keydown', function (e) {
                                            var sel = getSelection();
                                            var fn = mw.wysiwyg.validateCommonAncestorContainer(sel.focusNode);
                                            var collapsedIn = fn === this && sel.isCollapsed;
                                            slugEdited = true;
                                            contentChanged(true)
                                            if (mw.event.is.enter(e)  ) {
                                                e.preventDefault();
                                            }
                                            if (!mw.event.is.delete(e) && !mw.event.is.backSpace(e) && !e.ctrlKey) {
                                                if ($('.js-slug-base-url').html().length >= mw.slug.max && collapsedIn) {
                                                    e.preventDefault();
                                                }
                                            }
                                        })
                                        $('body').on('blur', '.js-slug-base-url', function () {
                                            var slug = mw.slug.create($(this).text());
                                            $('.js-slug-base-url-changed').val(slug);
                                            $('.js-slug-base-url').text(slug);
                                        });


                                         copy_url_of_page =function(){
                                            var site_url =  $('#slug-base-url').html();
                                            var slug_base_url =  $('.js-slug-base-url').html();
                                            var url = site_url + slug_base_url ;
                                            mw.tools.copy(url);
                                        }

                                    </script>
                                </div>

                                                            </div>


                            


                                                                                    
                            <div id="mw-edit-page-editor-holder">
                                                                                                                                                                                                                                            <div class="form-group">
                                            
                                                <label class="control-label">Nội dung</label>
                                            <script>

                    mw.require('editor.js');
                    $(mwd).ready(function () {
                        mweditor73461676700947 = mw.Editor({
                        selector: document.getElementById('73461676700947'),
                        mode: 'div',
                        smallEditor: false,
                        onSave: function(){
                return mw.edit_content.handle_form_submit();
            },
                        minHeight: 250,
                        inputLanguage: 'vi_VN',

                        controls: [
                                [
                                    'undoRedo', '|', 'image', '|',
                                {
                                    group: {
                                    controller: 'bold',
                                        controls: ['italic', 'underline', 'strikeThrough']
                                    }
                                },
                                '|',
                                {
                                    group: {
                                    icon: 'mdi mdi-format-align-left',
                                        controls: ['align']
                                    }
                                },
                                '|', 'format',
                                {
                                    group: {
                                    icon: 'mdi mdi-format-list-bulleted-square',
                                        controls: ['ul', 'ol']
                                    }
                                },
                                '|', 'link', 'unlink', 'wordPaste', 'table', 'removeFormat', 'editSource'
                            ],
                        ]
                  });
                });
                </script><textarea class="form-control" name="content" rows="10" cols="50" onSaveCallback="mw.edit_content.handle_form_submit();" autocomplete="" id="73461676700947"></textarea>
                                                                                </div>
                                                                                                </div>

                            <div>
                                <script>
                                    $(document).ready(function () {
                                        setTimeout(function () {
                                             if (typeof(mw.adminPagesTree) != 'undefined') {
                                                mw.adminPagesTree.select({
                                                    id:0,
                                                    type: 'page'
                                                })
                                            }
                                            contentChanged(false)
                                        }, 100);
                                    });
                                </script>

                                                                
                                
                                                                                            </div>
                        </div>
                                    </div>

                <div class="admin-manage-content-wrap">

                                            <div id="mw-admin-edit-content-main-area"></div>
                    
                    
                    <div class="mw-admin-edit-content-holder">
                        
<script>
    mw.lib.require('colorpicker');
</script>


<div id="settings-tabs">
    <div class="card style-1 mb-3 images">
        <div class="card-header no-border" id="post-media-card-header">
            <h6><strong>Những bức ảnh</strong></h6>
            <div class="post-media-type-holder">
                <div class=" module module-pictures-admin-upload-pic-source-selector " id="edit-post-gallery-main-source-selector-holder" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="pictures/admin_upload_pic_source_selector"><div id="mw-admin-post-media-type-select"></div>
</div>

            </div>
        </div>
        <div class="card-body pt-3">
            <div class="pictures-admin-content-type-post module module-pictures-admin " data-mw-title="Picture Gallery" id="edit-post-gallery-main" for="content" content_type="post" for-id="0" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="pictures/admin">    <script type="text/javascript">
    mw.require('http://localhost/dacsn/userfiles/modules/pictures/pictures.js', true);
</script>

<style>
    .image-settings {
        color: #ffffff;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 0px;
        right: 3px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        opacity: .7;
        z-index: 5;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5);
    }


    .image-settings.settings-img {
        margin-right: 23px
    }

    .admin-thumb-item:hover .image-settings {
        opacity: 1;
    }

    .admin-thumb-item:hover .image-settings.remove-image {
        color: #ff4f52;
    }
</style>


<script>
    mw.require("files.js");
</script>

<script>
    after_upld = function (a, e, f, id, module_id) {
        if (e !== 'done') {
            var data = {};
            data['for'] = f;
            data.src = Array.isArray(a) ? a[0] : a;
            data.media_type = 'picture';

            if (!id) {
                data.for_id = 0;
            } else {
                data.for_id = (id);

            }
            mw.module_pictures.after_upload(data);
        }
        if (e === 'done') {
            setTimeout(function () {
                if (typeof load_iframe_editor === 'function') {
                    load_iframe_editor();
                }
                mw.reload_module_everywhere('pictures/admin_backend_sortable_pics_list');

                mw.reload_module_parent('pictures');
                if (self !== top && typeof parent.mw === 'object') {
                    mw.parent().reload_module('pictures');
                    mw.reload_module_parent("pictures/admin");
                    if (self !== top && typeof parent.mw === 'object') {
                        mw.parent().reload_module_everywhere('posts');
                        mw.parent().reload_module_everywhere('shop/products');
                        mw.parent().reload_module_everywhere('content', function () {
                            mw.reload_module_everywhere('#' + module_id);
                            mw.parent().reload_module_everywhere('pictures');
                        });
                    }
                }

                $('.admin-thumb-item-loading').remove();
                $('[data-type="pictures/admin"]').trigger('change')


            }, 1300);
        }
    }
</script>

<script>
    mw_admin_pictures_upload_browse_existing = function () {
        // var dialog = mw.top().dialogIframe({
        var dialog = mw.top().dialogIframe({
            url: 'http://localhost/dacsn/module/?type=files/admin&live_edit=true&remeber_path=true&ui=basic&start_path=media_host_base&from_admin=true&file_types=images&id=mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main&from_url=http://localhost/dacsn/',
            title: "Browse pictures",
            id: 'mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main',
            height: 'auto',
            autoHeight: true
        });

        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '0', 'edit-post-gallery-main');

                after_upld(pval, 'done', 'content', '0', 'edit-post-gallery-main');
                mw.notification.success('Hình ảnh được thêm vào thư viện');

                dialog.remove();
            })
        })
    };

    var getMediaImage = function () {
        var dialog = mw.top().tools.moduleFrame('pictures/media_library');
        dialog.title('Media library');
        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '0', 'edit-post-gallery-main');
                after_upld(pval, 'done', 'content', '0', 'edit-post-gallery-main');
                mw.notification.success('Hình ảnh được thêm vào thư viện');
                dialog.remove();
            });
        });
    };


    var toggleAll = function () {
        var all = mw.$(".admin-thumb-item input[type='checkbox']");

        if (all.length === all.filter(':checked').length) {
            all.each(function () {
                this.checked = false
            })
        } else {
            all.each(function () {
                this.checked = true
            })
        }

        doselect()
    }

</script>


<input name="thumbnail" type="hidden" value="">

<span class="post-media-select-all-pictures tip" data-tip="Select all" data-tipposition="top-left" onclick="toggleAll()">
    <span>0</span>
    picture selected
</span>

<div class="select_actions_holder">
    <div class="select_actions">
        <a href="javascript:;" class="btn btn-sm btn-link text-danger" onclick="deleteSelected()">
            <span>Xóa bỏ đã chọn</span>
        </a>
        <span>/</span>
        <a href="javascript:;" class="btn btn-sm btn-link" onclick="downloadSelected('none')">
            <span>Tải xuống đã chọn</span>
        </a>
    </div>
</div>


<script>
    window.imageOptions = {};
</script>

<div class="pull-right">
    <div class=" module module-pictures-admin-upload-pic-source-selector " id="edit-post-gallery-main-source-selector-holder" parent-module-id="edit-post-gallery-main" parent-module="pictures/admin" data-type="pictures/admin_upload_pic_source_selector"><div id="mw-admin-post-media-type-select"></div>
</div>
</div>



<div class="left pt-3" style="clear:both" id="admin-thumbs-holder-sort-63f06d1366217">

    <div class="relative post-thumb-uploader m-t-10" id="backend_image_uploader_63f06d1366217"></div>



    <div class="admin-thumbs-holder">
                    <div class=" module module-pictures-admin-backend-sortable-pics-list " id="edit-post-gallery-main-pictures-admin-backend-sortable-pics-list" for="content" session_id="dLAoVkrP6ToF8pSqde6ApZP2kz4yKUbdB6qPteCg" parent-module-id="edit-post-gallery-main" parent-module="pictures/admin" data-type="pictures/admin_backend_sortable_pics_list">
<script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Cài đặt hình ảnh',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-pic-sorter-63f06d13781f8');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_pic-sorter-63f06d13781f8',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>

<style>
    .admin-thumb-item-uploader-holder {
        display: block;
        position: relative;
        float: left;
        width: 18%;
        height: 110px;
        margin: 0 1% 1%;
        overflow: hidden;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone button {
        text-decoration: underline;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone {
        border-color: #4592ff;
        background-color: rgba(69, 146, 255, 0.1);
    }
</style>


<div class="mw-drop-zone" id="admin-thumbs-drop-zone-pic-sorter-63f06d13781f8" style="display: none">Thả ở đây</div>


<script>
    $(document).ready(function () {
        mw.module_pictures.init('#admin-thumbs-holder-sort-pic-sorter-63f06d13781f8');

        var uploadHolder = mw.$('#admin-thumb-item-uploaderpic-sorter-63f06d13781f8');
        mw.require('uploader.js');

        mw._postsImageUploaderSmall = mw.upload({
            element: uploadHolder,
            accept: 'image/*',
            multiple: true,
            dropZone: '#admin-thumbs-drop-zone-pic-sorter-63f06d13781f8',
            on: {
                fileUploaded: function (xhr) {
                    mw.module_pictures.after_change();
                },
                fileUploadError: function (xhr) {
                    mw.$('.admin-thumb-item-loading:last').remove();
                    mw.module_pictures.after_change();
                }
            }
        });
        mw._postsImageUploaderSmall.$holder = uploadHolder.parent();
        $(mw._postsImageUploaderSmall).on('FileAdded', function (e, res) {
            mw._postsImageUploader._thumbpreload()
        })

        $(mw._postsImageUploaderSmall).on('FileUploaded', function (e, res) {
            var url = res.src ? res.src : res;
            if (window.after_upld) {
                after_upld(url, 'Result', 'content', '', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                after_upld(url, 'done');
                mw._postsImageUploader.hide()
            }
        });

        if (!mw.$('#admin-thumbs-holder-sort-pic-sorter-63f06d13781f8 .admin-thumb-item').length) {
            uploadHolder.hide();
            if (mw._postsImageUploader) {
                mw._postsImageUploader.show();
            }

        }

        var dropdownData = [
            {value: 'url', title: 'Thêm hình ảnh từ URL' },
            {value: 'server', title: 'Duyệt qua đã tải lên' },
            {value: 'library', title: 'Chọn từ Unplash' },
            {value: 'file', title: 'Cập nhật dử liệu' },
        ];

        var dropdownConfig = {
            placeholder: 'Thêm phương tiện từ',
            data: dropdownData,
            element: '#mw-admin-post-media-type-select',
            size: 'small',
            color: 'default',
            showSelected: false
        }
        var slct = mw.select(dropdownConfig)
        slct.on('change', function (value){
            var val = value[0].value;
            if(val !== 'file') {
                mw._postsImageUploader.displayControllerByType(val)
            }
            slct.displayValue('Thêm phương tiện từ')
        });
        slct.on('optionsReady', function (options) {
            var file = options.find(function (itm){
                return itm.$value.value === 'file';
            });
            if(file) {
                var up = mw.upload({
                    element: file,
                    accept: 'image/*',
                    multiple: true
                });
                $(up).on('FileAdded', function (e, res) {
                    mw._postsImageUploader._thumbpreload()
                })
                $(up).on('FileUploaded', function (e, res) {
                    var url = res.src ? res.src : res;
                    if (window.after_upld) {
                        after_upld(url, 'Result', 'content', '', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                        after_upld(url, 'done');
                        mw._postsImageUploader.hide();
                    }
                });
            }
        });

        var dragTimer;
        $(document).on('dragover', function (e) {
            var dt = e.originalEvent.dataTransfer;
            if (dt.types && (dt.types.indexOf ? dt.types.indexOf('Files') !== -1 : dt.types.contains('Files'))) {
                $("#admin-thumbs-drop-zone-pic-sorter-63f06d13781f8").show();
                clearTimeout(dragTimer);
            }
        });
        $(document).on('dragleave', function (e) {
            dragTimer = setTimeout(function () {
                $("#admin-thumbs-drop-zone-pic-sorter-63f06d13781f8").hide();
            }, 25);
        });

        $("#admin-thumbs-drop-zone-pic-sorter-63f06d13781f8").on('drop', function () {
            $("#admin-thumbs-drop-zone-pic-sorter-63f06d13781f8").hide();
        });

        setInterval(function () {
            $('.admin-thumb-item, .admin-thumb-item-placeholder, .admin-thumb-item-uploader-holder, .mw-filepicker-desktop-type-small .mw-uploader-type-holder').each(function () {
                $(this).height($(this).width())
            })
        }, 78)


    });


</script>

<div class="admin-thumbs-holder" id="admin-thumbs-holder-sort-pic-sorter-63f06d13781f8">
    

</div>
</div>
            </div>
    <script>mw.require("files.js", true);</script>
     <script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Cài đặt hình ảnh',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-63f06d1366217');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_63f06d1366217',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '0', 'edit-post-gallery-main');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>
</div>
</div>
        </div>
    </div>

    

    
            <style>
            .fields > .card-body .module > .card {
                background: transparent;
                border: 0;
                box-shadow: unset;
            }

            .fields > .card-body .module > .card > .card-body {
                padding: 0 !important;
            }
            .fields > .card-body .module > .card > .card-header {
                display: none;
            }
        </style>
    <script>
         var variants = ([main, ...[a, ...b]]) => {
             if (!a) return main
             const combined = a.reduce((acc, x) => {
                 return acc.concat(main.map(h => {
                     return [h, x]
                    })
                 )
             }, []).map(node => {
                 var clone = [...node];
                 clone.forEach(nd => {
                     if(Array.isArray(nd)) {
                         nd.forEach(obj => {
                             clone.push(obj);
                         });
                     }
                 })
                 return clone.filter(item => !Array.isArray(item));
             })
             return variants([combined, ...b])
         }
        $(document).ready(function (){
            mw.on('customFieldsRefresh', function (e, data) {
                var fields = data.data.map(function (item){
                    return item.values.map(function (val){
                        return {
                            name: val,
                            customFieldId: item.id
                        }
                    })
                });

            })
        })
    </script>
        <div class="card style-1 mb-3 card-collapse fields js-custom-fields-card-tab">
            <div class="card-header no-border">

                <h6><strong>Các trường tùy chỉnh</strong></h6>
                <a href="javascript:;" class="btn btn-link btn-sm js-show-custom-fields" data-bs-toggle="collapse" data-bs-target="#custom-fields-settings"><span class="collapse-action-label">Chỉ</span> Custom fields</a>

            </div>

            <div class="card-body py-0">
                <div class="collapse" id="custom-fields-settings">
                    <div class=" module module-custom-fields-admin " data-mw-title="Custom fields" content-id="0" suggest-from-related="true" list-preview="true" id="fields_for_post_0" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="custom_fields/admin">


<div class="card style-1 mb-3 ">
    <div class="card-header">
        <div class=" module module-admin-modules-info-module-title " id="fields-for-post-0-admin-modules-info-module-title" for-module="custom_fields/admin" parent-module-id="fields_for_post_0" parent-module="custom_fields/admin" data-type="admin/modules/info_module_title"><h5>
            <img src="http://localhost/dacsn/userfiles/modules/custom_fields/custom_fields.svg" class="module-icon-svg-fill">
                <strong>Các trường tùy chỉnh</strong>
    </h5>


</div>
    </div>

    <div class="card-body pt-3">
        <div class="settings-wrapper">
            <script type="text/javascript">
                mw.require("custom_fields.js", true);
                mw.require("options.js", true);
                mw.require("admin.js", true);
                mw.require("admin_custom_fields.js", true);
            </script>

            
            <script>


                function addCustomFieldByVal(fieldName) {
                    $('.js-cf-options').val(fieldName);
                    $('.js-cf-options ').trigger('change');
                }


                function addCustomFieldByExisting(fieldId) {

                    var make_field = {}
                    make_field.rel_type = 'content';
                    make_field.rel_id = '0';
                    make_field.copy_of = fieldId;
                    //   mw.custom_fields.copy_field_by_id(fieldId, 'content', '0');

                    mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                    mw_cf_toggle_edit_window()
                    mw.notification.success("Các trường tùy chỉnh được lưu");
                }


                $(document).ready(function () {
                    mw.dropdown();
                    mw.$('.js-cf-options').on('change', function () {
                        var val = $(this).val();
                        var copyof = mw.$('.js-cf-options li[value="' + val + '"][data-copyof]').dataset('copyof');
                        copyof = false;
                        if (copyof == false) {
                            var make_field = {}
                            make_field.rel_type = 'content';
                            make_field.rel_id = '0';
                            make_field.type = val;
                            mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                            mw_cf_toggle_edit_window()
                            mw.notification.success("Các trường tùy chỉnh được lưu");
                        } else {

                            // mw.custom_fields.copy_field_by_id(copyof, 'content', '0');
                        }
                    });
                });
                mw_cf_toggle_edit_window = function () {
                    $('#add-field-select').toggleClass('collapse');
                    $(this).parent().toggleClass('card-closed');
                    $(this).find('.d-flex').toggleClass('justify-content-between');
                }
                mw_custom_fileds_changed_callback = function (el) {
                    mw.tools.loading('#quick-add-post-options-items-holder-container');
                    mw.reload_module('#mw_custom_fields_list_preview', function () {
                        mw.admin.custom_fields.initValues();
                        mw.tools.loading('#quick-add-post-options-items-holder-container', false);
                    });
                    mw.custom_fields.after_save();
                }
                if (!!window.thismodal) {
                    thismodal.resize(800)
                }
            </script>

            <div class="module-live-edit-settings">
                <div id="custom-field-editor" class="mw-ui-box mw-ui-box-content" style="display: none">
                    <label class="mw-ui-label">
                        <small>Biên tập <b id="which_field"></b> Cánh đồng</small>
                    </label>
                    <div class="custom-field-edit">
                        <div class="custom-field-edit-header">
                            <span class="custom-field-edit-title"></span>
                            <span class="custom-field-edit-title-head right" style="cursor:pointer;">đóng                                <span class="mw-ui-arr mw-ui-arr-down" style="opacity:0.6;"></span>
                            </span>
                        </div>
                        <div class="mw-admin-custom-field-edit-item-wrapper">
                            <div class="mw-admin-custom-field-edit-item mw-admin-custom-field-edit-fields_for_post_0"></div>
                        </div>
                    </div>
                </div>

                <div>
                    
                    
                    <div>
                        <div class="card mb-3 mt-3 card-closed">
                            <div class="card-header no-border bg-primary text-white py-1 pl-3 js-add-custom-field" style="cursor:pointer" onclick="javascript:mw_cf_toggle_edit_window()">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-plus mdi-20px mr-2"></i>
                                    <span>Thêm trường mới</span>
                                </div>
                            </div>
                            <div class="card-body collapse" id="add-field-select">




                                <div class="custom-fields-add-buttons">
                                    
                                    <script>
                                        $(document).ready(function () {
                                            var cf_existing_search_items = mw.$('.mw-custom-field-existing-item-btn', '.custom-fields-add-buttons');

                                            mw.$('#cf-add-existing-search', '.custom-fields-add-buttons').on('input', function () {
                                                mw.tools.search(this.value, cf_existing_search_items, function (found) {
                                                    $(this)[found?'show':'hide']();
                                                });
                                            });
                                        });
                                    </script>

                                        <div class="mw-flex-row">
                                            <div class="mw-flex-col-xs-10 mw-flex-col-sm-6 mw-flex-col-md-8 mw-flex-col-lg-10">
                                                <label class="control-label">các lĩnh vực hiện có</label>
                                                <small class="d-block mb-2 text-muted">Chọn từ các trường hiện có của bạn dưới đây</small>
                                            </div>
                                            <div class="mw-flex-col-xs-2 mw-flex-col-sm-6 mw-flex-col-md-4 mw-flex-col-lg-2">
                                                <input type="text" class="form-control form-control-sm" aria-label="Search" id="cf-add-existing-search" placeholder="Search">
                                            </div>
                                        </div>






                                    <div class="row">
                                                                                    <button type="button" class="btn btn-link text-dark px-1 mw-custom-field-existing-item-btn" onclick="javascript:addCustomFieldByExisting('22','price');">

                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title  small" title="price">price</span>
                                                    <span class="d-none">price</span>
                                            </button>
                                                                            </div>
                                        <hr>
                                    

                                    <select class="js-cf-options" data-live-search="true" data-size="7" style="display: none;">
                                                                                                                                    <option data-copyof="22" value="price">
                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title" title="price">price</span>
                                                </option>
                                                                                    
                                                                                    <option value="price">
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title">Giá bán</span>
                                            </option>
                                                                                    <option value="text">
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title">Trương Văn bản</span>
                                            </option>
                                                                                    <option value="radio">
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title">Lựa chọn duy nhất</span>
                                            </option>
                                                                                    <option value="dropdown">
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title">Thả xuống</span>
                                            </option>
                                                                                    <option value="checkbox">
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title">Nhiều lựa chọn</span>
                                            </option>
                                                                                    <option value="number">
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title">Con số</span>
                                            </option>
                                                                                    <option value="phone">
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title">Điện thoại</span>
                                            </option>
                                                                                    <option value="site">
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title">Trang mạng</span>
                                            </option>
                                                                                    <option value="email">
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title">E-mail</span>
                                            </option>
                                                                                    <option value="address">
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title">Địa chỉ</span>
                                            </option>
                                                                                    <option value="country">
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title">Quốc gia</span>
                                            </option>
                                                                                    <option value="date">
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title">Ngày</span>
                                            </option>
                                                                                    <option value="time">
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title">Thời gian</span>
                                            </option>
                                                                                    <option value="color">
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title">Màu sắc</span>
                                            </option>
                                                                                    <option value="upload">
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title">Tải lên tệp</span>
                                            </option>
                                                                                    <option value="property">
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title">Bất động sản</span>
                                            </option>
                                                                                    <option value="breakline">
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title">Ngắt dòng</span>
                                            </option>
                                                                                    <option value="hidden">
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title">Giấu trang</span>
                                            </option>
                                                                            </select>

                                    <label class="control-label"> Thêm trường mới</label>
                                    <small class="d-block mb-2 text-muted">Thêm trường tùy chỉnh mới từ danh sách dưới đây</small>

                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-price" onclick="javascript:addCustomFieldByVal('price');">
                                            <div>
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Giá bán</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-text" onclick="javascript:addCustomFieldByVal('text');">
                                            <div>
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Trương Văn bản</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-radio" onclick="javascript:addCustomFieldByVal('radio');">
                                            <div>
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Lựa chọn duy nhất</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-dropdown" onclick="javascript:addCustomFieldByVal('dropdown');">
                                            <div>
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Thả xuống</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-checkbox" onclick="javascript:addCustomFieldByVal('checkbox');">
                                            <div>
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Nhiều lựa chọn</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-number" onclick="javascript:addCustomFieldByVal('number');">
                                            <div>
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Con số</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-phone" onclick="javascript:addCustomFieldByVal('phone');">
                                            <div>
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Điện thoại</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-site" onclick="javascript:addCustomFieldByVal('site');">
                                            <div>
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Trang mạng</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-email" onclick="javascript:addCustomFieldByVal('email');">
                                            <div>
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">E-mail</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-address" onclick="javascript:addCustomFieldByVal('address');">
                                            <div>
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Địa chỉ</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-country" onclick="javascript:addCustomFieldByVal('country');">
                                            <div>
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Quốc gia</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-date" onclick="javascript:addCustomFieldByVal('date');">
                                            <div>
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Ngày</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-time" onclick="javascript:addCustomFieldByVal('time');">
                                            <div>
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Thời gian</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-color" onclick="javascript:addCustomFieldByVal('color');">
                                            <div>
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Màu sắc</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-upload" onclick="javascript:addCustomFieldByVal('upload');">
                                            <div>
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Tải lên tệp</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-property" onclick="javascript:addCustomFieldByVal('property');">
                                            <div>
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Bất động sản</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-breakline" onclick="javascript:addCustomFieldByVal('breakline');">
                                            <div>
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Ngắt dòng</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-hidden" onclick="javascript:addCustomFieldByVal('hidden');">
                                            <div>
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Giấu trang</span>
                                            </div>
                                        </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="thin">

                <label class="control-label">lĩnh vực của bạn</label>
                <small class="d-block mb-2 text-muted">Danh sách các trường tùy chỉnh đã thêm của bạn</small>

                <div id="custom-fields-box">
                    
                    <div class=" module module-custom-fields-list " data-type="custom_fields/list" for="content" rel_id="0" list-preview="true" id="mw_custom_fields_list_preview" parent-module-id="fields_for_post_0" parent-module="custom_fields/admin"><script>
    if (typeof __smart_field_opener !== 'function') {
        __smart_field_opener = function (e) {
            if (e === undefined) {
                return;
            }
            if (mw.tools.hasClass(e.target.className, 'mw-ui-field') || mw.tools.hasClass(e.target.className, 'mw-custom-fields-from-page-title-text')) {
                mw.tools.toggle('.custom_fields_selector', '#smart_field_opener');

            }
        }
    }
</script>

<script>mw.lib.require('mwui_init');</script>

    
    <style>
        .mobile-th {
            display: none;
        }

        #custom-fields-post-table [class*='mw-custom-field-icon-'] {
            font-size: 25px;
            display: block;
        }

        #custom-fields-post-table td {
            vertical-align: middle;
        }
    </style>

<script>

    $(document).ready(function (){
        mw.trigger('customFieldsRefresh', {data:  []})
    })

</script>

                </div>
                </div>


            </div>
        </div>

        <div class=" module module-help-modal-with-button " id="fields-for-post-0-help-modal-with-button" for_module="custom_fields" parent-module-id="fields_for_post_0" parent-module="custom_fields/admin" data-type="help/modal_with_button"><script>
    function openModalHelpReadmeMd(for_module = false) {
        var modal_title = 'Làm thế nào để sử dụng mô-đun này?';

        mw_admin_help_modal = mw.top().dialog({
            content: '<div id="mw_admin_help_modal">Loading...</div>',
            title: modal_title,
            width: 1000,
            height: 700,
            id: 'mw_admin_help_item_popup_modal'
        });

        var params = {}
        params.for_module = for_module;

        mw.top().load_module('help/read', '#mw_admin_help_modal', null, params);
    }
</script>

<a href="javascript:;" onclick="openModalHelpReadmeMd('custom_fields');"><i class="fa fa-info-circle"></i> Cứu giúp</a>
</div>
    </div>
</div>
</div>
                                    </div>
            </div>
        </div>
    
    <!--
        <div class="card style-1 mb-3">
            <div class="card-body pt-3">
                            </div>
        </div>
    -->
    
    
    <div class=" module module-content-views-advanced-settings " id="main-content-edit-admin-content-views-advanced-settings" content-id="0" content-type="post" subtype="post" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/advanced_settings">    <script type="text/javascript">
        mw.lib.require('mwui_init');
    </script>
    <script type="text/javascript">
        mw.reset_current_page = function (a, callback) {
            mw.tools.confirm("Bạn có chắc chắn muốn Đặt lại nội dung của trang này không? Tất cả văn bản của bạn sẽ bị mất vĩnh viễn !!", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/reset_edit", obj, function (data) {
                    mw.notification.success("Nội dung đã được đặt lại!");

                    if (typeof(mw.edit_content) == 'object') {
                        mw.edit_content.load_editor()
                    }

                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        mw.copy_current_page = function (a, callback) {
            mw.tools.confirm("Bạn có chắc chắn muốn sao chép trang này không?", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/copy", obj, function (data) {
                    mw.notification.success("Nội dung đã được sao chép");
                    if (data != null) {
                        var r = confirm("Chuyển đến trang mới?");
                        if (r == true) {
                            if (self != top) {
                                top.window.location = mw.settings.site_url + "api/content/redirect_to_content?id=" + data;

                            } else {
                               // mw.url.windowHashParam('action', 'editpage:' + data);
                                window.location = "http://localhost/dacsn/admin/content/"+data+"/edit";
                            }
                            //content/redirect_to_content_id
                        } else {
                        }
                    }
                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        // mw.del_current_page = function (a, callback) {
        //
        //     mw.admin.content.delete(a, function () {
        //         window.location.href = window.location.href;
        //     });
        //
        //
        // }

        mw.adm_cont_type_change_holder_event = function (el) {
            mw.tools.confirm("Bạn có chắc chắn muốn thay đổi loại nội dung không? Vui lòng xem xét tài liệu để biết thêm thông tin", function () {
                var root = document.querySelector('#main-content-edit-admin-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val()
                if (form != undefined && form.querySelector('input[name="content_type"]') != null) {
                    form.querySelector('input[name="content_type"]').value = ctype;
                }
                // Change api post url to content api
                $(form).attr('action', mw.settings.site_url + "api/content/" + form.querySelector('input[name="id"]').value);
                $(form).attr('content-type-is-changed', 1);
            });
        }
        mw.adm_cont_subtype_change_holder_event = function (el) {
            mw.tools.confirm("Bạn có chắc chắn muốn thay đổi loại phụ nội dung không? Vui lòng xem xét tài liệu để biết thêm thông tin", function () {
                var root = document.querySelector('#main-content-edit-admin-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val();
                if (form != undefined && form.querySelector('input[name="subtype"]') != null) {
                    form.querySelector('input[name="subtype"]').value = ctype
                }
            });
        }
        mw.adm_cont_enable_edit_of_created_at = function () {
            $('.mw-admin-edit-post-change-created-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-created-at-value').remove();
        }

        mw.adm_cont_enable_edit_of_updated_at = function () {
            $('.mw-admin-edit-post-change-updated-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-updated-at-value').remove();
        }

        $(document).ready(function (){
            $(".collapse").each(function(){
                var key = 'collapse' + this.id;
                var isStored = mw.storage.get(key);

                var el = $(this);

                el.on('show.bs.collapse', function (){
                    mw.storage.set(key, true);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Ẩn giấu');
                })
                el.on('hide.bs.collapse', function (){
                    mw.storage.set(key, false);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Chỉ');
                })

                if( isStored ) {
                    el.collapse( 'show' );
                } else {
                    el.collapse( 'hide' );
                }

            });
        })
    </script>


    <div class=" module module-content-views-settings-from-template " id="main-content-edit-admin-content-views-advanced-settings-content-views-settings-from-template" content-type="post" content-id="0" parent-module-id="main-content-edit-admin-content-views-advanced-settings" parent-module="content/views/advanced_settings" data-type="content/views/settings_from_template">
</div>

   

    

    <!-- SEO Settings -->
    <div class="card style-1 mb-3 card-collapse js-card-search-engine">
        <div class="card-header no-border">
            <h6><strong>Máy tìm kiếm</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#seo-settings"><span class="collapse-action-label">Chỉ</span> Thiết lập SEO</a>
        </div>
        <div class="card-body py-0">
            <div class="collapse" id="seo-settings">
                <small class="text-muted d-block">Thêm tiêu đề và mô tả để xem cách sản phẩm này có thể xuất hiện trong danh sách công cụ tìm kiếm</small>

                <hr class="thin no-padding">

                <div class="row">



                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label">Tiêu đề meta</label>
                            <small data-bs-toggle="tooltip" title="Tiêu đề xuất hiện trên trang kết quả của công cụ tìm kiếm"></small>
                            <small class="text-muted d-block mb-2">Tiêu đề xuất hiện trên trang kết quả của công cụ tìm kiếm</small>

                            <input type="text" class="form-control" name="content_meta_title" value="" autocomplete="">                        </div>
                    </div>






                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Mô tả meta</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>

                    <textarea class="form-control" name="description" rows="10" cols="50" autocomplete=""></textarea>                        </div>
                    </div>





                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Từ khóa meta</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>
                            <small class="text-muted d-block mb-2">Phân tách các từ khóa bằng dấu phẩy và dấu cách</small>

                    <input type="text" class="form-control" name="content_meta_keywords" value="" autocomplete="">                        </div>

                        <small class="text-muted">Nhập các từ khóa mô tả nội dung của bạn - Ví dụ: Blog, Tin tức trực tuyến, Điện thoại bán, v.v.</small>

                    </div>










                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Hình ảnh OG</label>
                            <small class="text-muted d-block mb-2">
                                Những hình ảnh đó sẽ được hiển thị dưới dạng hình ảnh bài đăng tại chia sẻ facebook.<br>
                                Nếu bạn muốn đính kèm hình ảnh og, bạn phải tải chúng lên thư viện từ 'Thêm phương tiện'.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Advanced Settings -->
    <div class="card style-1 mb-3 card-collapse">
        <div class="card-header no-border">
            <h6><strong>Cài đặt nâng cao</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#advanced-settings"><span class="collapse-action-label">Chỉ</span>  cài đặt nâng cao</a>
        </div>

        <div class="card-body py-0">
            <div class="collapse" id="advanced-settings">
                <p>Sử dụng cài đặt nâng cao để tùy chỉnh bài đăng trên blog của bạn</p>
                <hr class="thin no-padding">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label>Chuyển hướng đến URL</label>
                            <small class="text-muted d-block mb-2">Nếu đặt điều này, người dùng sẽ được chuyển hướng đến URL mới khi truy cập trang</small>
                            <input type="text" name="original_link" class="form-control" placeholder="http://yoursite.com" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Yêu cầu đăng nhập</label>
                            <small class="text-muted d-block mb-2">Nếu được đặt thành có - trang này sẽ yêu cầu đăng nhập từ người dùng đã đăng ký để được mở</small>
                            <div class="custom-control custom-switch pl-0">
                                <label class="d-inline-block mr-5" style="cursor:pointer" for="require_login">Không</label>
                                <input type="checkbox" class="custom-control-input" style="cursor:pointer" id="require_login" name="require_login" data-value-checked="1" data-value-unchecked="0">
                                <label class="custom-control-label" style="cursor:pointer" for="require_login">Đúng</label>
                            </div>
                        </div>
                    </div>
                                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Tác giả</label>

                                <div id="select-post-author"></div>

                                <script>mw.require('autocomplete.js')</script>
                                                                <script>
                                    $(document).ready(function () {
                                        var created_by_field = new mw.autoComplete({
                                            element: "#select-post-author",
                                            ajaxConfig: {
                                                method: 'get',
                                                url: mw.settings.api_url + 'users/search_authors?kw=${val}',
                                                cache: true
                                            },
                                            map: {
                                                value: 'id',
                                                title: 'display_name',
                                                image: 'picture'
                                            },
                                            selected: [
                                                {
                                                    id: 1,
                                                    display_name: 'kimthisophi1101'
                                                }
                                            ]
                                        });
                                        $(created_by_field).on("change", function (e, val) {
                                            $("#created_by").val(val[0].id).trigger('change')
                                        })
                                    });
                                </script>
                                <input type="hidden" name="created_by" id="created_by" value="1">
                            </div>
                        </div>
                                    </div>
                <hr class="thin no-padding">
                <!-- More Advanced Settings -->
                
                
                
                                

                




                





            </div>
        </div>
    </div>
    






    


<script>
    mw.del_current_page = function (a, callback) {
        mw.admin.content.delete(a, function () {
            window.location.href = window.location.href;
        });
    }

    mw.del_current_page_forever = function (a, callback) {
        mw.admin.content.deleteForever(a, function () {
            window.location.href = window.location.href;
        });
    }


    mw.del_current_page_restore = function (a, callback) {
        mw.admin.content.restoreFromTrash(a, function () {
            window.location.href = window.location.href;
        });
    }
</script>





</div>
    

    <div class="mt-9">
        <!--  -->
    </div>

</div>


<script>
    $(document).ready(function () {

        pick1 = mw.colorPicker({
            element: '.mw-ui-color-picker',
            position: 'bottom-left',
            onchange: function (color) {

            }
        });

        setTimeout(function (){
            mw.askusertostay = false;
          //  document.querySelector('.js-bottom-save').disabled = true;
        }, 999)

    });
</script>
                    </div>

                    
                    <script>
    mw.require("content.js");
    mw.require("files.js");
    mw.require("admin_custom_fields.js");
</script>
<script>
    /* FUNCTIONS */

    if (self !== parent && !!parent.mw) {

        mw.top().win.iframe_editor_window = window.self;
    }


    mw.edit_content = {};

    mw.edit_content.saving = false;


    mw.edit_content.create_new = function () {
        mw.$('#main-content-edit-admin').attr("content-id", "0");
        mw.$('#main-content-edit-admin').removeAttr("just-saved");
        mw.reload_module('#main-content-edit-admin');
    };

    mw.edit_content.close_alert = function () {
        mw.$('#quickform-edit-content').show();
        mw.$('#post-added-alert-904089025').hide();

    };

    mw.edit_content.load_page_preview = function (element_id) {
        var element_id = element_id || 'mw-admin-content-iframe-editor';
        var parent_page = mw.$('#mw-parent-page-value-904089025', '#main-content-edit-admin').val();
        var content_id = mw.$('#mw-content-id-value', '#main-content-edit-admin').val();
        var content_type = mw.$('#mw-content-type-value-904089025', '#main-content-edit-admin').val()
        var subtype = mw.$('#mw-content-subtype', '#main-content-edit-admin').val();
        var subtype_value = mw.$('#mw-content-subtype-value-904089025', '#main-content-edit-admin').val();
        var active_site_template = $('#mw-active-template-value-904089025', '#main-content-edit-admin').val();
        var active_site_layout = $('#mw-layout-file-value-904089025').val();
        // var name = 'content/views/edit_default_inner';
        var name = 'content/views/layout_selector';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        attributes['template-selector-position'] = 'none';
        attributes['live-edit-overlay'] = true;
        attributes['edit_page_id'] = content_id;
        mw.load_module(name, selector, callback, attributes);
    }


    mw.edit_content.load_editor = function (element_id) {

        var parent_page = mw.$('#mw-parent-page-value-904089025', '#main-content-edit-admin').val();
        var content_id = mw.$('#mw-content-id-value', '#main-content-edit-admin').val();
        var content_type = mw.$('#mw-content-type-value-904089025', '#main-content-edit-admin').val()
        var subtype = mw.$('#mw-content-subtype', '#main-content-edit-admin').val();
        var subtype_value = mw.$('#mw-content-subtype-value-904089025', '#main-content-edit-admin').val();
        var active_site_template = $('#mw-active-template-value-904089025', '#main-content-edit-admin').val();
        var active_site_layout = $('#mw-layout-file-value-904089025').val();
        var name = 'content/views/edit_default_inner';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        mw.load_module(name, selector, callback, attributes);
    }
    mw.edit_content.before_save = function () {
        mw.askusertostay = false;
        if (window.parent != undefined && window.parent.mw != undefined) {
            window.mw.parent().askusertostay = false;
        }
    }
    mw.edit_content.after_save = function (saved_id) {
        var saved_id = typeof saved_id === "number" ? saved_id : saved_id.id;

        mw.askusertostay = false;
        mw.$('.post-header-content-changed').removeClass('post-header-content-changed')
        var content_id = mw.$('#mw-content-id-value').val();
        var quick_add_holder = document.getElementById('mw-quick-content');
        if (quick_add_holder != null) {
            mw.tools.removeClass(quick_add_holder, 'loading');
        }
        if (content_id == 0) {
            if (saved_id !== undefined) {
                mw.$('#mw-content-id-value').val(saved_id);
            }
                    }
        if (mw.notification != undefined) {
            mw.notification.success('Đã lưu nội dung!');
        }



        if (parent !== self && !!parent.mw) {

            mw.reload_module_everywhere('content/views/edit_default_sidebar_variants');
            mw.reload_module_everywhere('posts');
            mw.reload_module_everywhere('shop/products');
            mw.reload_module_everywhere('shop/cart_add');
            mw.reload_module_everywhere('pages');
            mw.reload_module_everywhere('content');
            mw.reload_module_everywhere('custom_fields');
            mw.reload_module_everywhere('content/manager');
            mw.reload_module_everywhere('content/manager');
            mw.reload_module_everywhere('shop');

            mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            mw.parent().askusertostay = false;
        } else {
            mw.reload_module('[data-type="pages"]', function () {
                if (mw.$("#pages_tree_toolbar .mw_del_tree_content").length === 0) {
                    mw.$("#pages_tree_toolbar").removeClass("activated");
                    var action = mw.url.windowHashParam('action');
                    if (action) {
                        var id = action.split(':')[1];
                        if (id) {
                            $('[data-page-id="' + id + '"]').addClass("active-bg")
                        }
                    }


                }
                mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            });
        }
    }

    mw.edit_content.set_category = function (id) {
        /* FILLING UP THE HIDDEN FIELDS as you change category or parent page */
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="checkbox"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw_cat_selected_for_post').val(names.join(',')).trigger("change");
        } else {
            mw.$('#mw_cat_selected_for_post').val('__EMPTY_CATEGORIES__').trigger("change");
        }
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="radio"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw-parent-page-value-904089025').val(names[0]).trigger("change");
        } else {
            mw.$('#mw-parent-page-value-904089025').val(0).trigger("change");
        }
    }


     mw.edit_content.handle_form_submit = function (go_live) {


        if (mw.edit_content.saving) {
            return false;
        }
        mw.edit_content.saving = true;
        var go_live_edit = go_live || false;
        var el = document.getElementById('quickform-edit-content');
        if (el === null) {
            return;
        }

        mw.edit_content.before_save();
        var module = $(mw.tools.firstParentWithClass(el, 'module'));


        var data = mw.serializeFields(el);
        data.id = mw.$('#mw-content-id-value').val();

        var categories = [];


        if (window.categorySelector) {
            $.each(categorySelector.tree.selectedData, function () {
                if (this.type == 'category') {
                    categories.push(this.id);
                }
                if (this.type == 'page') {
                    data.parent = this.id;
                }
            });
        }


        if (categories.length) {
            data.category_ids  = categories.join(',')
        } else {
            data.category_ids = 0;

        }

         var has_menu_edit = document.getElementById('menu-selector-item');
         if (has_menu_edit !== null &&  !data['add_content_to_menu[]'] ) {
              data['add_content_to_menu[]'] = [0];
         }





         //
        // if (data.tag_names.length) {
        //     data.tag_names  = data.tag_names.join(',')
        // } else {
        //     data.tag_names = false;
        // }


        module.addClass('loading');


        mw.content.save(data, {
            url: el.getAttribute('action'),
            onSuccess: function (a) {
                if (window.pagesTreeRefresh) {
                    pagesTreeRefresh()
                }

                if (typeof(data.id) !== 'undefined') {
                mw.$('.mw-admin-go-live-now-btn').attr('content-id', data.id);
                }
                mw.askusertostay = false;
                mw.is_new_content_added = false;
                if ( typeof(data.id) !== 'undefined' && (data.id) == 0) {
                    mw.is_new_content_added = true;
                }
                if (parent !== self && !!window.parent.mw) {
                    window.mw.parent().askusertostay = false;
                    if (typeof(data.is_active) !== 'undefined' && typeof(data.id) !== 'undefined') {

                        if ((data.id) != 0) {
                            if ((data.is_active) == 0) {
                                window.mw.parent().$('.mw-set-content-unpublish').hide();
                                window.mw.parent().$('.mw-set-content-publish').show();
                            }
                            else if ((data.is_active) == 1) {
                                window.mw.parent().$('.mw-set-content-publish').hide();
                                window.mw.parent().$('.mw-set-content-unpublish').show();
                            }
                        }

                    }
                }

                if (typeof(this) != "undefined") {
                    var inner_edits = mw.collect_inner_edit_fields();

                    if (inner_edits !== false) {
                        var save_inner_edit_data = inner_edits;
                        save_inner_edit_data.id = this;

                        var xhr = mw.save_inner_editable_fields(save_inner_edit_data);
                        xhr.success(function () {
                            mw.trigger('adminSaveEnd');
                        });
                        xhr.fail(function () {
                            $(window).trigger('adminSaveFailed');
                        });

                    }
                }
                if (go_live_edit != false) {
                    if (parent !== self && !!window.parent.mw) {
                        if (window.mw.parent().drag != undefined && window.mw.parent().drag.save != undefined) {
                            window.mw.parent().drag.save();
                        }
                        window.mw.parent().askusertostay = false;
                    }
                    var nid = typeof this === "number" ? this : this.id;

                    $.get('http://localhost/dacsn/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }
                         if(go_live_edit === 'n'){
                        mw.top().win.location.href = data.url + '?editmode=n';
                        } else {
                        mw.top().win.location.href = data.url + '?editmode=y';
                        }
                    });
                }
                else {
                    var nid = typeof this === "number" ? this : this.id;
                     $.get('http://localhost/dacsn/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }

                        var slug = data.slug;
                        mw.$("#edit-content-url").val(slug);
                        mw.$(".view-post-slug").html(slug);
                        mw.$("#slug-base-url").html(data.slug_prefix_url);
                         if(go_live_edit === 'n') {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=n');
                         } else {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=y');

                         }
                        mw.$("a.quick-post-done-link").html(data.url);



                         mw.$("#main-content-edit-admin").attr("content-id", nid);
                                                  //if (self === parent) {
                         if (self === parent) {

                             if(mw.is_new_content_added){
                                 window.location = data.admin_url;
                             }
                             //var type =  el['subtype'];
                             // mw.url.windowHashParam("action", "editpage:" + nid);
                             // window.location = window.location;
                         }
                         
                         if ($('.mw_admin_edit_content_form').attr('content-type-is-changed') == 1) {
                             location.reload();
                             // This will redirect the full page with the new content type fields and changes
                         }
                         mw.edit_content.after_save(this);

                    });

                }
                mw.edit_content.saving = false;


                $(window).trigger('adminSaveContentCompleted');

                if (self !== parent) {



                    if ((data.id) == 0) {



                        var nid = typeof this === "number" ? this : this.id;


                        mw.$("#main-content-edit-admin").attr("content-id", nid);

                        mw.reload_module("#main-content-edit-admin");

                        mw.reload_module_everywhere('menu');
                        mw.reload_module_everywhere('pages');
                        mw.reload_module_everywhere('posts');
                        mw.reload_module_everywhere('shop/products');


                    }
                }






            },
            onError: function () {
                $(window).trigger('adminSaveFailed');
                module.removeClass('loading');

                mw.edit_content.saving = false;
            }
        });
    }

    mw.collect_inner_edit_fields = function (data) {
        var frame = document.querySelector('#mw-admin-content-iframe-editor iframe');
        if (frame === null) return false;
        var frameWindow = frame.contentWindow;
        if (typeof(frameWindow.mwd) === 'undefined') return false;
        var root = frameWindow.document.getElementById('mw-iframe-editor-area');
        var data = frameWindow.mw.drag.getData(root);
        return data;
    }

    mw.save_inner_editable_fields = function (data) {
        var xhr = $.ajax({
            type: 'POST',
            url: mw.settings.site_url + 'api/save_edit',
            data: data,
            datatype: "json"
        });
        return xhr;
    }


    /* END OF FUNCTIONS */
</script>

<script>
    $(mwd).ready(function () {
        $("#quickform-edit-content").on('keydown', "input[type='text']", function (e) {
            if (e.keyCode == 13) {
                e.preventDefault()
            }
        })
        $(window).on('hashchange beforeunload', function (e) {
            mw.$(".mw-admin-go-live-now-btn").off('click');
        });


        mw.$(".mw-admin-go-live-now-btn").off('click');

        mw.$(".mw-admin-go-live-now-btn").on('click', function (e) {
            mw.edit_content.handle_form_submit(true);
            return false;
        });

        mw.reload_module('#edit-post-gallery-main');

        mw.edit_content.load_editor();
                // mw.edit_content.render_category_tree("904089025");
        mw.$("#quickform-edit-content").submit(function () {
            mw.edit_content.handle_form_submit();
            return false;
        });
                mw.$('#mw-parent-page-value-904089025').on('change', function (e) {
            var iframe_ed = $('.mw-iframe-editor');


            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {

                mw.edit_content.load_editor();
            }
            //mw.edit_content.load_editor();
        });
        $(window).on('templateChanged', function (e) {

            var iframe_ed = $('.mw-iframe-editor')
            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {
                // mw.edit_content.load_editor();
            }
            mw.edit_content.load_editor();
        });
        if (document.querySelector('.mw-iframe-editor') !== null) {
            document.querySelector('.mw-iframe-editor').onload = function () {
                $(window).on('scroll', function () {
                    var scrolltop = $(window).scrollTop();
                    if (document.getElementById('mw-edit-page-editor-holder') !== null) {
                        var otop = document.getElementById('mw-edit-page-editor-holder').offsetTop;
                        if ((scrolltop + 100) > otop) {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'absolute';
                            ewr.style.top = scrolltop + otop + 'px';
                            ewr.style.top = scrolltop - otop /*+ document.querySelector('.admin-manage-toolbar').offsetTop*/ + document.querySelector('.admin-manage-toolbar').offsetHeight - 98 + 'px';
                            mw.$('.admin-manage-toolbar-scrolled').addClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.addClass(ewr, 'editor_wrapper_fixed');
                        }
                        else {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'static';
                            mw.$('.admin-manage-toolbar-scrolled').removeClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.removeClass(ewr, 'editor_wrapper_fixed');
                        }
                    }
                });
            }
        }

        var title_field_shanger = $('#content-title-field');

        if (title_field_shanger.length > 0) {
            $(title_field_shanger).unbind("change");
            $(title_field_shanger).on("change", function () {
                var newtitle = $(this).val();
                $('#content-title-field-master').val(newtitle);
            });
        }

        $(".postbtnmore").on('mousedown', function () {
            $(this).remove()
        })

        window.QTABS = mw.tabs({
            nav: mw.$("#quick-add-post-options .mw-ui-abtn"),
            tabs: mw.$("#quick-add-post-options-items-holder .quick-add-post-options-item"),
            toggle: true,
            onclick: function (qtab) {

                var tabs = $(document.getElementById('quick-add-post-options-items-holder'));
                if (mw.$("#quick-add-post-options .mw-ui-abtn.active").length > 0) {
                    var tabsnav = $(document.getElementById('quick-add-post-options'));
                    var off = tabsnav.offset();
                    $(tabs).show();
                    QTABMaxHeight();
                }
                else {
                    $(tabs).hide();
                }
                if (qtab.id === 'post-gallery-manager') {
                    $(qtab).width(mw.$("#mw-edit-page-editor-holder").width())
                } else if (qtab.id === 'quick-add-post-options-item-template') {
                    mw.reload_module('#mw-quick-add-choose-layout');
                }


                try {
                    document.querySelector('.mw-iframe-editor').contentWindow.GalleriesRemote()
                } catch (err) {
                }

            }
        });

        QTABMaxHeight = function () {
            var qt = mw.$('#quick-add-post-options-items-holder-container'),
                wh = $(window).height(),
                st = $(window).scrollTop();
            if (qt.length == 0) {
                return false;
            }
            qt.css('maxHeight', (wh - (qt.offset().top - st + 20)));
            qt.css('width', ($(".admin-manage-content-wrap").width()));
        }

        $(mww).on('mousedown', function (e) {
            var el = document.getElementById('content-edit-settings-tabs-holder');
            var cac = mw.wysiwyg.validateCommonAncestorContainer(e.target);
            if (el != null && !el.contains(e.target)
                && !!cac
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-btn')
                && cac.className.indexOf('grammarly') !== -1
                && cac.querySelector('[class*="grammarly"]') === null
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-ghost')
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-card')) {
                window.QTABS.unset()
                mw.$(".quick-add-post-options-item, #quick-add-post-options-items-holder").hide();
                mw.$("#quick-add-post-options .active").removeClass('active');
            }
        });

        mw.$(".mw-iframe-editor").on("editorKeyup", function () {
            mw.tools.addClass(document.body, 'editorediting');
        });
        $(document.body).on("mousedown", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });
        mw.$(".admin-manage-toolbar").on("mousemove", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });



    });
</script>
                </div>
            </div>

            
<style>
    #quick-parent-selector-tree .mw-tree-nav{
        margin: 0;
        padding: 10px 0 0 20px;
        border-radius: 3px;
        max-height: calc(100vh - 100px);
        overflow: auto;
    }

</style>

<script>

    var loadCategoriesTree = function () {
        var request = new XMLHttpRequest();
        request.open('GET', 'http://localhost/dacsn/api/content/get_admin_js_tree_json', true);
        request.send();
        request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
                var tdata = JSON.parse(request.responseText);

                if(!tdata || !tdata.length){
                    tdata = [];
                }

                var selectedPages = [ 0];
                var selectedCategories = [ ];



                var tags = mw.element();
                var tree = mw.element();

                mw.element('.post-category-tags').empty().append(tags)
                mw.element('#quick-parent-selector-tree').empty().append(tree)



                window.categorySelector = new mw.treeTags({
                    data: tdata,
                    selectable: true,
                    multiPageSelect: false,
                    tagsHolder: tags.get(0),
                    treeHolder: tree.get(0),
                    color: 'primary',
                    size: 'sm',
                    outline: true,
                    saveState: false,
                    on: {
                        selectionChange: function () {
                            //  document.querySelector('.btn-save').disabled = false;
                            mw.askusertostay = true;

                            var selected = categorySelector.tree.getSelected();
                            if(selected.length){
                                var hasPage = selected.find(function (item){
                                    return item.type === 'page';
                                });

                                if(typeof hasPage === 'undefined'){
                                    var category = selected[0];
                                    categorySelector.tree.select(category.parent_id, 'page', true);
                                }
                             }

                        }
                    }
                });

                $(categorySelector.tree).on('ready', function () {
                    if (window.pagesTree && pagesTree.selectedData.length) {
                        $.each(pagesTree.selectedData, function () {
                            categorySelector.tree.select(this, undefined, false)
                        })
                    } else {

                        $.each(selectedPages, function () {
                            categorySelector.tree.select(this, 'page', false);

                        });
                        $.each(selectedCategories, function () {
                            categorySelector.tree.select(this, 'category', false);
                        });

                    }
                    categorySelector.tags.setData(categorySelector.tree.getSelected());

                    var atcmplt = mw.element('<div class="input-group mb-0 prepend-transparent"> <div class="input-group-prepend"> <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span> </div> <input type="text" class="form-control form-control-sm" placeholder= Tìm kiếm> </div>');

                    tree.before(atcmplt);

                    atcmplt.find('input').on('input', function () {
                        var val = this.value.toLowerCase().trim();
                        if (!val) {
                            categorySelector.tree.showAll();
                        }
                        else {
                            categorySelector.tree.options.data.forEach(function (item) {

                                if (item.title.toLowerCase().indexOf(val) === -1) {
                                    categorySelector.tree.hide(item);
                                }
                                else {
                                    categorySelector.tree.show(item);
                                }
                            });
                        }
                    });
                    $('.mw-page-component-disabled').removeClass('mw-page-component-disabled');
                });

                $(categorySelector.tags).on("tagClick", function (e, data) {
                    $(".mw-tree-selector").show();
                    mw.tools.highlight(categorySelector.tree.get(data))
                });

            }
        }

    }
    var catManager;
    var addCategory = function () {
        if(!catManager) {
            catManager = new mw.CategoryManager();
        }
        catManager.addNew().then(function (data){
            loadCategoriesTree()
        })
    }


</script>

<div class="col-md-4 manage-content-sidebar">
    <div class="card style-1 mb-3">
        <div class="card-body pt-3 pb-0">
            <div class="row">
                <div class="col-12">
                    <strong>Hiển thị</strong>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12"><input type="hidden" name="is_active" id="is_post_active" value="1">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_1" name="is_active" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_1">Được phát hành</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_0" name="is_active" class="custom-control-input" value="0">
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_0">Chưa xuất bản</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=" module module-content-views-edit-default-sidebar-variants " id="main-content-edit-admin-content-views-edit-default-sidebar-variants" content-id="0" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/edit_default_sidebar_variants">
</div>

    <div class="card style-1 mb-3 categories js-sidebar-categories-card">
            <div class="card-body pt-3 pb-1">
                <div class="row">


                                            <div class="col-12">
                            <strong>Thể loại</strong>

                            <script>
                                function manage_cats_for_add_post() {

                                    var manage_cats_for_add_post_opts = {};
                                    // opts.width = '900';
                                    // opts.height = '800';

                                    //  opts.liveedit = true;
                                    //  opts.mode = 'modal';

                                    var additional_params = {};
                                    additional_params.show_add_post_to_category_button = 'true';



                                    manage_cats_for_add_post_dialog = mw.top().tools.open_global_module_settings_modal('categories/admin_backend_modal', 'categories-admin',manage_cats_for_add_post_opts,additional_params)
                                }
                            </script>

                            <a onclick="manage_cats_for_add_post();void(0);return false;" href="http://localhost/dacsn/admin/view:content/action:categories" class="btn btn-link float-right py-1 px-0"> Quản lý Danh mục</a>
                        </div>
                                    </div>


                <div class="row mb-3">
                    <div class="col-12">
                                                    <script>
                                $(document).ready(function () {

                                    var editContentCategoryTreeSelector;


                                    mw.on("mwSelectToAddCategoryToContent", function(event,catId) {
                                        if (typeof(window.categorySelector) != 'undefined') {
                                            editContentCategoryTreeSelector = window.categorySelector.tree;
                                        }
                                        if (typeof(mw.adminPagesTree) != 'undefined') {
                                            editContentCategoryTreeSelector = mw.adminPagesTree;
                                        }
                                        if (typeof(window.pagesTree) != 'undefined') {
                                            editContentCategoryTreeSelector = window.pagesTree;
                                        }

                                        if (typeof(editContentCategoryTreeSelector) != 'undefined') {
                                            mw.notification.success('The content is added to category');

                                            var all = [];
                                            all.push({
                                                type: 'category',
                                                id: catId
                                            })


                                            editContentCategoryTreeSelector.select(all);
                                            if (typeof(categorySelector) != 'undefined') {
                                                categorySelector.tree.select(catId, 'category')
                                            }

                                            if (typeof(thismodal) != 'undefined') {
                                                thismodal.remove()
                                            }

                                            if (typeof(manage_cats_for_add_post_dialog) != 'undefined') {
                                                manage_cats_for_add_post_dialog.remove()
                                            }



                                            //
                                            // if( mw.dialog.get(event.target)){
                                            //     mw.dialog.get(event.target).remove()
                                            // }




                                        }

                                    });



                                    $('#mw-post-added-904089025').on('mousedown touchstart', function (e) {
                                        if (e.target.nodeName === 'DIV') {
                                            setTimeout(function () {
                                                $('.mw-ui-invisible-field', e.target).focus()
                                            }, 78)
                                        }
                                    });

                                    var all = [{type: 'page', id: null}];
                                    var cats = [];

                                    $.each(cats, function () {
                                        all.push({
                                            type: 'category',
                                            id: this
                                        })
                                    });

                                    if (typeof(editContentCategoryTreeSelector) != 'undefined') {
                                        editContentCategoryTreeSelector.select(all);
                                    }
                                });
                            </script>

                            <div class="mw-tag-selector mt-3" id="mw-post-added-904089025">
                                <div class="post-category-tags"></div>
                            </div>
                                            </div>
                </div>

                                    <hr class="thin no-padding">

                    <div class="row">
                        <div class="col-12">
                            <div id="show-categories-tree-wrapper">

                                 <strong>Lựa chọn post Thể loại</strong>


                                <div id="show-categories-tree">
                                    <div class="mw-admin-edit-page-primary-settings content-category-selector">
                                        <div class="mw-ui-field-holder">
                                            <div class="mw-ui-category-selector mw-ui-category-selector-abs mw-tree mw-tree-selector" id="mw-category-selector-904089025">
                                                                                                    <script>
                                                        $(document).ready(function () {
                                                            loadCategoriesTree();
                                                        });

                                                        mw.on('pagesTreeRefresh', function () {
                                                            loadCategoriesTree();
                                                        });
                                                    </script>

                                                    <div id="quick-parent-selector-tree"></div>

                                                    <script>

    var thetree = document.querySelector(".mw-ui-category-selector-abs .module")


    CreateCategoryForPost = function (step) {

        mw.$("#category-not-found-name").html(mw.$('#quick-tag-field').val());
        if (step === 0) {
            mw.$("#category-tree-not-found-message").hide();
            mw.$("#parent-category-selector-block").hide();
        }
        if (step === 1) {
            mw.$(".mw-ui-category-selector-abs").scrollTop(0);
            mw.$("#category-tree-not-found-message").show();
            mw.$("#parent-category-selector-block").hide();
        }
        else if (step === 2) {
            if (mw.$(".mw-tag-selector .mw-ui-btn-small").length === 0) {
                mw.$("#category-tree-not-found-message").hide();
                mw.$("#parent-category-selector-block").show();
            }
            else {
                CreateCategoryForPost(3);
            }
        }
        else if (step == 3) {
            var checked = document.querySelector('#categoryparent input:checked');
            if (checked == null) {
                var checked = document.querySelector('#pages_edit_container input[type=radio]:checked');
            }
            if (checked == null) {
                return;
            }
            var parent = "content_id"
            //  var parent = mw.tools.firstParentWithTag(checked, 'li');
            //  var parent = mw.tools.hasClass(parent, 'is_page') ? 'content_id' : 'parent_id';
            var data = {
                title: mw.$('#quick-tag-field').val()
            };
            data[parent] = checked.value;
            //data[parent] = checked.value;
            $.post(mw.settings.api_url + "category/save", data, function () {
                mw.reload_module("categories/selector", function (el) {
                    mw.$("#category-tree-not-found-message").hide();
                    mw.$("#parent-category-selector-block").show();
                })
            });
        }
    }

</script>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
        </div>

    
            <div class="card style-1 mb-3">
            <div class="card-body pt-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <strong>Thẻ</strong>
                        <small data-bs-toggle="tooltip" title="Thẻ / Nhãn cho nội dung này. Sử dụng dấu phẩy (,) để thêm nhiều thẻ"></small>
                    </div>
                </div>

                                    <div class=" module module-content-views-content-tags " id="main-content-edit-admin-content-views-content-tags" content-type="post" content-id="0" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/content_tags">

<script type="text/javascript">
    mw.lib.require('bootstrap_tags');

    $(document).ready(function () {
        var data = ["Iwatch","Apple","Watch","Jbl","Speakers","Apple","Computer","Speaker","Jbl","Speaker","Amazon","Speaker","Camera","Accessoaries","Diving","Islands","Travel","Usa","West","Yacht","Summer","Sea","Travel","World","Travel","Usa"];


        var node = document.querySelector('#content-tags-block');
        var nodesearch = document.querySelector('#content-tags-search-block');

        var tagsData = [].map(function (tag){
            return {title: tag, id: tag}
        });
        var tags = new mw.tags({
            element: node,
            data: tagsData,
            color: 'primary',
            size:  'sm',
            inputField: false,
        })
      $(tags)
         .on('change', function(e, item, data){
            mw.element('[name="tag_names"]').val(data.map(function (c) {  return c.title }).join(',')).trigger('change')
        });


        var tagsSelect = mw.select({
            element: nodesearch,
            multiple: false,
            autocomplete: true,
            tags: false,
            placeholder: 'Thêm thẻ',
            ajaxMode: {
                paginationParam: 'page',
                searchParam: 'keyword',
                endpoint: mw.settings.api_url + 'tagging_tag/autocomplete',
                method: 'get'
            }
        });


        $(tagsSelect).on("change", function (event, tag) {
            tags.addTag(tag)
            setTimeout(function () {tagsSelect.element.querySelector('input').value = '';})
        });

        $(tagsSelect).on('enterOrComma', function (e, node){
            tags.addTag({title: node.value, id: node.value});
            setTimeout(function () {node.value = '';})
        });



    });
</script>
<div class="row">
    <div class="col-12">
        <div id="content-tags-block"></div>
        <div id="content-tags-search-block"></div>
        <input type="hidden" name="tag_names" value="" id="tags">
    </div>
</div>
</div>
                            </div>
        </div>
    

    <div class="card style-1 mb-3 d-none">
        <div class="card-body">
            <div id="content-title-field-buttons">
                                    <button type="submit" class="btn btn-primary mw-live-edit-top-bar-button" onclick="mw.edit_content.handle_form_submit(true);" form="quickform-edit-content"><i class="mai-eye2"></i> <span>Chỉnh sửa trực tiếp</span></button>
                            </div>
        </div>
    </div>
</div>
        </div>
    </form>
</div>

<script>
    addEventListener('load', function (){
        mw.element('.mw_admin_edit_content_form [name]').on('input', function (){
            contentChanged(true)
        });
    });
</script>
  </div>
</div>
        
        
        <div class="row copyright mt-3">
    <div class="col-12">
        <p class=" text-muted text-center small ">  <span class="mw-powered-by"><a href="https://microweber.org/" title="Website Builder">Website Builder</a> by <a href="https://microweber.org" target="_blank" title="Make a website">Microweber</a></span>   Version:  1.3.2 </p>
    </div>
</div>

    </main>



            </div>
            <!--  /.main.container -->
        </div>
        <!--  /#mw-admin-main-block -->
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/91fac9bd87db7c62d771fa5c324ab5c96946fea3.blade.php ENDPATH**/ ?>