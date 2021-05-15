


<?php $__env->startSection('title'); ?>
    Attendance Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h4><b><center>Reports of Attendance</center></b></h4>
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
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Check IN</th>
                                    <th>Check Out</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $att; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($data->user_id); ?></td>
                                        <td><?php echo e($data->user->first_name); ?>  <?php echo e($data->user->last_name); ?></td>
                                        <td><?php echo e($data->check_in_time); ?></td>
                                        <td><?php echo e($data->check_out_time); ?></td>

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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/attreport.blade.php ENDPATH**/ ?>