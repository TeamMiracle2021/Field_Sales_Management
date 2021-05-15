<?php $__env->startSection('title'); ?>
    Product Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h3><b><center>Reports of Products</center></b></h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                            <a class="btn btn-primary"  href="<?php echo e(route('report.index')); ?>">Back</a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Cost Price</th>
                                    <th>Sales Price</th>
                                    <th>Labeled Price</th>
                                    <th>Weight</th>
                                    <th>Category name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($data->productID); ?></td>
                                        <td><?php echo e($data->product_Name); ?></td>
                                        <td><?php echo e($data->cost_price); ?></td>
                                        <td><?php echo e($data->sales_price); ?></td>
                                        <td><?php echo e($data->labled_price); ?></td>
                                        <td><?php echo e($data->weight); ?></td>
                                        <td><?php echo e($data->categories->category_name); ?></td>
                                        <td><?php echo e($data->created_at); ?></td>
                                        <td><?php echo e($data->updated_at); ?></td>

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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/productreport.blade.php ENDPATH**/ ?>