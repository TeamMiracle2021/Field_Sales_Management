

<?php $__env->startSection("content"); ?>



<?php $__env->startSection('title'); ?>
    Shops | FSM
<?php $__env->stopSection(); ?>

        <?php if($msg = Session::get("add")): ?>
            <div class="alert alert-default-primary">
                <p><?php echo e($msg); ?></p>
            </div>
        <?php endif; ?>



    <section class="content">
        <h1><b><center>Shops</center></b></h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary"  href="<?php echo e(route('shop.create')); ?>">Create Shop</a>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" >

                                <thead>
                                <tr>
                                    <th><center>Shop Name</center></th>
                                    <th><center>Owner Name</center></th>
                                    <th><center>Image</center></th>
                                    <th><center>Source</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Action</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $Shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><center><?php echo e($data->shop_name); ?></center></td>
                                        <td><center><?php echo e($data->owner_name); ?></center></td>
                                        <td><center><img src="<?php echo e(asset('uploads/shop/'.$data->image)); ?>"
                                                 class="img-bordered-sm" width="100px;" height="100px;" alt="Shop-Image"></center></td>
                                        <td><center><?php echo e($data->source); ?></center></td>
                                        <td><center>
                                            <?php if($data->status=='Completed'): ?>
                                                <i class="fas fa-check-double"></i>

                                            <?php else: ?>
                                                <i class="fas fa-check"></i>
                                            <?php endif; ?>
                                            </center></td>
                                        <td><center>
                                            <form action="<?php echo e(route('shop.destroy',$data->ShopID)); ?>" method="POST">



                                                <a class="btn btn-primary" href="<?php echo e(route('shop.edit',$data->ShopID)); ?>">Edit</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"  class="btn btn-danger">Delete</button>

                                                <a class="btn btn-success" href="<?php echo e(route('shop.show',$data->ShopID)); ?>">View</a>
                                                </form>
                                            </center>
                                        </td>
                                       </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </center></tbody>

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
                                            You are going to delete a shop. Do you want to continue ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


                                        </div>
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
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/Shop/Index.blade.php ENDPATH**/ ?>