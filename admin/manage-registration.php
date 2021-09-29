
<?php include('partial-back/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Registration</h1>
        <br>

        <?php

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

        ?>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Student's Name</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Education</th>
                <th>Applying For</th>
                <th>Photo</th> 
                <th>Actions</th>   
            </tr>

            <?php

                //Query to get data from database
                $sql = "SELECT * FROM tbl_registration";

                //execute query
                $res = mysqli_query($conn,$sql);

                // count the rows
                $count = mysqli_num_rows($res);

                //create sn. variable and assign value as 1
                $sn = 1;

                // check wheather we have data in database or not
                if($count>0)
                {
                    //we have data in database
                    // Get the data and display
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id= $row['id'];
                        $studentname=$row['student_name'];
                        $mobileno=$row['mobileno'];
                        $email = $row['email'];
                        $education = $row['education'];
                        $applying = $row['program'];
                        $imagename=$row['photo'];

                        ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $studentname; ?></td>
                                <td><?php echo $mobileno; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $education; ?></td>
                                <td><?php echo $applying; ?></td>
                                <td>
                                    <?php 
                                        //check wheather we have image or not
                                        if($imagename!="")
                                        {
                                            //Display Image
                                            ?>

                                                <img src="<?php echo SITEURL; ?>admin/student-pic/<?php echo $imagename;  ?>" width="100px">

                                            <?php
                                        }
                                        else
                                        {
                                            //Display message
                                            echo "<div class='error'>Image not Added.</div>";
                                        }

                                    ?>
                                </td>
                                <td>
                                    <a href="#" class="btn-secondary">Confirm Registration</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-registration.php?id=<?php echo $id; ?>" class="btn-danger">Delete Registration</a>
                                </td>
                            </tr>  
                        <?php  
                    }
                }
                else
                {
                    // we do not have data in database
                    // we will disolay the message inside the table
                    ?>

                    <tr>
                        <td colspan="8"><div class="error">Student Not Registered Yet.</div></td>
                    </tr>

                    <?php
                }
            ?>            
        </table>
        <div class="clearfix"></div>
    </div>    
</div>    


<?php include('partial-back/footer.php'); ?>
