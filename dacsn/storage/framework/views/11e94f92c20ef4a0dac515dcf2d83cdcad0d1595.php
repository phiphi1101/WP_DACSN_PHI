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
} elseif ($_instance->childHasBeenRendered('H7SIG8X')) {
    $componentId = $_instance->getRenderedChildComponentId('H7SIG8X');
    $componentTag = $_instance->getRenderedChildComponentTagName('H7SIG8X');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H7SIG8X');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('H7SIG8X', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                            <a href="http://localhost/dacsn/blog?editmode=n" class="btn btn-outline-success btn-rounded btn-sm-only-icon go-live-edit-href-set go-live-edit-href-set-view">
                                <i class="mdi mdi-earth"></i><span class="d-none d-md-block ml-1">Trang mạng</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="http://localhost/dacsn/blog?editmode=y" class="btn btn-primary btn-rounded btn-sm-only-icon go-live-edit-href-set">
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

                            <a class="dropdown-item " href="http://localhost/dacsn/admin/post">
                                Bài đăng                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Thêm bài mới" data-href="http://localhost/dacsn/admin/post/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item  active " href="http://localhost/dacsn/admin/view:content/action:categories">
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

                    <div class="pt-0">

    <script>
        mw.require('content.js', true);
    </script>



    <style>
        #js-page-tree{
            position: sticky;
            top: 70px;
            min-height: 200px;

        }

        .main .tree {
            display: block;
        }
    </style>

    <div>
        <div id="js-page-tree-wrapper">

            <div class="js-page-tree-skeleton">
                <div class="d-flex">
                    <div class="skeleton-loading skeleton-toggle-btn">
                         
                    </div>
                    <div class="skeleton-loading skeleton-toggle-label">
                         
                    </div>
                </div>

                <div class="skeleton-loading skeleton-search">
                    <div class="skeleton-search-label"></div>
                </div>

                
                <div class="skeleton-loading skeleton-item" style="width:159px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:109px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:149px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:99px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:147px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:97px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:152px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:102px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:158px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:108px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:151px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:101px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:152px;margin-left:50px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:102px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:141px;margin-left:50px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:91px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:157px;margin-left:50px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:107px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:131px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:81px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:154px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:104px;"></div>
                    </div>
                </div>
                
                <div class="skeleton-loading skeleton-item" style="width:157px;margin-left:25px;">
                    <div class="d-flex">
                        <div class="skeleton-icon"></div>
                        <div class="skeleton-label" style="width:107px;"></div>
                    </div>
                </div>
                            </div>

            <div class="tree-show-hide-nav" style="display:none">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input js-open-close-all-tree-elements" id="open-close-all-tree-elements" value="1">
                        <label class="custom-control-label d-flex align-items-center" style="cursor:pointer" for="open-close-all-tree-elements"><small class="text-muted">Mở / Đóng</small></label>
                    </div>
                </div>
            </div>

            <div id="js-page-tree" style="display:none;"></div>
        </div>
        <div class="module-content">
            <div class="row">
                <div class="col-md-12">
                    <div class=' module module-categories-edit-category '   id="admin-category-edit"   data-category-id="0"   data-type="categories/edit_category"   parent-module="categories/edit_category"   parent-module-id="admin-category-edit"  ><style>

    .mw-dialog-container >  .mw-filepicker-component-section {
        width: 100%;
    }

    #post-media-card-header {
        padding: 15px;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 0;
        position: relative;
        width: 100%;
    }

    .select_actions_holder {
        position: absolute;
        top: -55px;
        right: 0;
    }

    .card-header.fixed{
        position: fixed !important;
        top: 69px;
        z-index: 10;
    }
    #settings-container .card-header.fixed{
        top: 0;

    }
