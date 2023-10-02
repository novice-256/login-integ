<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Black background color */
            color: #fff; /* White text color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(7, 0, 4, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px white;
            text-align: center;
            display: flex;
            flex-direction: column;
            margin-top: 2%;
            border: 2px solid white; /* Red border */
        }

        h1 {
            color: #fff; /* White text color */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            color: rgb(26, 26, 26) /* White text color on hover */
        }

        .google-button {
            background-color: #fff; /* White button background */
            color: #000; /* Black text color */
            
            background-image: none; /* Remove any background image */
        }

        .facebook-button {
            background: #2f55a4;
            color: #fff; /* White text color */
            background-image: none; /* Remove any background image */
        }

        /* Facebook Theme */
        .facebook-button:hover {
            background: #3b5998;
        }

        /* Google Theme */
        .google-button:hover {
            background-color: (255, 255, 255)
            color: #fff; /* White text color */

        }

        .alert-box {
            border-radius: 5px;
            text-align: center;
            position: relative;
            left: 10%;
            width: fit-content;
            padding: 2% 5%;
            
            height: max-content;
            z-index: 9999;
            box-shadow: 0px 0px 10px red;
            border: 2px solid red; /* Red border */

        }
        .alert-box p{
padding-top:2%
        }
        .alert-box i{
        position: absolute;
        top :0 ;
        right:0
    }
        /* Style for the close button */
        .close-btn {
            color: #fff; /* White close button */
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
        }

        /* Icon styles */
        .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php include('config.php') ?>
    <div class="container">
    <?php
    if (isset($_GET['msg'])): 
        $message = $_GET['msg'];?>
        <div class="alert-box">
                <span class="close-btn" onclick="closeAlert()"><i class="fas fa-times"></i></span>
                <p><?=htmlspecialchars($message) ?> </p>
              </div>
    <?php
    endif
    ?>
        <h1>Login</h1>
        <p>Log in with your social media account:</p>
        <a href='<?= $google_client->createAuthUrl()?>' class="button google-button">
            <i class="fab fa-google icon"></i> Login With Google
        </a>
        <a href="#" class="button facebook-button">
            <i class="fab fa-facebook icon"></i> Login with Facebook
        </a>
    </div>
    <!-- JavaScript to close the alert box -->
    <script>
        function closeAlert() {
            var alertBox = document.querySelector('.alert-box');
            alertBox.style.display = 'none';
        }
    </script>
</body>
</html>
