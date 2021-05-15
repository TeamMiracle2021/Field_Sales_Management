

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
                                    <h3 class="float-left"><b>Product Details</b></h3>
                                    <a class="btn btn-primary float-right" href="<?php echo e(route('product.index')); ?>">back</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

<div class="row">
    <div class="table table-responsive">
        <table class="table table-bordered" id="productTable">

            <tr>
                <th>Product</th>
                <th>Details</th>
            </tr>

            <tr>
                <td>Product Id</td>
                <td> <?php echo e($product->productID); ?></td>
            </tr>

            <tr>
                <td>Product Name</td>
                <td> <?php echo e($product->product_Name); ?></td>
            </tr>

            <tr>
                <td>Cost Price</td>
                <td> <?php echo e($product->cost_price); ?></td>
            </tr>

            <tr>
                <td>Sales Price</td>
                <td> <?php echo e($product->sales_price); ?></td>
            </tr>

            <tr>
                <td>Labled Price</td>
                <td> <?php echo e($product->labled_price); ?></td>
            </tr>

            <tr>
                <td>Weight</td>
                <td> <?php echo e($product->weight); ?></td>
            </tr>


            <tr>
                <td>Category </td>
                <td> <?php echo e($product->categories->category_name); ?></td>
            </tr>


            <tr>
                <td>Created At</td>
                <td> <?php echo e($product->created_at); ?></td>
            </tr>

            <tr>
                <td>Updated At</td>
                <td> <?php echo e($product->updated_at); ?></td>
            </tr>


            <?php $__env->stopSection(); ?>

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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dinujaya\Desktop\FSM_MASTER\resources\views/product/showProduct.blade.php ENDPATH**/ ?>