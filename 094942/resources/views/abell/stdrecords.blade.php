<!DOCTYPE html>
<html>
<head>
<title>Students</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('abell.appbar')
<div class="container">
<a href="/student">Back</a>
<table border="1" style="text-align:center;">
            <tr>
                <td>Admission Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Date Of Birth</td>
                <td>Address</td>
                <td>Actions</td>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->fname}}</td>
                    <td>{{$student->lname}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->address}}</td>
            <td>
            <a href="/stdview/{{$student->id}}" class="btn btn-default">View</a>
            <a href="/stdedit/{{$student->id}}" class="btn btn-default">Update</a>
            <a href="/stdremove/{{$student->id}}" class="btn btn-default">Disable</a>
            <a href="/stdrecords/{{$student->id}}/fees" class="btn btn-default">Payment Plan</a>
            </td>
                </tr>
            @endforeach
        </table>
        </div>
</body>
</html>