<!DOCTYPE html>
<html>
<head>
<title>View a Game's Reviews</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
<div class="container">
<a href="/stdrecords">Back</a>
<table border="1" style="text-align:center;">
<tr>
<tr>
 <td>Admission Number</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Date Of Payment</td>
 <td>Amount</td>
</tr>
@forelse($fees as $fee)
<tr>
<td>{{$fee->student_id}}</td>
<td>{{$fee->fname}}</td>
<td>{{$fee->lname}}</td>
<td>{{$fee->payment_plan}}</td>
<td>{{$fee->amount}}</td>
@empty
<p>The student has not yet signed up on any Fee Payment Plan</p>
@endforelse
</table>
</body>
</html>