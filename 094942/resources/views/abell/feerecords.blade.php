<!DOCTYPE html>
<html>
<head>
<title>Fees</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
<div class="container">
<a href="/fees">Back</a>
<table border="1" style="text-align:center;">
            <tr>
                <td>Admission Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Date Of Payment</td>
                <td>Amount</td>
                <td>Action</td>
            </tr>
            @foreach($fees as $fee)
                <tr>
                    <td>{{$fee->student_id}}</td>
                    <td>{{$fee->fname}}</td>
                    <td>{{$fee->lname}}</td>
                    <td>{{$fee->payment_plan}}</td>
                    <td>{{$fee->amount}}</td>
            <td>
            <a href="/feeview/{{$fee->id}}" class="btn btn-default">View</a>
            </td>
                </tr>
            @endforeach
            <p>The total amount paid by here is Ksh. {{$fees->sum('amount')}}</p>
        </table>
        </div>
</body>
</html>