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
} elseif ($_instance->childHasBeenRendered('C8B9sRN')) {
    $componentId = $_instance->getRenderedChildComponentId('C8B9sRN');
    $componentTag = $_instance->getRenderedChildComponentTagName('C8B9sRN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('C8B9sRN');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('C8B9sRN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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


        
    <main class="module-comments">

                                    
                <div class=' module module-comments '   data-mw-title="Comments" view="admin"   backend="true"   id="mw-main-module-backend"   data-type="comments"   parent-module="comments"   parent-module-id="mw-main-module-backend"  >



<div class="mw-module-admin-wrap">

            <div class=' module module-admin-modules-info ' id='mw-main-module-backend-admin-modules-info'  parent-module-id="mw-main-module-backend"   parent-module="comments"   data-type="admin/modules/info"  ><script>

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
    
    <script>


        $(document).ready(function () {
            mw.$("#post_select").on("focus", function () {
                document.getElementById('display_from_post').checked = true;
            });
        });


    </script>
    <style>

        .tab{
            display: none;
        }

    </style>
            

<div class="card style-1 mb-3 ">
    <div class="card-header">
        <div class=' module module-admin-modules-info-module-title ' id='mw-main-module-backend-admin-modules-info-module-title'  for-module="comments"   parent-module-id="mw-main-module-backend"   parent-module="comments"   data-type="admin/modules/info_module_title"  ><h5>
            <img src="http://localhost/dacsn/userfiles/modules/comments/comments.svg" class="module-icon-svg-fill"/>
                <strong>Bình luận</strong>
    </h5>


</div>
    </div>

    <div class="card-body pt-3">
        <nav class="nav nav-pills nav-justified btn-group btn-group-toggle btn-hover-style-3">
            <a class="btn btn-outline-secondary justify-content-center active" data-bs-toggle="tab" href="#list"><i class="mdi mdi-format-list-bulleted-square mr-1"></i> Bình luận</a>
            <a class="btn btn-outline-secondary justify-content-center" data-bs-toggle="tab" href="#settings"><i class="mdi mdi-cog-outline mr-1"></i> Cài đặt</a>
            <!--<a class="btn btn-outline-secondary justify-content-center" data-bs-toggle="tab" href="#templates"><i class="mdi mdi-pencil-ruler mr-1"></i> --><!--</a>-->
        </nav>

        <div class="tab-content py-3">
            <div class="tab-pane fade show active" id="list">
                <script type="text/javascript">
                    mw.require('http://localhost/dacsn/userfiles/modules/comments/style.css');
                    mw.require('http://localhost/dacsn/userfiles/modules/comments/edit_comments.js');
                    mw.require('color.js', true);
                </script>

                <script type="text/javascript">
                    mw.on.hashParam("search", function (pval) {
                        if (pval !== '') {
                            $('#mw_admin_posts_with_comments').attr('data-search-keyword', pval);
                        } else {
                            $('#mw_admin_posts_with_comments').removeAttr('data-search-keyword');
                        }
                        $('#mw_admin_posts_with_comments').removeAttr('content_id');
                        mw.reload_module('#mw_admin_posts_with_comments', function () {
                            mw.$(".mw-ui-searchfield, input[type='search']").removeClass('loading');
                        });
                    });

                    mw.on.hashParam("content_id", function (pval) {
                        mw.$("a.comments-group").removeClass("active");
                        mw.$("a[href*='content_id=" + pval + "']").addClass("active");

                        if (pval == 'settings') {
                            mw.$('.comments-settings').show();
                            mw.$('.comments-items').hide();
                            mw.$('.comments-templates').hide();
                        } else if (pval == 'templates') {
                            mw.$('.comments-settings').hide();
                            mw.$('.comments-items').hide();
                            mw.$('.comments-templates').show();
                        } else {
                            mw.$('.comments-settings').hide();
                            mw.$('.comments-items').show();
                            mw.$('.comments-templates').hide();
                        }

                        if (pval !== '' && pval != '0') {
                            $('#mw_comments_admin_dashboard').hide();
                            $('#mw_admin_posts_with_comments').show();
                            $('#mw_admin_posts_with_comments').attr('content_id', this);
                            selected_content_comment_id = this;
                            mw.reload_module('#mw_admin_posts_with_comments', function () {
                                mw.adminComments.toggleMaster(document.querySelector('.comment-info-holder'));
                                //  mw.$("#comment-item-inner-"+selected_comment_id).addClass("active");
                                mw.$(".comment-holder-comment-rel-id-" + selected_content_comment_id).addClass("active");
                                //  mw.$("#comment-n-"+selected_comment_id).addClass("active");
                            });
                        } else {
                            mw.$('#mw_admin_posts_with_comments').removeAttr('content_id');
                            mw.$('#mw_admin_posts_with_comments').removeAttr('rel_id');
                            $('#mw_admin_posts_with_comments').removeAttr('rel_type');
                            mw.reload_module('#mw_admin_posts_with_comments');
                        }
                    });
                    mw.on.hashParam("rel_id", function (pval) {
                        if (pval !== '' && pval != '0') {
                            mw.$('#mw_comments_admin_dashboard').hide();
                            mw.$('#mw_admin_posts_with_comments').show();
                            mw.$('#mw_admin_posts_with_comments').attr('rel_id', this);
                            mw.reload_module('#mw_admin_posts_with_comments', function () {
                                mw.adminComments.toggleMaster(document.querySelector('.comment-info-holder'));
                            });
                        } else {
                            mw.$('#mw_admin_posts_with_comments').removeAttr('rel_id');
                            mw.reload_module('#mw_admin_posts_with_comments');
                        }
                    });

                    mw.on.hashParam("comments_for_content", function () {

                    });
                </script>

                <script type="text/javascript">
                    mw.require("forms.js", true);
                </script>

                <script type="text/javascript">
                    mw.adminComments = {
                        action: function (form, val) {
                              form = $(form);
                            var field = form.find('.comment_state');
                            var connected_id = mw.$('[name="connected_id"]', form[0]).val();
                            field.val(val);
                            var conf = true;
                            if (val == 'delete') {
                                  conf = confirm(mw.msg.to_delete_comment);
                            }
                            if (conf) {
                                var id = form.attr('id');
                                var data = form.serialize();
                                $.post("http://localhost/dacsn/admin/post", data, function (data) {
                                    mw.reload_module('#mw_comments_for_post_' + connected_id, function () {
                                        $('#mw_comments_for_post_' + connected_id).find(".comments-holder,.new-comments,.old-comments").show();
                                    });
                                });
                            }
                        },
                        toggleEdit: function (id) {
                            mw.$(id).toggleClass('comment-edit-mode');
                            if (mw.$(id).hasClass("comment-edit-mode")) {
                                mw.$(id).find("textarea").focus();
                            }
                        },
                        display: function (e, el, what) {
                            mw.event.cancel(e);
                            var _new = mw.tools.firstParentWithClass(el, 'comment-post').querySelector('.new-comments');
                            var _old = mw.tools.firstParentWithClass(el, 'comment-post').querySelector('.old-comments');
                            if (what == 'all') {
                                $(_new).show();
                                $(_old).show();
                            }
                            else if (what == 'new') {
                                $(_new).show();
                                $(_old).hide();
                            }
                        },
                        toggleMaster: function (master, e) {
                            if (master === null) {
                                return false;
                            }
                            if (e != undefined) {
                                mw.event.cancel(e);
                            }
                            var _new = master.parentNode.querySelector('.new-comments');
                            var _old = master.parentNode.querySelector('.old-comments');
                            if ($(_new).is(":visible") || $(_old).is(":visible")) {
                                $([_new, _old]).hide();
                                $(master).removeClass("active");
                            }
                            else {
                                $([_new, _old]).show();
                                $(master).addClass("active");
                                var is_cont = $(master).attr('content-id')
                                if (typeof is_cont != "undefined") {
                                    var mark_as_old = {}
                                    mark_as_old.content_id = is_cont;
                                    $.post('http://localhost/dacsn/api/mark_comments_as_old', mark_as_old, function (data) {

                                    });
                                }
                            }
                        }
                    }
                </script>

                
                
                <div class="comments-admin-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Bình luận<br>
                            <small class="text-muted">Đọc, kiểm duyệt và xuất bản nhận xét</small>
                        </h4>

                        <div class="input-group mb-0 prepend-transparent mx-2" style="width: 200px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span>
                            </div>

                            <input type="search" class="form-control form-control-sm" placeholder="Tìm kiếm bình luận" onkeyup="mw.on.stopWriting(this, function(){mw.url.windowHashParam('search', this.value)});">
                        </div>
                    </div>
                </div>

                <div class=' module module-comments-manage '   id="mw_admin_posts_with_comments"   parent-module-id="mw-main-module-backend"   parent-module="comments"   data-type="comments/manage"  ><div class="no-items-found comments">
        <div class="icon-title">
            <i class="mdi mdi-comment"></i> <h5>Bạn chưa có bất kỳ bình luận nào.</h5>
        </div>
    </div>

    </div>
            </div>

            <div class="tab-pane fade" id="settings">
                <div class=' module module-comments-settings '   id="mw_admin_comments_settings"   parent-module-id="mw-main-module-backend"   parent-module="comments"   data-type="comments/settings"  >
<div>
    <style  scoped="scoped">
        #other-settings {
            position: relative;
            overflow: hidden;
            padding-top: 10px;
        }

        .avatartype {
            display: inline-block;
            width: 32px;
            height: 32px;
            position: absolute;
            top: -10px;
            left: 0;
        }

        .avatars-holder .mw-ui-check input + span + span {
            position: relative;
            padding-left: 40px;
        }

        .avatartype-mysteryman {
            background: url(http://localhost/dacsn/userfiles/modules/microweber/img/avatars.jpg) no-repeat;
        }

        .avatartype-randomcolor {
            background: #9F41AA;
            transition: background-color 0.2s;
            -moz-transition: background-color 0.2s;
            -webkit-transition: background-color 0.2s;
            -o-transition: background-color 0.2;
        }

        .avatartype-mwuser {
            background: url(http://localhost/dacsn/userfiles/modules/microweber/img/avatars.jpg) no-repeat 0 -70px;
        }

        .avatartype-upload {
            width: 30px;
            height: 30px;
            border: 1px solid #CACACA;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url();
        }

        .avatars-holder {
            padding-top: 10px;
        }

        .comments-main-settings {
            padding-bottom: 10px;
        }

        .comments-main-settings .mw-ui-check + div {
            padding-top: 15px;
        }

        #receive_email_holder {
            padding-top: 5px;
        }

        #avatar_uploader  .mw-uploader-input{
            width: calc(100% - 30px);
            height: 30px;
            left: 30px;
            top: -6px;
            appearance: none;
        }
        #avatar_uploader {
            height: 30px;
            overflow: hidden;
            position: relative;
            overflow: hidden;
        }

    </style>

    <script>mw.require("files.js");</script>

    <script type="text/javascript">
        mw.require('options.js', true);
        mw.require('http://localhost/dacsn/userfiles/modules/comments/style.css');
        mw.require('color.js', true);
        mw.require('files.js');
    </script>

    <script type="text/javascript">


        $(document).ready(function () {
            var uploader = mw.files.uploader({
                filetypes: "images",
                element: mw.$("#avatar_uploader")
            });
            mw.options.form('.module-comments-settings', function () {
                mw.notification.success("Tất cả các thay đổi đã được lưu.");
            });

            mw.$("[name='enable_comments']").commuter(function () {
                mw.$("#other-settings").removeClass("deactivated");
            }, function () {
                mw.$("#other-settings").addClass("deactivated");
            });

            mw.$("[name='email_on_new_comment']").commuter(function () {
                mw.$("#receive_email_holder").removeClass("deactivated");
            }, function () {
                mw.$("#receive_email_holder").addClass("deactivated");
            });

            mw.$("[name='avatar_enabled']").commuter(function () {
                mw.$(".avatars-holder").removeClass("deactivated");
            }, function () {
                mw.$(".avatars-holder").addClass("deactivated");
            });

            mw.$(".avatartype-randomcolor").parent().parent().hover(function () {
                mw.$(".avatartype-randomcolor").css("backgroundColor", mw.color.random());
            });

            $(uploader).on("FileUploaded", function (e, a) {

                mw.$(".avatartype-upload").css("backgroundImage", "url(" + a.src + ")");
                mw.$("[name='avatartype_custom']").val(a.src).trigger("change");
            });
        });
    </script>

    <div id="module-settings">
        <div class="module-comments-settings">
            <h4>Cài đặt<br>
                <small class="text-muted">Xác định cài đặt nhận xét</small>
            </h4>

            <div class="form-group">
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="mw_option_field custom-control-input" id="enable_comments" name="enable_comments" parent-reload="true" value="y" option-group="comments">
                    <label class="custom-control-label" for="enable_comments">Cho phép mọi người đăng bình luận</label>
                </div>
            </div>

            <div id="other-settings" class="deactivated">
                <div class=' module module-comments-privacy-settings ' id='mw-admin-comments-settings-comments-privacy-settings'  parent-module-id="mw_admin_comments_settings"   parent-module="comments/settings"   data-type="comments/privacy_settings"  >

