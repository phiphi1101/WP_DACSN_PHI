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
        @livewire('livewire-ui-modal')
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
                                                <a href="http://localhost/dacsn/admin/view:modules" class="nav-link active"><i class="mdi mdi-view-grid-plus"></i> Mô-đun </a>
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


        
    <main class="module-modules">

                    <div class=' module module-admin-modules '   view="admin"   backend="true"   id="mw-main-module-backend"   data-type="admin/modules"   parent-module="admin/modules"   parent-module-id="mw-main-module-backend"  ><script type="text/javascript">
    mw.require('forms.js');
</script>

<script type="text/javascript">
    $(document).ready(function () {

        mw.dropdown();
        mw.$('#modules_categories_tree_mw-main-module-backend .fixed-side-column-container .well').prepend('<ul class="category_tree"><li><a href="#?category=0" data-category-id="0" onclick="mw.url.windowHashParam(\'category\', 0);return false;">Tất cả</a></li></ul>');
        mw.$('#modules_categories_tree_mw-main-module-backend li a').each(function () {
            var el = this;
            var id = el.attributes['data-category-id'].nodeValue;
            el.href = '#?category=' + id;
            el.className += ' cat-' + id;
            el.setAttribute('onclick', 'mw.url.windowHashParam("category",' + id + ');return false;');
        });

        var h = mw.hash();

        if (h === '' || h === '#' || h === '#?') {
            _modulesSort();
        } else {
            var hash = mw.url.getHashParams(h);
            try {
                document.querySelector(".modules-index-bar input[value='" + hash.ui + "']").checked = true;
            } catch (e) {
            }
        }

        mw.$("select.js-modules-sort-types").on('change', function () {
            var val = $(this).val();
            mw.url.windowHashParam('ui', val);
        });

        $("select.js-modules-sort-status").on('change', function () {
            var val = $(this).val();
            mw.url.windowHashParam('installed', val);
        });
    });

    
    function mw_reload_all_modules() {
        mw_reload_all_elements()
        mw.notification.success('Reloading...', 3000)
        mw.tools.loading(true);

        mw.$('#modules_admin_mw-main-module-backend').attr('reload_modules', 1);
        mw.$('#modules_admin_mw-main-module-backend').attr('cleanup_db', 1);
        $(".reload-module-btn").addClass('reloading')
        mw.load_module('admin/modules/manage', '#modules_admin_mw-main-module-backend', function () {

            mw.notification.success('Modules have been reloaded', 5000)
            mw.$('#modules_admin_mw-main-module-backend').removeAttr('cleanup_db');
            $(".reload-module-btn").removeClass('reloading');
            mw.tools.loading(false);

            $.post(mw.settings.api_url + 'mw_post_update');
            mw.notification.success("The DB was reloaded");


        });
    }


    function mw_reload_all_elements() {
        mw.tools.loading(true);
        mw.$('#reload_elements_empty_holder').attr('reload_modules', 1);
        mw.$('#reload_elements_empty_holder').attr('cleanup_db', 1);
        mw.load_module('admin/modules/elements', '#reload_elements_empty_holder', function () {
            mw.tools.loading(false);
        });
    }


    _modulesSort = function () {

        var hash = mw.url.getHashParams(window.location.hash);

        //hash.ui === undefined ? mw.url.windowHashParam('ui', 'admin') : '' ;
        // hash.category === undefined ? mw.url.windowHashParam('category', '0') : '' ;

        var attrs = mw.url.getHashParams(window.location.hash);
        var holder = mw.$('#modules_admin_mw-main-module-backend');

        var arr = ['data-show-ui', 'data-search-keyword', 'data-category', 'data-installed', 'install_new'], i = 0, l = arr.length;

        var sync = ['ui', 'search', 'category', 'installed', 'install_new'];

        for (; i < l; i++) {
            holder.removeAttr(arr[i]);
        }

        if (hash.ui === undefined) {
            holder.attr('data-show-ui', 'admin');
        }


        for (var x in attrs) {
            if (x === 'category' && (attrs[x] === '0' || attrs[x] === undefined)) continue;
            holder.attr(arr[sync.indexOf(x)], attrs[x]);
        }
        mw.load_module('admin/modules/manage', '#modules_admin_mw-main-module-backend', function () {
            $('#module_keyword').removeClass('loading');


            var el = $("#modules_admin_mw-main-module-backend .mw-modules-admin");
            // $( "#modules_admin_mw-main-module-backend .mw-modules-admin" ).sortable('destroy');
            el.sortable({
                handle: ".mw_admin_modules_sortable_handle",
                items: "li",
                axis: 'y',
                update: function () {
                    var serial = el.sortable('serialize');
                    $.ajax({
                        url: mw.settings.api_url + 'module/reorder_modules',
                        type: "post",
                        data: serial
                    });
                }
            });


        });
    }

    $(document).ready(function () {
        mw.on.hashParam('ui', _modulesSort);
        mw.on.hashParam('installed', _modulesSort);

        mw.on.hashParam('search', function (value) {
            _modulesSort();
            var field = document.getElementById('module_keyword');

            if (!field.focused) {
                field.value = value;
            }
        });

        mw.on.hashParam('install_new', function () {
            _modulesSort();
        });

        mw.on.hashParam('category', function (value) {
            _modulesSort();
            mw.$("#mw_index_modules a.active").removeClass('active');
            mw.$("#mw_index_modules .cat-" + value).addClass('active');
        });
        mw.on.hashParam('installed', function () {
            _modulesSort();
        });

        $('#module_keyword').on('input', function () {
            if ($(this).val() == '') {
                mw.url.windowHashParam('search', this.value)
            }
        });

        $('#module_keyword').keypress(function (e) {
//            e.preventDefault();
            var key = e.which;
            if (key == 13) {
                mw.url.windowHashParam('search', $('#module_keyword').val());
                return false;
            }
        });

        $('.js-search-keyword').on('click', function (e) {
            e.preventDefault();
            mw.url.windowHashParam('search', $('#module_keyword').val())
        })
    });

    $(document).ready(function () {
        _modulesSort();
        mw.on.hashParam('market', function (value) {
            if (value !== false) {
                mw.$('html').addClass('market-init');
                mw.load_module('admin/modules/market', '#modules_market_mw-main-module-backend');
                /*        $("#modules_admin_mw-main-module-backend").hide();
                 $("#modules_market_mw-main-module-backend").show();
                 $(".modules-index-bar").hide();*/
            } else {
                mw.$('html').removeClass('market-init');
            }
        })


    });


