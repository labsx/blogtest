<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edh1ge">
    <title>My Blog</title>
</head>
<body>

    @foreach ($posts as $post)
    <h1>{{ $post->title}} </h1>
<div>
    <p>{{ $post->body}} </p>
    
</div>
<div>By: {{ $post->author}} </div>
      
       
    @endforeach
</body>
</html>