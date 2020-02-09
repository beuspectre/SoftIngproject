<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "/header.php"); ?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">

             

           <?php include(TEMPLATE_FRONT .  DS ."side_nav.php") ?>



            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                                 

                                  <?php include(TEMPLATE_FRONT .  DS ."slider.php") ?>



                    </div>

                </div>

                <div class="row">

   <?php
    get_products();  ?>



    
                </div>  <!-- RoW ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT  . DS .  "footer.php") ?>
   
<style>
    .row{
        margin-top:15px;
    }
    .col-md-9{
        margin-top:-50px;
    }
       /* .list-group-item{
        height: 100px;

    }*/
    a.list-group-item{
        color: red;
        font-family: cursive;
        background: transparent; 
        padding-bottom: 30px;
       
    }
    .list-group-item{
        border: none;
        border-left: 3px solid transparent;
    }
    a.list-group-item:hover{
      border-color: red; 

    }
    .col-md-3{
        margin-top: -20px;
height: 200vh;
background: linear-gradient(#000, #f3f3f3);
    }
</style>