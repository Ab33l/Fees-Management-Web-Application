<!DOCTYPE html>
<html>
<head>
    
</head>    
<body>
<nav class="navbar nav-bar inverse">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Laravel</a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="/">Home</a></li>
<li><a href="/student">Students</a></li>
<li><a href="/fees">Fees</a></li>
<li>
<form method="post" action="/search" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

       <input type="text" name="student_id" required>
       <input type="submit" name="search" value="Search">
       </form>
</li>
</ul>
</div>
</div>
</nav>
</body>
</html>