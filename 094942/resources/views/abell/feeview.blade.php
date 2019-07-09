<!DOCTYPE html>
<html>
<head>
<title>Viewing a Student</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
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
<td>{{$fee->student_id}}</td>
<td>{{$fee->fname}}</td>
<td>{{$fee->lname}}</td>
<td>{{$fee->payment_plan}}</td>
<td>{{$fee->amount}}</td>
</tr>
</table>
</div>
</body>
</html>