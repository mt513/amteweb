<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        p{
            margin:0;
        }
        body,html{
            margin:0;
            height: 100%;
            width: 100%;
            background-color: black;
            padding: 0;
        }
        .container{
min-height:100%;
            background-color: yellow;
           height: 100%;
            
        }
        
        header{
            width: 100%;
            background-color:blueviolet;
        }
        main{
height:auto;
        }
        .wr{
            height:100%;
        }
        .fpcont{
            justify-content: center;
            min-height:100%;
            display: flex;
            flex-direction: column;
        }
        .one{
            flex:1;
            flex-grow: 1;;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: pink;
        }
        
        .two{
            background-color:grey;
            display: flex;
            flex-direction: column;
        }
        footer{
        background-color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            Header
        </header>
        <main>
            <div class="wr">
            <div class="fpcont">
                <div class="one">
                    ONE
                </div>
                <div class="twp">two</div>        
            </div>
        </div>
            <div style="background-color: brown">somehting here</div>
        </main>
        
        <footer>My footer</footer>
    </div>
</body>
</html>