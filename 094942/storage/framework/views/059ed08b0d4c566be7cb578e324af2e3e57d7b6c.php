<!DOCTYPE html>
<html>
<head>
<title>View a Game's Reviews</title>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<a href="/stdrecords">Back</a>
<table border="1" style="text-align:center;">
<tr>
<tr>
 <td>Admission Number</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Date Of Payment</td>
 <td>Amount</td>
</tr>
<?php $__empty_1 = true; $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($fee->student_id); ?></td>
<td><?php echo e($fee->fname); ?></td>
<td><?php echo e($fee->lname); ?></td>
<td><?php echo e($fee->payment_plan); ?></td>
<td><?php echo e($fee->amount); ?></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<p>The student has not yet signed up on any Fee Payment Plan</p>
<?php endif; ?>
</table>
</body>
</html>