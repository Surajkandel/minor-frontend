<?php 
    include('../config/constants.php');
    include('login-check2.php');
?>


<html>
    <head>
        <title>
            Blood bank management system - Home page
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        
        <!-- menu section starts -->
        <div class="menu">
            <div class="wrapper">


                <?php
                      if(isset($_GET['id'])){
                        $id = $_GET['id'];

                    }
                ?>


                <ul>
                    <li> <a href="index.php?id=<?php echo $id?>">Home</a></li>
                    <li> <a href="Manage-Admin.php?id=<?php echo $id?>">Admin</a></li>
                    <li> <a href="Manage-Clients.php?id=<?php echo $id?>">Clients</a></li>
                    <li> <a href="Manage-Doner.php?id=<?php echo $id?>">Doner</a></li>
                    <li> <a href="Manage-Patient.php?id=<?php echo $id?>">Patient</a></li>
                    <li> <a href="Manage-Notice.php?id=<?php echo $id?>">Notice</a></li>
                    <li> <a href="../logout.php?">Log out</a></li>
                </ul>
            </div>
        </div>



        <!-- menu section ends -->