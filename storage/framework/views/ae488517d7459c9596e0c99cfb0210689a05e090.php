

<?php $__env->startSection('title'); ?>
Edit-User | Sales Automation system
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<br>
<section class="content">
<div class="container-fluid">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit user</h2>
                </div>
                    <div class="card-body">
                       
                        <form method="POST" action="<?php echo e(route('user.update',$user->userID)); ?>">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>


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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->first_name); ?>" name="first_name"  required autocomplete="first_name" autofocus placeholder="First Name">
                                    
                                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->middle_name); ?>" name="middle_name" required autocomplete="middle_name"autofocus placeholder="Middle Name">
                                    
                                        <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->last_name); ?>" name="last_name" required autocomplete="last_name" autofocus placeholder="Last Name">
                                   
                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->NIC); ?>" name="NIC" required autocomplete="NIC" autofocus placeholder="NIC">
                                    
                                        <?php $__errorArgs = ['NIC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->Address); ?>" name="Address" required autocomplete="Address" autofocus placeholder="Address">
                                    
                                        <?php $__errorArgs = ['Address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->telephone_number); ?>" name="telephone_number"  required autocomplete="telephone_number" autofocus placeholder="Telephone Number">
                                    
                                        <?php $__errorArgs = ['telephone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                                    
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label for="gender" class="col-md-2 control-label">Gender:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" value="<?php echo e($user->Gender); ?>" name="Gender" required="required">
                                        <option value="male" name="male">Male</option>
                                        <option value="female" name="female">Female</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- <?php $__errorArgs = ['Address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->

                        

                            <div class="form-group row">
                            <label for="gender" class="col-md-2 control-label">Date of Birth:</label>
                                <div class="col-sm-10">
                                    <input id="Date_Of_Birth" type="date" class="from-control" value="<?php echo e($user->Date_Of_Birth); ?>" name="Date_Of_Birth" required autofocus>
                                
                                    <?php if($errors->has('Date_Of_Birth')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('dob')); ?></strong>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->branch_name); ?>" value="<?php echo e(old('branch_name')); ?>" name="branch_name" required autocomplete="branch_name" autofocus placeholder="Branch Name">
                                    
                                    <?php $__errorArgs = ['branch_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                    </div>
                            </div>

                            

                            
                            <div class="form-group row">
                                <label for="usertypes" class="col-md-2 control-label">User Type:</label>
                                <div class="col-sm-10">
                                <select class="form-control" value="<?php echo e($user->usertypes); ?>" name="usertypes" required="required">
                                    <option value="Admin">Admin</option>
                                    <option value="sales_manager">Sales manager</option>
                                    <option value="area_manager">Area manager</option>
                                    <option value="distributor">Distributor</option>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->email); ?>" name="email" required autocomplete="email" placeholder="Email Address">
                                        
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/user/edit.blade.php ENDPATH**/ ?>