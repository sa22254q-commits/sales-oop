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
    <div class="mx-auto w-75 mt-5">
        <h1 class="text-center text-danger"><i class="fa-solid fa-user"></i>Registration</h1>
         <form action="../actions/register.php" method="post">
                 <div class="row">
           
            <div class="col">
                <label for="first_name" class="form-label fw-light ">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
            </div>
            <div class="col">
                <label for="last_name" class="form-label fw-light">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required >
            </div>
            
        </div>
            <label for="username" class="form-label fw-light">Username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="password" class="form-label fw-light">Password</label>
            <input type="password" name="password" id="password" class="form-control">

            <button type="submit" class="btn btn-danger text-white mt-3 w-100">Register</button>
         </form>
           
    </div>
    
    
</body>
</html>