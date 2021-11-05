<?php $__env->startSection('content'); ?>
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Im trying to be a good developer
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/08/07/01/48/work-2598577_960_720.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
           im practicing to be a good developer 
        </h2>

        <p class="py-8 text-gray-500 text-s">
           this is just a praciticng for development
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            im will keep working
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
These are  some posts from users    </p>
</div>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="<?php echo e(asset('images/' . $post->image_path)); ?>" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            <?php echo e($post->title); ?>

        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800"><?php echo e($post->user->name); ?></span>, Created on <?php echo e(date('jS M Y', strtotime($post->updated_at))); ?>

        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            <?php echo e($post->description); ?>

        </p>

        <a href="/blog/<?php echo e($post->slug); ?>" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>

        <?php if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id): ?>
        <span class="float-right">
            <a href="/blog/<?php echo e($post->slug); ?>/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                Edit
            </a>
        </span>

        <span class="float-right">
            <form action="/blog/<?php echo e($post->slug); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>

                <button class="text-red-500 pr-3" type="submit">
                    Delete
                </button>

            </form>
        </span>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newblog\resources\views/index.blade.php ENDPATH**/ ?>