<script type="text/javascript">
    $(document).ready(function () {
        mw.options.form('.module-comments-privacy-settings', function () {
            mw.notification.success("Tất cả các thay đổi đã được lưu.");
        });
    });
</script>


<div class="card bg-none style-1 mb-0 card-settings">
    <div class="card-body pt-3 px-0">
        <hr class="thin mt-0 mb-5">

        <div class="row">
            <div class="col-md-3">
                <h5 class="font-weight-bold">Cài đặt biểu mẫu nhận xét</h5>
                <small class="text-muted">Thực hiện cài đặt cho mẫu bình luận. Có quy tắc nào họ phải đồng ý khi đăng bình luận không?</small>
            </div>

            <div class="col-md-9">
                <div class="card bg-light style-1 mb-3">
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="control-label">Người dùng phải đồng ý với các điều khoản và điều kiện</label>
                                    <small class="text-muted d-block mb-2">Nếu người dùng không đồng ý với các điều khoản, anh ta sẽ không thể sử dụng các bình luận</small>
                                </div>

                                <div class=' module module-users-terms-set-for-module ' id='mw-admin-comments-settings-comments-privacy-settings-users-terms-set-for-module'  for_module="comments"   parent-module-id="mw-admin-comments-settings-comments-privacy-settings"   parent-module="comments/privacy_settings"   data-type="users/terms/set_for_module"  ><script type="text/javascript">
    $(document).ready(function () {
        mw.options.form('.module-users-terms-set-for-module', function () {
            mw.notification.success("Đã lưu.");
        });
    });
