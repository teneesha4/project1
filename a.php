<html>
<head>
    <title>WEBDEV CREATIONS</title>


    <style>

        {
            margin : 0;
            padding : 0;
            font-family : Century;
        }
        header{
           
            background-image : url(../img/2.jpg);
            height : 100vh;
            background-size : cover;
            background-position : center;
           
        }
        ul{
            float : right;
            list-style-type : none;
            margin-top : 25px;
        }

        ul li{
            display : inline-block;
            font-size: 30px;
        }
        ul li a{
            text-decoration : none;
            color : blue;
            padding : 5px 20px;
            border : 3px solid transparent;
            transition : 0.6s ease;
        }

        ul li a:hover{
            background-color : #fff;
            color : #000;
        }

        ul li.active a{
            background-color : #fff;
            color : #000;
        }
        .logo img{
            float : left;
            width :150px;
            height : auto;
            margin-top : 25px;
            
        }
        .main{
            max-width : 1200px;
            margin : auto;
            margin-left:1%;
        }
        .title{
            position : absolute;
            top : 50%;
            left : 50%;
            transform : translate(-50%,-50%);
        }
        .title h1{
            color : red;
            font-size : 70px;
        }

        .button{
            position : absolute;
            top : 60%;
            left : 50%;
            transform : translate(-50%,-50%);
        }

        .btn{
            border : 1px solid #fff;
            padding : 10px 30px;
            color : red;
            text-decoration : none;
            transition : 0.6s ease;
        }
        .btn:hover{
            background-color : blue;
            color : #000;
        }
    </style>


</head>
<body>
    <header>
       
        <div class="main">
            <div class="logo">
                <img src="../img/logo.png">
            </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>

        <div class="title">
            <h1>TENEESHA</h1>
        </div>

        <div class="button">
            <a href="#" class="btn">WATCH VIDEO</a>
            <a href="#" class="btn">LEARN MORE</a>
        </div>

    </header>

   <div id="container">
      
</body>
</html>