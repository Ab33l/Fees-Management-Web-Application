<!DOCTYPE html>
<html>
<head>
<title>Edit Records</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
<table>
<div class="container">
           <form action="/studentstore" method="post">
           {{csrf_field()}}
           <label name="First Name">:
           <input type="text" class="form-control" id="fname" value="{{$student->fname or ''}}" placeholder="First Name"><br/>
           <label name="Last Name">:
           <input type="text" class="form-control" id="lname" value="{{$student->fname or ''}}" placeholder="Last Name"><br/>
           <label name="Date Of Birth">
           <input type="date" class="form-control" id="dob" value="{{$student->fname or ''}}" placeholder="Date Of Birth"><br/>
           <label name="Address">
           <input type="text" class="form-control" id="address" value="{{$student->fname or ''}}" placeholder="Address"><br/>
           <input type="submit" value="submit">
           <input type="hidden" value="{{$student->id or ''}}" name="id">
           </form>
        </table>
</div>
</body>
</html>