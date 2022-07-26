<?php
$conn = mysqli_connect("localhost","root","","barber");

function registrasi($data){
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $email = $data["email"];
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // Cek User Already Registered
  $result =mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo "<script>
    alert('Username already register.');
    </script>";
    return false;
  }

  if($password !== $password2){
    echo "<script>
      alert('Password Not Same!');
    </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);
  // var_dump($password); die;

  mysqli_query($conn, "INSERT INTO user VALUES('','$username','$email','$password')");
  return mysqli_affected_rows($conn);
}




  ?>