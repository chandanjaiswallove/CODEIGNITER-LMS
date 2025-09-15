<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
   <div class="container mt-4">
      <form method="POST" action="#">

      <div class="mb-3">
        <label class="form-label">Director Name:</label>
        <input type="text" class="form-control" id="directorAdmin" name="directorAdmin" oninput="changetoTitle()">
      </div>

      <div class="mb-3">
        <label class="form-label">Institute Name:</label>
        <input type="text" class="form-control" id="instituteName" name="instituteName" oninput="trimName()">
      </div>      

      <div class="mb-3">
        <label class="form-label">Admin Email:</label>
        <input type="email" class="form-control" id="directorEmail" name="directorEmail">
      </div>

       <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="text" class="form-control" id="adminPassword">
      </div>

      <div class="mb-3">
        <label class="form-label">Contact:</label>
        <input type="number" class="form-control" id="adminContact" name="adminContact" onkeypress="if(this.value.length === 10) return false;">
      </div>

      <div class="mb-3">
        <label class="form-label">Secret UID:</label>
        <input type="text" class="form-control" id="secretUID" name="secretUID" value="<?php echo strtoupper(random_string('alnum',3)); ?>" readonly>
      </div>

      
      <button type="submit" class="btn btn-primary" name="enrollNewAdmin">Submit</button>
    </form>
   </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<script>
  var directorName = document.getElementById('directorAdmin');
  var instName = document.getElementById('instituteName');
  var secretCode = document.getElementById('secretUID');
  var registrationDate = new Date();
  var month = String(registrationDate.getMonth() + 1).padStart(2, '0'); // 01–12
  var year = String(registrationDate.getFullYear()).slice(-2); // last 2 digits

  function trimName()
  {
    instName.value = instName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    secretCode.value = instName.value.substring(instName.value,3).toUpperCase()+"ADM"+month+year;
  }

  function changetoTitle()
  {
    directorName.value = directorName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }
</script>