</script>


<script>
    function mw_admin_for_module_module_edit_tos(module_name) {
        var modalTitle = 'Các điều khoản và điều kiện';

        mw.dialog({
            content: '<div id="mw_admin_edit_tos_item_module"></div>',
            title: modalTitle,
            id: 'mw_admin_edit_tos_item_popup_modal'
        });

        var params = {}
        params.for_module = module_name;
        mw.load_module('users/terms/edit', '#mw_admin_edit_tos_item_module', null, params);
    }
</script>

<div class="form-group mb-3">
    <div class="custom-control custom-switch pl-0">
        <label class="d-inline-block mr-5" for="require_termsmw-admin-comments-settings-comments-privacy-settings-users-terms-set-for-module">Không</label>
        <input type="checkbox" parent-reload="true" name="require_terms" id="require_termsmw-admin-comments-settings-comments-privacy-settings-users-terms-set-for-module" value="y" data-value-unchecked="n" data-value-checked="y" class="mw_option_field custom-control-input" option-group="comments"/>
        <label class="custom-control-label" for="require_termsmw-admin-comments-settings-comments-privacy-settings-users-terms-set-for-module">Đúng</label>
    </div>
</div>
</div>

                                <div class="form-group mb-3">
                                    <label class="control-label d-block">Bạn muốn xem và chỉnh sửa văn bản và trang?</label>
                                    <button class="btn btn-sm btn-outline-primary mt-2" data-bs-toggle="collapse" data-bs-target="#comments-form-settings">Chỉnh sửa văn bản và URL</button>
                                </div>

                                <div class="collapse" id="comments-form-settings">
                                    <div class=' module module-users-terms-edit ' id='mw-admin-comments-settings-comments-privacy-settings-users-terms-edit'  terms-group="comments"   parent-module-id="mw-admin-comments-settings-comments-privacy-settings"   parent-module="comments/privacy_settings"   data-type="users/terms/edit"  >

