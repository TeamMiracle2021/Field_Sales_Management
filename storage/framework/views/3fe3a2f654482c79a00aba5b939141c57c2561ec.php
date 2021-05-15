

<?php $__env->startSection('title'); ?>
    FSM | User
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <?php if($msg = Session::get('add')): ?>
        <div class="alert alert-default-primary">
            <p><?php echo e($msg); ?></p>
        </div>
    <?php endif; ?>

    <section class="content">
        <h1><b><center>User</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary"  href="<?php echo e(route('user.create')); ?>">Create user</a>
                            <a class="btn btn-primary"  href="<?php echo e(route('usertype.create')); ?>">Create user type</a>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped display nowrap">
                                <thead>
                                <tr>
                                    <th>user Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                        <td><?php echo e($data->first_name); ?></td>
                                        <td><?php echo e($data->middle_name); ?></td>
                                        <td><?php echo e($data->last_name); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('user.destroy',$data->userID )); ?>" method="POST">

                                                <a class="btn btn-primary" href="<?php echo e(route('user.edit',$data->userID )); ?>">Edit</a>
                                                
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"  class="btn btn-danger">Delete</button>
                                                <a class="btn btn-primary" href="<?php echo e(route('user.show',$data->userID )); ?>">View</a>


                                            </form>
                                        </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Delete Alert</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="color:#233554">
                                            You are going to delete a route. Do you want to continue ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>




                                        </div>
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
        </div>

    </section>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/users/index.blade.php ENDPATH**/ ?>