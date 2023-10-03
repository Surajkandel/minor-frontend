<?php include('partials/menu.php') ?>

        <!-- main content section starts -->
        <div class="main-content">
            <div class="wrapper">

           
                <strong>THIS IS HOME PAGE</strong>
                <br><br>
                <?php
                    if(isset($_SESSION['no-login-message-main-admin']))
                    {
                    echo $_SESSION['no-login-message-main-admin'];
                    unset($_SESSION['no-login-message-main-admin']);
                    }
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['username-password-match']; //displaying session message
                        
                    }



                ?>
                <div>

                
                



                </div>
            </div>
        </div>


        <!-- main content section ends -->




        <?php include('partials/footer.php') ?>   