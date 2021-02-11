<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานท้ายการทดลอง</title>
    <style>
    body {
        margin-top: 60px;
        border: 2px solid red;
        border-radius: 12px;
        background-color: lightgrey;
        width: 300px;
        border: 15px solid green;
        padding: 50px;
        margin: 20px;
        text-align: center;
    }
    .box input{
        margin-top: 30px;
    }
    
    </style>
</head>
<body>
    <form name="form1" method="get" action="/sendbasicemail">
        <div>
            <h1>Welcome to lab 3SB03</h1>
            <h2> งานท้ายการทดลอง </h2>
            <h3>By Name: Naruedom Saeaio</h3>
            <h3>Student ID: 6135512050</h3>

            <div class ="box">
            <br>
                Enter your name <input type="name" name="name" require>
            </br>
            <br>
                Enter your email <input type="email" name="email" require>
            </br>
            <br>
                Enter your subject <input type="subject" name="subject" require>
            </br>
            <br>
                Enter your text <textarea name="message"  cols="30" rows="10" require></textarea>
            </br>
            </div>

            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset" style="margin-left: 50px;">
            </div>  
        </div>
    </from>
</body>
</html>