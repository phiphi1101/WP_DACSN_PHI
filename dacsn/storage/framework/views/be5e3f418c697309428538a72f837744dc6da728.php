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



<body class="is_admin loading view-modules action-">

<div>
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('pgPwCRb')) {
    $componentId = $_instance->getRenderedChildComponentId('pgPwCRb');
    $componentTag = $_instance->getRenderedChildComponentTagName('pgPwCRb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pgPwCRb');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('pgPwCRb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
            <script>
            $(document).ready(function () {
                if ($('body').find('.main-toolbar').length == 0) {
                    $('main').prepend('<div id="info-toolbar" type="admin/modules/info" history_back="true"></div>');
                    mw.reload_module('#info-toolbar');
                }
            })
        </script>
    
    <div class="main container my-3">
        <aside>
                                    
            
            


            <ul class="nav flex-column" id="mw-admin-main-navigation">
                <li class="nav-item">
                    <a href="http://localhost/dacsn/admin/" class="nav-link ">
                        <i class="mdi mdi-view-dashboard"></i> bảng điều khiển                    </a>
                </li>

                
                                    <li class="nav-item dropdown-no-js ">

                        <a href="http://localhost/dacsn/admin/content" class="nav-link dropdown-toggle  ">
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





                
                                <li class="nav-item dropdown active">
                    <a class="nav-link active" href="http://localhost/dacsn/admin/view:modules/load_module:users/action:profile">
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


        
    <main class="module-users">

                                    
                <div class=' module module-users '   data-mw-title="Users" view="admin"   backend="true"   id="mw-main-module-backend"   data-type="users"   parent-module="users"   parent-module-id="mw-main-module-backend"  >
    <div class=' module module-admin-modules-info ' id='mw-main-module-backend-admin-modules-info'  history_back="true"   parent-module-id="mw-main-module-backend"   parent-module="users"   data-type="admin/modules/info"  ><script>

    $( document ).ready(function() {
        var el = $('.mw-modules-toolbar-back-button-holder').first();

        if(el){
            if(!el.is(":visible")){
            $('.mw-modules-toolbar-back-button-holder').show();
            }
        }
    })

</script>
<div class="position-relative">
    <div class="main-toolbar mw-modules-toolbar-back-button-holder" id="mw-modules-toolbar" style="display: none">
                    <a href="javascript:;" onClick="mw.admin.back()" class="btn btn-link text-silver px-0"><i class="mdi mdi-chevron-left"></i> Trở lại</a>
                    
            </div>
</div>
</div>

<div class=' module module-users-edit-user ' id='mw-main-module-backend-users-edit-user'  edit-user="0"   parent-module-id="mw-main-module-backend"   parent-module="users"   data-type="users/edit_user"  >
<script>mw.lib.require("mwui_init");</script>
<script>mw.require("files.js");</script>

                <script>

        var userId = 0;
        DeleteUserAdmin0 = function ($user_id) {
            if (confirm("Are you sure you want to delete this user?")) {
                $.post("http://localhost/dacsn/api/delete_user", {id: $user_id})
                    .done(function (data) {
                        location.href = "http://localhost/dacsn/admin/view:modules/load_module:users";
                    });
            }
        }

        LoginAsUserFromAdmin0 = function ($user_id) {
            if (confirm("Are you sure you want to login as this user?")) {
                $.post("http://localhost/dacsn/api/user_make_logged", {id: $user_id}).done(function (data) {
                    window.location.reload()
                });
            }
        }

        
        var isValid = function () {
            var valid = true;
            mw.$('[name="email"], [name="text"]', '#users_edit_63f065bb2f0b1').each(function () {
                if (!this.validity.valid) {
                    $(this).addClass('is-invalid')
                    valid = false;
                } else {
                    $(this).removeClass('is-invalid')
                }
            })
            return valid;
        }

        SaveAdminUserForm0 = function () {
            if (!isValid()) {
                return;
            }

            var val = document.getElementById("reset_password").value.trim();
            if (!val) {
                document.getElementById("reset_password").disabled = true;
            }
            var el = document.getElementById('user-save-button');
            mw.form.post(mw.$('#users_edit_63f065bb2f0b1'), 'http://localhost/dacsn/api/user', function (scopeEl) {
                if (this.error) {
                    mw.notification.error(this.error);
                    return;
                }
                saveduserid = 0;
                if(this.data){
                   var saveduserid = this.data.id;
                }

                mw.notification.success(mw.lang('All changes saved'));
                if (userId === 0) {
                    location.href = "http://localhost/dacsn/admin/view:modules/load_module:users/edit-user:" + saveduserid;
                }
                mw.spinner({element: el, color: 'white'}).remove();
                el.disabled = false;
            },false,false,false,false,'PUT');
        }



        $(document).ready(function () {

            uploader = mw.files.uploader({
                filetypes: "images",
                element: mw.$("#change_avatar")
            });


            $(uploader).on("FileUploaded", function (a, b) {
                mw.$(".js-user-image").attr("src", b.src);
                mw.$("#user_thumbnail").val(b.src);
            });

            mw.$("#avatar_holder .mw-icon-close").click(function () {
                if (mw.$("#avatar_holder").length === 0) {
                    mw.$(".js-user-image").attr("src", 'http://localhost/dacsn/userfiles/modules/microweber/api/libs/mw-ui/assets/img/no-user.png');
                    mw.$("#user_thumbnail").val("");
                }
            });
        });

        reset_password = function (y) {
            var y = y || false;
            var field2 = mw.$(".js-reset-password");
            var field = mw.$("#reset_password");
            if (field2.hasClass("semi_hidden") && !y) {
                field2.removeClass("semi_hidden");
                field[0].disabled = false;
                field.focus();
            } else {
                field2.addClass("semi_hidden");
                field[0].disabled = true;
            }
        }
    </script>

    <style>
        .js-img-holder:hover img {
            display: none;
        }

        .js-img-holder:hover .js-add-image {
            display: block;
        }

        .js-img-holder .js-add-image .add-the-image {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            align-items: center;
            justify-content: center;
            display: none;
        }

        .js-img-holder:hover .js-add-image .add-the-image {
            display: flex;
        }
    </style>

    
    <div class="card style-1 bg-light mb-3">
        <div class="card-header d-flex">
            <h5>
                <i class="mdi mdi-account-plus text-primary mr-3"></i> <strong>Thêm người dùng mới</strong>
            </h5>

            <button id="user-save-button-top" class="btn btn-success btn-sm floar-end" onclick="SaveAdminUserForm0()">Lưu lại</button>

        </div>
        <div class="card-body pt-3">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <div class="module-users-edit-user user-id-0" id="users_edit_63f065bb2f0b1">
                        <div id="avatar_holder" class="text-center">
                            <div class="d-inline-block">
                                                                    <div class="img-circle-holder img-absolute js-img-holder">
                                        <img src="http://localhost/dacsn/userfiles/modules/microweber/api/libs/mw-ui/assets/img/no-user.png" class="js-user-image">

                                        <div class="js-add-image">
                                            <a href="javascript:;" class="add-the-image" id="change_avatar"><i class="mdi mdi-image-plus mdi-24px"></i></a>
                                        </div>
                                    </div>
                                
                                <span class="text-primary mt-2 d-block">Hình ảnh người dùng</span>
                                <input type="hidden" class="form-control" name="thumbnail" id="user_thumbnail" value="">
                            </div>
                        </div>

                        
                        <input type="hidden" name="id" value="0">
                        <input type="hidden" name="token" value="anolBtb0Jl7atBLYUSGjLZXlU70o2phRwuGzWKSF" autocomplete="off">

                        
                        <div class="d-block">
                            <small class="d-block text-muted text-center mb-4 mt-2">Điền vào các trường để tạo người dùng mới</small>

                            <div class="form-group">
                                <label class="control-label">tên tài khoản</label>
                                <input type="text" class="form-control" name="username" value="">
                            </div>


                            <div class="form-group">
                                <label class="control-label">Mật khẩu</label>
                                                                <div class="input-group input-group-password mb-3 append-transparent ">
                                    <input type="password" name="password" class="form-control" id="reset_password">
                                    <div class="input-group-append">
                                        <span class="input-group-text js-show-password bg-white" data-bs-toggle="tooltip" data-title="Hiển thị / Ẩn mật khẩu"><i class="mdi mdi-eye-outline text-muted mdi-20px"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label">Nhập lại mật khẩu</label>
                                <div class="input-group input-group-password mb-3 append-transparent">
                                    <input type="password" name="verify_password" class="form-control" id="verify_password">
                                    <div class="input-group-append">
                                        <span class="input-group-text js-show-password bg-white" data-bs-toggle="tooltip" data-title="Hiển thị / Ẩn mật khẩu"><i class="mdi mdi-eye-outline text-muted mdi-20px"></i></span>
                                    </div>
                                </div>
                            </div>


                            <small class="d-block text-muted text-center mb-2">Dữ liệu cá nhân của người dùng</small>

                            <div class="form-group">
                                <label class="control-label">Tên đầu tiên</label>
                                <input type="text" class="form-control" name="first_name" value="">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Họ</label>
                                <input type="text" class="form-control" name="last_name" value="">
                            </div>

                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <input type="email" class="form-control" name="email" value="">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Điện thoại</label>
                                <input type="text" class="form-control" name="phone" value="">
                            </div>

                            <div class="form-group mt-4 mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="send_new_user_email" checked>
                                    <label class="custom-control-label" for="send_new_user_email">Gửi cho người dùng mới một email về tài khoản của họ. <br>
                                    </label>
                                    <br>
                                    <a href="http://localhost/dacsn/admin/view:settings#option_group=users" target="_blank">Chỉnh sửa mẫu e-mail.</a>
                                </div>
                            </div>

                            
                                                            <small class="d-block text-muted text-center mb-3">Trạng thái và vai trò của người dùng</small>

                                <div class="form-group">
                                    <label class="control-label mb-1">Vai trò của người dùng</label>
                                    <small class="text-muted d-block mb-1">Chọn vai trò hiện tại của người dùng.
                                      <!--  <a href=""></a>-->
                                    </small>
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="is_admin">

                                        <option value="1" >Admin</option>
                                        <option value="0"  selected="selected" >User</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label mb-1">Đang hoạt động?</label>
                                    <small class="text-muted d-block mb-1">Chọn trạng thái hiện tại của người dùng này</small>

                                    <div class="custom-control custom-radio d-inline-block mr-3">
                                        <input type="radio" id="is_active1" class="custom-control-input" value="1" name="is_active" checked>
                                        <label class="custom-control-label" for="is_active1">Hoạt động</label>
                                    </div>
                                    <div class="custom-control custom-radio d-inline-block">
                                        <input type="radio" id="is_active2" class="custom-control-input" value="0" name="is_active">
                                        <label class="custom-control-label" for="is_active2">Tàn tật</label>
                                    </div>

                                                                    </div>

                                <div class="form-group d-none">
                                    <label class="control-label d-block">Chế độ cơ bản</label>

                                    <div class="custom-control custom-radio d-inline-block mr-3">
                                        <input type="radio" id="basic_mode1" class="custom-control-input" value="1" name="basic_mode">
                                        <label class="custom-control-label" for="basic_mode1">Hoạt động</label>
                                    </div>

                                    <div class="custom-control custom-radio d-inline-block">
                                        <input type="radio" id="basic_mode0" class="custom-control-input" value="0" name="basic_mode" checked>
                                        <label class="custom-control-label" for="basic_mode0">Tàn tật</label>
                                    </div>
                                </div>
                            
                            
                            <a href="javascript:;" class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#advanced-settings">Cài đặt nâng cao</a>

                            <div class="collapse" id="advanced-settings">
                                <div class="form-group">
                                    <label class="control-label">Mã API</label>
                                    <input type="text" class="form-control" name="api_key" value="">
                                </div>

                                
                                                                    <script>
                                        function mw_admin_tos_popup(user_id) {
                                            var modalTitle = 'Nhật ký thỏa thuận điều khoản';

                                            mw.dialog({
                                                content: '<div id="mw_admin_edit_tos_item_module"></div>',
                                                title: modalTitle,
                                                id: 'mw_admin_edit_tos_item_popup_modal'
                                            });

                                            var params = {}
                                            params.user_id = user_id;
                                            mw.load_module('users/terms/log', '#mw_admin_edit_tos_item_module', null, params);
                                        }

                                        function mw_admin_login_attempts_popup(user_id) {
                                            var modalTitle = 'Cố gắng đăng nhập';

                                            mw_admin_login_attempts_popup_modal_opened = mw.dialog({
                                                content: '<div id="mw_admin_login_attempts_module"></div>',
                                                title: modalTitle,
                                                id: 'mw_admin_login_attempts_popup_modal'
                                            });

                                            var params = {}
                                            params.user_id = user_id;
                                            mw.load_module('users/login_attempts', '#mw_admin_login_attempts_module', null, params);
                                        }
                                    </script>

                                    <div class="export-label d-flex align-items-center justify-content-center-x">
                                        <a href="http://localhost/dacsn/api/users/export_my_data?user_id=0" class="btn btn-link px-0">Xuất dữ liệu người dùng</a>
                                         
                                    </div>
                                    <div class="export-label d-flex align-items-center justify-content-center-x">

                                        <a href="javascript:mw_admin_tos_popup(0)" class="btn btn-link px-0">Nhật ký thỏa thuận điều khoản</a>
                                         
                                    </div>
                                    <div class="export-label d-flex align-items-center justify-content-center-x">

                                        <a href="javascript:mw_admin_login_attempts_popup(0)" class="btn btn-link px-0">Cố gắng đăng nhập</a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="thin">

            <div class="d-flex justify-content-between">
                <a class="btn btn-outline-primary btn-sm" href="http://localhost/dacsn/admin/view:modules/load_module:users">Huỷ bỏ</a>
                <button id="user-save-button" class="btn btn-success btn-sm" onclick="SaveAdminUserForm0()">Lưu lại</button>
            </div>
        </div>
    </div>
    </div></div>        
        
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
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/2749ba2e634abd44830b94616b63a4778c19dd10.blade.php ENDPATH**/ ?>