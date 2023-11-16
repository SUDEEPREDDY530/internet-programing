<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <style>
            table,th{
                border: solid greenyellow 1px;
            }
        </style>
        <script>

        </script>
    </head>

    <body style="background-color:black; color: greenyellow;">
    <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $servername="localhost";
                $username="root";
                $password="";
                $database="project5";

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `register` (`Fname`, `Lname`, `email`, `pass`, `cpass`) VALUES ('$fname', '$lname', '$email', '$pass', '$cpass')";
                $result = mysqli_query($con,$sql);

                if($result)
                    echo "Inserted!";
                else
                    echo "Couldn't Insert...";
            }
        ?>
        <center>
            <h1>REGISTER HERE!</h1>
            <form action="/IP_Project/register.php" method="POST">
                <table>
                    <tr>
                        <th>
                            First Name :    <input type="text" id="fname" name="fname"><br><br>
                            Last Name :     <input type="text" id="lname" name="lname"><br><br>
                            Register E-mail :    <input type="text" id="email" name="email"><br><br>
                            Password :  <input type="password" id="pass" name="pass"><br><br>
                            Confirm Password :  <input type="password" id="cpass" name="cpass"><br><br>
                                            <input type="submit" id="submit" name="submit">
                                            <input type="button" onclick="homepage()" value="Home">
                        </th>
                    </tr>
                </table>
            </form>
        </center>
       
        <script>
            function homepage(){
                window.location.href = "http://localhost/IP_Project/homepage.html";
            }
            function verify(){
                if(document.getElementById("fname").value==""){
                    alert("First name must not be empty");
                }
                else if(document.getElementById("lname").value==!""){
                    alert("Last name must not be empty")
                }
            }
        </script>
    </body>
    
</html>