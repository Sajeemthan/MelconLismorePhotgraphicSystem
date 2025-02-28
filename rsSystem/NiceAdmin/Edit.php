<?php
    require_once "../Db.php";
        
       
       
        
    if($_SERVER["REQUEST_METHOD"] == 'GET'){

        $studentid = $_GET['id'];
        $qry = "SELECT * FROM gallery WHERE gallery_id =".$studentid;
        $res = $con->query($qry);
        $row = $res->fetch_assoc();

        if(!$row){
            header("Location: image-table.php");
        }
        $ImgOne = $row["ImgOne"];
        $city = $row["City"];
        $payment = $row["Payment"];
        $gender = $row["Gender"];
        $username = $row["Username"];
        $password = $row["Password"];   

    } 
    else{

        $studentid = $_POST["studentid"];    
        $name = $_POST["name"];
        $city = $_POST["city"];
        $payment =$_POST["payment"];
        $gender = "";
        if($_POST["gender"] == 'male'){
            $gender = "male";
        }
        else{
                $gender = "female";
        }
        $username = $_POST["username"];
        $password = $_POST["password"];

        $qry = "UPDATE student SET Student_Name = '".$name."', City = '".$city."', Payment = '".$payment."', Gender = '".$gender."', Username = '".$username."', Password = '".$password."' WHERE Stud_ID =" . $studentid;
        echo $qry;

        $res = $con->query($qry);
        if(!$res){
         die("error");

        }
            
            $msg ="sucess";  
            header("location: view.php?msg=1122");
                    
    }     
    
           
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Student</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

            <div class="d-flex justify-content-center vh-50 align-item-center mt-5 ">
               <div class="card p-5">
                    <h1>Register Here</h1>
                <hr>
            <form action="" method="POST" class="form">
                <input type="hidden" name="studentid" value = "<?php echo $studentid?>">
                    <div class="form-group mb-3">
                <label for="" class="form-lable">Student_Name</label>
                <input type="text" name="name" id="" class="form-control" value="<?php echo $name?>">
                </div>
                <div class="form-group mb-3">
                <label for="" class="form-lable">City</label>
                <input type="text" name="city" id="" class="form-control" value="<?php echo $city?>">
                </div>
                <div class="form-group mb-3">
                <label for="" class="form-lable">Payment</label>
                <input type="text" name="payment" id="" class="form-control" value="<?php echo $payment?>">
                </div>
                <div class="form-group mb-3 mt-3">
                        <?php if($gender == 'male') {  ?>
                    <input type="radio" name="gender" id="" value="male" checked>
                    <label for="" class="form-lable" >Male</label>
                    <input type="radio" name="gender" id=""value="female">
                    <label for="" class="form-lable" >Female</label>

                        <?php } else { ?>
                    <input type="radio" name="gender" id="" value="male" >
                    <label for="" class="form-lable" >Male</label>
                    <input type="radio" name="gender" id=""value="female" checked>
                    <label for="" class="form-lable" >Female</label>
                         <?php }  ?>

                </div>
                <div class="form-group mb-3">
                <label for="" class="form-lable">UserName</label>
                <input type="text" name="username" id="" class="form-control" value="<?php echo $username?>">
                </div>
                <div class="form-group mb-3">
                <label for="" class="form-lable">Password</label>
                <input type="password" name="password" id="" class="form-control" value="<?php echo $password?>">
                </div>
                <input type="submit" value="Update" class="btn btn-sm btn-primary w-100">
                <a href="view.php" class="btn btn-success w-100 mt-2">Customer Details</a>
            </form>
             

               </div> 
                
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <?php
        
        if($msg == "1122"){
            
           echo" <script>
            Swal.fire({
                title: 'Save Sucessfully!',
                text: 'You clicked the button!',
                icon: 'success'
              });</script>";
        }
        
        ?> 
    </body>
</html>
