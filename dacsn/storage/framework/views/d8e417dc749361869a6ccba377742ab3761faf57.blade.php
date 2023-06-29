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
                                                        <a class="dropdown-item " href="http://localhost/dacsn/admin/view:content/action:settings">
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


        
    <main class="module-contact-form">

                                    
                <div class=' module module-contact-form '   data-mw-title="Contact form" view="admin"   backend="true"   id="mw-main-module-backend"   data-type="contact_form"   parent-module="contact_form"   parent-module-id="mw-main-module-backend"  >
    

    <div class=' module module-admin-modules-info ' id='mw-main-module-backend-admin-modules-info'  parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="admin/modules/info"  ><script>

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
                    <a  href="http://localhost/dacsn/admin/view:modules" class="btn btn-link text-silver px-0"><i class="mdi mdi-chevron-left"></i> Trở lại</a>
                    
            </div>
</div>
</div>

<div class="card style-1 mb-3 ">
    <div class="card-header">
        <div class=' module module-admin-modules-info-module-title ' id='mw-main-module-backend-admin-modules-info-module-title'  for-module="contact_form"   parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="admin/modules/info_module_title"  ><h5>
            <img src="http://localhost/dacsn/userfiles/modules/contact_form/contact_form.svg" class="module-icon-svg-fill"/>
                <strong>Mâu liên hệ</strong>
    </h5>


</div>
    </div>

    <div class="card-body pt-3">
        <div id="mw_index_contact_form">

                                    
            
            
            <nav class="nav nav-pills nav-justified btn-group btn-group-toggle btn-hover-style-3">
                <a class="btn btn-outline-secondary justify-content-center  active " data-bs-toggle="tab" href="#list"><i class="mdi mdi-format-list-bulleted-square mr-1"></i> Danh sách biểu mẫu của bạn</a>
                <a class="btn btn-outline-secondary justify-content-center " data-bs-toggle="tab" href="#settings"><i class="mdi mdi-cog-outline mr-1"></i> Thiết lập toàn cầu</a>
                <a class="btn btn-outline-secondary justify-content-center " data-bs-toggle="tab" href="#integrations"><i class="mdi mdi-pencil-ruler mr-1"></i> Tích hợp e-mail</a>
            </nav>

            <div class="tab-content py-3">
                <div class="tab-pane fade  show active " id="list">

                    <div class=" mb-3">
                        <div class="form-group">
                            <label class="control-label d-block mb-2">Danh sách biểu mẫu của bạn</label>
                            <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="selectpicker" data-width="100%">
                                <option  selected="selected"  value="http://localhost/dacsn/admin/view:modules/load_module:contact_form">Tất cả danh sách</option>
                                <option  value="http://localhost/dacsn/admin/view:modules/load_module:contact_form/load_list:0">Danh sách mặc định                                    (0)
                                </option>
                                                                                            </select>
                        </div>
                    </div>

                                            <script type="text/javascript">
                            mw.on.hashParam('search', function (pval) {
                                var field = document.getElementById('forms_data_keyword');
                                if (!field.focused) {
                                    field.value = pval;
                                }
                                if (pval != '') {
                                    $('#forms_data_module').attr('keyword', pval);
                                }
                                else {
                                    $('#forms_data_module').removeAttr('keyword');
                                }
                                $('#forms_data_module').removeAttr('export_to_excel');
                                mw.reload_module('#forms_data_module', function () {
                                    mw.$("#forms_data_keyword").removeClass('loading');
                                });
                            });
                            $(document).ready(function () {
                                $("#form_field_title").click(function () {
                                    mw.tools.elementEdit(this, false, function () {
                                        var new_title = this
                                        mw.forms_data_manager.rename_form_list('all_lists', new_title);
                                    });
                                });
                            });
                        </script>

                        <div class=' module module-contact-form-manager-list-toolbar ' id='mw-main-module-backend-contact-form-manager-list-toolbar'  load_list="all_lists"   parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="contact_form/manager/list_toolbar"  >
