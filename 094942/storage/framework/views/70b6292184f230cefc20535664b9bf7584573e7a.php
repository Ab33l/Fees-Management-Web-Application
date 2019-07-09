<!DOCTYPE html>
<html>
<head>
<title>Viewing a Student</title>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<a href="/stdrecords">Back</a>
<table border="1" style="text-align:center;">
<tr>
<td>Admission Number:</td>
<td>First Name:</td>
<td>Last Name:</td>
<td>Date Of Birth:</td>
<td>Address:</td>
</tr>
<tr>
<td><?php echo e($student->id); ?></td>
<td><?php echo e($student->fname); ?></td>
<td><?php echo e($student->lname); ?></td>
<td><?php echo e($student->dob); ?></td>
<td><?php echo e($student->address); ?></td>
</tr>
</table>
</div>
</body>
</html>