<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>


        <div id="page-wrapper">

            <div class="container-fluid">


                


        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

     <tr>
           <th>id</th>
           <th>Amount</th>
           <th>Transaction</th>
           <th>Currency</th>
           <th>Status</th>
           <
      </tr>
    </thead>
   <tbody>
        <?php      

        display_orders(); ?>
        

    </tbody>
</table>
</div>











            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include(TEMPLATE_BACK . "/footer.php"); ?>