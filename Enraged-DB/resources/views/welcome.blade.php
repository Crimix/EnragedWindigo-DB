<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Enraged Windigo Database API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #011119;
                font-family: 'Raleway', serif;
                font-weight: 100;
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
			
			.text{
				font-size: 40px;
				color: #011119;
			}
			
			.box {
				background-color: #f2f2f2;
				text-align: center;
                width: 1000px;
				padding: 25px;
				margin: 25px;
            }
			
			.sbox {
				background-color: #ffffff;
				text-align: center;
                width: 800px;
				padding: 25px;
				margin: 25px;
            }
			
			.stext{
				font-size: 30px;
				color: #011119;
			}

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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

            <div class="content">
                <div class="title m-b-md">
                    Enraged Windigo Database API
                </div>
				<div class="flex-center">
					<div class="box center text">
						This page serves to inform about the API
						<div class="sbox left stext">
							<p>GET api/user/get/{id}</p>
							Used to retrive information of a user
						</div>
						<div class="sbox right stext">
							<p>POST api/user/post</p>
							body args: name, password
							Used to register a new user
						</div>
						<div class="sbox right stext">
							<p>GET api/api/twitter/get/{id}</p>
							Used to retrive the specified twitter user result
						</div>
						<div class="sbox right stext">
							<p>POST api/twitter/post</p>
							body args: name, twitterID, pol_var, lib_var, protect
							Used to save a twitter user resut a new user
						</div>
					</div>
				</div>
			</div>
        </div>
    </body>
</html>
