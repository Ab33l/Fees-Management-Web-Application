<!DOCTYPE html>
<html>
<head>
<title>Students</title>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<a href="/student">Back</a>
<table border="1" style="text-align:center;">
            <tr>
                <td>Admission Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Date Of Birth</td>
                <td>Address</td>
                <td>Actions</td>
            </tr>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->id); ?></td>
                    <td><?php echo e($student->fname); ?></td>
                    <td><?php echo e($student->lname); ?></td>
                    <td><?php echo e($student->dob); ?></td>
                    <td><?php echo e($student->address); ?></td>
            <td>
            <a href="/stdview/<?php echo e($student->id); ?>" class="btn btn-default">View</a>
            <a href="/stdedit/<?php echo e($student->id); ?>" class="btn btn-default">Update</a>
            <a href="/stdremove/<?php echo e($student->id); ?>" class="btn btn-default">Disable</a>
            <a href="/stdrecords/<?php echo e($student->id); ?>/fees" class="btn btn-default">Payment Plan</a>
            </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </div>
</body>
</html>