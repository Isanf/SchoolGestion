<!doctype html>
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
                background-color: #00F1FF;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            p{
                background-color: #FFffff; 
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ESTA: GESTION DES VACATIONS
                </div>
                <p>PRESENTATION:<br/>
                Nom : Ecole Sup??rieure des Techniques Avanc??es<br/>
                Sigle : ESTA<br/>
                Autorisation d???ouverture : 2004-125/MESSRS/SG/CNESSP/SP du 5 juillet 2004<br/>
                Adresse postale : 09 BP 384 Ouagadougou 09, Burkina ??? Faso<br/>
                T??l. : (+226) 25 35 56 87/ (+226) 25 50 80 48<br/>
                E-mail : info@esta.bf<br/>
                Site Web : www.esta.bf<br/>
                </p>
                

                <div class="links">
                    <a href="http://localhost:8000/login">Se connecter->></a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