</style>
<div class="card style-1 mb-3 mw-edit-category-item-admin">
    <script type="text/javascript">
        mw.require('forms.js');
        mw.lib.require('mwui_init');
        mw.lib.require('bootstrap_tags');
    </script>
    <script type="text/javascript">
        function save_cat(el) {
            var invalid_form_msg = false;
            if(document.querySelector('.mw-ui-category-selector input:checked') === null){
                invalid_form_msg = 1;
            }
            if (!invalid_form_msg) {
                var has_title = false;
                $('#content-title-field,[name*="multilanguage[title]"]').each(function (){
                    if(!!this.value.trim()) {
                        has_title = true;
                    }
                })

                if (!has_title) {
                    invalid_form_msg = 2;
                }
            }

            if (!invalid_form_msg) {
                $(document.forms['admin_edit_category_form']).submit();
            } else {
                if(invalid_form_msg === 1){
                  mw.alert('Vui lòng chọn Trang hoặc Danh mục.');
                    mw.tools.highlight(document.getElementById("category-dropdown-holder"), "yellow");
                } else if(invalid_form_msg === 2){
                    mw.alert('The category must have a name.');
                    mw.tools.highlight(document.getElementById("content-title-field"), "yellow");

                }  else {
                    mw.alert('Vui lòng điền vào các trường bắt buộc.');
                }
            }
        }

        make_new_cat_after_save = function (el) {

            $('#admin-category-edit').removeClass('loading');
            $('#admin-category-edit').removeAttr('just-saved');
            $('#admin-category-edit').removeAttr('selected-category-id');
            $('#admin-category-edit').removeAttr('data-category-id');
            $('#admin-category-edit').removeAttr('category-id');
                        mw.reload_module('#admin-category-edit');

            
            mw.reload_module_everywhere('content/manager');

        }

        continue_editing_cat = function () {
            mw.$('.add-edit-category-form').show();
            mw.$('.mw-quick-cat-done').hide();
        }

                $(document).ready(function () {

            var all = $(window);
            var header = document.querySelector('#mw-admin-container header');
            var postHeader = mw.element(document.querySelector('.card-header'));
            all.push(document)
            all.on('scroll load resize', function () {
                var stop = $(this).scrollTop(),
                    otop = $('.mw-iframe-editor').offset().top,
                    tbheight = $('.admin-toolbar').outerHeight(),
                    is = (stop + tbheight) >= otop;



                var isFixed = (stop > (postHeader.get(0).offsetHeight + (header ? header.offsetHeight : 0) + $(postHeader).offset().top));
                postHeader[ isFixed ? 'addClass' : 'removeClass' ]('fixed')
                postHeader.width( isFixed ? postHeader.parent().width() : 'auto' )

            });

            mw.category_is_saving = false;
                                    var h = document.getElementById('edit_category_set_par');
            mw.$('label', h).click(function () {
                set_category_parent();
            });

            mw.$('#admin_edit_category_form').submit(function () {


                var form = this;
                if (mw.category_is_saving) {
                    return false;
                }

                mw.notification.success("Saving...", 3000);
                mw.category_is_saving = true;
                $('.mw-cat-save-submit').addClass('disabled');
                mw.tools.addClass(mw.tools.firstParentWithClass(this, 'module'), 'loading');
                var catSaveUrl = 'http://localhost/dacsn/api/category';
                var catSaveUrlMethod = 'POST';
                mw.category_is_new = true;
                

                mw.form.post(mw.$('#admin_edit_category_form'), catSaveUrl, function (val) {
                    var showmsg = '';
                    var savedcatid = 0;

                    if(this.data){
                        savedcatid = this.data.id;
                    }

                    //todo: move method to separate service
                    var dialog = mw.dialog.get(mw.$('#admin_edit_category_form'));
                    if(dialog) {
                        dialog.result(savedcatid)
                        // dialog.result(this.toString())
                    }
                    if (typeof(this.error) != "undefined") {
                        mw.notification.msg(this);
                        mw.category_is_saving = false;
                        return false;
                    }

                    mw.$('#mw-notifications-holder').empty();
                    mw.notification.success("Category changes are saved");
                    var v = savedcatid;
                    mw.$('#mw_admin_edit_cat_id').val(savedcatid);
                    mw.$('#mw-cat-pics-admin').attr("for-id", savedcatid);
                    //mw.reload_module('[data-type="categories"]');
                    // if (self !== parent && !!parent.mw) {
                    //     mw.parent().reload_module('categories');
                    // }
                    mw.reload_module_everywhere('categories');
                    mw.reload_module_everywhere('categories/manage');
                    mw.reload_module_everywhere('content/manager');


                    mw.parent().trigger('pagesTreeRefresh')

                    if (window.pagesTreeRefresh) {
                        pagesTreeRefresh()
                    }


                   // document.querySelector('.btn-save').disabled = true;
                    mw.askusertostay = false;

                                        // mw.url.windowHashParam("new_content", "true");

                                        // mw.reload_module('#admin-category-edit');

                    var module = mw.tools.firstParentWithClass(form, 'module');
                    mw.tools.removeClass(module, 'loading');
                    mw.category_is_saving = false;
                    mw.$('.mw-cat-save-submit').removeClass('disabled');


                    if(self !== top && mw.top().settings.liveEdit){
                        mw.url.windowHashParam('action', 'editcategory:' + savedcatid)
                    } else {
                        if(mw.category_is_new){

                            window.location = "http://localhost/dacsn/admin/category/"+savedcatid+"/edit";
                        }
                    }

                   //

                });

                return false;
            });

            var curr_id = '' +0;

            if (mw.url.mwParams().action == 'categories') {
                $("#category-page-title").hide()
            } else {
                if (mw.url.windowHashParam('action') == 'new:category') {
                    $("#category-page-title-edit").hide()
                } else {
                    $("#category-page-title-add").hide()
                }
            }
        });
    </script>

    
    
    
        <div class="card-header">
            <h5><span class="mdi mdi-folder text-primary mr-3"></span><strong>


                   Thêm danh mục phụ

                   </strong></h5>
            <div>
                <button type="button" onclick="save_cat(this);" dusk="category-save" class="btn btn-success btn-sm btn-save" form="quickform-edit-content"><i class="mdi mdi-content-save me-1"></i> Lưu lại</button>
            </div>
        </div>
    
    <div class="card-body pt-3">
        <div class="text-right">
            <div class="create-root mb-3">
                <div id="content-title-field-buttons">
                    

                                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>Vui lòng điền vào các trường để tạo hoặc chỉnh sửa một danh mục mới</p>

                <form id="admin_edit_category_form" name="admin_edit_category_form" autocomplete="off" style="">

                    <input name="id" type="hidden" id="mw_admin_edit_cat_id" value="0">
                    <input name="rel_type" type="hidden" value="content">
                    <input name="rel_id" type="hidden" value="" id="rel_id">
                    <input name="data_type" type="hidden" value="category">
                    <input name="parent_id" type="hidden" value="8" id="parent_id">

                    
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="content-title-field-row">

                                <label class="control-label" for="content-title-field">Tên danh mục</label>

                                <input type="text" class="form-control" name="title" placeholder="Subcategory Name" value="" id="content-title-field" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="bootstrap-select form-control">
                                    <label class="control-label">Chọn cha mẹ:</label>
                                    <small class="text-muted d-block mb-2">Chọn một trang chính hoặc danh mục</small>

                                    <span class="btn dropdown-toggle btn-light" onclick="$(this).next().stop().slideToggle()" id="category-dropdown-holder">Chọn trang chính hoặc danh mục</span>
                                                                        <div class="mw-ui mw-ui-category-selector mw-tree mw-tree-selector" style="display: none" id="edit_category_set_par">
                                        
                                        <div class="category-parent-selector"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label" for="description">Sự miêu tả</label>
                                <small class="text-muted d-block mb-2">Nhập mô tả về danh mục của bạn vào trường</small>
                                <!--  <textarea class="form-control" id="description" name="description" rows="3" spellcheck="false"></textarea>-->

                                <textarea class="form-control" name="description" rows="3" cols="50" id="description" spellcheck=""></textarea>
                            </div>
                        </div>

                        <script>
                            mw.require('tree.js')
                            var parent_page = 0;
                            var parent_category = 8;
                            var current_category = 0;
                            var skip = [];
                            if (current_category) {
                                skip.push({
                                    id: current_category,
                                    type: 'category'
                                })
                            }
                            var selectedData = [];
                            if (parent_page) {
                                selectedData.push({
                                    id: parent_page,
                                    type: 'page'
                                })
                            }
                            if (parent_category) {
                                selectedData.push({
                                    id: parent_category,
                                    type: 'category'
                                });

                            }
                            $(mwd).ready(function () {

                                mw.$('input,select,textarea').on('input', function () {
                                    document.querySelector('.btn-save').disabled = false;
                                    mw.askusertostay = true;
                                });
                                $.get("http://localhost/dacsn/api/content/get_admin_js_tree_json", function (data) {
                                    var categoryParentSelector = new mw.tree({
                                        id: 'category-parent-selector',
                                        element: '.category-parent-selector',
                                        selectable: true,
                                        data: data,
                                        singleSelect: true,
                                        selectedData: selectedData,
                                        skip: skip,
                                        searchInput: true
                                    });
                                    if (selectedData.length) {
                                        if(categoryParentSelector.selectedData && categoryParentSelector.selectedData[0]) {
                                            mw.$('#category-dropdown-holder').html(categoryParentSelector.selectedData[0].title)
                                        }
                                    }
                                    $(categoryParentSelector).on("selectionChange", function (e, selected) {
                                        document.querySelector('.btn-save').disabled = false;
                                        mw.askusertostay = true;
                                        var parent = selected[0];
                                        if (!parent) {
                                            mw.$('#rel_id').val(0);
                                            mw.$('#parent_id').val(0);
                                            $("#category-dropdown-holder").html(' ');
                                        }
                                        else {
                                            $("#category-dropdown-holder").html(parent.title);
                                            if (parent.type === 'category') {
                                                mw.$('#rel_id').val(0);
                                                mw.$('#parent_id').val(parent.id);
                                            }
                                            if (parent.type === 'page') {
                                                mw.$('#rel_id').val(parent.id);
                                                mw.$('#parent_id').val(0);
                                            }
                                        }
                                    })
                                });

                                var _parent = document.querySelector('#edit_category_set_par input:checked');

                                if (_parent !== null) {
                                    $("#category-dropdown-holder").html($(_parent).parent().find('span:last').html())
                                }

                                $('#edit_category_set_par input').on('change', function () {
                                    var html = $(this).parent().find('span:last').html();
                                    $("#category-dropdown-holder").html(html)
                                });

                                var advancedBtn = $(".js-category-advanced-seetings-button")
                                advancedBtn.on('click', function () {
                                    $("#category-edit-advanced").stop().slideDown(function () {
                                        advancedBtn.remove()
                                    })
                                })
                                setTimeout(function (){
                                    mw.askusertostay = false;
                                 //   document.querySelector('button[form="quickform-edit-content"]').disabled = true;
                                }, 999)
                            });




                            setTimeout(function (){
                                var dropdownUploader;
                                mw.$('#mw-admin-post-media-type')
                                    .selectpicker({
                                        container: mw.$('#mw-admin-post-media-type').parent()
                                    })
                                    .on('changed.bs.select', function () {
                                        mw._postsImageUploader.displayControllerByType($(this).selectpicker('val'))
                                        setTimeout(function () {
                                            mw.$('#mw-admin-post-media-type').val('0').selectpicker('refresh');
                                        }, 10)

                                    })
                                    .on('show.bs.select', function () {
                                        if (!!dropdownUploader) {
                                            dropdownUploader.remove()
                                        }
                                        var item = mw.$('#mw-admin-post-media-type').parent().find('li:last');
                                         dropdownUploader = mw.upload({
                                            element: item,
                                            accept: 'image/*',
                                            multiple: true
                                        });
                                        $(dropdownUploader).on('FileAdded', function (e, res) {
                                            mw._postsImageUploader._thumbpreload()
                                        })
                                        $(dropdownUploader).on('FileUploaded', function (e, res) {
                                            var url = res.src ? res.src : res;
                                            if (window.after_upld) {

                                                mw._postsImageUploader.hide()
                                            }
                                            mw.$('.admin-thumb-item-loading:last').remove();
                                            mw.module_pictures.after_change();
                                            after_upld(url, 'Result', 'categories', '0', 'admin-category-edit');

                                        });
                                    })
                            }, 200)


                        </script>
                        <input name="position" type="hidden" value="">

                        <div class="col-12">
                            <div class=' module module-pictures-admin '   data-mw-title="Picture Gallery" title="Danh mục hình ảnh"   for="categories"   for-id="0"   hideheader="true"   uploadertype="small"   id="mw-cat-pics-admin"   parent-module-id="admin-category-edit"   parent-module="categories/edit_category"   data-type="pictures/admin"  >    <script type="text/javascript">
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
            url: 'http://localhost/dacsn/module/?type=files/admin&live_edit=true&remeber_path=true&ui=basic&start_path=media_host_base&from_admin=true&file_types=images&id=mw_admin_pictures_upload_browse_existing_modalmw-cat-pics-admin&from_url=http://localhost/dacsn/',
            title: "Browse pictures",
            id: 'mw_admin_pictures_upload_browse_existing_modalmw-cat-pics-admin',
            height: 'auto',
            autoHeight: true
        });

        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'category', '0', 'mw-cat-pics-admin');

                after_upld(pval, 'done', 'category', '0', 'mw-cat-pics-admin');
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
                after_upld(pval, 'save', 'category', '0', 'mw-cat-pics-admin');
                after_upld(pval, 'done', 'category', '0', 'mw-cat-pics-admin');
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
    <div class=' module module-pictures-admin-upload-pic-source-selector '   id="edit-post-gallery-main-source-selector-holder"   parent-module-id="mw-cat-pics-admin"   parent-module="pictures/admin"   data-type="pictures/admin_upload_pic_source_selector"  ><div id="mw-admin-post-media-type-select"></div>
