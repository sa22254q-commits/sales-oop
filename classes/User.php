<?php
require_once "Database.php";

class User extends Database
{
       public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(`first_name`,`last_name`,`username`,`password`)VALUES('$first_name','$last_name','$username','$password')";

        if($this->conn->query($sql)){
            header('location:../views'); //to go index.php
            exit;
        }else{
            die('Error creating the user: ' . $this->conn->error);
        }
    }

     public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        //Check the Username
        if($result->num_rows == 1){
            //Check if the password is correct
            $user = $result->fetch_assoc();

            if(password_verify($password,$user['password'])){
                //cerate session variable for future use
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];

                header('location:../views/dashboard.php');
                exit;
            }else{
                die('Password is incorrect.');
            }
        }else{
            die('Username is not found.');
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('location:../views');
        exit;
    }

    public function getallUsers()
    {
        $sql = "SELECT id, first_name, last_name, username From users";

        if($result = $this->conn->query($sql)){
             return $result;
        }else{
            die('Error retrieving all users: ' . $this->conn->error);
        }
    }

    public function addProduct($request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];
       
        $sql = "INSERT INTO products(`product_name`,`price`,`quantity`)VALUES('$product_name','$price','$quantity')";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error adding products: ' . $this->conn->error);
        }
    }

    public function getAllProducts()
    {
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving products: ' . $this->conn->error);
        }
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving the product: ' . $this->conn->error);
        }
    }

    public function update($request)
  {
    session_start();
    $id = $_SESSION['id'];
    $product_name = $request['product_name'];
    $price = $request['price'];
    $quantity = $request['quantity'];

    $sql = "UPDATE products
            SET product_name = '$product_name',
                price = '$price',
                quantity = '$quantity'
            WHERE id = $id";

        if($this->conn->query($sql)){
           header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error updating products: ' . $this->conn->error);
        }

    }

    public function delete()
{
    session_start();
    $id = $_SESSION['id'];

    $sql = "DELETE FROM products WHERE id= $id";

    if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
        exit;
    }else{
        die('Error deleting this product: ' . $this->conn->error);
    }
}

public function payProduct($id, $buy_quantity)
{
    $sql = "UPDATE products SET quantity = quantity - $buy_quantity WHERE id = $id AND quantity >= $buy_quantity";
    
    if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
        exit;
    }else{
        die('Error purchasing product: ' . $this->conn->error);
    }
}



}


?>