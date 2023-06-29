<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-list', [])->html();
} elseif ($_instance->childHasBeenRendered('VSYt7Ob')) {
    $componentId = $_instance->getRenderedChildComponentId('VSYt7Ob');
    $componentTag = $_instance->getRenderedChildComponentTagName('VSYt7Ob');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VSYt7Ob');
} else {
    $response = \Livewire\Livewire::mount('admin-content-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('VSYt7Ob', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('CXF9S4y')) {
    $componentId = $_instance->getRenderedChildComponentId('CXF9S4y');
    $componentTag = $_instance->getRenderedChildComponentTagName('CXF9S4y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CXF9S4y');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('CXF9S4y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\dacsn\src\MicroweberPackages\Content\resources\views/admin/content/index.blade.php ENDPATH**/ ?>