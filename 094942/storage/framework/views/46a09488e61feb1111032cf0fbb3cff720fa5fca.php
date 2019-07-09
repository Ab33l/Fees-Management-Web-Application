<!DOCTYPE html>
<html>
<head>
<title>Fees</title>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<a href="/fees">Back</a>
<table border="1" style="text-align:center;">
            <tr>
                <td>Admission Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Date Of Payment</td>
                <td>Amount</td>
                <td>Action</td>
            </tr>
            <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($fee->student_id); ?></td>
                    <td><?php echo e($fee->fname); ?></td>
                    <td><?php echo e($fee->lname); ?></td>
                    <td><?php echo e($fee->payment_plan); ?></td>
                    <td><?php echo e($fee->amount); ?></td>
            <td>
            <a href="/feeview/<?php echo e($fee->id); ?>" class="btn btn-default">View</a>
            </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <p>The total amount paid here is Ksh. <?php echo e($fees->sum('amount')); ?></p>
        </table>
        </div>
</body>
</html>