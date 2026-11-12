<?php

session_start();

require "../classes/User.php";

$product_obj = new User;
$product = $product_obj->getProduct($_POST['id']);
$buy_quantity = $_POST['buy_quantity'];
$total_price = $product['price'] * $buy_quantity;

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
    <!-- justify-content-center align-items-center  -->
    <div class="container d-flex flex-column mt-5 w-50">
        <h1 class="display-3 text-center text-success fw-bold">
            <i class="fa-solid fa-cash-register"></i>
            Buy Product
        </h1>
        
            <div class="text-left">
               <p class="fw-light">Product Name</p>
               <p class="display-6 fw-bold"><?= $product['product_name']?></p>
            </div>
           
        <div class="row mt-2">
                <div class="col">
                <p class="fw-light">Total Price</p>
                <p class="display-6 fw-bold"><?= $total_price ?></p>
                </div>
                <div class="col">
                <p class="fw-light">Buy Quantity</p>
                <p class="display-6 fw-bold"><?= $buy_quantity ?> </p>
                </div>
        </div>

            <form action="../actions/payment.php" method="post">
           <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="hidden" name="buy_quantity" value="<?= $buy_quantity ?>">
            <input type="hidden" name="total_price" value="<?= $total_price ?>">

            <label for="paid_amount" class="form-label fw-bold">Payment Amount</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" name="paid_amount" id="paid_amount" class="form-control" required min="1">
            </div>

            <button type="submit" name="btn_pay" class="btn btn-primary w-100 mt-4">Pay</button>

            </form>
         
        
      
       
    </div>
    
</body>
</html>