<script type="text/javascript">
    $(document).ready(function () {
        mw.options.form('.module-users-terms-edit', function () {
            mw.notification.success("Đã lưu.");
            mw.reload_module_everywhere('users/terms');
        });
    });
</script>


<div class="form-group mb-3">
    <label class="control-label">Văn bản điều khoản và điều kiện</label>
    <small class="text-muted d-block mb-2">Văn bản sẽ xuất hiện cho người dùng</small>
    <input type="text" class="mw_option_field form-control" name="terms_label" option-group="comments" value="" placeholder="Tôi đồng ý với các Điều khoản và Điều kiện"/>
</div>



<div class="form-group mb-3">
    <label class="control-label">URL của các điều khoản và điều kiện</label>
    <small class="text-muted d-block mb-2">Bạn cần tạo trang này và nhập vào trường địa chỉ.</small>
    <input type="text" class="mw_option_field form-control" name="terms_url" option-group="comments" value="" placeholder="http://localhost/dacsn/terms"/>
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
</div>
</div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="comments-main-settings">
                            <div class="form-group">
                                <label class="mw-ui-check">
                                    <input type="checkbox" name="user_must_be_logged" value="y" parent-reload="true" class="mw_option_field" option-group="comments">
                                    <span></span><span>Người sử dụng phải được đăng ký và đăng nhập để bình luận</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="mw-ui-check">
                                    <input type="checkbox" parent-reload="true" name="require_moderation" data-reload="comments/comments_for_post" value="y" class="mw_option_field" option-group="comments">
                                    <span></span><span>Nhận xét mới yêu cầu kiểm duyệt</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="mw-ui-check">
                                    <input type="checkbox" parent-reload="true" name="disable_captcha" data-reload="comments/comments_for_post" value="y" class="mw_option_field" option-group="comments">
                                    <span></span><span>Tắt Captcha?</span>
                                </label>
                            </div>


                            



                            <hr class="thin">

                            <div class="form-group">
                                <label class="mw-ui-check">
                                    <input type="checkbox" name="set_paging" parent-reload="true" value="y" class="mw_option_field" option-group="comments">
                                    <span></span><span>Bật phân trang cho nhận xét</span>
                                </label>
                            </div>

                            <div class="form-group">
                                <div option-group="comments" name="comments_per_page" parent-reload="true">
                                    <label class="control-label">Nhận xét trên mỗi trang</label>
                                    <select name="paging" parent-reload="true" option-group="comments" parent-reload="true" class="mw_option_field selectpicker" data-width="100%" data-size="5">
                                        <option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option selected="selected" value=""></option>                                    </select>
                                </div>
                            </div>
                        </div>




                        <hr class="thin">



                        

                    </div>

                    <div class="col-lg-6">
                        <div class=' module module-comments-settings-for-engine '   id="mw-comments-engine-settings"   parent-module-id="mw_admin_comments_settings"   parent-module="comments/settings"   data-type="comments/settings_for_engine"  ><script type="text/javascript">
    $(document).ready(function () {
        mw.options.form('#mw-comments-engine-settings', function () {
            mw.notification.success("Thay đổi công cụ nhận xét được lưu.");
            mw.reload_module_parent('comments');
        });
    });
