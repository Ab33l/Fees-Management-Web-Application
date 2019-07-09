<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel</title>
    </head>
    <body>
    @include('abell.appbar')
    <div class="container">
    <a href="/feerecords">All Fee Payment Plan Records</a>
       <form method="post" action="/search" enctype="multipart/form-data">
       {{csrf_field()}}
       <input type="text" name="student_id" required>
       <input type="submit" name="search" value="Search">
       </form>
       <h2>Register a Student For Fee Payment Plan</h2>
    <form action="/feestore" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
    <label>Student Number:</label>
    <input type="text" name="student_id" value="{{$fee->student_id or ''}}" required><br/>  
    <label>First Name:</label>
    <input type="text" name="fname" value="{{$fee->fname or ''}}" required><br/>
    <label>Last Name:</label>
    <input type="text" name="lname" value="{{$fee->lname or ''}}" required><br/> 
    <label>Date Of Payment:</label>
    <input type="date" name="payment_plan" value="{{$fee->payment_plan or ''}}" required><br/>
    <label>Amount:</label>
    <input type="int" name="amount" value="{{$fee->amount or ''}}" required><br/>
    <input type="hidden" value="{{$fee->id or ''}}" name="id"><br/>
    <button type="submit" name="save">Save</button>
    </form>
       </div>
    </body>
</html>
