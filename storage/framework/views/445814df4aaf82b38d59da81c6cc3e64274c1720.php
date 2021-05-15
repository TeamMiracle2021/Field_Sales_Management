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
                                    <h3 class="float-left"><b>User Details</b></h3>
                                    <a class="btn btn-primary float-right" href="<?php echo e(route('user.index')); ?>">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>User</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>First Name</td>
                                            <td> <?php echo e($user->first_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Middle Name</td>
                                            <td> <?php echo e($user->middle_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Last Name</td>
                                            <td><?php echo e($user->last_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>NIC</td>
                                            <td> <?php echo e($user->NIC); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Address</td>
                                            <td> <?php echo e($user->Address); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Telephone Number</td>
                                            <td><?php echo e($user->telephone_number); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Gender</td>
                                            <td> <?php echo e($user->Gender); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Date of Birth</td>
                                            <td> <?php echo e($user->Date_Of_Birth); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Branch Name</td>
                                            <td> <?php echo e($user->branch_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo e($user->email); ?></td>
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






























<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/users/userview.blade.php ENDPATH**/ ?>