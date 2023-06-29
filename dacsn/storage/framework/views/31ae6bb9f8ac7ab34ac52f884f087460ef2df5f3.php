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
} elseif ($_instance->childHasBeenRendered('HR2eFt6')) {
    $componentId = $_instance->getRenderedChildComponentId('HR2eFt6');
    $componentTag = $_instance->getRenderedChildComponentTagName('HR2eFt6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HR2eFt6');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('HR2eFt6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

                            <a class="dropdown-item " href="http://localhost/dacsn/admin/post">
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

            
            <div class="skeleton-loading skeleton-item" style="width:158px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:108px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:146px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:96px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:132px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:82px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:160px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:110px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:139px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:89px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:156px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:106px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:141px;margin-left:50px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:91px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:154px;margin-left:50px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:104px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:154px;margin-left:50px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:104px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:158px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:108px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:132px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:82px;"></div>
                </div>
            </div>
            
            <div class="skeleton-loading skeleton-item" style="width:145px;margin-left:25px;">
                <div class="d-flex">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-label" style="width:95px;"></div>
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
    <script>
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

                        window.livewire.emit('resetFilter');
                        window.livewire.emit('showTrashed', 1);


                    }
                }
            ];
            var contextMenu =  [
                {
                    title: 'Biên tập',
                    icon: 'mdi mdi-pencil',
                    action: function (element, data, menuitem) {
                        if (data.type === 'category') {
                            window.location.href = 'http://localhost/dacsn/admin/category/' + data.id + '/edit';
                        } else  if (data.type === 'page') {
                            window.location.href = 'http://localhost/dacsn/admin/page/' + data.id + '/edit';
                        } else  if (data.type === 'post') {
                            window.location.href = 'http://localhost/dacsn/admin/post/' + data.id + '/edit';
                        } else {
                            window.location.href = 'http://localhost/dacsn/admin/content/' + data.id + '/edit';
                        }

                    }
                }
            ];

            contextMenu.push({
                title: 'Thêm bài đăng',
                icon: 'mdi mdi-plus-circle-outline',
                action: function (element, data, menuitem) {

                    if(data.parent_page &&  data.parent_page.subtype === 'dynamic' && data.parent_page.is_shop === 0){
                        window.location.href = 'http://localhost/dacsn/admin/post/create?recommended_category_id=' + data.id + '&recommended_content_id=' + data.parent_page.id;
                    } else {
                        window.location.href = 'http://localhost/dacsn/admin/post/create?recommended_content_id=' + data.id;
                    }


                },
                filter: function(data) {
                    if (data.type === 'page' && data.subtype === 'dynamic' && data.is_shop === 0) {
                        return true;
                    }
                    if (data.type === 'category'
                        && data.parent_type
                        && data.parent_type === 'page'
                        && data.parent_id != 0
                        && data.parent_page
                        && data.parent_page.id
                        && data.parent_page.subtype
                        && data.parent_page.subtype === 'dynamic'
                        && data.parent_page.is_shop === 0){
                        return true;
                    }
                    return false;
                }
            });

                        contextMenu.push({
                title: 'Thêm sản phẩm',
                icon: 'mdi mdi-plus-circle-outline',
                action: function (element, data, menuitem) {
                    if(data.parent_page && data.parent_page.subtype === 'dynamic' && data.parent_page.is_shop === 1){
                        window.location.href = 'http://localhost/dacsn/admin/shop/product/create?recommended_category_id=' + data.id + '&recommended_content_id=' + data.parent_page.id;
                    } else {
                        window.location.href = 'http://localhost/dacsn/admin/shop/product/create?recommended_content_id=' + data.id;
                    }
                },
                filter: function(data) {
                    if (data.type === 'page' && data.subtype === 'dynamic' && data.is_shop === 1) {
                        return true;
                    }
                    if (data.type === 'category'
                        && data.parent_type
                        && data.parent_type === 'page'
                        && data.parent_id != 0
                        && data.parent_page
                        && data.parent_page.id
                        && data.parent_page.subtype
                        && data.parent_page.subtype === 'dynamic'
                        && data.parent_page.is_shop === 1){
                        return true;
                    }

                    return false;
                }
            });
            

            contextMenu.push({
                title: 'Thêm danh mục phụ',
                icon: 'mdi mdi-folder-plus',
                action: function (element, data, menuitem) {
                    window.location.href = 'http://localhost/dacsn/admin/category/create?addsubcategory=' + data.id;
                },
                filter: function(data) {
                    if (data.type === 'category') {
                        return true;
                    }
                    if (data.type === 'page' && data.subtype === 'dynamic') {
                            return true;
                    }
                    return false;
                }
            });

            contextMenu.push({
                title: 'thêm trang con',
                icon: 'mdi mdi-plus-circle-outline',
                action: function (element, data, menuitem) {
                    window.location.href = 'http://localhost/dacsn/admin/page/create?recommended_content_id=' + data.id;
                },
                filter: function(data) {
                    if (data.type === 'page') {
                        return true;
                    }
                    return false;
                }
            });

            contextMenu.push({
                    title: 'Xóa bỏ',
                    icon: 'mdi mdi-delete',
                    action: function (element, data, menuitem) {

                        mw.spinner({element: element, size: 15, color: 'red', decorate: true});

                        if (data.type === 'category') {
                            mw.content.deleteCategory(data.id, function () {
                                $(element).fadeOut();
                                mw.notification.success('Đã xóa danh mục');
                            });
                        } else {
                            mw.content.deleteContent(data.id, function () {
                                $(element).fadeOut();
                                mw.notification.success('Đã xóa nội dung');
                            });
                        }
                    }
                }
            );

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

            var params = {};

            
            
            mw.admin.tree(treeNode, {
                options: options,
                params: params
            }, 'tree').then(function (res) {

                $('.js-page-tree-skeleton').remove();
                $('#js-page-tree').show();
                $('.tree-show-hide-nav').show();

                pagesTree = res.tree;

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
                            window.livewire.emit('showFromCategory', item.id);
                        }
                        if (item.type == 'page') {
                            window.livewire.emit('showFromPage', item.id);
                        }
                        window.livewire.emit('setFirstPageContentList');

                    });
                });

            });
        })();
    </script>
    <script>

        Livewire.on('deselectAllCategories', function () {
            pagesTree.unselectAll(false);
            window.livewire.emit('showFromCategory', false);
        });
        Livewire.on('selectCategoryFromTableList', function (id) {
            pagesTree.unselectAll(false);
            pagesTree.show(id, 'category');
            pagesTree.select(id, 'category', true);
            //    pagesTree.get(id, 'category').scrollIntoView({behavior: "smooth", block: "center", inline: "center"});
        })
    </script>
