
<?php $__env->startSection('title',  __('adminBody.Products_Show')); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <section>
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="product-slick">
                                <?php if($pro->images->count() > 0): ?>
                                <?php $__currentLoopData = $pro->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div><img src="<?php echo e(asset($image->image)); ?>" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <div><img src="<?php echo e(asset('images/placeholder.png')); ?>" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                <?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="slider-nav">
                                        <?php $__currentLoopData = $pro->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><img src="<?php echo e(asset($image ? $image->image : 'images/placeholder.png')); ?>" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="product-right product-description-box">
                                <h2><?php if(app()->getLocale() == 'en'): ?>
                                    <?php echo e($pro->en_name); ?>

                                    <?php else: ?>
                                    <?php echo e($pro->name); ?>

                                    <?php endif; ?></h2>
                                <div class="rating-section">
                                    <div class="rating">
                                        <?php for($i = 1; $i <= $pro->rate; $i++): ?>
                                                    
                                        <li>
                                            <i class="fa fa-star theme-color"></i>
                                        </li>
                                        <?php endfor; ?>
                                        <?php for($i = 1; $i <= 5-$pro->rate; $i++): ?>
                                            
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <h3 class="price-detail"><?php echo money($pro->price, 'OMR'); ?></h3>
                                <div class="row product-accordion">
                                    <div class="col-sm-12">
                                        <div class="accordion theme-accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0"><button class="btn btn-link" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#"
                                                            aria-expanded="true" aria-controls=""><?php echo e(__('body.Details')); ?>

                                                            </button></h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <?php if(app()->getLocale() == 'en'): ?>
                                                            <?php echo e($pro->en_description); ?>

                                                            <?php else: ?>
                                                            <?php echo e($pro->description); ?>

                                                            <?php endif; ?>    
                                                        </p>
                                                        <div class="single-product-tables detail-section mt-3">
                                                            <table>
                                                                <tbody>
                                                                    <?php $__currentLoopData = $pro->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php $__currentLoopData = $attribute->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <?php if(app()->getLocale() == 'en'): ?>
                                                                        <td><?php echo e($option->attribute->en_name); ?></td>
                                                                        <td><?php echo e($option->en_option); ?></td>
                                                                        <?php else: ?>
                                                                        <td><?php echo e($option->attribute->name); ?></td>
                                                                        <td><?php echo e($option->option); ?></td>
                                                                        <?php endif; ?>
                                                                       
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <td><?php echo e(__('body.sku')); ?> :  <?php echo e($pro->sku); ?></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                            <td><?php echo e(__('body.weight')); ?> :  <?php echo e($pro->weight); ?></td>
                                                            </tr>
                                                        </table>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/slick.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\10\Desktop\oazri\suda\resources\views/panel/products/show.blade.php ENDPATH**/ ?>