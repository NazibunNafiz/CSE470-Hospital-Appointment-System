<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php require_once('include/session.php') ;?>
<?php require_once('include/header.php') ;?>

<main role="main" class="container">
  <div class="jumbotron mt-5">
    <h1>Welcome</h1>
	<h2>Your Privilege is Our Concern</h2>
    <p class="lead">General Hospital</p>
    <a class="btn btn-primary" href="model/appointments.php" role="button">Appointment List </a>
   <a class="btn btn-primary" href="model/doctors.php" role="button">Doctor List</a>
  </div>
</main>

<?php require_once('include/footer.php') ;?>