</div>
</div>



<div class="left pt-3" style="clear:both" id="admin-thumbs-holder-sort-63f06059b4d27">

    <div class="relative post-thumb-uploader m-t-10" id="backend_image_uploader_63f06059b4d27"></div>



    <div class="admin-thumbs-holder">
                    <div class=' module module-pictures-admin-backend-sortable-pics-list ' id='mw-cat-pics-admin-pictures-admin-backend-sortable-pics-list'  for="category"   session_id="dLAoVkrP6ToF8pSqde6ApZP2kz4yKUbdB6qPteCg"   parent-module-id="mw-cat-pics-admin"   parent-module="pictures/admin"   data-type="pictures/admin_backend_sortable_pics_list"  >
<script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#mw-cat-pics-admin-pictures-admin-backend-sortable-pics-list');
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

        var $root = mw.$('#admin-thumbs-holder-sort-pic-sorter-63f06059b954b');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_pic-sorter-63f06059b954b',
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
            after_upld(url, 'Result', 'category', '', 'mw-cat-pics-admin-pictures-admin-backend-sortable-pics-list');
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


<div class="mw-drop-zone" id="admin-thumbs-drop-zone-pic-sorter-63f06059b954b" style="display: none">Thả ở đây</div>


<script>
    $(document).ready(function () {
        mw.module_pictures.init('#admin-thumbs-holder-sort-pic-sorter-63f06059b954b');

        var uploadHolder = mw.$('#admin-thumb-item-uploaderpic-sorter-63f06059b954b');
        mw.require('uploader.js');

        mw._postsImageUploaderSmall = mw.upload({
            element: uploadHolder,
            accept: 'image/*',
            multiple: true,
            dropZone: '#admin-thumbs-drop-zone-pic-sorter-63f06059b954b',
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
                after_upld(url, 'Result', 'category', '', 'mw-cat-pics-admin-pictures-admin-backend-sortable-pics-list');
                after_upld(url, 'done');
                mw._postsImageUploader.hide()
            }
        });

        if (!mw.$('#admin-thumbs-holder-sort-pic-sorter-63f06059b954b .admin-thumb-item').length) {
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
                        after_upld(url, 'Result', 'category', '', 'mw-cat-pics-admin-pictures-admin-backend-sortable-pics-list');
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
                $("#admin-thumbs-drop-zone-pic-sorter-63f06059b954b").show();
                clearTimeout(dragTimer);
            }
        });
        $(document).on('dragleave', function (e) {
            dragTimer = setTimeout(function () {
                $("#admin-thumbs-drop-zone-pic-sorter-63f06059b954b").hide();
            }, 25);
        });

        $("#admin-thumbs-drop-zone-pic-sorter-63f06059b954b").on('drop', function () {
            $("#admin-thumbs-drop-zone-pic-sorter-63f06059b954b").hide();
        });

        setInterval(function () {
            $('.admin-thumb-item, .admin-thumb-item-placeholder, .admin-thumb-item-uploader-holder, .mw-filepicker-desktop-type-small .mw-uploader-type-holder').each(function () {
                $(this).height($(this).width())
            })
        }, 78)


    });


