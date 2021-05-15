

<?php $__env->startSection('title'); ?>
    FSM | Product
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if($msg=Session::get('alert')): ?>
<div class="alert alert-default-primary">
    <p><?php echo e($msg); ?></p>
</div>
<?php endif; ?>


































































<section class="content">
    <h1><b><center>Products</center></b></h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary"  href="<?php echo e(route('product.create')); ?>">Create Product</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCreateModel" >Create Category</button><br>
                                    <form action="<?php echo e(route('category.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="modal fade" id="createCreateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


                                            <!-- hedaer of the popup form    -->

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <h5 class="modal-title" id="exampleModalLabel">Add new category details</h5>

                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                                                    </div>




                                                    <!-- Lable and text box of Product Name: -->

                                                    <div class="modal-body">

                                                        <div class="form-group">

                                                            <label>Category Name :</label><br>

                                                            <input type="text" class="form-control" name="category_name" placeholder="Enter category name" required>

                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Cost Price</th>
                                            <th>Sales Price</th>
                                            <th width="200px">Category</th>
                                            <th class="text-center" width="380px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($data->product_Name); ?></td>
                                                <td><?php echo e($data->cost_price); ?></td>
                                                <td><?php echo e($data->sales_price); ?></td>
                                                <td><?php echo e($data->categories->category_name); ?></td>
                                                <td>
                                                    <form action="<?php echo e(route('product.destroy',$data->productID)); ?>" method="POST">
                                                        <a class="btn btn-primary" href="<?php echo e(route('product.edit',$data->productID)); ?>">Edit</a>
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Delete</button>


                                                        <a class="btn btn-success" href="<?php echo e(route('product.show',$data->productID)); ?>">View</a>
                                                    </form>
                                                </td>

                                            </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/product/index.blade.php ENDPATH**/ ?>