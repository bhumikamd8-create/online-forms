<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background: linear-gradient(135deg, #84fab0, #8fd3f4);
            height: 100vh;
            margin: 0;
        }
        .box {
            width: 420px;
            padding: 25px;
            margin: 80px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            background: -webkit-linear-gradient(#36d1dc, #5b86e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        span {
            font-weight: bold;
            color: #0077b6;
        }
    </style>
</head>

<body>
<div class="box">
    <h2>✔ Registration Details</h2>

    <p>Name: <span><?php echo $_POST['name']; ?></span></p>
    <p>Email: <span><?php echo $_POST['email']; ?></span></p>
    <p>Phone: <span><?php echo $_POST['phone']; ?></span></p>
    <p>Course: <span><?php echo $_POST['course']; ?></span></p>
</div>
</body>
</html>
