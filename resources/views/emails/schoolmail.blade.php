<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <style>
     .quiz-report{
            width: 600px;
            height: 100vh;
            position: relative;
        }
        .top-logo{
            width:100%;
            margin-top: 13px;
            height: 10vh;            
        }
        .left-logo{
            width: 50%;
            float: left;
        }
        .top-logo img {
            height: 50px;
            width: 90px;
        }
        .right-logo {
            width: 50%;
            float: right;
                                 
        }
        .mail_body{
            margin-top:20px;
            width:100%;
            height: 30vh;
            background: white;            
        }
        .mail_body h3{
            margin-top: 20px;
        }
        .mail_footer{
            width:100%;
            height: 10vh;
            background: white;
        }

  </style>

</head>
<body>


  <div class="quiz-report">
  <div class="top-logo">
    <div class="left-logo">
    <img src="https://www.geetauniversity.edu.in/wp-content/uploads/2022/07/GU-Logo-768x349-1-removebg-preview.png" alt="">
    </div>
    <div class="right-logo">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjA3H0yTWgL7JpcEuaT5hVMToBNAAtXlUyv2KUK5vFZQ&s" alt="">
    </div>
    </div>
    <div class="mail_body">
    	<h3>Dear {{$details['name']}}</h3>
        <p>Thanks for applying Geeta University Test.</p>
        <p>You can start your test by directly login using below link: <br> <a href="https://gportal.geeta.edu.in/school-student-login">Login Here</a></p>
        <p>Use the following credentials for login:</p>
        <p><b>Email</b> - {{$details['email']}}</p>
		<p><b>Password</b> - {{$details['password']}}</p>
        
        <p>For any queries kindly contact on the following number: <a href="tel:9896803571"><b>+91 9896803571</b></a></p>
        
    </div> 
    <div class="mail_footer">
    <p>Thanks !<br>
	Geeta Technical Hub <br>
	Geeta University
    </p>
    </div>
  </div>


</body>
</html>
