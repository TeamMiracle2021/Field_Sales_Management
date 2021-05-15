<?php $__env->startSection('title'); ?>
    Detailed Report of Order
    <h4><b><center>Made By : <?php echo e($orders[0]->first_name); ?> <?php echo e($orders[0]->last_name); ?></center></b></h4>
    <h4><b><center>Placed Date : <?php echo e($orders[0]->placed_date); ?></center></b></h4>
    <h4><b><center>Shop Name : <?php echo e($orders[0]->shop_name); ?></center></b></h4>
    <h4><b><center>Total Bill Value : <?php echo e($orders[0]->bill_value); ?></center></b></h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <section class="content">
        <h3><b><center>Reports of Order Details</center></b></h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a class="btn btn-primary"  href="<?php echo e(route('report.index')); ?>">Back</a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h4><b><center>Made By : <?php echo e($orders[0]->first_name); ?> <?php echo e($orders[0]->last_name); ?></center></b></h4>
                            <h4><b><center>Placed Date : <?php echo e($orders[0]->placed_date); ?></center></b></h4>
                            <h4><b><center>Shop Name : <?php echo e($orders[0]->shop_name); ?></center></b></h4>
                            <h4><b><center>Total Bill Value : <?php echo e($orders[0]->bill_value); ?></center></b></h4>
                            <table id="example15" class="table  table-responsive-md">
                                <thead>
                                <tr>

                                    <th>Product Name</th>
                                    <th>QTY</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>

                                        <td><?php echo e($data->product_Name); ?></td>
                                        <td><?php echo e($data->quantity_per_product); ?></td>

                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><b>Total No Of Products</b></td>
                                    <td><b><?php echo e($ordertotal[0]->quantity); ?></b></td>
                                </tr>
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
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('jscript'); ?>



    
    <script >
        $(document).ready(function() {
            $('#example15').DataTable( {
                dom: 'B',
                buttons: ['print']
            } );
        } );
    </script>





<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/reports/ord2.blade.php ENDPATH**/ ?>