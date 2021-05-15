


<?php $__env->startSection('title'); ?>
    Product-Edit | Sales Automation system
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Product Edit</b></h3>
                                    <a class="btn btn-primary float-right" href="<?php echo e(route('product.index')); ?>">back</a>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">

                            <form action="<?php echo e(route('product.update',$product->productID)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Product Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($product->product_Name); ?>" name="product_Name" placeholder="Enter product name" value="<?php echo e(old('product_Name')); ?>">
                                        <?php if($errors->has('product_Name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('product_Name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Cost Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($product->cost_price); ?>" name="cost_price" placeholder="Enter cost price" value="<?php echo e(old('cost_price')); ?>">
                                        <?php if($errors->has('cost_price')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('cost_price')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Sales Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($product->sales_price); ?>" name="sales_price" placeholder="Enter sales price" value="<?php echo e(old('sales_price')); ?>">
                                        <?php if($errors->has('sales_price')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('sales_price')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Labled Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($product->labled_price); ?>" name="labled_price" placeholder="Enter labled price" value="<?php echo e(old('labled_price')); ?>">
                                        <?php if($errors->has('labled_price')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('labled_price')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Weight</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($product->weight); ?>" name="weight" placeholder="Enter weight" value="<?php echo e(old('weight')); ?>">
                                        <?php if($errors->has('weight')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('weight')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="category_id" >
                                            <option value="<?php echo e($product->category_id); ?>"><?php echo e($product->category_id); ?> - <?php echo e($product->categories->category_name); ?></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->categoryID); ?>"><?php echo e($category->categoryID); ?> -  <?php echo e($category->category_name); ?> </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                </div>



                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                    <a class="btn btn-secondary" href="<?php echo e(route('product.index')); ?>">Cancel</a>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/product/edit.blade.php ENDPATH**/ ?>