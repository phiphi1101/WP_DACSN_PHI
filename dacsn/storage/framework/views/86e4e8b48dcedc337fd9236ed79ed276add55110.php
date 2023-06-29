<?php if(isset($recommended_content_id) and isset($recommended_category_id) and $content_id == 0): ?>
    <?php
echo app()->parser->process("<module ".app()->format->arrayToHtmlAttributes(['type' => 'content/edit','content_id' => ''.e($content_id).'','content_type' => 'post','parent' => ''.e($recommended_content_id).'','id' => 'main-content-edit-admin','category' => ''.e($recommended_category_id).''])." />");
?>
<?php else: ?>
    <?php
echo app()->parser->process("<module ".app()->format->arrayToHtmlAttributes(['type' => 'content/edit','content_id' => ''.e($content_id).'','content_type' => 'post','id' => 'main-content-edit-admin'])." />");
?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dacsn\src\MicroweberPackages\Post/resources/views/admin/posts/edit.blade.php ENDPATH**/ ?>