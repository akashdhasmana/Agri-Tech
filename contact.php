
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .contact {
            height: 100vh;
            background-color: #006f83;
            color: white;
        }

        .text-center {
            text-align: center;
            padding: 30px;
            font-family: system-ui;
            font-size: 36px;
        }

        .btn {
            margin: auto;
            padding-right: 29px;
            margin: 10px 3px;
            padding: 12px 20px;
            border: 2px solid white;
            border-radius: 8px;
            margin-left: 212px;
            background: none;
            color: white;
            cursor: pointer;
        }

        .form {
            max-width: 500px;
            margin: auto;

        }

        .form-input {
            padding: 5px 3px;
            width: 100%;
            font-size: 19px;
            border: 2px solid grey;
            border-radius: 6px;
            margin: 20px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .home{
            padding:20px;
            font-size:18px;
            text-align:center;
        }
        .home a{
            text-decoration:underline;
            color:white;
            font-weight:bold;
        }
    </style>
</head>

<body>
    </section>
    <form action="/mysite/user_process.php" method="post" name="user">
    <section class="contact">
        <h2 class="text-center">Contact Us</h2>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter your phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter your email">
            <textarea class="form-input" name="message" id="message" placeholder="Elloborate your concern" cols="10"
                rows="5"></textarea>
            <button class="btn" name="btn-send">Submit</button>
        </div>
        <p class="home">Return to <a href="mysite.html"> Home</a></p>
    </form>
    </section>
</body>

</html>