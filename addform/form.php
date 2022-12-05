<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Addmisson-form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body>



  <div class="container">
    <div class="main">
      <h1>COMMAN ADDMISSON FORM</h1>

      <form action="" method="post" >
        <div class="form-row">
          <div class="col">
            <label for="applicFirstName">Student-Name <span>*</span></label>
            <input type="text" class="form-control input-sm" name="first" id="applicantFirstName"
              placeholder="First name" required>
          </div>
          <div class="col">
            <label for="applicantLastName">Last-Name</label>
            <input type="text" class="form-control" name="last" id="applicantLastName" placeholder="Last name">
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="applicFirstName">Father-Name</label>
            <input type="text" class="form-control" name="f-name" id="applicantFirstName" placeholder="First name">
          </div>
          <div class="col">
            <label for="applicantLastName">Last-Name</label>
            <input type="text" class="form-control" name="l-name" id="applicantLastName" placeholder="Last name">
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="applicFirstName">Mother-Name</label>
            <input type="text" class="form-control" name="m-name" id="applicantFirstName" placeholder="First name">
          </div>
          <div class="col">
            <label for="applicantLastName">Last-Name</label>
            <input type="text" class="form-control" name="la-name" id="applicantLastName" placeholder="Last name">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="mon-nem">Number</label>
            <input type="text" class="form-control" name="mob_num" id="mon-nem" placeholder="Mob-number">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" name="add" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" name="add2" id="inputAddress2"
            placeholder="Apartment, studio, or floor">
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="state" class="form-control">
              <option selected>Choose...</option>
              <option name="state" >Bihar</option>
              <option name="state" >Jharkhand</option>
              <option name="state"  >West-Bangal</option>
              <option name="state" >Delhi</option>
              <option name="state" >Odisa</option>
              <option name="state" >Up</option>
              <option name="state">Punjab</option>
              <option>Rajsthan</option>
              <option>Chattishgarh</option>
              <option>Telgana</option>
              <option>Tamilnadu</option>
              <option>Kerla</option>
              <option>Tripura</option>
              <option>Assam</option>
              <option>Sikkim</option>
              <option>Uttrakhand</option>
              <option>Madhy-Pradesh</option>
              <option>Karnatka</option>
              <option>Meghalay</option>
              <option>Mijorum</option>
              <option>Andhra-Pradesh</option>
              <option>Maharathra</option>
              <option>Jammu-Kashmir</option>
              <option value="">Harayan</option>
              <option value="">Gujarat</option>
              <option value="">Goa</option>
              <option value="">Himachal-Pradesh</option>
              <option value="">Arunachal-Pradesh</option>
              <option value="">Nagaland</option>
              <option value="">Manipur</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" name="zip" class="form-control" id="inputZip">
          </div>
        </div>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" name="check" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>


   <?php
    

  //  $server = "localhost";
  //  $username = "root";
  //  $password = "";
  //  $db = "addmisson-form";
   
  
  //  $con = new mysqli($server, $username, $password, $db);
   $con = new mysqli('localhost', 'root', '', 'addmisson-form');


   
    
   

   if(isset($_POST['submit'])){
    print_r($_POST);
    // $first=$_POST['first'];
    $student_first = $_POST['first'];
    $student_last = $_POST['last'];
    $father_first = $_POST['f-name'];
    $father_last = $_POST['l-name'];
    $mother_first = $_POST['m-name'];
    $mother_last = $_POST['la-name'];
    $email = $_POST['email'];
    $mob_num = $_POST['mob_num'];
    $add1 = $_POST['add'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];


    
    // $sql =   " INSERT INTO `students-details`(`Id-no`, `student_first`, `student_last`, `father_first`, `father_last`, `mother_first`, `mother_last`, `email`, `mob_num`, `add`, `add2`, `city`, `zip`) VALUES 
    // (NULL ,'$student_first','$student_last','$father_first','$father_last','$mother_first','$mother_first','$mother_last','$email','$mob_num','$add1','$add2','$state','$zip')";
    // mysqli_query($con,$sql);

    
    $sql = "INSERT INTO `students-details`(`Id-no`, `student_first`, `student_last`, `father_first`, `father_last`, `mother_first`, `mother_last`, `email`, `mob_num`, `add`, `add2`, `city`, `state`, `zip`) VALUES 
    (NULL ,'$student_first','$student_last','$father_first','$father_last','$mother_first','$mother_last','$email','$mob_num','$add1','$add2','$city','$state','$zip')";
     mysqli_query($con,$sql);


      //  $con=$_POST['submit'];
   }
      
    //    if($con->connect_error){
    //     die("Sorry connection can not be created". $con->connect_error);
    //  }else {
    //   // echo "connected succesfully";
    //   echo $con;
    //  }
   
   
   

  //  INSERT INTO `students-details` (`Id-no`, `student-first`, `student-last`, `father-first`, `father-last`, `mother-first`, `mother-last`, `email`, `number`, `add`,
  //   `add2`, `city`, `state`, `zip`) VALUES ('101', 'abhi', 'kumar', 'dharm', 'sharma', 'anita ', 'devi', 'agayt@gmail.com', 
  //   '1797784455', 'hajipur ,rafiganj', 'aurangbad, bihar', 'rafianj', 'bihar', '824125');


  //  echo "hello"
   ?>


    


  </div>
</body>

</html>