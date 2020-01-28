<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tugas Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #001f21;
                color: #b8dbff;
                font-family: 'Bangers', cursive;
                font-weight: 200;
                margin: 0;
            }

            h1{
                font-size: 40px;
                letter-spacing: 20px;
                text-decoration: underline;
            }

            p{

            }

            table {
                padding: 0px 80px;
                margin-left: 50px;
                width: 100%;
                letter-spacing: 7px;
                text-align: left;
            }

            td {
                width: 50%;
                font-size: 20px;
            }

            .full-height {
                height: 100%;
            }

            .top-center {
                display: flex;
                justify-content: center;
                margin-top: 30px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
                letter-spacing: 15px;
                text-decoration: underline;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="top-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    - Tugas  1  Laravel -
                </div>

                <div>
                    <img src="{{ ('img/pp.jpg') }}" style="width: 450px; margin-top: 30px; border: 5px solid black">
                </div>

                <div>
                    <h1>BIODATA</h1>
                    <table>
                        <tr>
                            <td style="width: 30%">Nama</td>
                            <td  style="width: 70%">:  Achmad Arya D. L.</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">TTL</td>
                            <td  style="width: 70%">:  Sragen, 11 Mei 1999</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Asal</td>
                            <td  style="width: 70%">:  Sidoarjo</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Email</td>
                            <td  style="width: 70%">:  achmadarya@gmail.com</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Pendidikan</td>
                            <td  style="width: 70%">:  D3 Teknologi Informasi, UB</td>
                        </tr>
                    </table>
                </div>

            
            </div>
        </div>
    </body>
</html>
