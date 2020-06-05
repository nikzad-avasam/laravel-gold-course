<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .my-small-text{
              font-size: 20px;
            }
            .heade-menu
            {
              height: 200px;
              width: 100%;
              background: #f3f3f3;
              text-align: center;
              padding-top: 50px;
              font-size: 30px;
              color: #c75e5e;
                }
                footer{
                  height: 100px;
                  background: #000;
                  color: white;
                  text-align: center;
                  padding-top: 25px;

                }
                .menu-main{

                  width: 100%;
                  height: 25px;
                  background-color: #cdd6e6;
                  text-align: center;

                }
        </style>
    </head>
    <body>
      <div class="heade-menu">
          welcome to my laravel gold course
      </div>
      <div class="menu-main">[menu is here]</div>

        @yield('content')
      <footer> copyright for avasam 2020</footer>
  </body>
</html>
