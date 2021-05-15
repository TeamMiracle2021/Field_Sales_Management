

<?php $__env->startSection("content"); ?>
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="float-left"><b>Add Shop</b></h3>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="<?php echo e(route('shop.index')); ?>">Back</a>
                                    <a class="btn btn-primary float-right" style="margin: 5px" href="<?php echo e(route('route.getlatlng')); ?>" target="_blank">Get lat,lng From map</a>


                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="<?php echo e(route('shop.store')); ?>" method="POST" enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Shop Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter shop name" name="shop_name" value="<?php echo e(old('shop_name')); ?>">
                                        <?php if($errors->has('shop_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('shop_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Owner Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter owner name" name="owner_name" value="<?php echo e(old('owner_name')); ?>">
                                        <?php if($errors->has('owner_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('owner_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Owner NIC:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter owner NIC" name="owner_NIC" value="<?php echo e(old('owner_NIC')); ?>">
                                        <?php if($errors->has('owner_NIC')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('owner_NIC')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Latitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter latitude of shop" name="lat" value="<?php echo e(old('lat')); ?>">
                                        <?php if($errors->has('lat')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('lat')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Longitude:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter longitude of shop" name="lng" value="<?php echo e(old('lng')); ?>">
                                        <?php if($errors->has('lng')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('lng')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" >Image:</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="avatar" value="<?php echo e(old('avatar')); ?>">
                                        <?php if($errors->has('avatar')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('avatar')); ?></span>
                                        <?php endif; ?>
                                        

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Address :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter address No." name="address_no" value="<?php echo e(old('address_no')); ?>">
                                        <?php if($errors->has('address_no')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('address_no')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Suburb:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter suburb" name="suburb" value="<?php echo e(old('suburb')); ?>">
                                        <?php if($errors->has('suburb')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('suburb')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">City:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter city" name="city" value="<?php echo e(old('city')); ?>">
                                        <?php if($errors->has('city')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">District:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="district" >
                                            <option value="none">Select</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Monaragala">Monaragala</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Galle">Galle</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Telephone Number:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Telephone Number" name="telephone_numbers" value="<?php echo e(old('telephone_numbers')); ?>">
                                        <?php if($errors->has('telephone_numbers')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('telephone_numbers')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Register Date:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="Register Date" name="registered_date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Due Date:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter due Date" name="due_dates">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Assign to:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_id" >
                                            <option value="Select">Select User</option>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($user->userID); ?>"><?php echo e($user->userID); ?> -  <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Route Name:</label>
                                    <div class="col-sm-10">
                                        
                                        <select class="form-control"  name="RouteID" >
                                            <option value="Select">Select Route</option>
                                            <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($route->RouteID); ?>"> <?php echo e($route->RouteID); ?> - <?php echo e($route->route_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">status:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="Partially Completed" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Partially Completed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="Completed">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Completed
                                            </label>
                                        </div>
                                        </div>
                                    </div>





                                <div class="text-right">
                                    <button type="submit"  Value="Save" class="btn btn-primary">Save</button>
                                    <a class="btn btn-secondary" href="<?php echo e(route('shop.index')); ?>">Cancel</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/Shop/Add.blade.php ENDPATH**/ ?>