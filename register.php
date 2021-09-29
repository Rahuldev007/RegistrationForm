<?php include('partial-font/menu.php'); ?>
<?php 
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
?>

    <div align="center">

        <form action="" method="post" enctype ="multipart/form-data">

            <table border="0" class="card">
                    <tr>
                        <td><img src="images/logo2.png" class="logo"></td>
                        <td colspan="3" class="heading">
                            <p class="header">Sagarmala Institute Of Technology</p>
                            <strong class="strong">
                                Affiliated to Kurukshetra University
                                <br>
                                panchkula-11, Ambala, India
                                <br>
                                <br>
                                Web: <a href="#" target="_blank">www.PG.edu.np</a>
                                Mail: <a href="#" target="_blank">info@PG.edu.np</a>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="seperation"></div>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2 class="tophead tophead-color">Online Admission Registration Form</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Student's Name <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="text" name="studentname" placeholder="Enter Full Name" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Father's Name <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="text" name="fathername" placeholder="Enter Name" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Mother's Name <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="text" name="mothername" placeholder="Enter Name" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Date Of Birth <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="date" name="dob" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Gender <span style="color: Red">*</span> :</td>
                        <td>
                            <select name="gender" required class="textdesign">
                                <option value="-------Select-------">-------Select-------</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Transgender">Transgender</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Nationality <span style="color: Red">*</span> :</td>
                        <td>
                            <select name="nationality" required class="textdesign">
                                <option value="0">-------Select-------</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Indian">Indian</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Mobile(10 Digit) <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="number" name="mobileno" placeholder="Enter Valid Mobile Number" maxlength="10" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">E-Mail <span style="color: Red">*</span> :</td>
                        <td>
                            <input type="email" name="email" placeholder="Enter your email" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Temporary Address :</td>
                        <td>
                            <input type="text" name="wardno1" placeholder="Ward No." required class="textdesign">
                        </td>
                        <td>
                            <input type="text" name="city1" placeholder="City/Tole" required class="textdesign">
                        </td>
                        <td>
                            <input type="text" name="district1" placeholder="District/Sate" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Permanent Address <span style="color: Red">*</span>:</td>
                        <td>
                            <input type="text" name="wardno2" placeholder="Ward No." required class="textdesign">
                        </td>
                        <td>
                            <input type="text" name="city2" placeholder="City/Tole" required class="textdesign">
                        </td>
                        <td>
                            <input type="text" name="district2" placeholder="District/State" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Qualification <span style="color: Red">*</span> :</td>
                        <td>
                            <select name="education" required class="textdesign">
                                <option value="0">Select Education</option>
                                <option value="10+2">+2</option>
                                <option value="Diploma">Diploma</option>
                                <option value="A-Level">A-Level</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="grade" placeholder="Grade/Div" required class="textdesign">
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Applying For <span style="color: Red">*</span>:</td>
                        <td>
                            <select name="program" class="textdesign" required>
                                <option value="0">Select Program</option>
                                <option value="Civil">Civil</option>
                                <option value="Computer">Computer</option>
                                <option value="Architecture">Architecture</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="tbl_title">Photo <span style="color: Red">*</span>:</td>
                        <td>
                            <input type="file" name="picture" class="textdesign"  required>
                        </td>
                    </tr>
            </table>

            <tr>
                <td colspan="6">
                    <input type="checkbox" name="checkbox" class="checkbox">I agree to accept all Terms & Conditions<a style="color: blue; font-size: 15px" href="#" target="_blank">Read</a>
                </td>
            </tr>
            <br><br>

                <input type="submit" name="submit" value="Register" class="register">
                <input type="reset" name="reset" value="Reset" class="reset">
        </form>
    </div>

<?php include('partial-font/footer.php'); ?>

<?php
    if(isset($_POST['submit']))
    {
        // echo "button clicked";

        //1. get data from form
        $studentname =trim(ucfirst($_POST['studentname']));
        $fathername =trim(ucfirst($_POST['fathername']));
        $mothername =trim(ucfirst($_POST['mothername']));
        $dob =$_POST['dob'];
        $gender =$_POST['gender'];
        $nationality=trim(ucfirst($_POST['nationality']));
        $mobileno =trim($_POST['mobileno']);
        $email =trim($_POST['email']);
        $wardno1 =trim($_POST['wardno1']);
        $city1 =trim(ucfirst($_POST['city1']));
        $district1 =trim(ucfirst($_POST['district1']));
        $wardno2 =trim($_POST['wardno2']);
        $city2 =trim(ucfirst($_POST['city2']));
        $district2 =trim(ucfirst($_POST['district2']));
        $education =trim(ucfirst($_POST['education']));
        $grade =trim($_POST['grade']);
        $program =trim(ucfirst($_POST['program']));
        $imagename =trim($_FILES['picture']['name']);
        

        //2. upload the image if selected
        //Check wheather the image is selected or not and set the value for image name accordingly
        if(isset($_FILES['picture']['name']))
        {
            //upload the image
            //Get the details of selected image
            $imagename = $_FILES['picture']['name'];

            //check wheather the image is selected or not and upload image if selected
            if($imagename!="")
            {
                $source_path = $_FILES['picture']['tmp_name'];

                $destination_path = "admin/student-pic/".$imagename;

                //finally upload image
                $upload = move_uploaded_file($source_path,$destination_path);
                
                $date=date("m/d/Y");
                
                //check wheather the image is uploaded or not
                //and if the image is not uploaded then we will stop the proces and redirect with the error message
                if($upload==false)
                {
                    //failed to upload the image and set message
                    $_SESSION['upload'] = "<div class='error'>Failed To upload Image</div>";
                    //Redirect to add category page
                    // header('location:'.SITEURL.'register.php');

                    // Then we will stop the prcess
                    die();
                }
            }        
        }
        else
        {
            
            //Don't upload the image and set the image name value as blank
            $imagename ="";
        }

        //3. insert into database
        $sql = "INSERT INTO tbl_registration SET
        student_name='$studentname',
        father_name='$fathername',
        mother_name='$mothername',
        dob='$dob',
        gender='$gender',
        nationality='$nationality',
        mobileno='$mobileno',
        email='$email',
        ward1='$wardno1',
        city1='$city1',
        state1='$district1',
        ward2='$wardno2',
        city2='$city2',
        state2='$district2',
        education='$education',
        grade='$grade',
        program='$program',
        photo='$imagename',
        date='$date'

        ";
       

        //execute query
        $res = mysqli_query($conn,$sql);

        //check wheather data inserted or not
        if($res==TRUE)
        {
            // data inserted successfully
            $_SESSION['add'] = "<div class='success'>Registration is Successfull.</div>";
        }
        else
        {
            //failed to insert the data
            echo "failed to insert data to db";
        }
    }
?>