</div>

    <div class="module-content">

        <div wire:id="IYya41krlfcoXu5rnOEE" wire:initial-data='{"fingerprint":{"id":"IYya41krlfcoXu5rnOEE","name":"admin-content-list","locale":"vi_VN","path":"admin\/content","method":"GET","v":"acj"},"effects":{"listeners":["refreshContentList","refreshContentListAndDeselectAll","setFirstPageContentList","autoCompleteSelectItem","hideFilterItem","applyFilterItem","resetFilter","showTrashed","showFromCategory","showFromPage","deselectAll"],"path":"http:\/\/localhost\/dacsn\/admin\/content?paginate=10"},"serverMemo":{"children":[],"errors":[],"htmlHash":"93903c27","data":{"displayTypesViews":[],"whitelistedEmptyKeys":[],"paginate":10,"model":"MicroweberPackages\\Content\\Models\\Content","filters":[],"showColumns":{"id":true,"image":true,"title":true,"author":true},"showFilters":[],"checked":[],"selectAll":false,"displayType":"card","page":1,"paginators":{"page":1},"appliedFilters":[]},"dataMeta":[],"checksum":"1b2e5d4c77edb217824b6562086bb7d22ca4736ff5a1aa6fb7d6814b14cb601f"}}' class="card style-1 mb-3">

    <div class="card-header d-flex align-items-center justify-content-between px-md-4">
    <div class="col d-flex justify-content-md-between justify-content-center align-items-center px-0">
        <h5 class="mb-0 d-flex">
            <i class="mdi mdi-earth text-primary mr-md-3 mr-1 justify-content-center"></i>

            <strong class="d-md-flex d-none">

                <a class=" text-decoration-none text-dark " onclick="livewire.emit('deselectAllCategories');return false;">
                    Trang mạng
                </a>

                
                
            </strong>

                    </h5>
        <div>

                            <div class="btn-group">
        <button type="button" class="btn btn-link btn-sm dropdown-toggle hidden-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                Tạo nội dung        </button>
        <ul class="dropdown-menu">
            <a href="http://localhost/dacsn/admin/page/create" class="dropdown-item btn btn-link btn-sm">Thêm trang</a>
            <a href="http://localhost/dacsn/admin/post/create" class="dropdown-item btn btn-link btn-sm">Thêm bài đăng</a>
                        <a href="http://localhost/dacsn/admin/shop/product/create" class="dropdown-item btn btn-link btn-sm">Thêm sản phẩm</a>
                    </ul>
    </div>


            



            


        </div>
    </div>
