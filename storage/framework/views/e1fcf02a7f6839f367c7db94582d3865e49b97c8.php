

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
                        <div class="float-left">
                <a class="btn btn-primary" href="<?php echo e(route('user.create')); ?>">Add User</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCreateModel" >Create usertype</button><br>
                                    
                                    
                    <form action="<?php echo e(route('userType.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                            <div class="modal fade" id="createCreateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- hedaer of the popup form    -->

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">Add new usertype</h5>

                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                                            </div>




                                                <!--model->UserType: -->

                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <label>User Type Name :</label><br>

                                                    <input type="text" class="form-control" name="user_type_name" placeholder="Enter uertype name" required>

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
                    </div>



                    <!-- /.card-header -->
                    <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="text-center">User ID</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <!-- <th class="text-center">User Type</th> -->
                <th class="text-center">Branch</th>
                <th class="text-center">Action</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($data->userID); ?></td>
            <td><?php echo e($data->first_name); ?></td>
            <td><?php echo e($data->last_name); ?></td>
            <!-- <td><?php echo e($data->user_type_name); ?></td> -->
            <td><?php echo e($data->branch_name); ?></td>
            <td class="text-center">
                <form action="<?php echo e(route('user.destroy',$data->userID)); ?>" method="POST">  
                    <a class='btn btn-primary' href="<?php echo e(route('user.show',$data->userID)); ?>">View</a>
                    <a class='btn btn-primary' href="<?php echo e(route('user.edit',$data->userID)); ?>">Edit</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" >Delete</button>
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
        </div>

    </section>




<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/user/index.blade.php ENDPATH**/ ?>