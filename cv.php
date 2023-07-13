<!DOCTYPE html>
<html lang="en">
<!--
I am a passionate individual dedicated to coding and have a deep love for football. My ultimate goal is to become a highly skilled backend web developer. I am driven by the desire to create robust and efficient web applications that power the digital world. With a strong focus on backend development, I strive to master various programming languages, frameworks, and tools to build scalable and secure web solutions.

-->
<style>
  span {
    color: red;
  }
</style>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Site</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #290645;
    }
  </style>
</head>

<body>
  <?php ini_set('display_errors', 0); ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-9">
        <div class="card">
          <img class="card-img-top img-fluid"
            src="https://img.freepik.com/free-photo/handsome-cheerful-man-with-happy-smile_176420-18028.jpg"
            alt="Card image cap" />
          <div class="card-body">
            <center>
              <h1 class="card-title" id="full-name">
                <?php
                $fullName = $_POST['fullName'];
                echo "$fullName";
                ?>
              </h1>
            </center>
            <p class="card-text" id="description">
              <?php
              $description = $_POST['description'];
              echo "$description";
              ?>

            </p>
            <h5>Gender: <span id="gender">
                <?php
                $gender = $_POST['gender'];
                echo "$gender";
                ?>
              </span></h5>
            <h5>
              Works at:
              <span id="companyName">
                <?php
                $companyName = $_POST['companyName'];
                echo "$companyName";
                ?>
              </span>⭐⭐⭐⭐⭐
            </h5>
            <h5>Address: <span id="address">
                <?php
                $address = $_POST['address'];
                echo "$address";
                ?>
              </span></h5>
            <h5>Email: <span id="email">
                <?php
                $email = $_POST['email'];
                echo "$email";
                ?>
              </span></h5>
            <h5>Phone No: <span id="phoneNo">
                <?php
                $phoneNo = $_POST['phoneNo'];
                echo "$phoneNo";
                ?>
              </span></h5>
            <h5>
              School Name: <span id="school">
                <?php
                $schoolName = $_POST['schoolName'];
                echo "$schoolName";
                ?>
              </span>
            </h5>
            <h5>
              College Name:
              <span id="college">
                <?php
                $collegeName = $_POST['collegeName'];
                echo "$collegeName";
                ?>
              </span>
            </h5>
            <h5>Work Experience: <span id="workExp">
                <?php
                $workExp = $_POST['workExp'];
                echo "$workExp";
                ?>
              </span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>