</div>

    <div class="card-body pt-3">

        <style>
    #content-results-table tr .mw_admin_posts_sortable_handle {
        visibility: hidden;
    }
    #content-results-table tr:hover .mw_admin_posts_sortable_handle {
        visibility: visible;
    }
</style>


<script>
    mw.manage_content_sort = function () {
        if (!mw.$("#content-results-table").hasClass("ui-sortable")) {
            mw.$("#content-results-table").sortable({
                items: '.manage-post-item',
                axis: 'y',
                handle: '.mw_admin_posts_sortable_handle',
                update: function () {
                    var obj = {ids: []}
                    $(this).find('.js-select-posts-for-action').each(function () {
                        var id = this.attributes['value'].nodeValue;
                        obj.ids.push(id);
                    });
                    $.post("http://localhost/dacsn/api/content/reorder", obj, function () {
                        mw.reload_module('#mw_page_layout_preview');
                        mw.reload_module_parent('posts');
                        mw.reload_module_parent('content');
                        mw.reload_module_parent('shop/products');
                        mw.notification.success('Tất cả các thay đổi đã được lưu.');
                    });
                },
                start: function (a, ui) {
                    $(this).height($(this).outerHeight());
                    $(ui.placeholder).height($(ui.item).outerHeight())
                    $(ui.placeholder).width($(ui.item).outerWidth())
                },
                scroll: false
            });
        }
    }
</script>


                <div class="d-flex flex-wrap">

            <div class="col-xl-3 col-sm-5 col-12  mb-3 mb-md-0 ps-0">
    <input wire:model.debounce.500ms="filters.keyword" type="search" placeholder="Search by keyword..." class="form-control" style=" height: 50px;">
</div>

            <div class="col-xl-2 col-sm-3 col-12 mb-3 mb-md-0 ps-0">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>

    Filters
</button>
                <div class="dropdown-menu p-1" style="width:250px;max-height:400px;overflow:auto;overflow-x:hidden;">

                                                                        <div>
                                 <h6 class="dropdown-header">Taxonomies</h6>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.tags"> Tags</label>
                                                            </div>
                                                    <div>
                                 <h6 class="dropdown-header">Dates</h6>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.dateBetween"> Date Range</label>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.createdAt"> Created at</label>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.updatedAt"> Updated at</label>
                                                            </div>
                                                    <div>
                                 <h6 class="dropdown-header">Other</h6>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.visible"> Visible</label>
                                                                    <label class="dropdown-item"><input type="checkbox" wire:model="showFilters.userId"> Author</label>
                                                            </div>
                                            
                </div>
            </div>

                    </div>
        
        <div class="d-flex flex-wrap mt-3">

        
        </div>
        <div class="row  mt-3">
            
                    </div>

                    <div class="row mt-3">
                <div class="d-flex flex-wrap bulk-actions-show-columns mw-js-loading position-relative mb-1">

                    <div class="col-md-5 col-12 ps-0 d-flex align-items-center mb-md-0 mb-4">
    
    <div class="btn-group">
        <a href="#" wire:click="setDisplayType('card')" class="btn mw-content-vision-tabs  active ">
            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            Thẻ </a>
        <a href="#" wire:click="setDisplayType('table')" class="btn mw-content-vision-tabs ">
            <svg class="me-1" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                <path d="M20.016 8.016v-4.031h-4.031v4.031h4.031zM20.016 14.016v-4.031h-4.031v4.031h4.031zM20.016 20.016v-4.031h-4.031v4.031h4.031zM14.016 8.016v-4.031h-4.031v4.031h4.031zM14.016 14.016v-4.031h-4.031v4.031h4.031zM14.016 20.016v-4.031h-4.031v4.031h4.031zM8.016 8.016v-4.031h-4.031v4.031h4.031zM8.016 14.016v-4.031h-4.031v4.031h4.031zM8.016 20.016v-4.031h-4.031v4.031h4.031zM20.016 2.016q0.797 0 1.383 0.586t0.586 1.383v16.031q0 0.797-0.586 1.383t-1.383 0.586h-16.031q-0.797 0-1.383-0.586t-0.586-1.383v-16.031q0-0.797 0.586-1.383t1.383-0.586h16.031z"></path>
            </svg> Bàn </a>
    </div>