</script>

<div class="form-group">
    <label class="control-label">Công cụ nhận xét</label>

    <select name="engine" option-group="comments" class="mw_option_field selectpicker" data-width="100%" data-also-reload="#mw-comments-engine-settings">
        <option value="default"   selected="selected"   >Mặc định</option>
        <option value="facebook"  >Facebook</option>
        <option value="disqus"  >Disqus</option>
    </select>
</div>

</div>

                        <div class="form-group">
                            <label class="control-label">Hiển thị hình đại diện</label>

                            <div class="form-group">
                                <label class="mw-ui-check">
                                                                        <input type="checkbox" name="avatar_enabled" value="y" parent-reload="true" class="mw_option_field" option-group="comments" checked>
                                    <span></span><span>Hiển thị Hình đại diện</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kiểu hình đại diện mặc định</label>

                            <div class="avatars-holder ">
                                <div class="form-group">
                                    <label class="mw-ui-check">
                                        <input type="radio" name="avatar_style" value="1" class="mw_option_field" parent-reload="true" option-group="comments" checked>
                                        <span></span><span><i class="avatartype avatartype-mysteryman"></i>Người dùng siêu cấp</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="mw-ui-check">
                                        <input type="radio" name="avatar_style" value="2" class="mw_option_field" parent-reload="true" option-group="comments">
                                        <span></span><span><i class="avatartype avatartype-randomcolor"></i>Màu ngẫu nhiên</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="mw-ui-check">
                                        <input type="radio" name="avatar_style" value="3" class="mw_option_field" parent-reload="true" option-group="comments">
                                        <span></span><span><i class="avatartype mw-icon-mw" style="font-size: 37px;color:#C4C4C4"></i>Ảnh người dùng MW</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="mw-ui-check relative" id="avatar_uploader">
                                        <input type="radio" name="avatar_style" value="4" class="mw_option_field" parent-reload="true" option-group="comments">
                                        <span></span><span><input type="hidden" parent-reload="true" name="avatartype_custom" class="mw_option_field" option-group="comments" value=""><i class="avatartype avatartype-upload"></i> Tải ảnh lên</span>
                                    </label>
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
            </div>
            <div class="tab-pane fade" id="templates">
                            </div>
        </div>
    </div>
</div>
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
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/7b1cdfe57b3478528b491f1e89eab5db3df43876.blade.php ENDPATH**/ ?>