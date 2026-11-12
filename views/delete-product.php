<?php
session_start();

?>

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
    <!-- Custom CSS--->
     <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
     
    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 mb-2"></i>
            <h2 class="text-danger mb-5">DELETE PRODUCT</h2>

            <p class="fw-bold">Are you sure you want to delete this product?</p>
            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete-product.php" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>