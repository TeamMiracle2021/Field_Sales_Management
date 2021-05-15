

<?php $__env->startSection('title'); ?>
    FSM | RouteAdd
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
                                <div class="col-md-12">
                                    <h3 class="float-left"><b>Add Route</b></h3>

                                    <a class="btn btn-primary float-right" style="margin: 5px" href="<?php echo e(route('route.index')); ?>">Back</a>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="<?php echo e(route('route.getlatlng')); ?>" target="_blank">Get lat,lng From map</a>

                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo e(route('route.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Route Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="enter route name" name="route_name" value="<?php echo e(old('route_name')); ?>">
                                        <?php if($errors->has('route_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('route_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Starting point latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lat" value="<?php echo e(old('start_lat')); ?>">
                                        <?php if($errors->has('start_lat')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('start_lat')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Starting point longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="enter start point latitude" name="start_lng" value="<?php echo e(old('start_lng')); ?>">
                                        <?php if($errors->has('start_lng')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('start_lng')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Ending point latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lat" value="<?php echo e(old('end_lat')); ?>">
                                        <?php if($errors->has('end_lat')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('end_lat')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Ending point longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="enter start point latitude" name="end_lng" value="<?php echo e(old('end_lng')); ?>">
                                        <?php if($errors->has('end_lng')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('end_lng')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Assign To:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id">
                                            <option value="Select">Select User</option>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($user->userID); ?>"><?php echo e($user->userID); ?> -  <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button  type="submit" class="btn btn-primary">save</button>
                                        <a class="btn btn-primary" href="<?php echo e(route('route.index')); ?>">cancel</a>

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/Route/create.blade.php ENDPATH**/ ?>