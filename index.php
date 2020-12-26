<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 50px;">
<div align="center">
        <h2>Participant Registration Form</h2>
        <h3>December For Charity - Seva 2020</h3>
</div>
</div>

<div class="container well" style="margin-top: 30px;">

        <form method="POST" action="submit.php">
        <label for="inputEmail4">Participant Biodata</label>
        <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="id" placeholder="ID" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="other_name" placeholder="Other Name" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="date_of_birth" placeholder="Date of Birth" required>
            </div>
            <div class="form-group col-md-6">
            <select class="form-control" name="gender" placeholder="Gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
            </div>
            <div class="form-group col-md-12">
            <textarea class="form-control" name="last_visit" placeholder="Last Hospital Visit" required></textarea>
            </div>
        </div>

        <p>&nbsp;</p>
        <label for="inputAddress">Contact Information</label>
        <div class="form-group">
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="region" placeholder="Region" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
            </div>
        </div>

        <p>&nbsp;</p>
        <label for="inputAddress">Vitals</label>
        <div class="form-group">
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="blood_preasure" placeholder="Blood Preasure(mmHg)" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="pulse" placeholder="Pulse(bpm)" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="malaria" placeholder="Malaria Test(MPs)" required>
            </div>
            <div class="form-group col-md-6">
            <p>&nbsp;</p>
            </div>
        </div>

        <p>&nbsp;</p>
        <label for="inputAddress">Body Mass Index(BMI)</label>
        <div class="form-group">
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="weight" placeholder="Weight(Kg)" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="height" placeholder="Height(M)" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" name="bmi" placeholder="BMI(Kg/m2))" required>
            </div>
            <div class="form-group col-md-6">
            <p>&nbsp;</p>
            </div>
        </div>

        <p>&nbsp;</p>
        <label for="inputAddress">Medical Doctor's Notes</label>
        <div class="form-group">
            <div class="form-group col-md-12">
            <textarea class="form-control" name="note" required></textarea>
            </div>
        </div>

        <p>&nbsp;</p>
        <button type="submit" class="btn btn-danger">Submit</button>
        </form>

</div>

</body>
</html>