</script>
<div class="card bg-none style-1 mb-0 card-settings">
    <div class="card-header px-0">
        <h5>
            <i class="mdi mdi-view-grid-plus text-primary mr-3"></i> <strong>Mô-đun</strong>
        </h5>
        <div>

        </div>
    </div>

    <div class="card-body pt-3 px-0">
        <script>
            $(document).ready(function () {
                $('.js-show-filter').on('click', function () {
                    $(this).toggleClass('active');
                    if ($(this).hasClass('active')) {
                        $(this).find('i').removeClass('mdi-filter-outline').addClass('mdi-close-thick');
                    } else {
                        $(this).find('i').removeClass('mdi-close-thick').addClass('mdi-filter-outline');
                    }
                });
            });
        </script>

        <div class="d-lg-block d-xl-flex text-center align-items-center justify-content-between mt-3 mb-4">
            <div class="mb-3">
                <form class="d-flex justify-content-center">
                    <div class="form-group mb-0">
                        <div class="input-group mb-0 prepend-transparent">
                            <div class="input-group-prepend bg-white">
                                <span class="input-group-text"><i class="mdi mdi-magnify mdi-20px"></i></span>
                            </div>

                            <input value="" type="search" class="form-control" name="module_keyword" id="module_keyword" placeholder="Tìm kiếm các mô-đun" autocomplete="off">
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary ml-2 js-search-keyword">Tìm kiếm</button>
                </form>
            </div>

            <div class="mb-3">

                                    <a href="?show_modules_by_categories=1" class="btn btn-outline-primary btn-md  btn-icon" title="Sort by category"><i class="mdi mdi-view-list"></i> </a>
                

                <a href="#" class="btn btn-outline-primary icon-left btn-md js-show-filter" data-bs-toggle="collapse" data-bs-target="#show-filter"><i class="mdi mdi-filter-outline"></i> Bộ lọc</a>

                
                                    <a href="javascript:;" onclick="mw_reload_all_modules()" class="btn btn-primary reload-module-btn icon-left"><i class="mdi mdi-refresh icon-left"></i> Tải lại mô-đun</a>
                
            </div>
        </div>


        <div class="collapse" id="show-filter">
            <div class="bg-primary-opacity-1 rounded p-4 mb-4">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div>
                            <label class="d-block mb-2">Kiểu</label>

                            <select class="selectpicker js-modules-sort-types" data-width="100%">
                                <option value="live_edit">Chỉnh sửa trực tiếp các mô-đun</option>
                                <option value="admin" selected>Mô-đun quản trị</option>
                                <option value="advanced">Tất cả các mô-đun</option>
                                <option value="elements">yếu tố</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="d-block mb-2">Trạng thái</label>

                            <select class="selectpicker js-modules-sort-status" data-width="100%">
                                <option value="1">Cài đặt</option>
                                <option value="0">Đã gỡ cài đặt</option>
                                <!--                                <option value="2">--><!--</option>-->
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mw-dropdown pull-left nested-dropdown" style="display:none;"><span class="mw-dropdown-value mw-ui-btn mw-ui-btn-medium mw-dropdown-val mw-dropdown-button">Thể loại</span>
                <div class="mw-dropdown-content">
                    <div class=' module module-categories '   data-mw-title="Categories" data-for="modules"   id="modules_admin_categories_mw-main-module-backend"   parent-module-id="mw-main-module-backend"   parent-module="admin/modules"   data-type="categories"  ><script>mw.moduleCSS("http://localhost/dacsn/userfiles/modules/categories/styles.css"); </script>



<div class="module-categories module-categories-template-horizontal-list-1">
    </div>
</div>
                </div>
            </div>
        </div>

        <div class="mw-modules-admin-holder">


                         <div id="modules_admin_mw-main-module-backend"></div>
                        <div id="modules_market_mw-main-module-backend"></div>
        </div>
    </div>
</div>

<div id="reload_elements_empty_holder" style="display: none"></div>
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