</script>

<div class="admin-thumbs-holder" id="admin-thumbs-holder-sort-pic-sorter-63f06059b954b">
    

</div>
</div>
            </div>
    <script>mw.require("files.js", true);</script>
     <script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#mw-cat-pics-admin');
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

        var $root = mw.$('#admin-thumbs-holder-sort-63f06059b4d27');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_63f06059b4d27',
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
            after_upld(url, 'Result', 'category', '0', 'mw-cat-pics-admin');
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

                                                    <div class="col-md-12">
                                <div class=' module module-content-views-settings-from-template ' id='admin-category-edit-content-views-settings-from-template'  content-type="category"   content-id="0"   category-id="0"   parent-module-id="admin-category-edit"   parent-module="categories/edit_category"   data-type="content/views/settings_from_template"  >
</div>
                            </div>
                        
                        <div class="col-12">
                            <label class="control-label">Các thiết lập khác</label>
                            <small class="text-muted d-block mb-2">Khám phá các tùy chọn nâng cao hơn</small>

                            <button type="button" class="btn btn-link btn-sm js-edit-category-show-more" data-bs-toggle="collapse" data-bs-target="#show-more">Cho xem nhiều hơn</button>

                            <div class="collapse mt-3" id="show-more">
                                <div class="row">
                                    


                                    <!--  <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label"></label>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="url" value=""/>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Category URL</label>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="url" value="" id="url" spellcheck="">                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                                                        <label class="control-label">Người dùng có thể tạo nội dung không <span class="help-tooltip" data-bs-toggle="tooltip" title="Nếu bạn đặt điều này thành CÓ, người dùng trang web sẽ có thể thêm nội dung theo danh mục này"></span></label>

                                            <div>
                                                <div class="custom-control custom-radio d-inline-block mr-3">
                                                    <input type="radio" id="users_can_create_content_1" name="users_can_create_content" class="custom-control-input" value="1">
                                                    <label class="custom-control-label" for="users_can_create_content_1">Đúng</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline-block">
                                                    <input type="radio" id="users_can_create_content_0" name="users_can_create_content" class="custom-control-input" value="0" checked>
                                                    <label class="custom-control-label" for="users_can_create_content_0">Không</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                                                                                                                <input type="hidden" name="category_subtype" value="default">
                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('.edit-category-choose-subtype-dd').on('change', function () {
                                                        var val = $(this).val();
                                                        $('[name="category_subtype"]', '#admin_edit_category_form').val(val)
                                                        $('#admin_edit_category_subtype_settings').attr('category_subtype', val);
                                                        mw.reload_module('#admin_edit_category_subtype_settings');
                                                    });
                                                });
                                            </script>

                                            <div class="form-group">
                                                <label class="control-label">Loại phụ danh mục <span class="help-tooltip" data-bs-toggle="tooltip" title="You can set the category behaviour by changing its subtype"></span></label>

                                                <div>
                                                    <select class="selectpicker edit-category-choose-subtype-dd" data-width="100%">
                                                        <option value="default" selected>Mặc định</option>
                                                        <option value="content_filter" selected>Bộ lọc nội dung</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=' module module-categories-edit-category-subtype-settings '   category_subtype="default"   category-id="0"   id="admin_edit_category_subtype_settings"   parent-module-id="admin-category-edit"   parent-module="categories/edit_category"   data-type="categories/edit_category_subtype_settings"  ></div>
                                                                            </div>




                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label">Tiêu đề meta</label>
                                            <small data-bs-toggle="tooltip" title="Tiêu đề xuất hiện trên trang kết quả của công cụ tìm kiếm"></small>
                                            <small class="text-muted d-block mb-2">Tiêu đề xuất hiện trên trang kết quả của công cụ tìm kiếm</small>

                                            <input type="text" class="form-control" name="category_meta_title" value="" autocomplete="">                                        </div>
                                    </div>







                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label">Mô tả meta</label>
                                            <small data-bs-toggle="tooltip" title="Short description for yor content."></small>

                                            <textarea class="form-control" name="category_meta_description" rows="10" cols="50" autocomplete=""></textarea>                                        </div>
                                    </div>





                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label">Từ khóa meta</label>
                                            <small data-bs-toggle="tooltip" title="Short description for yor content."></small>
                                            <small class="text-muted d-block mb-2">Phân tách các từ khóa bằng dấu phẩy và dấu cách</small>

                                            <input type="text" class="form-control" name="category_meta_keywords" value="" autocomplete="">                                        </div>

                                        <small class="text-muted">Nhập các từ khóa mô tả nội dung của bạn - Ví dụ: Blog, Tin tức trực tuyến, Điện thoại bán, v.v.</small>

                                    </div>















                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                                                                        <label class="control-label">Is category hidden?
                                                <small class="text-muted d-block mb-2">If you set this to YES this category will be hidden from the website</small>
                                            </label>

                                            <div>
                                                <div class="custom-control custom-radio d-inline-block mr-3">
                                                    <input type="radio" id="is_hidden_1" name="is_hidden" class="custom-control-input" value="1">
                                                    <label class="custom-control-label" for="is_hidden_1">Đúng</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline-block">
                                                    <input type="radio" id="is_hidden_2" name="is_hidden" class="custom-control-input" value="0" checked>
                                                    <label class="custom-control-label" for="is_hidden_2">Không</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12 mt-3">
                            
                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>

