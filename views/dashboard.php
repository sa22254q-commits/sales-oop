<?php
session_start();

require "../classes/User.php";

$product_obj = new User;
$all_products = $product_obj->getAllProducts();


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
    
    <nav class="navbar navbar-expand" style="margin-bottom: 80px">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="dashboard.php" class="navbar-brand">
               <i class="fa-solid fa-house"></i>
            </a>
            <span class="navbar-text mx-auto fw-bold">Welcome,<?= $_SESSION['username']?></span>
             <form action="../actions/logout.php" method="post" class="d-flex ms-2">
            <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user"></i></button>
            </form>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2>PRODUCT LIST <a href="add-product.php" class="text-primary text-end"><i class="fa-solid fa-plus"></i></a></h2>

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>  <!--for action button--> </th>
                    <th>  <!--for action button--> </th>
                    </tr>
                </thead>
                 <?php while ($product = $all_products->fetch_assoc()){?>
                    <tr>

                        <td><?= $product['id']?></td>
                        <td><?= $product['product_name']?></td>
                        <td><?= $product['price']?></td>
                        <td><?= $product['quantity']?></td>
                        <td>
                            <a href="edit-product.php?id=<?= $product['id']?>" class="btn btn-warning" title="Edit">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="delete-product.php" class="btn btn-danger" title="Delete">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                        <td>
                            <a href="buy-product.php?id=<?= $product['id']?>" class="btn btn-success "><i class="fa-solid fa-cash-register"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>