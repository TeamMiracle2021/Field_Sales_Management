

<?php $__env->startSection('title'); ?>
    Add-User | Sales Automation system
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">

                    <!-- <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
<?php endif; ?> -->

                        <div class="card-header">
                            <h2>Add a new user</h2>
                        </div>
                        <div class="card-body">


                            <form method="POST" action="<?php echo e(route('user.store')); ?>">

                                <?php echo csrf_field(); ?>


                                <div class="form-group row">
                                    <label for="first_name" class="col-md-2 col-form-label">First Name:</label>
                                    <div class="col-sm-10">
                                        <input id="first_name" type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required autocomplete="first_name" autofocus placeholder="First Name">

                                        <?php if($errors->has('first_name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('first_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="middle_name" class="col-md-2 col-form-label">Middle Name:</label>
                                    <div class="col-sm-10">
                                        <input id="middle_name" type="text" class="form-control <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="middle_name" value="<?php echo e(old('middle_name')); ?>" required autocomplete="middle_name"autofocus placeholder="Middle Name">

                                        <?php if($errors->has('middle_name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('middle_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="last_name" class="col-md-2 col-form-label">Last Name:</label>
                                    <div class="col-sm-10">
                                        <input id="last_name" type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required autocomplete="last_name" autofocus placeholder="Last Name">

                                        <?php if($errors->has('last_name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('last_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="NIC" class="col-md-2 col-form-label">NIC:</label>
                                    <div class="col-sm-10">
                                        <input id="NIC" type="text" class="form-control <?php $__errorArgs = ['NIC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="NIC" value="<?php echo e(old('NIC')); ?>" required autocomplete="NIC" autofocus placeholder="NIC">

                                        <?php if($errors->has('NIC')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('NIC')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="Address" class="col-md-2 col-form-label">Address:</label>
                                    <div class="col-sm-10">
                                        <input id="Address" type="text" class="form-control <?php $__errorArgs = ['Address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Address" value="<?php echo e(old('Address')); ?>" required autocomplete="Address" autofocus placeholder="Address">

                                        <?php if($errors->has('Address')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('Address')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="telephone_number" class="col-md-2 col-form-label">Telephone Number:</label>
                                    <div class="col-sm-10">
                                        <input id="telephone_number" type="text" class="form-control <?php $__errorArgs = ['telephone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="telephone_number" value="<?php echo e(old('telephone_number')); ?>" required autocomplete="telephone_number" autofocus placeholder="Telephone Number">

                                        <?php if($errors->has('telephone_number')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('telephone_number')); ?></strong>
                                                </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="gender" class="col-md-2 control-label">Gender:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="Gender" required="required" value="<?php echo e(old('Gender')); ?>" placeholder="--Select gender--">
                                            <option value="male" name="male">Male</option>
                                            <option value="female" name="female">Female</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Date_Of_Birth" class="col-md-2 control-label">Date of Birth:</label>
                                    <div class="col-sm-10">
                                        <input id="Date_Of_Birth" type="date" class="Date_Of_Birth" name="Date_Of_Birth" value="<?php echo e(old('Date_Of_Birth')); ?>" required autofocus>

                                        <?php if($errors->has('Date_Of_Birth')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('Date_Of_Birth')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="branch_name" class="col-md-2 col-form-label">Branch Name:</label>
                                    <div class="col-sm-10">
                                        <input id="branch_name" type="text" class="form-control <?php $__errorArgs = ['branch_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="branch_name" value="<?php echo e(old('branch_name')); ?>" required autocomplete="branch_name" autofocus placeholder="Branch Name">

                                        <?php if($errors->has('branch_name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('branch_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="user_typeID" class="col-md-2 control-label">User Type:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_typeID" >
                                            <?php $__currentLoopData = $usertypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usertype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($usertype->user_typeID); ?>">
                                                    <?php echo e($usertype->user_type_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">

                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input   class="form-control"  name="username" value="<?php echo e(old('username')); ?>"  placeholder="Username">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">approvel</label>
                                    <div class="col-sm-10">
                                        <input   class="form-control"  name="approvel_state" value="<?php echo e(old('approvel_state')); ?>"  placeholder="approvel_state">

                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Password">

                                        <p id="passwordHelpBlock" class="form-text text-muted">
                                            Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
                                        </p>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                        <?php if($errors->has('password_confirmation')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>


                                <div class="text-right">
                                    <input name="register" id="register" class="btn btn-primary" type="submit" value="Save">
                                    <a class="btn btn-secondary" href="<?php echo e(route('user.index')); ?>">Cancel</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/users/create.blade.php ENDPATH**/ ?>