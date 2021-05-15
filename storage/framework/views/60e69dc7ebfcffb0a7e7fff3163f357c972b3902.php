


<?php $__env->startSection('title'); ?>
    Order Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h3><b><center>Reports of Orders</center></b></h3>
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
                                    <th>Order ID</th>
                                    <th>Shop Name</th>
                                    <th>Bill value</th>
                                    <th>Placed Date</th>
                                    <th>User</th>
                                    <th>More</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $ordrep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($data->OrderID); ?></td>
                                        <td><?php echo e($data->shop_name); ?></td>
                                        <td><?php echo e($data->bill_value); ?></td>
                                        <td><?php echo e($data->placed_date); ?></td>
                                        <td><?php echo e($data->first_name); ?></td>
                                        <th> <a class="btn btn-success" href="<?php echo e(route('shop.orderdetailreport',$data->OrderID)); ?>">View</a></th>


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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/oderreport.blade.php ENDPATH**/ ?>