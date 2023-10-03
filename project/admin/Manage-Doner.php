<?php include('partials/menu.php') ?>

        <!-- main content section starts -->
        <div class="main-content">
            <div class="wrapper">
                <strong>THIS IS doner PAGE</strong>
                <!-- <br><br>
                <div><a href="#" class="btn-primary">Add Doner</a></div>
                <br> -->
                <div class="whole">
                    <table class = "tbl">
                        <tr>
                            <th>S.N</th>
                            <th>ID</th>
                            <th>Phone Number</th>
                            <th>Age</th>
                            <th>Blood Type</th>
                            <th>Disease</th>
                            <th>Additional Message</th>
                            <th>action</th>
                        </tr>
                        <?php

                //create sql to get the information of doner from database table
                $sql = "SELECT * FROM tbl_doner";

                //Execute the query
                $res = mysqli_query($conn, $sql);

                //check weather the query is executed or not
                if($res==true)
                {
                    //count the number of rows to check the number of datas
                    $count = mysqli_num_rows($res);

                    // initilizing the value for serialno (sn)
                    $sn=1;

                    // get the values from the rows 
                    if($count>0)
                    {
                        //use loop to get all the data from database
                        while($rows = mysqli_fetch_assoc($res))
                        {

                            // get individual data
                            $id = $rows['id'];
                            $phonenumber = $rows['Phone_number'];
                            $age = $rows['Age'];
                            $bloodtype = $rows['Blood_type'];
                            $disease = $rows['Disease'];
                            $additionalmessage = $rows['Additional_message'];
                            
                            
                            

                            //dispaly the value in the table
                            ?>
                            <tr>
                                <td><?php echo $sn++?></td>
                                <td><?php echo $id?></td>
                                <td><?php echo $phonenumber ?></td>
                                <td><?php echo $age ?></td>
                                <td><?php echo $bloodtype ?></td>
                                <td><?php echo $disease?></td>
                                <td><?php echo $additionalmessage?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/accept-request.php?id=<?php echo $id;?>" class= "btn-secondary">Accept</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-request?id=<?php echo $id;?>" class= "btn-danger">Delete </a>
                                </td>
                               


                            </tr>
                            <?php

                        }
                    }
                    else{
                        //no data in database
                    }
                }


                ?>


                        


                       
                        
                        
                    </table>

                </div>
            </div>
        </div>


        <!-- main content section ends -->

<?php include('partials/footer.php') ?>

        

        