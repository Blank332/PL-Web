<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="form-container">
    <form class="form">
      <div class="title">Welcome Admin,<br><span>sign up to continue</span></div>
      <input type="Username" placeholder="Username" name="Username" class="input">
      <input type="password" placeholder="Password" name="password" class="input">
      <a href="/dashboard"><button class="button-confirm">Let`s go →</button></a>
    </form>
  </div>
</body>
</html>