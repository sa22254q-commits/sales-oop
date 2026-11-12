<?php
require "../classes/User.php";

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
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center flex-column mt-5">
        <h1 class="display-3 text-center text-info fw-bold">
            <i class="fa-solid fa-store"></i> 
            Add Product
        </h1>
        <form action="../actions/add-product.php" method="post">
            <div>
                <label for="product_name" class="form-label fw-light">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control">
            </div>
           
        <div class="row mt-2">
                <div class="col">
                    <label for="price" class="form-label fw-light">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                         <input type="number" name="price" id="price"    class="form-control" required>
                    </div>
                   
                </div>
                <div class="col">
                    <label for="quantity" class="form-label fw-light">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" required>
                </div>
        </div>
        <input type="submit" value="Add" name="add_product" class="btn btn-info form-control mt-3">
        </form>
      
        
    </div>
    
</body>
</html>