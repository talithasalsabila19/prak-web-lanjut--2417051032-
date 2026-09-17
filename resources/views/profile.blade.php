<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: white;
            
        }

        .profile {
            width: 320px;
            text-align: center;
        }

        .profile-image {
            width: 165px;
            height: 165px;
            border-radius: 50%;
            background-color: #d3d3d3;
            margin: 0 auto 35px;

            display: flex;
            justify-content: center;
            align-items: center;

            border: 1px solid #777;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-info {
            width: 290px;
            margin: 0 auto;
        }

        .info {
            width: 100%;
            height: 48px;
            background-color: #d3d3d3;

            display: flex;
            justify-content: center;
            align-items: center;

            margin-bottom: 20px;

            font-size: 20px;
            color: #111;
        }
    </style>
</head>

<body>

    <div class="profile">

        <div class="profile-image"> <img src="{{ asset('images/foto.png') }}" alt="Profile"></div>

        <div class="profile-info">

            <div class="info">
                {{ $nama }}
            </div>

            <div class="info">
                {{ $kelas }}
            </div>

            <div class="info">
                {{ $npm }}
            </div>

        </div>

    </div>

</body>
</html>