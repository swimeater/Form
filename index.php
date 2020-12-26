<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
  min-height: 100vh;

  background-color: #FFE53B;
  background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);
}
    </style>

</head>
<body>
<?php
ini_set('display_errors', 'Off'); // todo: resolve last insert ID error

$servername = "localhost";
$database = "ngo";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['id']))
$sql = "select * from tbl_info where no='$_GET[id]'";
$r = mysqli_query($conn, $sql);
$a=mysqli_fetch_array($r);

$first_name =  $a['first_name'];
$last_name =  $a['last_name'];
$other_name =  $a['other_name'];
$date_of_birth =  $a['date_of_birth'];
$gender =  $a['gender'];
$last_hospital_visit =  $a['last_hospital_visit'];
$address =  $a['address'];
$city =  $a['city'];
$region =  $a['region'];
$phone_number =  $a['phone_number'];
$blood_preasure =  $a['blood_preasure'];
$pulse =  $a['pulse'];
$malaria_test =  $a['malaria_test'];
$weight =  $a['weight'];
$height =  $a['height'];
$bmi =  $a['bmi'];
$note =  $a['note'];
$mosquito_net =  $a['mosquito_net'];




?>

    <div class="main">
        <div align="center">
            <h2>Participant Registration Form</h2>
            <h3>December For Charity - Seva 2020</h3>
            <p>
                <a href="view.php" class="loginhere-link">View Records</a>
            </p>

    </div>
    
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="submit.php<?php if(isset($_GET['id'])){echo '?id='.$_GET['id'];} ?>">
                        <!-- <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <label for="inputEmail4">Participant Biodata</label>
                        <div class="form-row">
                        <!-- <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="id" placeholder="ID" >
                            </div> -->
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="first_name" placeholder="First Name" <?php if(isset($first_name)){echo 'value="'.$first_name.'"';} ?> >
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="last_name" placeholder="Last Name"<?php if(isset($last_name)){echo 'value="'.$last_name.'"';} ?> >
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="other_name" placeholder="Other Name"<?php if(isset($other_name)){echo 'value="'.$other_name.'"';} ?> >
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="date_of_birth" placeholder="Date of Birth"<?php if(isset($date_of_birth)){echo 'value="'.$date_of_birth.'"';} ?> >
                            </div>
                            <div class="form-group col-md-6">
                            <select class="form-input" name="gender" placeholder="Gender" >
                            <option value="">Select Gender</option>
                            <option value="Male" <?php if (isset($gender) && $gender=='Male') echo "selected"; ?>>Male</option>
                            <option value="Female" <?php if (isset($gender) && $gender=='Female') echo "selected"; ?>>Female</option>
                            </select>
                            </div>
                            <div class="form-group col-md-12">
                            <textarea class="form-input" name="last_visit" placeholder="Last Hospital Visit"><?php if(isset($last_hospital_visit)){echo $last_hospital_visit;} ?></textarea>
                            </div>
                        </div>
                
                        <p>&nbsp;</p>
                        <label for="inputAddress">Contact Information</label>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="address" <?php if(isset($address)){echo 'value="'.$address.'"';} ?>placeholder="Address" >
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="city" placeholder="City" <?php if(isset($city)){echo 'value="'.$city.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="region" placeholder="Region" <?php if(isset($region)){echo 'value="'.$region.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="phone" placeholder="Phone Number" <?php if(isset($phone_number)){echo 'value="'.$phone_number.'"';} ?>>
                            </div>
                        </div>
                
                        <p>&nbsp;</p>
                        <label for="inputAddress">Vitals</label>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="blood_preasure" placeholder="Blood Preasure(mmHg)" <?php if(isset($blood_preasure)){echo 'value="'.$blood_preasure.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="pulse" placeholder="Pulse(bpm)" <?php if(isset($pulse)){echo 'value="'.$pulse.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="malaria" placeholder="Malaria Test(MPs)" <?php if(isset($malaria_test)){echo 'value="'.$malaria_test.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <p>&nbsp;</p>
                            </div>
                        </div>
                
                        <p>&nbsp;</p>
                        <label for="inputAddress">Body Mass Index(BMI)</label>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="weight" placeholder="Weight(Kg)" <?php if(isset($weight)){echo 'value="'.$weight.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="height" placeholder="Height(M)" <?php if(isset($height)){echo 'value="'.$height.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="bmi" placeholder="BMI(Kg/m2))" <?php if(isset($bmi)){echo 'value="'.$bmi.'"';} ?>>
                            </div>
                            <div class="form-group col-md-6">
                            <p>&nbsp;</p>
                            </div>
                        </div>
                
                        <p>&nbsp;</p>
                        <label for="inputAddress">Medical Doctor's Notes</label>
                        <div class="form-group">
                            <div class="form-group col-md-12">
                            <textarea class="form-input" name="note" ><?php if(isset($note)){echo $note;} ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                            <select class="form-input" name="mosquito_net" placeholder="mosquito_net" >
                            <option value="">Took Net</option>
                            <option value="Yes" <?php if (isset($mosquito_net) && $mosquito_net=='Yes') echo "selected"; ?>>Yes</option>
                            <option value="No" <?php if (isset($mosquito_net) && $mosquito_net=='No') echo "selected"; ?>>No</option>
                            </select>
                            </div>
                        </div>

                
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>