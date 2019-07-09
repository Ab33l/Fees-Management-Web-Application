<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title>Laravel</title>
    </head>
    <body>
    <?php echo $__env->make('abell.appbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
    <a href="/stdrecords">All Student Records</a>
    <h2>Register a New Student</h2>
<form action="/studentstore" method="post" enctype="multipart/form-data">
           <?php echo e(csrf_field()); ?>

           <label>First Name:</label>
           <input type="text" name="fname" value="<?php echo e(isset($student->fname) ? $student->fname : ''); ?>" required><br/>
           <label>Last Name:</label>
           <input type="text" name="lname" value="<?php echo e(isset($student->lname) ? $student->lname : ''); ?>" required><br/>
           <label>Date Of Birth:</label>
           <input type="date" name="dob" value="<?php echo e(isset($student->dob) ? $student->dob : ''); ?>" required><br/>
           <label>Address:</label>
           <input type="text" name="address" value="<?php echo e(isset($student->address) ? $student->address : ''); ?>" required><br/>
           <input type="hidden" value="<?php echo e(isset($student->id) ? $student->id : ''); ?>" name="id"><br/>
           <button type="submit" name="save">Save</button>
</form>     
       </div>
    </body>
</html>
