<!DOCTYPE html>
<html>
<head>
<title>Viewing a Student</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
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
<td>{{$student->id}}</td>
<td>{{$student->fname}}</td>
<td>{{$student->lname}}</td>
<td>{{$student->dob}}</td>
<td>{{$student->address}}</td>
</tr>
</table>
</div>
</body>
</html>