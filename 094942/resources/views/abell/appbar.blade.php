<!--<nav class="navbar nav-bar inverse">
<div class="container">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Laravel</a>
</div>
<div id="navbar" class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav">
<li><a href="/">Home</a></li>
<li><a href="/student">Students</a></li>
<li><a href="/fees">Fees</a></li>
<li>
<form method="post" action="/search" enctype="multipart/form-data">
       {{csrf_field()}}
       <input type="text" name="student_id" required>
       <input type="submit" name="search" value="Search">
       </form>
</li>
</ul>
</div>
</div>
</nav>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/student">Students</a></li>
      <li><a href="/fees">Fees</a></li>
    </ul>
    <form class="navbar-form navbar-left" method="post" action="/search" enctype="multipart/form-data">
      <div class="form-group">
         {{csrf_field()}}
       <input type="text" name="student_id" required>
      </div>
      <button type="submit"  name="search" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>