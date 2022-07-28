<?php foreach($attributes->onlyProps(['file']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['file']); ?>
<?php foreach (array_filter((['file']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="heading" style="background:url(images/<?php echo e($file); ?>.png) no-repeat">
  <h1><?php echo e($slot); ?></h1>
</div><?php /**PATH /Users/kristianv/SchulerApp/resources/views/components/heading.blade.php ENDPATH**/ ?>