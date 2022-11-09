<!DOCTYPE html>
<html lang="en">
<head>
    <title>Platform Technologies</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="sunset.jpg" rel="img/icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="code.php" method="post">
            <div class="form-group mb-3">
              <label for="fname">Name</label>
              <input type="text", class="form-control" id="name-input" name="fname" required />
            </div>
            <div class="form-group mb-3">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="create-email-input" aria-describedby="emailHelp" placeholder="Enter email" name="email" required />
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group form-control mb-3">
              <label for="bdate"><strong>Birthday</strong></label><br>
              <input class="mb-3" type="date" id="bdate" name="bdate" placeholder="dd/mm/yyyy" min="1900-01-01" max="2022-12-31" required />
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="Male" required />
                <label aclass="form-check-label" for="gender-male" ><strong>Male</strong></label>
              </div>
              <div class="form-check">
                <input class="form-check-input text-end" type="radio" name="gender" id="gender-female" value="Female" required />
                <label class="form-check-label " for="gender-female"><strong>Female</strong></label>
              </div>   
             </div>
             <button type="submit" value="submit" class="btn btn-success mt-3" name="create">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
        </div>
      </div>
    </div>
  </div>
  
  <!--<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create</h5><br>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="code.php" method="post">
              <div class="mb-3">
                <label for="exampleInputname" class="form-label"><strong>Name</strong></label>
                <input type="name" class="form-control" id="exampleInputEmail1" name="fname" id="fname" aria-describedby="emailHelp" required />
              </div>
              <div class="mb-3">
               <label for="exampleInputemail" class="form-label"><strong>Email</strong></label>
                <input type="email" class="form-control" name="email" id="exampleInputemail" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div><br>
                <div class="form-group form-control">
                  <label for="exampleinput2"><strong>Birthday</strong></label><br>
                  <input type="date" id="start"  name="bdate" placeholder="dd/mm/yyyy" min="1990-01-01" max="2022-12-31" required />
                    <form  method="form-check ">
                      <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" required />
                    <label aclass="form-check-label" for="flexRadioDefault1" >
                     <strong>Male</strong>
                     </label>
                    <input class="form-check-input text-end" type="radio" name="gender" id="flexRadioDefault1" required />
                    <label class="form-check-label " for="flexRadioDefault1">
                    <strong>Female</strong>
                     </label>
                    </form>
                 </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" value="submit" name="create" class="btn btn-success">Submit</button>
            </div>
          </div>
          </form>  
      </div>
    </div>
  </div> -->

  <div class="container mt-5">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="bi bi-plus-circle"></i> Create</button>
    </div>
  </div>
  </div>

  <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-12">
                <div class="shadow p-5 mb-5 bg-body rounded">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                      <tr>
                       <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                </div>
           </div>
    </div>
        
            <?php
            
                require "dbcon.php";
                $query = "SELECT * From tbl_student";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $student)
                    {
                      $current_year = (int) date("Y");
                      $bdate = date_parse($student['bdate']);
                      $age = $current_year - (int)$bdate['year'];

                        ?>
                    <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['fname'];?></td>
                        <td><?php echo $student['bdate'];?></td>
                        <td><?php echo $student['gender']; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td>
                            <form action="code.php" method="post">  
                            <button type="submit" class="btn btn-dark" name="view" value="<?php echo $student['id']; ?>"><i class="bi bi-eye-fill"></i></button>
                                <button type="submit" class="btn btn-primary" name="edit" value="<?php echo $student['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $student['id']; ?>"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                        <?php
                    }
                }
                else
                {
                    echo "<tr><td colspan='6'>No data found.</td></tr>";
                }
            
            ?>
            
        
    </table>

</body>
</html>
