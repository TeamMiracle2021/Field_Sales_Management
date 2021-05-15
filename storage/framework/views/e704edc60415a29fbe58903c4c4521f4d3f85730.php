<?php $__env->startSection('title'); ?>
    Product Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h4><b><center>Reports of Shops</center></b></h4>
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
                            <table id="example" class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Shop ID</th>
                                    <th>Shop Name</th>
                                    <th>Owner Name</th>
                                    <th>Owner NIC</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Address No</th>
                                    <th>Suburb</th>
                                    <th>City</th>
                                    <th>District</th>
                                    <th>Tele. No</th>
                                    <th>Reg. Date</th>
                                    <th>Due Dates</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Source</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Image</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $Shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->ShopID); ?></td>
                                        <td><?php echo e($data->shop_name); ?></td>
                                        <td><?php echo e($data->owner_name); ?></td>
                                        <td><?php echo e($data->owner_NIC); ?></td>
                                        <td><?php echo e($data->lat); ?></td>
                                        <td><?php echo e($data->lng); ?></td>
                                        <td><?php echo e($data->address_no); ?></td>
                                        <td><?php echo e($data->suburb); ?></td>
                                        <td><?php echo e($data->city); ?></td>
                                        <td><?php echo e($data->district); ?></td>
                                        <td><?php echo e($data->telephone_numbers); ?></td>
                                        <td><?php echo e($data->registered_date); ?></td>
                                        <td><?php echo e($data->due_dates); ?></td>
                                        <td><?php echo e($data->user->first_name); ?> <?php echo e($data->user->last_name); ?> </td>
                                        <td><?php echo e($data->status); ?></td>
                                        <td><?php echo e($data->source); ?></td>
                                        <td><?php echo e($data->created_at); ?></td>
                                        <td><?php echo e($data->updated_at); ?></td>
                                        <td><img src="<?php echo e(asset('uploads/shop/'.$data->image)); ?>"
                                                 class="img-bordered-sm" width="75px;" height="75px;" alt="Product-Image"></td>

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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/shopreport.blade.php ENDPATH**/ ?>