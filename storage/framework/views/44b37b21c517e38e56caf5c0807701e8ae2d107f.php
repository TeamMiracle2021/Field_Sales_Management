<?php $__env->startSection('title'); ?>
    Route Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h4><b><center>Reports of Routes</center></b></h4>
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
                                    <th>Route Name</th>
                                    <th>Start Latitude</th>
                                    <th>Start Longitude</th>
                                    <th>End Latitude</th>
                                    <th>End Longitude</th>
                                    <th>Sales Representative</th>
                                    <th>No of Shops</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $route; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->route_name); ?></td>
                                        <td><?php echo e($data->start_lat); ?></td>
                                        <td><?php echo e($data->start_lng); ?></td>
                                        <td><?php echo e($data->end_lat); ?></td>
                                        <td><?php echo e($data->end_lng); ?></td>
                                        <td><?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></td>
                                        <td><?php echo e($data->quantity); ?></td>


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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/routereport.blade.php ENDPATH**/ ?>