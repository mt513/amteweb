<!DOCTYPE html>

<head>
    <title>AMTE WEB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sk.css') }}">
</head>

<body>
    <div class="wrapper">
        <header class="header flex align-items-center p-t-5 p-b-5 p-l-10 p-r-10 flex-row justify-content-space-between">
            <div class="flex row align-items-center">
                <div class="logo">
                    <div class="sq1">
                    </div>
                    <div class="sq2">
                    </div>
                    <div class="sq3">
                    </div>
                    <div class="sq4">
                    </div>
                </div>
                <h4 class="p-l-10 align-self-center scolor m-0 fw400 lsm1"><a href="#">AMTE WEB</a></h4>
            </div>
            <div class="menumob">
                <div class="menuline">
                </div>
                <div class="menuline">
                </div>
                <div class="menuline">
                </div>
            </div>
        </header>
        <main class="p-0 m-l-0 m-r-0 m-b-0">
            <div class="fpagewr flex flex-column">
                <section class="fpage flex flex-column justify-content-center">
                    <div class="flex flex-column align-items-center justify-content-center">
                        <div class="flex flex-column">
                            <h1 class="m-0 p-t-30 fw600 tac lsm2 ws1">Creative Solutions</h1>
                            <h6 class="m-0 p-t-20 p-b-20 fw300 tac">A wide spectrum of solutions<br>for your tasks and ideas.</h6>
                        </div>
                    </div>
                    <div class="mainimg flex m-15">
                        <img src="{{URL::asset('/img/homecentercolored.png')}}" alt="Home Graphic">
                    </div>
                </section>
                <div class="add p-10">
                    <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>Our success is measured by our achievments</i></q></p>
                </div>
            </div>
            <div class="spagewr flex flex-column">
                <section class="pitems flex flex-row justify-content-center p-b-30">
                    <div class="bbitem">
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                        <img src="{{URL::asset('/img/web.png')}}" alt="Web" width="70"; height="50" class="m-l-10 m-r-10">
                        <h4 class="m-0 fw400 p-l-5 p-r-5">Web</h4>
                            </div>
                            <p>From building the cores of custom web applications to
                                polishing out of the box details, we strive to provide
                                combined <span class="fw500">efficiency, effectiveness and elegance.</span></p>
                                <button>Learn More</button>
                                <span class="bline"></span>
                        </div>
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                        <img src="{{URL::asset('/img/graphics.png')}}" alt="Graphics" width="70"; height="50" class="m-l-10 m-r-10">
                        <h4 class="m-0 fw400 p-l-5 p-r-5">Graphics</h4>
                            </div>
                            <p>Either it is a company logo or a component for a project,
                                we think about illustrations as shortcuts
                                that <span class="fw500">overwrite complexity and point out the goals.</span></p>
                                <button>Learn More</button>
                                <span class="bline"></span>
                        </div>
                    </div>
                    <div class="bbitem">
                         <div class="sbitem flex flex-column justify-content-flex-start">
                            <div class="flex align-items-center justify-content-center">
                        <img src="{{URL::asset('/img/retouch.png')}}" alt="Retouch" width="70"; height="50" class="m-l-10 m-r-10">
                        <h4 class="m-0 fw400 p-l-5 p-r-5">Retouch</h4>
                            </div>
                            <p>Harmony between shapes, colors, and lights is essential.
                                Careful manipulation of these elements can reveal the
                                 <span class="fw500">meaning of beauty in photo composition.</span></p>
                                <button>Learn More</button>
                                <span class="bline"></span>
                        </div>
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                        <img src="{{URL::asset('/img/marketing.png')}}" alt="Web" width="70"; height="50" class="m-l-10 m-r-10">
                        <h4 class="m-0 fw400 p-l-5 p-r-5">Marketing</h4>
                            </div>
                            <p>Good content placed in the right place could engage,
                                but we also always focus on bringing the 
                                <span class="fw500">convertion of the leads at their maximum rates.</span></p>
                                <button>Learn More</button>
                                <span class="bline"></span>
                        </div>
                    </div>
                </section>  
                <div class="bbox flex justify-content-center">
                    bbox
                    </div>  
            </div>   
            <p style="background:red; ">c122121ontent here,,,</p>
        </main>
        
        
    </div>
</body>

</html>