</div>

                    <div class="col-md-7 col-12 d-flex justify-content-end align-items-center px-0 mw-filters-sorts-mobile">

                        <div class="d-flex align-items-center ">
    <label class="d-xl-block d-none mx-2">Sắp xếp</label>
    <select wire:model.stop="filters.orderBy" class="form-select form-select-sm mw-form-select-filters">
        <option value="">Bất kỳ</option>
        <option value="id,desc">Id Desc</option>
        <option value="id,asc">Id Asc</option>
    </select>
</div>
                        <div class="d-flex align-items-center mx-1">
    <label class="d-xl-block d-none mx-2">Giới hạn</label>
    <select class="form-select form-select-sm" wire:model="paginate">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="500">500</option>
    </select>
</div>

                        <div class="">
                            <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle ms-2" style="padding: 10px;" data-bs-toggle="dropdown" aria-expanded="false">
                                Columns
                            </button>
                            <div class="dropdown-menu p-3">
                                                                <label wire:key="show-column-0" class="dropdown-item"><input type="checkbox" wire:model="showColumns.id"> Tôi</label>
                                                                <label wire:key="show-column-1" class="dropdown-item"><input type="checkbox" wire:model="showColumns.image"> Hình ảnh</label>
                                                                <label wire:key="show-column-2" class="dropdown-item"><input type="checkbox" wire:model="showColumns.title"> Tiêu đề</label>
                                                                <label wire:key="show-column-3" class="dropdown-item"><input type="checkbox" wire:model="showColumns.author"> Tác giả</label>
                                                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">

                                                                        <div id="content-results-table">
    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="28" id="products-28" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-28" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-as-background border-radius-0 border-0">
      
        <img src="http://localhost/dacsn/userfiles/cache/thumbnails/640/tn-vison-836122759.webp" class="rounded-full">
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/28/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            CẦN BÁN CHIẾC VISON
        </h5>
    </a>

    
            <div class="text-muted">
            <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-link p-0 text-muted mw-products-breadcrumb">Blog</a>
        </div>
    
            <span class="manage-post-item-cats-inline-list">
                                        
                    <a onclick="livewire.emit('selectCategoryFromTableList', 13);return false;" href="?filters%5Bcategory%5D=13&amp;showFilters%5Bcategory%5D=1" class="btn btn-link btn-sm p-0">
                        Xe máy, Xe đạp, Oto
                     </a>

                    
                                         </span>
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/C%E1%BA%A6N-B%C3%81N-CHI%E1%BA%BEC-VISON">
        <small class="text-muted">http://localhost/dacsn/CẦN-BÁN-CHIẾC-VISON</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/post/28/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/post/28/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('28');" class="btn btn-outline-danger btn-sm js-delete-content-btn-28">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="27" id="products-27" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-27" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-as-background border-radius-0 border-0">
      
        <img src="http://localhost/dacsn/userfiles/cache/thumbnails/640/tn-dong-4174844741.webp" class="rounded-full">
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/27/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            CỬA HÀNG MAY ĐỒNG PHỤC CHẤT LƯỢNG, GIÁ RẺ
        </h5>
    </a>

    
            <div class="text-muted">
            <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-link p-0 text-muted mw-products-breadcrumb">Blog</a>
        </div>
    
            <span class="manage-post-item-cats-inline-list">
                                        
                    <a onclick="livewire.emit('selectCategoryFromTableList', 11);return false;" href="?filters%5Bcategory%5D=11&amp;showFilters%5Bcategory%5D=1" class="btn btn-link btn-sm p-0">
                        Thời trang, Làm đẹp
                     </a>

                    
                                         </span>
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/C%E1%BB%ACA-H%C3%80NG-MAY-%C4%90%E1%BB%92NG-PH%E1%BB%A4C-CH%E1%BA%A4T-L%C6%AF%E1%BB%A2NG-GI%C3%81-R%E1%BA%BA">
        <small class="text-muted">http://localhost/dacsn/CỬA-HÀNG-MAY-ĐỒNG-PHỤC-CHẤT-LƯỢNG-GIÁ-RẺ</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/post/27/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/post/27/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('27');" class="btn btn-outline-danger btn-sm js-delete-content-btn-27">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="26" id="products-26" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-26" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-as-background border-radius-0 border-0">
      
        <img src="http://localhost/dacsn/userfiles/cache/thumbnails/640/tn-iphone-1665976275.webp" class="rounded-full">
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/26/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            IPHONE 13 PRO MAX 128GB
        </h5>
    </a>

    
            <div class="text-muted">
            <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-link p-0 text-muted mw-products-breadcrumb">Blog</a>
        </div>
    
            <span class="manage-post-item-cats-inline-list">
                                        
                    <a onclick="livewire.emit('selectCategoryFromTableList', 8);return false;" href="?filters%5Bcategory%5D=8&amp;showFilters%5Bcategory%5D=1" class="btn btn-link btn-sm p-0">
                        Điện thoại
                     </a>

                    
                                         </span>
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/GG">
        <small class="text-muted">http://localhost/dacsn/GG</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/post/26/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/post/26/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('26');" class="btn btn-outline-danger btn-sm js-delete-content-btn-26">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="25" id="products-25" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-25" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-as-background border-radius-0 border-0">
      
        <img src="http://localhost/dacsn/userfiles/cache/thumbnails/640/tn-cho-thue-mat-bang-1-903691504.webp" class="rounded-full">
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/25/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            CHO THUÊ MẶT BẰNG GIÁ RẺ TRÀ VINH
        </h5>
    </a>

    
            <div class="text-muted">
            <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-link p-0 text-muted mw-products-breadcrumb">Blog</a>
        </div>
    
            <span class="manage-post-item-cats-inline-list">
                                        
                    <a onclick="livewire.emit('selectCategoryFromTableList', 8);return false;" href="?filters%5Bcategory%5D=8&amp;showFilters%5Bcategory%5D=1" class="btn btn-link btn-sm p-0">
                        Điện thoại
                     </a>

                    , 
                                            
                    <a onclick="livewire.emit('selectCategoryFromTableList', 9);return false;" href="?filters%5Bcategory%5D=9&amp;showFilters%5Bcategory%5D=1" class="btn btn-link btn-sm p-0">
                        Đất đai, mặt bằng
                     </a>

                    
                                         </span>
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/icguigu9i0">
        <small class="text-muted">http://localhost/dacsn/icguigu9i0</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/post/25/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/post/25/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('25');" class="btn btn-outline-danger btn-sm js-delete-content-btn-25">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="1" id="products-1" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-1" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-circle-holder border-radius-0 border-0">
        <i class="mdi mdi-file-document mdi-48px text-muted text-opacity-5"></i>
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/1/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            Home
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/">
        <small class="text-muted">http://localhost/dacsn/</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/1/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/1/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('1');" class="btn btn-outline-danger btn-sm js-delete-content-btn-1">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="2" id="products-2" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-2" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-circle-holder border-radius-0 border-0">
        <i class="mdi mdi-post-outline mdi-48px text-muted text-opacity-5"></i>
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            Blog
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/blog">
        <small class="text-muted">http://localhost/dacsn/blog</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/2/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('2');" class="btn btn-outline-danger btn-sm js-delete-content-btn-2">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="8" id="products-8" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-8" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-as-background border-radius-0 border-0">
      
        <img src="http://localhost/dacsn/userfiles/media/pixum/pixum-480x640.png" class="rounded-full">
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/8/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            Shop
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/shop">
        <small class="text-muted">http://localhost/dacsn/shop</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/8/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/8/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('8');" class="btn btn-outline-danger btn-sm js-delete-content-btn-8">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="7" id="products-7" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-7" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-circle-holder border-radius-0 border-0">
        <i class="mdi mdi-file-document mdi-48px text-muted text-opacity-5"></i>
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/7/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            Services
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/services">
        <small class="text-muted">http://localhost/dacsn/services</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/7/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/7/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('7');" class="btn btn-outline-danger btn-sm js-delete-content-btn-7">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="24" id="products-24" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-24" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-circle-holder border-radius-0 border-0">
        <i class="mdi mdi-file-document mdi-48px text-muted text-opacity-5"></i>
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/24/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            About us
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/about-us">
        <small class="text-muted">http://localhost/dacsn/about-us</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/24/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/24/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('24');" class="btn btn-outline-danger btn-sm js-delete-content-btn-24">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    
        <div class="card card-product-holder mb-2 post-has-image-true manage-post-item">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center flex-lg-box">

                    <div class="col text-center manage-post-item-col-1" style="max-width: 40px;">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="5" id="products-5" class="js-select-posts-for-action custom-control-input" wire:model="checked">
                            <label for="products-5" class="custom-control-label"></label>
                        </div>
                        <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                            <i class="mdi mdi-cursor-move"></i>
                        </span>
                    </div>

                    <div class="col manage-post-item-col-2" style="max-width: 120px; min-width: 120px;">

                        <div class="img-circle-holder border-radius-0 border-0">
        <i class="mdi mdi-file-document mdi-48px text-muted text-opacity-5"></i>
    </div>

                    </div>

                    <div class="col item-title manage-post-item-col-3 manage-post-main">

                        <div class="manage-item-main-top">

    <a target="_self" href="http://localhost/dacsn/admin/page/5/edit" class="btn btn-link p-0">
        <h5 class="text-dark text-break-line-1 mb-0 manage-post-item-title">
            Contact Us
        </h5>
    </a>

    
    
        <a class="manage-post-item-link-small mw-medium d-none d-lg-block" target="_self" href="http://localhost/dacsn/contact-us">
        <small class="text-muted">http://localhost/dacsn/contact-us</small>
    </a>
