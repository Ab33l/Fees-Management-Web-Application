<!DOCTYPE html>
<html>
<head>
<title>Viewing a Student</title>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<a href="/feerecords">Back</a>
<table border="1" style="text-align:center;">
<tr>
<td>Admission Number</td>
<td>First Name</td>
<td>Last Name</td>
<td>Date Of Payment</td>
<td>Amount</td>
</tr>
<tr>
<td><?php echo e($fee->student_id); ?></td>
<td><?php echo e($fee->fname); ?></td>
<td><?php echo e($fee->lname); ?></td>
<td><?php echo e($fee->payment_plan); ?></td>
<td><?php echo e($fee->amount); ?></td>
</tr>
</table>
</div>
</body>
</html>