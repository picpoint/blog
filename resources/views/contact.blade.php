<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Contact</h1>

  <form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">SEND</button>
  </form> 
  
</body>
</html>