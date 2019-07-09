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
    <a href="/feerecords">All Fee Payment Plan Records</a>
       <form method="post" action="/search" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

       <input type="text" name="student_id" required>
       <input type="submit" name="search" value="Search">
       </form>
       <h2>Register a Student For Fee Payment Plan</h2>
    <form action="/feestore" method="post" enctype="multipart/form-data">
           <?php echo e(csrf_field()); ?>

    <label>Student Number:</label>
    <input type="text" name="student_id" value="<?php echo e(isset($fee->student_id) ? $fee->student_id : ''); ?>" required><br/>  
    <label>First Name:</label>
    <input type="text" name="fname" value="<?php echo e(isset($fee->fname) ? $fee->fname : ''); ?>" required><br/>
    <label>Last Name:</label>
    <input type="text" name="lname" value="<?php echo e(isset($fee->lname) ? $fee->lname : ''); ?>" required><br/> 
    <label>Date Of Payment:</label>
    <input type="date" name="payment_plan" value="<?php echo e(isset($fee->payment_plan) ? $fee->payment_plan : ''); ?>" required><br/>
    <label>Amount:</label>
    <input type="int" name="amount" value="<?php echo e(isset($fee->amount) ? $fee->amount : ''); ?>" required><br/>
    <input type="hidden" value="<?php echo e(isset($fee->id) ? $fee->id : ''); ?>" name="id"><br/>
    <button type="submit" name="save">Save</button>
    </form>
       </div>
    </body>
</html>
