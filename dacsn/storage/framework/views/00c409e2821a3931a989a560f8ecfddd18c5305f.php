<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', [
         'is_blog'=>1,
     ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-posts-list', [])->html();
} elseif ($_instance->childHasBeenRendered('qnbGVXK')) {
    $componentId = $_instance->getRenderedChildComponentId('qnbGVXK');
    $componentTag = $_instance->getRenderedChildComponentTagName('qnbGVXK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qnbGVXK');
} else {
    $response = \Livewire\Livewire::mount('admin-posts-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('qnbGVXK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('qfEN04M')) {
    $componentId = $_instance->getRenderedChildComponentId('qfEN04M');
    $componentTag = $_instance->getRenderedChildComponentTagName('qfEN04M');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qfEN04M');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('qfEN04M', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\dacsn\src\MicroweberPackages\Post/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>