<script type="text/javascript">
    mw.require('http://localhost/dacsn/userfiles/modules/contact_form/manager/forms_data_manager.js');
</script>


<div class="form-list-toolbar row d-flex align-items-center">
    <div class="col-sm-6">
        <label class="control-label d-inline-block">Các mục cho danh sách: <span >All lists</span></label>

            </div>

    <div class="col-sm-6 text-end text-right">
        <div class="contact-form-export-search text-end text-right d-inline-block">
            <div class="form-inline">
                <div class="form-group mr-1 mb-2">
                    <input name="forms_data_keyword" id="forms_data_keyword" autocomplete="off" class="form-control form-control-sm" type="search" placeholder='Tìm kiếm dữ liệu'/>
                </div>

                <button type="submit" class="btn btn-primary btn-icon btn-sm mb-2" onclick="mw.url.windowHashParam('search', $('#forms_data_keyword').val());"><i class="mdi mdi-magnify"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
                        <div class=' module module-contact-form-manager-list '   load_list="all_lists"   for_module="contact_form"   id="forms_data_module"   parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="contact_form/manager/list"  ><script type="text/javascript">
    mw.require('http://localhost/dacsn/userfiles/modules/contact_form/manager/forms_data_manager.js');
</script>

<script type="text/javascript">
    toggle_show_less = function (el) {
        var el = $(el);
        el.prev().toggleClass('semi_hidden');
        var html = el.html();
        el.html(el.dataset("later"));
        el.dataset("later", html);
    }

    $(document).ready(function () {
        $('.js-toggle-full').on('click', function () {
            $(this).parent().toggleClass('more');
            $(this).toggleClass('showed');
        });
    });
