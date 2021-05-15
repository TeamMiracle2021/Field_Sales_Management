

<?php $__env->startSection('title'); ?>
    FSM | RouteView of <?php echo e($route->route_name); ?> route
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
                                    <h3 class="float-left"><b>Route Details</b></h3>
                                    <a class="btn btn-primary float-right" href="<?php echo e(route('route.index')); ?>">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">



                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>Route</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>Route ID</td>
                                            <td> <?php echo e($route->RouteID); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Route Name</td>
                                            <td> <?php echo e($route->route_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Starting point latitute</td>
                                            <td><?php echo e($route->start_lat); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Starting point longitude</td>
                                            <td> <?php echo e($route->start_lng); ?></td>
                                        </tr>

                                        <tr>
                                            <td>End point latitude</td>
                                            <td> <?php echo e($route->end_lat); ?></td>
                                        </tr>

                                        <tr>
                                            <td>End point longitude</td>
                                            <td><?php echo e($route->end_lng); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Assigned User</td>
                                            <td> <?php echo e($route->user->first_name); ?></td>
                                        </tr>




                                        <tr>
                                            <td>shops</td>

                                            <td>
                                        <?php $__currentLoopData = $route->shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php echo e($shop->shop_name); ?>    ,

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>



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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/Route/show.blade.php ENDPATH**/ ?>