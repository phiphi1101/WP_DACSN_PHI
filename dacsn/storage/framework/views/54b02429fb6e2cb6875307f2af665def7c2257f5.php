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



<body class="is_admin loading view-settings action-">

<div>
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('6ScdVWf')) {
    $componentId = $_instance->getRenderedChildComponentId('6ScdVWf');
    $componentTag = $_instance->getRenderedChildComponentTagName('6ScdVWf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6ScdVWf');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('6ScdVWf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                                <a href="http://localhost/dacsn/admin/view:modules" class="nav-link "><i class="mdi mdi-view-grid-plus"></i> Mô-đun </a>
                    </li>
                
                                    
                        
                        <li class="nav-item">
                            <a href="http://localhost/dacsn/admin/view:packages" class="nav-link ">
                                <i class="mdi mdi-fruit-cherries"></i> Thương trường                                                            </a>
                        </li>
                                    
                <li class="nav-item dropdown">
                    <a class="nav-link   active " href="http://localhost/dacsn/admin/view:settings#option_group=all">
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


        
    <main class="module-settings">

                    <div class=' module module-settings '   data-mw-title="Settings" view="admin"   backend="true"   id="mw-main-module-backend"   data-type="settings"   parent-module="settings"   parent-module-id="mw-main-module-backend"  ><script>
    mw.require('forms.js');
</script>



<script type="text/javascript">
    _settingsSort = function (group_set) {
         var group = mw.url.windowHashParam('option_group');

         if(group_set){
           //  group = group_set;
           //  alert(group);
         }

        if (group != undefined) {
            mw.$('#settings_admin_mw-main-module-backend').attr('option_group', group);

        }
        else {
            mw.$('#settings_admin_mw-main-module-backend').attr('option_group', 'admin__modules');
        }
        mw.$('#settings_admin_mw-main-module-backend').attr('is_system', 1);

        mw.tools.loading(document.querySelector('#settings_admin_mw-main-module-backend'), true)

        mw.load_module('settings/system_settings', '#settings_admin_mw-main-module-backend', function () {
            mw.tools.loading(document.querySelector('#settings_admin_mw-main-module-backend'), false)
        });

    }


    mw.on.hashParam('ui', _settingsSort);

    mw.on.hashParam('option_group', function (pval) {

        if (pval != false) {

        }
        else {
            mw.url.windowHashParam('option_group', 'admin__modules');
        }
        if (pval != false) {
            _settingsSort(pval)

        }  else {
            _settingsSort();
        }

        $(".active-parent li.active, #mw-admin-main-menu .active .active").removeClass('active');
        // var link = $('a[href*="option_group=' + this + '"]');
        //
        // link
        //     .parent()
        //     .addClass('active');

    });

        
        if (!mw.url.windowHashParam('option_group')) {
            mw.url.windowHashParam('option_group', 'website');
        }

        





    mw.on.hashParam('installed', function () {

        _settingsSort();

    });

    $(document).ready(function () {
        var group = mw.url.windowHashParam('option_group');

        if (typeof group == 'undefined') {

            mw.$(".mw-admin-side-nav .item-website").addClass("active");
        }
    });
</script>
<script type="text/javascript">
    mw.require("options.js");
    mw.require("http://localhost/dacsn/userfiles/modules/settings/settings.css");


</script>


<div id="settings_admin_mw-main-module-backend" class="card-body pt-3">
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
<?php /**PATH C:\xampp\htdocs\dacsn\storage\framework\views/591d085b4ae02b948880da9a33a31e23580ea462.blade.php ENDPATH**/ ?>