<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $user = "kitipan";
        $arr = array('home',"membrt","about" );
    ?>
    @if($user == "kitipan")
        <h1>ยินดีต้อนรับแอดมิน</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ad ab tenetur, molestias nesciunt nobis voluptatum assumenda totam voluptates quam.</p>
        <h1>{{$user}}</h1>
    @else
        <h1>ผู้ไม่ได้เป็นเเอดมิน</h1>
    @endif

    @foreach ($arr as $menu)
        <a href="">{{$menu}}</a>
    @endforeach

    <ul>
    @for($i=1;$i<=5;$i++)
        <li>{{$i}}</li>
    @endfor
</ul>
</body>
</html>