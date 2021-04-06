<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>เกียวกับผู้พัฒนาเว็ป</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid repellat error odio cumque vel quam alias eveniet pariatur facere dolor.</p>



    <p>ที่อยู่ : {{$address}}</p>
    <p>เบอร์ติดต่อ : {{$tel}}</p>
    <p>อีเมล : {{$email}}</p>
    <p>{{$error}}</p>
    <p>{{$status}}</p>
    
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}" >Admin</a>
    <a href="{{route('member')}}">Member</a>
    <a href="{{route('about')}}">About</a>
</body>
</html>