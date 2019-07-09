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
    <a href="/stdrecords">All Student Records</a>
    <h2>Register a New Student</h2>
<form action="/studentstore" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
           <label>First Name:</label>
           <input type="text" name="fname" value="{{$student->fname or ''}}" required><br/>
           <label>Last Name:</label>
           <input type="text" name="lname" value="{{$student->lname or ''}}" required><br/>
           <label>Date Of Birth:</label>
           <input type="date" name="dob" value="{{$student->dob or ''}}" required><br/>
           <label>Address:</label>
           <input type="text" name="address" value="{{$student->address or ''}}" required><br/>
           <input type="hidden" value="{{$student->id or ''}}" name="id"><br/>
           <button type="submit" name="save">Save</button>
</form>     
       </div>
    </body>
</html>
