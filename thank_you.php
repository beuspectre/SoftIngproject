<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .  DS ."header.php") ?>


<?php 
if(isset($_GET['tx'])){
$amount = $_GET['amt'];
$currency = $_GET['cc'];
$transaction = $_GET['tx'];
$status = $_GET['st'];

$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status) VALUES('{$amount}','{$transaction}','{$currency}','{$status}')");

confirm($query);



process_transaction();


//session_destroy();

}else{


	redirect("index.php");


}

 ?>



    <!-- Page Content -->
    <div class="container">

<h1 class="text-center">THANK YOU</h1>
<!-- /.row --> 
</div>



      <?php include(TEMPLATE_FRONT .  DS ."footer.php") ?>