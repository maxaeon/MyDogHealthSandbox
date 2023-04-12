<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Condition</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-SSlL99sDpE+1sG+nCoyv/QOFeDnX9zPbZpHtWkEZtRgFtWTwGhJq3rW2ptjQYafX9xlNcQ8zLWzs82vAVNUnyA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
​
<body>
​ 
  <!-- header part start -->
  <section id="header">
    <div class="hamburger-menu">
      <button class="hamburger-toggle"><a href="menu.html">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span></a>
      </button>
    </div>
  </section>
  <!-- header part end -->
​
  <section class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <img src="images/condition.png" class="rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <h6> My Dog's Conditions</h6>
        </div>
      </div>
    </div>
  </section>
 
 <section>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="info">
              <div class="text-center">
<fieldset>
<legend>Add Condition</legend>
<form name="frmCondition" method="post" action="condition-create.php">

<p>
<label for="fldconditionName">Condition Name</label>
<input type="text" class="form-control" name="txtconditionName" id="txtconditionName">
</p>
<p>
  <label for="fldconditionDateDiagnosed">Date Diagnosed</label>
  <input type="date" class="form-control" name="txtconditionDateDiagnosed" id="txtconditionDateDiagnosed">
  </p><p>
    <label for="fldconditionDoctor">Doctor</label>
    <input type="text" class="form-control" name="txtconditionDoctor" id="txtconditionDoctor">
    </p><p>
      <label for="fldconditionTreatment">Treatment Plan</label>
      <input type="text" class="form-control" name="txtconditionTreatment" id="txtconditionTreatment">
      </p><p>
        <label for="fldconditionPrognosis">Prognosis</label>
        <input type="boolean" class="form-control" name="txtconditionPrognosis" id="txtconditionPrognosis">
        </p><p>
          <label for="fldconditionNotes">Notes</label>
          <input type="text" class="form-control" name="txtconditionNotes" id="txtconditionNotes">
          </p>
          <p><label for="fldconditionDog">Dogs with this Condition</label>
          <input type="text" class="form-control" name="txtconditionDog" id="txtconditionDog">
        
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</div>
</div>
</div>
</div>
</section>

<section>
  <div class="row m-0">
    <div class="col-lg-3 bottom-btn">
        <a href="welcome.php">
          <div class="text-center">
            <img src="images/pawprinticon.png" class="rounded pt-3" alt="...">
          </div>
        </a>
    </div>
    <div class="col-lg-3 bottom-btn">
      <a href="appointment-view.php">
        <div class="text-center">
          <img src="images/appointment.png" class="rounded" alt="...">
        </div>
      </a>
  </div>
  <div class="col-lg-3 bottom-btn">
    <a href="veterinarian-view.php">
      <div class="text-center">
        <img src="images/veterinarian.png" class="rounded" alt="...">
      </div>
    </a>
</div>
<div class="col-lg-3 bottom-btn">
  <a href="Resources.html">
    <div class="text-center">
      <img src="images/add.png" class="rounded" alt="...">
    </div>
  </a>
</div>
  </div>
</section>
​
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
