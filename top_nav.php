
<th></th><th></th><th></th>
<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
        

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class= "logo" src="/ecom/img/logo.png" style="height:60px; padding-left:2px;">
                <a class="navbar-brand" href="index.php">Innovation Tech </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    
                                        <li>
                        <a href="checkout.php">Checkout</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>

                    <?php
                    if(isset($_SESSION['logged']))
                    {
                        echo "<li><a href=''>".$_SESSION['username']."</a></li>";
                        echo "<li><a href='logout.php'>LOG OUT</a></li>";

                  
                    }
                    else{
                          echo" <li>
                        <a href='logIn1.php'> Login</a>
                    </li>";
                    echo"<li>
                        <a href='regjitrohu1.php'> Register Now</a>
                    </li>";
                     echo"<li>
                        <a href='login.php'>Login ADMIN</a>
                    </li>";
                     echo"<li>
                        <a href='admin'><strong>We are the right choice for your technology solutions</strong></a>
                    </li>";

               
                    } 
                    ?> </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