</div>
                        <div class="manage-post-item-links mt-3">

    <a href="http://localhost/dacsn/admin/page/5/edit" class="btn btn-outline-primary btn-sm">Edit</a>
    <a href="http://localhost/dacsn/admin/page/5/edit" class="btn btn-outline-success btn-sm">Live Edit</a>

        <a href="javascript:mw.admin.content.delete('5');" class="btn btn-outline-danger btn-sm js-delete-content-btn-5">Delete</a>
        </div>


                    </div>

                    <div class="col item-author manage-post-item-col-4 d-xl-block d-none">
                        <span class="text-muted" title="kimthisophi1101">kimthisophi1101</span>
                    </div>

                </div>
            </div>
        </div>

    </div>
                                            
                    
                </div>
            </div>

            <div class="d-flex justify-content-center">

                <div style="width: 100%">
                    <span class="text-muted">10 results found</span>
                </div>

                <div>
                    <div>
    </div>

                </div>
            </div>

        
    </div>
</div>

<!-- Livewire Component wire-end:IYya41krlfcoXu5rnOEE -->        <div wire:id="sP7JfvIgjhPW9UOCyOn3" wire:initial-data='{"fingerprint":{"id":"sP7JfvIgjhPW9UOCyOn3","name":"admin-content-bulk-options","locale":"vi_VN","path":"admin\/content","method":"GET","v":"acj"},"effects":{"listeners":["multipleMoveToCategory","multiplePublish","multiplePublishExecute","multipleUnpublish","multipleUnpublishExecute","multipleDelete","multipleDeleteExecute","multipleUndelete","multipleUndeleteExecute","multipleDeleteForever","multipleDeleteForeverExecute"]},"serverMemo":{"children":[],"errors":[],"htmlHash":"5bcf0ff6","data":{"multipleMoveToCategoryShowModal":false,"multipleMoveToCategoryIds":[],"multiplePublishShowModal":false,"multiplePublishIds":[],"multipleUnpublishShowModal":false,"multipleUnpublishIds":[],"multipleDeleteShowModal":false,"multipleUndeleteShowModal":false,"multipleDeleteForeverShowModal":false,"multipleDeleteIds":[],"multipleUndeleteIds":[]},"dataMeta":[],"checksum":"fbd66ca9647d387ac13017ce7d9f4d87627adf1ebd01189769b014a4395df97a"}}'>

    <div wire:ignore>
        <script>
            function assign_selected_posts_to_category_exec(selectedIds) {
                mw.tools.confirm("Are you sure you want to move the selected data?", function () {
                    var dialog = mw.dialog.get('#pick-categories');
                    var tree = mw.tree.get('#pick-categories');
                    var selected = tree.getSelected();
                    var data = {
                        content_ids: selectedIds,
                        categories: []
                    };
                    selected.forEach(function (item) {
                        if (item.type === 'category') {
                            data.categories.push(item.id);
                        } else if (item.type === 'page') {
                            data.parent_id = item.id;
                        }
                    });
                    $.post("http://localhost/dacsn/api/content/bulk_assign", data, function (msg) {
                        mw.notification.msg(msg);
                        window.livewire.emit('multipleMoveToCategoryExecute');
                        window.livewire.emit('refreshContentListAndDeselectAll');
                        dialog.remove();
                    });
                });
            }
            function assign_selected_posts_to_category_show_tree(selectedIds) {
                $.get("http://localhost/dacsn/api/content/get_admin_js_tree_json", function (data) {
                    var btn = document.createElement('button');
                    btn.disabled = true;
                    btn.className = 'mw-ui-btn';
                    btn.innerHTML = mw.lang('Move posts');
                    btn.onclick = function (ev) {
                        assign_selected_posts_to_category_exec(selectedIds);
                    };
                    var dialog = mw.dialog({
                        height: 'auto',
                        autoHeight: true,
                        id: 'pick-categories',
                        footer: btn,
                        title: mw.lang('Select categories')
                    });
                    var tree = new mw.tree({
                        data: data,
                        element: dialog.dialogContainer,
                        sortable: false,
                        selectable: true,
                        multiPageSelect: false

                    });
                    $(tree).on("selectionChange", function () {
                        btn.disabled = tree.getSelected().length === 0;

                        var selected = tree.getSelected();
                        if(selected.length){
                            var hasPage = selected.find(function (item){
                                return item.type === 'page';
                            });

                            if(typeof hasPage === 'undefined'){
                                var category = selected[0];
                                tree.select(category.parent_id, 'page', true);
                            }
                        }
                    });

                    $(tree).on("ready", function () {
                        dialog.center();
                    })
                });
            }
            </script>

        <script>
            Livewire.on('multipleMoveToCategoryShowModalOpen', function (selectedIds) {
                assign_selected_posts_to_category_show_tree(selectedIds)
            })
        </script>


    </div>

    

    

    
    

    

    

</div>

<!-- Livewire Component wire-end:sP7JfvIgjhPW9UOCyOn3 -->
    </div>
</div>

<script>
    mw.delete_single_post = function (id) {
        mw.tools.confirm("Bạn có chắc chắn muốn xóa??", function () {
            mw.post.del(id, function () {
                mw.$(".manage-post-item-" + id).fadeOut(function () {
                    $(this).remove()
                });
            });
        });
    }
</script>

        
        
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
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/945c859949bd75f7e30e0f53f1dddf9477a6d8a0.blade.php ENDPATH**/ ?>