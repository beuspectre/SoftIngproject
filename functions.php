<?php


//FUNKSIONE NDIHMESE

function set_message($msg){


if(!empty($msg))  {

$_SESSION['message'] = $msg;

} else {

$msg = "";


      }




}


function display_message() {

if(isset($_SESSION['message'])) {

echo $_SESSION['message'];
  
  unset($_SESSION['message']);


     }

}


function redirect($location){



header("Location: $location");


}

function query($sql) {

global $connection;

return mysqli_query($connection, $sql);

}

function confirm($result) {


	global $connection;

	if(!$result) {

    die("QUERY FAILED" . mysqli_error($connection));

	}
}

function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);  //ndalon SQL INJECTION


}


function fetch_array($result){

return mysqli_fetch_array($result);


}

//************************FRONT END FUNCTIONS ****************************

//merr PRODUKTET

function get_products() {

$query = query("SELECT * FROM products");

confirm($query);

while($row = fetch_array($query)) {
// rréshti 68 {$row['product_image']}

$product = <<<DELIMETER


<div class="col-sm-4 col-lg-4 col-md-4">
	  <div class="thumbnail">
  <a href="item.php?id={$row['product_id']}">
  <img src="{$row['product_image']}" alt=""> </a>

    <div class="caption">
        <h4 class="pull-right"><br/><br/><br/>&#36;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
        </h4>
        <p> <a target="_blank" href=""</a>.</p>
        <a class="btn btn-primary" target="_blank" href="cart.php?add={$row['product_id']}">Shto ne Shporte</a>
    </div>
    
                         </div>
                    </div>

DELIMETER;


echo $product;

}


}


function get_categories(){

$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


    

$categories_links = <<<DELIMETER



<a href='category.php?id={$row['cat_id']}'  class='list-group-item'>{$row ['cat_title'] }</a>



DELIMETER;


echo $categories_links;
}



}




function get_products_in_cat_page() {

$query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id'])."");

confirm($query);

while($row = fetch_array($query)) {
// rréshti 68 {$row['product_image']}

$product = <<<DELIMETER


<div class="col-sm-4 col-lg-4 col-md-4">
      <div class="thumbnail">
  <a href="item.php?id={$row['product_id']}">
  <img src="{$row['product_image']}" alt=""> </a>

    <div class="caption">
        <h4 class="pull-right">&#36;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
        </h4>
        <p> <a target="_blank" href=""</a>.</p>
        <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Shto ne Shporte</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
    </div>
    
                         </div>
                    </div>

DELIMETER;


echo $product;

}


}

function get_products_in_shop_page() {

$query = query("SELECT * FROM products");

confirm($query);

while($row = fetch_array($query)) {
// rréshti 68 {$row['product_image']}

$product = <<<DELIMETER


<div class="col-sm-4 col-lg-4 col-md-4">
      <div class="thumbnail">
  <a href="item.php?id={$row['product_id']}">
  <img src="{$row['product_image']}" alt=""> </a>

    <div class="caption">
        <h4 class="pull-right">&#36;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
        </h4>
        <p>.</p>
        <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Shto ne Shporte</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
    </div>
    
                         </div>
                    </div>

DELIMETER;


echo $product;

}


}

function login_user(){



if(isset($_POST['submit'])){

$username = escape_string ($_POST['username']);
$password= escape_string($_POST['password']);

$query = query ("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'  ");
confirm($query);


 if (mysqli_num_rows($query) == 0) {    //kthen numerimin


set_message("Your Password or Username are wrong");
redirect("login.php");

}else{

$_SESSION['username'] = $username;
redirect("admin");
}



 }  


}





function send_message() {


if(isset($_POST['submit'])){


    $to        = "someemail@hotmail.com";
    $from_name = $_POST['name'];
    $subject   = $_POST['subject'];
    $email     = $_POST['email'];
    $message   = $_POST['message'];

   $headers = "From: {$from_name} {$email}";


   $result = mail($to, $subject, $message, $headers);

if(!$result) {

 set_message("Sorry we could not send your message");
redirect("contact.php");

}else{
    set_message("Your Message has been sent");
    redirect("contact.php");
}


}
}




//************************BACK END FUNCTIONS ****************************

function display_orders(){


$query = query("SELECT  * FROM orders");
confirm($query);


while($row = fetch_array($query)){

$orders = <<<DELIMETER
<tr>
  <td>{$row['order_id']}</td>
  <td>{$row['order_amount']}</td>
  <td>{$row['order_transaction']}</td>
  <td>{$row['order_currency']}</td>
  <td>{$row['order_status']}</td>
<td><a class="btn btn-danger" href="/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>

</tr>


DELIMETER;

echo  $orders;


}


}


/***************************************ADD PRODUCTS in admin ***************/

function  add_products() {

if(isset($_POST['publish'])) {

$product_title         =   escape_string($_POST['product_title']);
$product_category_id   =   escape_string($_POST['product_category_id']);
$product_price         =   escape_string($_POST['product_price']);
$product_description   =   escape_string($_POST['product_description']);
$short_desc            =   escape_string($_POST['short_desc']);
$product_ditity      =   escape_string($_POST['product_quantity']);
$product_image         =   escape_string($_FILES['file']['name']);
$image_temp_location   =   escape_string($_FILES['file']['tmp_name']);


move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image);



$query = query("INSERT INTO products(product_title, product_category_id, product_price , product_description, short_desc, product_quantity , product_image) VALUES('{$product_title}', '{$product_category_id}', 
  '{$product_price}' , '{$product_description}', '{$short_desc}', 
  '{$product_quantity}' , '{$product_image}')");

$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} just added");
redirect("index.php?products");



}




}



?>