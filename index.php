
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <form class="form-signin" method="post" action="view.php">
  
  <h1 class="h3 mb-3 font-weight-normal">Tell me about you</h1>
    
  
  <input type="text" id="inputFirstName" name="first_name" class="form-control" placeholder="First name" required autofocus>
  
  
  <input type="text" id="inputLastName" name="last_name" class="form-control" placeholder="Last name" required>
  
 
  <input type="text" id="inputPhone" name="phone" class="form-control" placeholder="Phone number" required><br>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="template" value="greetings">Say hello</button>
  <button class="btn btn-lg btn-danger btn-block" type="submit" name="template" value="goodbye">Say goodbye</button>
  <p class="mt-5 mb-3 text-muted">af Rune Heidtmann 2019</p>
</form>
</body>
</html>
<!-- 
<!DOCTYPE html>
<html>
<body>

<p>Hvad fik du til jul?</p>

<form method="post" action="view.php">
    First Name: <input type="text" name="first_name"  ><br>
    Last Name:<input type="text" name="last_name" ><br>
    Phone: <input type="text" name="phone" ><br>
    
    <input type="submit" name="template" value="greetings">
    <input type="submit" name="template" value="goodbye"><br>
    

</form>

</body>
</html> -->
