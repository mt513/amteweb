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
                <section class="fpage flex flex-column justify-content-center bstyle">
                    <div class="flex flex-column align-items-center justify-content-center">
                        <div class="flex flex-column">
                            <h1 class="m-0 p-t-30 fw500 tac lsm2 ws1">Creative Solutions</h1>
                            <h6 class="m-0 p-t-20 p-b-20 fw300 tac ls1">a wide spectrum of solutions<br>for your tasks
                                and ideas.</h6>
                        </div>
                    </div>
                    <div class="mainimg flex m-15">
                        <img src="{{ URL::asset('/img/homecentercolored.png') }}"
                            alt="Home Graphic">
                    </div>
                </section>
                <div class="add p-10">
                    <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>Our success is measured by our
                                achievments</i></q></p>
                </div>
            </div>
            <div class="spagewr flex flex-column">
                <section class="pitems flexwrap1 flex flex-row justify-content-center ">
                   <div class="pitemswr flex flex-row justify-content-center p-b-30">
                    <div class="byb flex flex-column aign-self-center">
                        <h3 class="fw500 tac lsm2 ws1 m-0 p-t-20">Main Services</h3>
                        <h5 class="fw300 tac p-t-10 p-b-5 m-0 ls1">skills at your dispoasal</h5>
                    </div>
                    <div class="bbitem">
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/img/web.png') }}" alt="Web"
                                    width="70" height="50" class="m-l-10 m-r-10">
                                <h4 class="m-0 fw400 p-l-5 p-r-5">Web</h4>
                            </div>
                            <p>From building the cores of custom web applications to
                                polishing out of the box details, we strive to provide
                                combined <span class="fw500">efficiency, effectiveness and elegance.</span>
                            </p>
                            <button>
                                Learn More
                            </button>
                            <span class="bline">
                            </span>
                        </div>
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/img/graphics.png') }}"
                                    alt="Graphics" width="70" height="50" class="m-l-10 m-r-10">
                                <h4 class="m-0 fw400 p-l-5 p-r-5">Graphics</h4>
                            </div>
                            <p>Either it is a company logo or a component for a project,
                                we think about illustrations as shortcuts
                                that <span class="fw500">overwrite complexity and point out the goals.</span>
                            </p>
                            <button>Learn More</button>
                            <span class="bline"></span>
                        </div>
                    </div>
                    <div class="bbitem">
                        <div class="sbitem flex flex-column justify-content-flex-start">
                            <div class="flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/img/retouch.png') }}" alt="Retouch"
                                    width="70" height="50" class="m-l-10 m-r-10">
                                <h4 class="m-0 fw400 p-l-5 p-r-5">Retouch</h4>
                            </div>
                            <p>Harmony between shapes, colors, and lights is essential.
                                Careful manipulation of these elements can reveal the
                                <span class="fw500">meaning of beauty in photo composition.</span>
                            </p>
                            <button>
                                Learn More
                            </button>
                            <span class="bline">
                            </span>
                        </div>
                        <div class="sbitem flex flex-column justify-content-flex-star">
                            <div class="flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/img/marketing.png') }}" alt="Web"
                                    width="70" height="50" class="m-l-10 m-r-10">
                                <h4 class="m-0 fw400 p-l-5 p-r-5">Marketing</h4>
                            </div>
                            <p>Good content placed in the right place could engage,
                                but we also always focus on bringing the
                                <span class="fw500">convertion of the leads at its maximum rate.</span>
                            </p>
                            <button>Learn More</button>
                            <span class="bline"></span>
                        </div>
                    </div>
                   </div>
                   <div class="add p-10">
                     <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>A goal is a dream with a deadline.</i></q> – Napoleon Hill</p>
                 </div>
                </section>
                <section class="bundle">
                    <div class="content flex justify-content-center justify-content-center align-items-center flex-column p-b-20">
                        <div class="byb flex flex-column">
                            <h3 class="fw500 tac lsm2 ws1 m-0 p-t-20">Build Your Bundle</h3>
                            <h5 class="fw300 tac p-t-10  p-b-15 m-0 ls1">integrate features</h5>
                        </div>
                        <div class="flex align-items-center justify-content-center flexwrap1">
                            <div class="imgwrp m-l-15 m-r-15">
                                <img src="{{ URL::asset('/img/cube.png') }}"
                                    alt="Solutions Cube" width="" class="">
                            </div>
                            <div class="flex align-items-center">
                                <ul>
                                    <li>
                                        Chose from a variety of options we provide that fit your demand.
                                    </li>
                                    <li>
                                        No pre-defined plans. We treat each customer individually.
                                    </li>
                                    <li>
                                        Our customers are exclusive! So are our works, with no templates.
                                    </li>
                                    <li>
                                        Guidance and support always throughout our collaboration.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="add p-10">
                     <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>Coming together is a beginning, staying together is progress, and working together is success.</i></q> – Henry Ford</p>
                 </div>
                </section>
                <section class='cus flex flex-column justify-items-center align-items-center p-t-10'>
                    <div class="byb flex flex-column">
                        <h3 class="fw500 tac lsm2 ws1 m-0 p-t-20">Contact Us</h3>
                        <h5 class="fw300 tac p-t-10 p-b-15 m-0 ls1">let's communicate</h5>
                    </div>
                    <div class="cussubdiv flex justify-content-center flexwrap1">
                        <div class="cusinfo ">
                            <p class="fw400 tac">Feel free to get in touch with us. We are always open to discussing new
                                projects, creative ideas or opportunities to be part of your visions. </p>
                            <h5 class="fw500 tac p-t-10 m-0 ls1"><u>contact@amteweb.com</u></h5>
                            <h5 class="fw500 tac p-t-10 m-0 ls1">
                                +1 222 331 4112
                                <br>
                                +40 757 527 656
                                <br>
                                +373 68 29 13 41
                            </h5>
                            <div class="flex justify-content-space-evenly p-15">
                                <img src="{{ URL::asset('/img/icons/phone.svg') }}"
                                    alt="facebook" width="8" height="8">
                                <img src="{{ URL::asset('/img/icons/whatsapp.svg') }}"
                                    alt="whatsapp" width="12" height="12">
                                <img src="{{ URL::asset('/img/icons/telegram.svg') }}"
                                    alt="telegram" width="12" height="12">
                                <img src="{{ URL::asset('/img/icons/viber.svg') }}"
                                    alt="viber" width="12" height="12">
                            </div>
                        </div>
                        <form id="cus" name="cus" class=" flex flex-column justify-content-center flexwrap1">
                            <div class="itext flex flex-column flexwrap1 align-content-center justify-content-center">
                                <input type="text" name="name" class="iname" required maxlength="32" size="32"
                                    placeholder="Name">
                                <input type="email" name="phone" class="iphone" required size="32" placeholder="Phone">
                                <input type="email" name="email" class="iemail" required size="32" placeholder="E-mail">
                            </div>
                            <div class="itext flex flexwrap1 justify-content-center">
                                <textarea id="message" name="message" rows="4" cols="10"
                                    placeholder="Type your message"></textarea>
                            </div>
                            <button id="submit" class="fbuton" type="submit" value="Send">Send</button>
                        </form>
                    </div>
                </section>
            </div>
            <p style="background:red; ">c122121ontent here,,,</p>
        </main>
    </div>
</body>

</html>