</div>
</div>
                </div>

            </div>
        </div>


    </div>


    <script>

        categoryChangedFromPushState = false;

        window.addEventListener("popstate", function(e){
            if(categoryChangedFromPushState){
            location.reload();
            }
        });


        var selectedCategories = [0];
        pagesTree = null;
        (function (){
            var treeNode = document.getElementById('js-page-tree');
            var treeNodeParent = treeNode.parentElement;
            treeNodeParent.classList.add('js-tree');
            treeNodeParent.classList.add('tree');
            mw
                .element('.main > aside')
                .after(treeNodeParent);


            document
                .querySelector('.js-open-close-all-tree-elements')
                .addEventListener('change', function () {
                    if (this.checked) {
                        pagesTree.openAll();
                    } else {
                        pagesTree.closeAll();
                    }
                });

            var select = function (id, type) {
                if (pagesTree) {
                    pagesTree.select({
                        id, type
                    });
                }
            }
            var treeTail = [
                {
                    title: 'Rác',
                    icon: 'mdi mdi-delete',
                    action: function () {

                    }
                }
            ];
            var contextMenu =  [

                {
                    title: 'Biên tập',
                    icon: 'mdi mdi-pencil',
                    action: function (element, data, menuitem) {
                        // window.location.href='http://localhost/dacsn/admin/category/'+data.id+'/edit';
                        history.pushState(null, "", 'http://localhost/dacsn/admin/category/'+data.id+'/edit');
                        categoryChangedFromPushState = true;
                        $('#admin-category-edit').attr('data-category-id', data.id);
                        mw.reload_module('#admin-category-edit');
                    }
                },
                {
                    title: 'Thêm danh mục phụ',
                    icon: 'mdi mdi-pencil',
                    action: function (element, data, menuitem) {
                        window.location.href='http://localhost/dacsn/admin/category/create?addsubcategory='+data.id;
                    }
                },
                {
                    title: 'Xóa bỏ',
                    icon: 'mdi mdi-delete',
                    action: function (element, data, menuitem) {

                        mw.spinner({element: element, size: 15, color: 'red',decorate: true});

                        if (data.type === 'category') {
                            mw.content.deleteCategory(data.id, function () {
                                $(element).fadeOut();
                                mw.notification.success('Đã xóa danh mục');
                            });
                        }

                    }
                }
            ];

            var options = {
                sortable: false,
                selectable: false,
                singleSelect: false,
                selectableNodes: 'singleSelect',
                saveState: true,
                searchInput: true,
                contextMenu: contextMenu,
                searchInputPlaceholder: 'danh mục tìm kiếm',
                resizable: true,
                resizableOn: 'treeParent',
                append: treeTail,
                id: 'admin-main-tree',
            };

            var params = {
                is_shop: '1'
            };

            mw.admin.tree(treeNode, {
                options: options,
                params: params
            }, 'tree').then(function (res) {

                $('.js-page-tree-skeleton').remove();
                $('#js-page-tree').show();
                $('.tree-show-hide-nav').show();

                pagesTree = res.tree;

                $(pagesTree).on("ready", function () {
                    if (selectedCategories.length > 0) {
                        $.each(selectedCategories, function (key, catId) {
                            pagesTree.select(catId, 'category', false);
                        });
                    }
                });

                var treeHolderSet = function (){
                    var treeHolder = mw.element('#admin-main-tree');
                    if(treeHolder) {
                        treeHolder.css({
                            'height': 'calc(100vh - 120px)',
                            'overflow': 'auto',
                            'minHeight': '200px',
                        });
                    }
                }
                addEventListener('load', treeHolderSet);
                addEventListener('resize', treeHolderSet);
                addEventListener('scroll', treeHolderSet);
                treeHolderSet();

                pagesTree.on('selectionChange', function (items){
                    $.each(items, function (key, item) {
                        if (item.type == 'category') {
                            //  window.location.href='http://localhost/dacsn/admin/category/'+item.id+'/edit';
                            history.pushState(null, "", 'http://localhost/dacsn/admin/category/'+item.id+'/edit');
                            categoryChangedFromPushState = true;
                            $('#admin-category-edit').attr('data-category-id', item.id);
                            mw.reload_module('#admin-category-edit');
                        }
                    });
                });

            });
        })();
    </script>


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
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/68e821bbbfe881600ede1b5ab3b1d700acc7d53d.blade.php ENDPATH**/ ?>