</script>
<style>
    .js-limited {
        min-width: 250px;
        max-width: 500px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .js-limited.more {
        white-space: inherit;
        word-wrap: break-word;
    }

    .js-toggle-full {
        margin-top: 10px;
    }

    .js-toggle-full span:last-child {
        display: none;
    }

    .js-toggle-full.showed span:first-child {
        display: none;
    }

    .js-toggle-full.showed span:last-child {
        display: block;
    }

    .entry-col {
        min-width: 150px;
    }
</style>


<div class="messages-holder">
            <div class="icon-title">
            <i class="mdi mdi-email-check mx-2"></i> <h5>Bạn chưa có bất kỳ tin nhắn nào.</h5>
        </div>
    </div>

<div class="row mt-4">
    <div class="col-sm-4 text-center text-sm-left">
            </div>

            <div class="col-sm-4 text-center">
            <div class="pagination justify-content-center"><div class='pagination-holder' ><ul class='pagination'></ul></div></div>
        </div>

        <div class="col-sm-4 text-center text-sm-right">
            <div class="form-group" style="width:100%;" data-before="Hiển thị các mục trên mỗi trang">
                <form method="get">
                    <select name="per_page" class="selectpicker" data-size="5" data-width="100px" data-style="btn-sm" onchange="this.form.submit()">
                        <option value="">Select</option>
                        <option value="10"   selected  >30</option>
                        <option value="50" >50</option>
                        <option value="100" >100</option>
                        <option value="200" >200</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

<div class="row mt-1">
    <div class="col-sm-6">
        <div class="export-label">
            <span>Xuất dữ liệu</span>
            <span class="btn btn-outline-primary btn-sm" onclick="javascript:mw.forms_data_manager.export_to_excel('default');">Excel</span>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="text-end text-right">
            <strong>Toàn bộ:</strong>
            <span>0 tin nhắn trong danh sách này: </span>
        </div>
    </div>
</div>

</div>
                                    </div>

                <div class="tab-pane fade " id="settings">
                    <div class=' module module-settings-list ' id='mw-main-module-backend-settings-list'  for_module="contact_form"   for_module_id="contact_form_default"   parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="settings/list"  ><div class="mw-settings-list">
		</div></div>
                    <div class=' module module-contact-form-settings ' id='mw-main-module-backend-contact-form-settings'  for_module_id="contact_form_default"   parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="contact_form/settings"  ><script>mw.require('editor.js')</script>
<script>
    MWEditor.controllers.contactFormInsertEmailVariable = function (scope, api, rootScope, data) {
        this.checkSelection = function (opt) {
            opt.controller.element.disabled = !opt.api.isSelectionEditable();
        };
        this.render = function () {
            var dropdown = new MWEditor.core.dropdown({
                data: [

                    { label: 'email', value: '{email}' },

                ],
                placeholder: rootScope.lang('Insert variable')
            });
            dropdown.select.on('change', function (e, val) {
                api.insertHTML(val.value);
            });
            return dropdown.root;
        };
        this.element = this.render();
    };

    $(document).ready(function () {
        mweditor = mw.Editor({
            selector: '#editorAM',
            mode: 'div',
            smallEditor: false,
            minHeight: 250,
            maxHeight: '70vh',
            controls: [
                [
                    'undoRedo', '|', 'image', '|',
                    {
                        group: {
                            icon: 'mdi mdi-format-bold',
                            controls: ['bold', 'italic', 'underline', 'strikeThrough']
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
                    '|', 'link', 'unlink', 'wordPaste', 'table', 'contactFormInsertEmailVariable'
                ],
            ]
        });
    });
</script>


    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <i class="mdi mdi-email"></i> Bạn chưa cài đặt e-mail và smtp hệ thống.        <a href="http://localhost/dacsn/admin/view:settings#option_group=email" target="_blank">Thiết lập cài đặt hệ thống của bạn ở đây.</a>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        mw.options.form('.module-contact-form-settings', function () {
            mw.notification.success("Tất cả các thay đổi đã được lưu.");
        });
    });
</script>


<div id="form_email_options">
    <div class="row d-flex align-items-center">

                    <div class="col">
                <h5 class="font-weight-bold mb-3">Cài đặt biểu mẫu liên hệ toàn cầu</h5>
            </div>
        
        <div class="col text-right">
            <a class="btn btn-outline-primary btn-sm" href="http://localhost/dacsn/admin/view:settings#option_group=email" target="_blank"><i class="mdi mdi-email-send"></i> Tùy chọn gửi email</a>
        </div>
    </div>

    <div class="mt-2">

        <h5 class="font-weight-bold">người gửi toàn cầu</h5>

        <div class="form-group mb-3">
            <label class="control-label">Sử dụng cài đặt người gửi tùy chỉnh</label>
            <small class="text-muted d-block mb-2">
                Sử dụng cài đặt người gửi tùy chỉnh cho các biểu mẫu liên hệ toàn cầu.                <br />
                Theo mặc định, chúng tôi sẽ sử dụng cài đặt e-mail của hệ thống trang web.                <a href="http://localhost/dacsn/admin/view:settings#option_group=email" target="_blank">Bạn có thể thay đổi cài đặt e-mail hệ thống tại đây.</a>
            </small>
        </div>

        <div class="form-group mb-4">
                        <div class="custom-control custom-switch pl-0">
                <label class="d-inline-block mr-5" for="email_custom_sender">No</label>
                <input type="checkbox" onchange="toggleCustomSender(event)" data-value-checked="y" data-value-unchecked="n"   class="mw_option_field custom-control-input" name="email_custom_sender" option-group="contact_form_default" id="email_custom_sender" value="y" >
                <label class="custom-control-label" for="email_custom_sender">Yes</label>
            </div>
        </div>

        <script type="text/javascript">
            toggleCustomSender = function (e) {
                var el = e.target;
                if ($(el).is(":checked")) {
                    $('.js-custom-sender').fadeIn();
                } else {
                    $('.js-custom-sender').fadeOut();
                }

            };
        </script>

        <div class="js-custom-sender"  style="display:none">
            <div class="form-group">
                <label class="control-label">Từ địa chỉ email</label>
                <small class="text-muted d-block mb-2">Địa chỉ e-mail sẽ gửi tin nhắn</small>
                <input name="email_from" option-group="contact_form_default" value="" class="mw_option_field form-control" type="text"/>
            </div>

            <div class="form-group">
                <label class="control-label">Từ tên</label>
                <small class="text-muted d-block mb-2">Ví dụ. tên, công ty hoặc thương hiệu của bạn</small>
                <input name="email_from_name" option-group="contact_form_default" value="" class="mw_option_field form-control" type="text"/>
            </div>
        </div>

        <hr class="thin" />

        <h5 class="font-weight-bold">Người nhận toàn cầu</h5>
        <b>Gửi dữ liệu biểu mẫu liên hệ tới người nhận toàn cầu khi được gửi</b>

        <div class="form-group mt-3">
            <label class="control-label">Đến các địa chỉ email</label>
            <small class="text-muted d-block mb-2">E-mail address of the receivers separated with coma.</small>
            <input name="email_to" option-group="contact_form_default" value="" class="mw_option_field form-control" type="text"/>
        </div>

    </div>

</div>
</div>
                </div>

                <div class="tab-pane fade " id="integrations">
                    <div class=' module module-admin-mail-providers-show-all ' id='mw-main-module-backend-admin-mail-providers-show-all'  parent-module-id="mw-main-module-backend"   parent-module="contact_form"   data-type="admin/mail_providers/show_all"  >
<div class="row">
    <div class="col-12 mb-2">

        <script>
            $(document).ready(function () {

                $('.js-map-contact-form-fields').click(function () {
                    mw.notification.warning('Loading...');

                    var dialog = mw.dialog({
                        title: 'Map Contact Form Fields With Mail Providers'
                    });
                    dialog.center();

                    mw.load_module("admin/mail_providers/map_fields", dialog.dialogContainer);
                });

                $('.mail-provider-sync').click(function () {
                    mw.notification.warning('Loading...');

                    var dialog = mw.dialog({
                        title: 'Mailerlite Sync'
                    });

                    mw.load_module("admin/mail_providers/sync", dialog.dialogContainer);

                });
            });
        </script>

        <div class="alert alert-dismissible alert-primary">
             <i class="mdi mdi-information"></i> Chúng tôi khuyên bạn nên ánh xạ các trường trong biểu mẫu liên hệ của mình theo cách thủ công để tích hợp đầy đủ với các nhà cung cấp thư.            <button type="button" class="btn btn-primary js-map-contact-form-fields"><i class="mdi mdi-sitemap"></i> Trường bản đồ</button>
        </div>

        <button type="button" class="btn btn-primary mail-provider-sync pull-right"><i class="mdi mdi-cloud-sync"></i> Đồng bộ hóa người đăng ký</button>

    </div>
</div>


            <div class="card style-1 mb-3 card-collapse">
            <div class="card-header no-border" data-bs-toggle="collapse" data-bs-target="#mail_provider-0">
                <h6 class="font-weight-bold">FlexMail</h6>
            </div>
            <div class="card-body collapse" id="mail_provider-0">
                <div class=' module module-admin-mail-providers-flexmail ' id='mw-main-module-backend-admin-mail-providers-show-all-admin-mail-providers-flexmail'  data-mw-title="FlexMail" view="admin"   parent-module-id="mw-main-module-backend-admin-mail-providers-show-all"   parent-module="admin/mail_providers/show_all"   data-type="admin/mail_providers/flexmail"  ><script>
    $(document).ready(function () {
        var mail_provider_settings_form_class = '.mail-provider-flexmail-settings-form';
        $(mail_provider_settings_form_class).on('change paste', 'input, select, textarea', function () {
            $.post(mw.settings.api_url + 'save_mail_provider', $(mail_provider_settings_form_class).serialize(), function (data) {
                mw.notification.success('Settings are saved.');
            });
        });

        $('.mail-provider-test-api-flexmail').click(function () {

            $.post(mw.settings.api_url + 'save_mail_provider', $(mail_provider_settings_form_class).serialize());

            mw.notification.warning('Testing...');
            $.post(mw.settings.api_url + 'test_mail_provider', $(mail_provider_settings_form_class).serialize(), function (data) {
                if (data === '1') {
                    mw.notification.success('Sucessfull connecting.');
                } else {
                    mw.notification.error('Wrong mail provider settings.');
                }
            });

        });
    });
</script>

<form class="mail-provider-flexmail-settings-form" method="post">


    <div class="alert alert-dismissible alert-warning">
        <h4 class="alert-heading">Cảnh báo!</h4>
        <p class="mb-0">Mô-đun này chỉ hoạt động với API SOAP, không phải mô-đun mới đang sử dụng REST. </p>
    </div>

            <div class="alert alert-danger">
            <p class="mb-0">Liên hệ với nhà cung cấp dịch vụ lưu trữ của bạn để kích hoạt tiện ích mở rộng PHP SOAP. </p>
        </div>
    </div>
            </div>
        </div>
            <div class="card style-1 mb-3 card-collapse">
            <div class="card-header no-border" data-bs-toggle="collapse" data-bs-target="#mail_provider-1">
                <h6 class="font-weight-bold">MailerLite</h6>
            </div>
            <div class="card-body collapse" id="mail_provider-1">
                <div class=' module module-admin-mail-providers-mailerlite ' id='mw-main-module-backend-admin-mail-providers-show-all-admin-mail-providers-mailerlite'  data-mw-title="MailerLite" view="admin"   parent-module-id="mw-main-module-backend-admin-mail-providers-show-all"   parent-module="admin/mail_providers/show_all"   data-type="admin/mail_providers/mailerlite"  ><script>

    $(document).ready(function () {
        
        function getSerializeMailerliteForm()
        {
            return $('.mail-provider-mailerlite-settings-form').find('input, select, textarea').serialize();
        }

        $('.mail-provider-mailerlite-settings-form').on('change paste', 'input, select, textarea', function () {
            $.post(mw.settings.api_url + 'save_mail_provider', getSerializeMailerliteForm(), function () {
                mw.notification.success('Settings are saved.');
            });
        });

        $('.mail-provider-test-api-mailerlite').click(function () {

            $.post(mw.settings.api_url + 'save_mail_provider', getSerializeMailerliteForm());

            mw.notification.warning('Testing...');
            $.post(mw.settings.api_url + 'test_mail_provider', getSerializeMailerliteForm(), function (data) {
                if (data === '1') {
                    mw.notification.success('Sucessfull connecting.');
                } else {
                    mw.notification.error('Wrong mail provider settings.');
                }
            });

        });

    });
</script>


<div class="mail-provider-mailerlite-settings-form">
    <input type="hidden" name="mail_provider_name" value="mailerlite" />
            <div class="form-group">
            <label class="control-label">API Key</label>
            <input type="text" value="" name="api_key" class="mw_option_field form-control">
        </div>
    
    <div class="mw-ui-field-holder">
        <label class="mw-ui-label">Đã bật</label>
        

        <ul class="mw-ui-inline-list">
            <li>
                <label class="mw-ui-check">
                    <input class="mw_option_field" type="radio" name="active"  value="y" option-group="mailerlite_provider">
                    <span></span><span>Đúng</span>
                </label>
            </li>
            <li>
                <label class="mw-ui-check">
                    <input class="mw_option_field" type="radio" name="active"  checked  value="n" option-group="mailerlite_provider">
                    <span></span><span>Không</span>
                </label>
            </li>
        </ul>
    </div>

    <div class="form-group">
        <button type="button" class="btn btn-primary mail-provider-test-api-mailerlite"><i class="mdi mdi-flask"></i> Kiểm tra Api</button>
       <!-- <button type="button" class="btn btn-primary mail-provider-logs-api-mailerlite"><i class="mdi mdi-note-text"></i> Logs</button>-->
    </div>
</div>
</div>
            </div>
        </div>
    </div>
                </div>
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
