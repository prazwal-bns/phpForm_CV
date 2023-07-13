<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Details Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #290645;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <h1 class="mb-4">Fill up Your Personal Details:</h1>

        <form action="cv.php" method="POST">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="fullName" class="form-control" name="fullName" />
                <label class="form-label" for="fullName">Full name</label>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="gender" class="form-control" name="gender" />
            <label class="form-label" for="gender">Gender</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="companyName" class="form-control" name="companyName" />
            <label class="form-label" for="companyName">Company name</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="education" class="form-control" name="schoolName" />
            <label class="form-label" for="education">School Name:</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="college" class="form-control" name="collegeName" />
            <label class="form-label" for="college">College Name:</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="workExp" class="form-control" name="workExp" />
            <label class="form-label" for="workExp">Work Experience:</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="address" class="form-control" name="address" />
            <label class="form-label" for="address">Address</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="email" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Number input -->
          <div class="form-outline mb-4">
            <input type="number" id="phone" class="form-control" name="phoneNo" />
            <label class="form-label" for="phone">Phone</label>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            <label class="form-label" for="description">Short Description</label>
          </div>

          <!-- <div class="form-outline mb-4">
              <input type="file" id="myImg" name="myImg" />
            </div> -->
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6 image-wrapper mt-5">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Login image" class="w-100"
          style="object-fit: cover; object-position: left" />
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>