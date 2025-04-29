<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ujikom Laravel 11</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif
            background-color: #dde5eb;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh
        }

        .card{
            background: burlywood;
            border-radius: 8px;
            box-shadow: 0 4px 8px rosybrown;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .card h1{
            margin: 0;
            font-size: 1.5em;
            color: firebrick;
        }

        .card p{
            margin: 10px 0 20px;
            color: cadetblue;
        }

        .card a{
            background-color: rgb(0, 103, 110);
            color: aliceblue;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-decoration: none;
        }

        .card a:hover{
            background-color: rgb(9, 40, 70);
        }

    </style>
</head>
<body>
    <div class="card">
        <h1>Lissa Anggraini</h1>
        <p>SMK Tunas Harapan Pati</p>
        <a href="/products">Product</a>
    </div>
</body>
</html>