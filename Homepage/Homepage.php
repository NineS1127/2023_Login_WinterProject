<!DOCTYPE html>
<html lang="ko">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2023 Login Winter Project: NineS</title>
    <style>
                    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #050801;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}
a{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 0;
    color: #03e9f4;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
a:hover{
    background: #03e9f4;
    color: #050801;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 200px #03e9f4;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
a:nth-child(1){
    filter: hue-rotate(270deg);
}
a:nth-child(2){
    filter: hue-rotate(110deg);
}
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#03e9f4);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#03e9f4);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#03e9f4);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#03e9f4);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
        header {
            font-size: 30px;
            text-align: center;
            font-weight: bold;
            color: white;
            border-top: 2px;
            border-bottom: 2px;
            position: absolute;
            top: 10%;
                }

        nav {
            font-size: 15px;
            text-align: center;
            font-weight: bold;
            color: White;
            position: absolute;
            top: 20%;
            right: 28%;
        }

        aside {
            position: absolute;
            top: 23%;
            left: 25%;
        }

        footer {
            float: left;
        }

    </style>
        </head>
            <body>
                <header>
                    <h1>2023 Login Winter Project</h1>
                </header>
                <nav>
                    <h2>NineS's Web</h2>
                </nav>
                <aside>
                    <div class="box">
                    <img src="./cat.jpg">
                </div>
                </aside>
               
               <section>
                    <a href="../Login/Login.php" style="width: 150px; text-align: center;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Log In
                    </a>
                    <a href="" style="width: 150px; text-align: center;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Board
                    </a>
                    <a href="../Join/Join.php" style="width: 150px; text-align: center;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Join
                    </a>\
                </section>
                </body>
</html>   
