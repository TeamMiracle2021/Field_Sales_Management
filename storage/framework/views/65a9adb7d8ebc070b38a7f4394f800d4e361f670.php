

<?php $__env->startSection('title'); ?>
    FSM | User
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <?php if($msg = Session::get('add')): ?>
        <div class="alert alert-default-primary">
            <p><?php echo e($msg); ?></p>
        </div>
    <?php endif; ?>

    <div class="form group-row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <h2>Add User Type</h2>
            </div>

        </div>

        <form action="<?php echo e(route('usertype.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12">
                    <strong>User Type Name</strong>
                    <input type="text" class="form-control" placeholder="Enter user type" name="user_type_name">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Submit</button>
                    <a class="btn btn-primary" href="<?php echo e(route('user.index')); ?>">Back</a>
                </div>
            </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/users/usertypeadd.blade.php ENDPATH**/ ?>