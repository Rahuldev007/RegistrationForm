<?php

include('../config/constants.php');

//First get id of registred data to be deleted
$id = $_GET['id'];

//sql query to delete registration
$sql = "DELETE FROM tbl_registration WHERE id =$id";

//Execute query
$res = mysqli_query($conn,$sql);

if($res==TRUE)
{
    //query executed
    // echo "registration deleted";

    //Create session variable to display message
    $_SESSION['delete'] = ' <div class="success">
                               Registration deleted Successfully
                            </div>';

    //Redirect to manage food page
    header('location:'.SITEURL.'admin/manage-registration.php');
}
else
{
    //query not executed
    // echo "registration not deleted";

    //Create session variable to display message
    $_SESSION['delete'] = ' <div class="error">
                                Requested Registration not deleted
                            </div>';

    //Redirect to manage food page
    header('location:'.SITEURL.'admin/manage-registration.php');
}


?>