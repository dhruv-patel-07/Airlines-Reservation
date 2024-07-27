<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    {{-- <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="Navbar_style.css"> --}}
    <title>Responsive Nav</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
    
        }
        li {
            list-style: none;
        
        }
        /*Início das configurações da header*/
        header {
            width: 100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-family: sans-serif;
            /* position: sticky;
            top: 0; */
             /* background-color: #f1c40f; */
             /* position: -webkit-sticky;  
             /* // required for Safari */
            /* position: sticky; */
             /* top: 0;   */
             /* // required as well. */
             background-color: rgb(14, 8, 8);
            /* background-color: black;  */
        
        }
        .brand {
            width: auto;
            height: 100%;
            float: left;
            margin: 0 0 0 5%;
            color: whitesmoke;
        }
        /*Início das configurações da Navigation*/
        .menu {
            width: 60%;
            height: 100%;
            float: right;
        }
        .menu ul {
            width: 100%;
            height: inherit;
            margin: 0;
            /* float:right; */
            padding: 0;
            display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
            display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
            display: -ms-flexbox;      /* TWEENER - IE 10 */
            display: -webkit-flex;     /* NEW - Chrome */
            display: flex;  
            margin-left: 350px;           /* NEW, Spec - Opera 12.1, Firefox 20+ */
        }
        .menu ul a {
            width: 20%;
            /* float:right; */
            height: inherit;
            /* color: #222; */
            color: white;
            display: inline-block;
            /* font-size: 18px; */
        }
        .menu ul a:hover {
            background-color: #222;
            color: rgb(228, 114, 114);
        }
        #menuToggle {
            display: none;
        }
        .menu-icon {
            display: none;
        }
        .brand{
                font-size: 22px;
            }
        .a{
            color: rgba(236, 22, 22, 0.9);
        }
        /*Início das configurações da Navigation com dispositivos < 768px*/
        @media screen and (max-width: 768px) {
            .menu {
                width: 100%;
                height: auto;
            }
            .menu ul {
                display: block;
                max-height: 0;
                overflow: hidden;
                -webkit-transition: max-height 0.3s;
                -moz-transition: max-height 0.3s;
                -ms-transition: max-height 0.3s;
                -o-transition: max-height 0.3s;
                transition: max-height 0.3s;
                /*Para fazer com que o menu saia da esquerda, você deve trocar max-height por max-width*/
                /*Para fazer com que o menu saia da direita, você deve trocar max-height por max-width e setar float: right*/
            }
            .menu ul a {
                text-align: left;
                width: 100%;
                height: 50px;
                background-color: rgb(26, 23, 23);
                padding: 10px 0px 10px 5%;
                color: whitesmoke;
            }
            .menu ul a:hover {
                text-align: left;
                width: 100%;
                height: 50px;
                background-color: rgb(71, 68, 68);
                padding: 10px 0px 10px 5%;
                color: whitesmoke;
            }
            .menu-icon {
                width: 100px;
                height: inherit;
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                line-height: 60px;
            }
            #menuToggle:checked ~ ul {
                max-height: 350px;
                /*Para fazer com que o menu saia da esquerda ou direita, você deve trocar max-height por max-width*/
            }
            .iconify{
                margin-top: 15px;
            }
            .menu-icon i {
                font-size: 1.7em;
            }
            /* .fa fa-bars{
                background-color: aliceblue;
            } */
           
        }
        @media screen and (max-width: 900px) {
            .menu ul a{
    font-size: 20px;
  }
}

        </style>
</head>

<body>
    <div class="container">  
        @yield('Navbar')  
    <header>
        <figure class="brand">Emirates</figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><sub><span class="iconify" data-icon="el:lines" style="color: white;"></span></sub></label>
            <ul>
                <a href="{{url('home')}}"><li>BOOK</li></a>
                {{-- <a href="#"><li>MANAGE</li></a> --}}
                {{-- <a href="#"><li>WHERE WE FLY </li></a> --}}
                 {{-- <a href="#"><li>HELP</li></a> --}}
                <a href="{{url('logout')}}"><li>Logout</li></a>
                <a href="{{url('/login')}}"><li><sub><span class="iconify a" data-icon="bi:person-circle" data-width="22" data-height="22"></span></sub>&nbsp;{{Auth::user()->name}}</li></a>

            </ul>
        </nav>
    </header>
    </div>
{{-- @stop --}}
<div class="Body">
@yield('Content')  
</div>
</body>
</html>
