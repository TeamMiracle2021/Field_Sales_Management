

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
                                    <h3 class="float-left"><b>Shop Details</b></h3>
                                    <a class="btn btn-primary float-right" href="<?php echo e(route('shop.index')); ?>">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="table table-responsive">
                                    <table class="table table-bordered" id="shopTable">

                                        <tr>
                                            <th>Shop</th>
                                            <th>Details</th>
                                        </tr>

                                        <tr>
                                            <td>Shop ID</td>
                                            <td> <?php echo e($shop->ShopID); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Shop Name</td>
                                            <td> <?php echo e($shop->shop_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Owner Name</td>
                                            <td><?php echo e($shop->owner_name); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Owner NIC</td>
                                            <td> <?php echo e($shop->owner_NIC); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Latitude</td>
                                            <td> <?php echo e($shop->lat); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Longitude</td>
                                            <td><?php echo e($shop->lng); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Address No</td>
                                            <td> <?php echo e($shop->address_no); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Suburb</td>
                                            <td> <?php echo e($shop->suburb); ?></td>
                                        </tr>

                                        <tr>
                                            <td>City</td>
                                            <td><?php echo e($shop->city); ?></td>
                                        </tr>

                                        <tr>
                                            <td>District</td>
                                            <td> <?php echo e($shop->district); ?></td>
                                        </tr>


                                        <tr>
                                            <td>Telephone Number</td>
                                            <td><?php echo e($shop->telephone_numbers); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Registered Date</td>
                                            <td><?php echo e($shop->registered_date); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Due Dates</td>
                                            <td><?php echo e($shop->due_dates); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td><?php echo e($shop->status); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Assigned User</td>
                                            <td><?php echo e($shop->user->first_name); ?></td>
                                        </tr>


                                        <tr>
                                            <td>Route</td>
                                            <td><?php echo e($shop->route->route_name); ?></td>
                                        </tr>

                                        <td>Created At</td>
                                        <td> <?php echo e($shop->created_at); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Updated At</td>
                                            <td> <?php echo e($shop->updated_at); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Image</td>
                                            <td> <img src="<?php echo e(asset('uploads/shop/'.$shop->image)); ?>"
                                                        class="img-bordered-sm" width="400px;" height="400px;" alt="Product-Image"> </td>
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






























<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/Shop/show.blade.php ENDPATH**/ ?>