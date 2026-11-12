<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
             <!-- CDN CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center flex-column mt-5">
        <h1 class="display-1 text-center text-primary fw-bold">
            LOGIN
            <i class="fa-solid fa-right-to-bracket"></i>
        </h1>
        <form action="../actions/login.php" method="post">
              <div class="row">
            <div class="col-3">
                <label for="username" class="fw-light">Username</label>
            </div>
            <div class="col-9">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <label for="password" class="fw-light">Password</label>
            </div>
            <div class="col-9">
               <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>  
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary text-white w-50" name="login" id="login">Login</button>
        </div>
        <div class="mt-2">
         <a href="register.php" class="btn btn-danger" id="create">Create an Account</a>
        </div>
        </form>
      
        
    </div>
    
</body>
</html>