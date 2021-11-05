<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            <?php echo e($post->title); ?>

        </h1>
    </div>
</div>


<div class="w-4/5 m-auto pt-1">
    <span class="text-gray-500 pt-8 pb-10 leading-8">
        By <span class="font-bold italic text-gray-800"><?php echo e($post->user->name); ?></span>, Created on <?php echo e(date('jS M Y', strtotime($post->updated_at))); ?>

    </span>
    <div>
        <img src="<?php echo e(asset('images/' . $post->image_path)); ?>" alt="">
    </div>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <?php echo e($post->description); ?>

    </p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newblog\resources\views/blog/show.blade.php ENDPATH**/ ?>