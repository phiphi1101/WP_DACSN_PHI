<?php if(isset($recommended_content_id) and isset($recommended_category_id) and $content_id == 0): ?>
    <?php
echo app()->parser->process("<module ".app()->format->arrayToHtmlAttributes(['type' => 'content/edit','content_id' => ''.e($content_id).'','content_type' => 'page','parent' => ''.e($recommended_content_id).'','id' => 'main-content-edit-admin','category' => ''.e($recommended_category_id).''])." />");
?>
<?php else: ?>
    <?php
echo app()->parser->process("<module ".app()->format->arrayToHtmlAttributes(['type' => 'content/edit','content_id' => ''.e($content_id).'','content_type' => 'page','id' => 'main-content-edit-admin'])." />");
?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dacsn\src\MicroweberPackages\Page/resources/views/admin/page/edit.blade.php ENDPATH**/ ?>