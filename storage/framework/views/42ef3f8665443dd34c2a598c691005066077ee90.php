<head>
   <meta name="theme-color" content="#ffffff"/>
   <link rel="apple-touch-icon" href="<?php echo e(asset('/images/logo.svg')); ?>">
   <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">
</head>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['title' => 'Home']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Home')]); ?>
   
<?php echo $__env->make('main._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="./images/014 Jack Schuler_0.jpeg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Schuler partners with Scholars and their families to help Scholars identify, pursue and achieve their academic and professional aspirations. During the high school years, Scholars focus on activities to propel them on their academic journey. After high school, Schuler provides support that helps Scholars flourish in college and beyond. These resources–which are all free to Scholars and their families enable Scholars to create, and follow, a customized roadmap to succeed at highly selective colleges and universities.</p>
      <a href="/about" class="btn">Read More</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

 <h1 class="heading-title">Latests Posts</h1>

    <div class="box-container">
        <?php if($posts->count()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.posts-grid','data' => ['posts' => $posts]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('posts-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['posts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php echo e($posts->links()); ?>

        <?php else: ?> 
            <p class="heading-title">No posts yet, please check back later.</p>
        <?php endif; ?>
    </div>
    <?php if($posts->count()): ?>
      <div class="load-more"> <a href="/posts" class="btn">View More</a> </div>
    <?php endif; ?>
</section>

</section>
<script src="<?php echo e(asset('/sw.js')); ?>"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /Users/kristianv/SchulerApp/resources/views/main/home.blade.php ENDPATH**/ ?>