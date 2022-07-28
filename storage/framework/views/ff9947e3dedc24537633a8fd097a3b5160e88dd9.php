<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="box">
    <div class="image">
    <img src="<?php echo e(asset('storage/' . $post->thumbnail)); ?>" alt="image">
    </div>
    <div class="content">
        <h3><?php echo e($post->title); ?></h3>
        <p><?php echo $post->body; ?></p>
    </div>
</div><?php /**PATH /Users/kristianv/SchulerApp/resources/views/components/post-card.blade.php ENDPATH**/ ?>