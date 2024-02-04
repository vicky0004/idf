<?php
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="./image/logo.jpg" type="image/x-icon">
    <title>IDF Userlogin</title>
</head>



<body>
    <div class="bardbox d-flex justify-content-center" style="background-color: #d3e9f9; height:100vh;">
        <div class="card my-auto shadow login-card">
            <div class="card-header text-center  text-white" style="background-color: #A41034;">
                <h2>User Login</h2>
            </div>
            <div class="card-body">
                <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="email" id="email" class="form-control" name="email" required />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password" required />
                    </div>
                    <br>
                    <button  name="btn"  class="btn btn-sm w-100 text-white" style="background-color: #A41034;">Login</button>
                    
                </form>
            </div>
            <div class="card-footer text-end">
                <small>&copy; Instant delivery finder</small>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>

<?php
                    if(isset($_POST['btn'])){
                        //Login
                        session_start();
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $stmt=$con->prepare("select * from users where email= ?");
                            $stmt->bind_param("s",$_REQUEST['email']);
                            $stmt->execute();
                            $stmt_result= $stmt->get_result();
                            if($stmt_result->num_rows > 0){
                                $data= $stmt_result->fetch_assoc();
                               
                                if($data['password']==$_REQUEST['password']){
                                    session_start();
                                    $_SESSION['email']=$_REQUEST['email'];
                                    $_SESSION['loged']=true;
                                    echo '<script type="text/JavaScript"> 
                                    window.location.replace("./dashboard.php");
                                    </script>';
                                }
                                else{
                                    echo '<script type="text/JavaScript"> 
                                    alert("Password not correct..");
                                    </script>';
                                }

                            }
                            else{

                                echo '<script type="text/JavaScript"> 
                                alert("User not found");
                                </script>';
                            }
                        
                        }
                    }
                   
    ?>