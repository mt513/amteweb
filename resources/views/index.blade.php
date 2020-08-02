<!DOCTYPE html>

<head>
    <title>AMTE WEB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sk.css') }}">
</head>

<body>
    <div class="wrapper">
        <header id='header'
            class="header flex align-items-center p-t-5 p-b-5 p-l-10 p-r-10 flex-row justify-content-space-between">
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
                    <span id="arrowdn" class="tac flex justify-content-center p-t-10"><i class="arrow down"></i></span>
                </div>
            </div>
            <div class="spagewr flex flex-column">
                <section id="pitems" class="pitems flexwrap1 flex flex-row justify-content-center">
                    <div class="pitemswr flex flex-row justify-content-center p-b-30 bstyle">
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
                                    <img src="{{ URL::asset('/img/retouch.png') }}"
                                        alt="Retouch" width="70" height="50" class="m-l-10 m-r-10">
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
                                    <img src="{{ URL::asset('/img/marketing.png') }}"
                                        alt="Web" width="70" height="50" class="m-l-10 m-r-10">
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
                        <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>A goal is a dream with a
                                    deadline.</i></q> – Napoleon Hill</p>
                    </div>
                </section>
                <section class="bundle">
                    <div
                        class="content flex justify-content-center justify-content-center align-items-center flex-column p-b-20 bstyle">
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
                        <p class="tac m-0 fw400" style="font-size:0.8rem;"> <q><i>Coming together is a beginning,
                                    staying together is progress, and working together is success.</i></q> – Henry Ford
                        </p>
                    </div>
                </section>
                <section class='cus flex flex-column justify-items-center align-items-center'>
                    <div class="byb flex flex-column">
                        <h3 class="fw500 tac lsm2 ws1 m-0 p-t-20">Contact Us</h3>
                        <h5 class="fw300 tac p-t-10 m-0 ls1">let's communicate</h5>
                    </div>
                    <div class="cussubdiv flex justify-content-center align-items-center flexwrap1">
                        <div class="cusinfo p-10">
                            <p class="fw400 tac">Feel free to get in touch with us. We are always open to discussing new
                                projects, creative ideas or opportunities to be part of your visions. </p>
                            <form id="cus" name="cus" class="flex flex-column justify-content-center flexwrap1">
                                <div class="itext flex flex-column flexwrap1 align-content-center justify-content-center">
                                    <input type="text" name="name" class="iname" required maxlength="32" size="32"
                                        placeholder="Name">
                                    <input type="tel" name="phone" class="iphone" required size="32"
                                        placeholder="Phone">
                                    <input type="email" name="email" class="iemail" required size="32"
                                        placeholder="E-mail">
                                </div>
                                <div class="itext flex flexwrap1 justify-content-center">
                                    <textarea id="message" name="message" rows="4" cols="10"
                                        placeholder="Type your message"></textarea>
                                </div>
                                <button id="submit" class="fbuton" type="submit" value="Send">Send</button>
                            </form>
                        </div>
                        <div class="cusdetails p-10">
                            <div class="flex justify-content-space-evenly p-15">
                                <div class="cusicon flex justify-content-center align-items-center m-5">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="924.000000pt"
                                        height="980.000000pt" viewBox="0 0 924.000000 980.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,980.000000) scale(0.100000,-0.100000)"
                                            stroke="none">
                                            <path d="M1403 9785 c-23 -7 -62 -24 -85 -38 -24 -14 -192 -176 -375 -359
                                        l-332 -333 1110 -1205 c611 -663 1118 -1213 1129 -1224 18 -18 19 -18 51 20
                                        45 54 230 235 454 445 132 122 199 192 217 226 53 99 60 224 17 337 -18 50
                                        -121 168 -923 1059 l-902 1002 -70 32 c-111 52 -208 64 -291 38z" />
                                            <path d="M315 8805 c-96 -149 -191 -394 -243 -625 -260 -1149 207 -2611 1326
                                        -4160 645 -893 1519 -1833 2327 -2505 1052 -874 2025 -1360 2985 -1491 156
                                        -22 562 -25 695 -6 327 46 610 142 779 263 l57 41 -33 39 c-18 21 -512 560
                                        -1098 1198 l-1065 1158 -27 -19 c-248 -175 -550 -60 -1118 427 -724 620 -1369
                                        1265 -1854 1855 -309 375 -522 763 -557 1016 -20 140 16 282 93 370 16 18 28
                                        38 26 43 -1 4 -496 543 -1099 1197 -602 654 -1109 1205 -1126 1224 l-31 34
                                        -37 -59z" />
                                            <path d="M7073 3649 c-111 -18 -127 -32 -492 -394 l-344 -342 1097 -1194 c604
                                        -657 1100 -1193 1102 -1192 3 1 175 170 382 375 426 422 417 411 417 558 -1
                                        122 -20 153 -257 406 -112 120 -511 550 -887 954 -376 404 -700 747 -719 762
                                        -72 57 -196 84 -299 67z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="cusicon flex justify-content-center align-items-center m-5">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1201.000000pt"
                                        height="1207.000000pt" viewBox="0 0 1201.000000 1207.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,1207.000000) scale(0.100000,-0.100000)"
                                             stroke="none">
                                            <path d="M5685 12053 c-476 -38 -735 -78 -1117 -174 -915 -229 -1769 -683
                                                    -2498 -1326 -152 -135 -432 -418 -562 -570 -1093 -1273 -1596 -2902 -1412
                                                    -4573 57 -520 194 -1062 395 -1563 66 -165 227 -503 308 -647 28 -49 51 -96
                                                    51 -103 0 -7 -189 -703 -420 -1547 -231 -844 -419 -1537 -418 -1541 2 -3 710
                                                    180 1573 407 864 227 1576 413 1584 414 7 0 88 -38 180 -84 672 -340 1377
                                                    -540 2171 -618 180 -17 868 -18 1045 0 1256 124 2357 584 3320 1388 156 130
                                                    478 445 619 604 778 882 1284 1966 1445 3100 56 391 76 872 52 1240 -116 1773
                                                    -982 3365 -2411 4431 -913 680 -1985 1074 -3155 1159 -126 9 -650 11 -750 3z
                                                    m610 -1013 c920 -51 1770 -335 2515 -841 547 -371 1024 -856 1382 -1404 444
                                                    -679 700 -1415 784 -2255 21 -202 23 -665 5 -860 -97 -1060 -477 -1981 -1152
                                                    -2790 -131 -159 -438 -466 -594 -596 -338 -281 -663 -492 -1040 -675 -1309
                                                    -635 -2810 -662 -4160 -77 -132 57 -370 180 -541 279 l-171 99 -934 -244
                                                    c-513 -135 -935 -244 -936 -242 -3 2 470 1736 491 1801 4 15 -19 61 -91 175
                                                    -123 198 -238 407 -318 580 -573 1238 -615 2644 -118 3915 109 278 303 649
                                                    476 913 304 460 738 919 1182 1247 935 693 2075 1038 3220 975z" />
                                                                <path d="M3850 8844 c-130 -26 -236 -88 -349 -206 -296 -309 -442 -606 -490
                                                    -998 -45 -355 30 -740 224 -1156 155 -333 506 -839 910 -1310 133 -156 479
                                                    -510 630 -644 424 -379 881 -687 1295 -875 349 -159 922 -363 1130 -404 318
                                                    -62 682 -48 922 35 384 134 748 421 838 662 59 156 110 416 110 562 0 99 -12
                                                    146 -47 182 -45 49 -1144 585 -1316 643 -91 30 -169 33 -213 6 -34 -21 -76
                                                    -69 -159 -181 -70 -94 -268 -337 -370 -454 -113 -129 -173 -150 -297 -102 -35
                                                    13 -139 58 -233 100 -736 332 -1319 845 -1770 1556 -167 264 -166 284 12 482
                                                    175 195 250 295 310 415 78 156 78 177 -12 389 -37 87 -153 365 -257 619 -201
                                                    487 -222 533 -275 594 -63 74 -90 81 -344 86 -123 2 -235 2 -249 -1z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="cusicon flex justify-content-center align-items-center m-5">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="980.000000pt"
                                        height="878.000000pt" viewBox="0 0 980.000000 878.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,878.000000) scale(0.100000,-0.100000)"
                                             stroke="none">
                                            <path d="M9290 8751 c-40 -13 -6829 -2713 -8887 -3534 -228 -91 -277 -120
                                                    -334 -204 -40 -58 -69 -149 -69 -217 0 -147 93 -292 224 -351 28 -13 578 -225
                                                    1221 -470 644 -246 1171 -449 1173 -450 1 -1 153 -573 337 -1271 220 -836 343
                                                    -1287 361 -1322 95 -185 329 -263 514 -170 25 13 344 238 709 501 365 263 669
                                                    476 676 473 7 -2 561 -377 1231 -832 671 -455 1246 -841 1278 -858 55 -29 66
                                                    -31 165 -31 97 0 111 2 166 29 76 38 149 111 182 182 20 44 186 895 795 4087
                                                    851 4459 789 4104 730 4230 -41 87 -100 150 -180 189 -83 41 -204 49 -292 19z
                                                    m-1715 -1596 c-1066 -1019 -3966 -3820 -3987 -3850 -15 -22 -35 -66 -44 -97
                                                    -10 -32 -19 -56 -21 -54 -2 2 -51 181 -108 399 -57 217 -114 415 -126 438 -29
                                                    58 -109 141 -161 166 -35 18 -1207 469 -1560 601 -54 20 -98 39 -98 43 0 3
                                                    307 128 682 277 376 150 1779 708 3118 1241 1339 534 2437 970 2440 970 3 0
                                                    -58 -60 -135 -134z m640 -2981 c-321 -1688 -588 -3081 -592 -3097 -8 -27 -11
                                                    -25 -1088 706 -594 403 -1280 868 -1525 1034 -245 166 -453 308 -464 316 -20
                                                    15 -278 -236 2743 2670 827 796 1506 1446 1507 1444 2 -2 -259 -1385 -581
                                                    -3073z m-4112 -1679 c229 -154 416 -282 416 -285 0 -12 -623 -450 -629 -443
                                                    -4 4 -69 244 -144 533 -75 289 -139 532 -142 541 -2 9 15 -3 39 -25 24 -23
                                                    231 -167 460 -321z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="cusicon flex justify-content-center align-items-center m-5">
                                    <svg width="1345.000000pt"
                                        height="1473.000000pt" viewBox="0 0 1345.000000 1473.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,1473.000000) scale(0.100000,-0.100000)"
                                            stroke="none">
                                            <path d="M6080 14714 c-30 -2 -134 -8 -230 -14 -424 -27 -993 -99 -1420 -181
                                                        -2109 -404 -3467 -1417 -3981 -2969 -72 -219 -117 -403 -168 -685 -135 -749
                                                        -227 -1512 -261 -2170 -13 -243 -13 -949 0 -1170 40 -701 139 -1327 307 -1935
                                                        299 -1091 831 -1878 1618 -2393 202 -132 377 -209 845 -374 225 -79 363 -137
                                                        393 -167 16 -16 17 -82 17 -1095 0 -593 3 -1186 7 -1319 l6 -242 291 0 291 0
                                                        535 524 c635 621 1386 1377 1558 1568 l123 136 92 6 c51 3 281 10 512 16 537
                                                        14 1408 52 1830 80 1181 79 1953 251 2660 594 392 190 686 397 970 681 358
                                                        357 580 715 827 1330 375 934 530 1892 545 3356 6 564 -2 816 -37 1234 -75
                                                        882 -264 1802 -487 2365 -386 976 -1096 1680 -2158 2138 -795 343 -1855 560
                                                        -3275 668 -190 15 -1251 28 -1410 18z m1140 -655 c540 -25 1120 -91 1725 -194
                                                        686 -116 1260 -286 1724 -511 734 -354 1223 -816 1535 -1449 128 -260 194
                                                        -447 291 -830 147 -582 230 -1107 286 -1830 17 -218 23 -1117 10 -1402 -39
                                                        -820 -102 -1318 -236 -1863 -138 -555 -386 -1169 -613 -1515 -513 -782 -1429
                                                        -1244 -2817 -1419 -530 -67 -1474 -120 -2791 -156 -372 -10 -454 -19 -567 -65
                                                        -136 -54 -205 -112 -417 -350 -136 -152 -770 -789 -1218 -1223 l-281 -274 -3
                                                        884 c-3 810 -5 888 -21 943 -57 194 -169 333 -356 443 -78 45 -251 118 -516
                                                        217 -497 184 -534 200 -680 298 -637 426 -1046 1039 -1308 1963 -146 510 -237
                                                        1043 -289 1679 -18 217 -18 1187 0 1425 60 802 201 1806 323 2294 101 401 282
                                                        795 508 1106 653 899 1845 1488 3491 1725 790 113 1417 143 2220 104z" />
                                            <path d="M6810 12473 c-253 -25 -496 -69 -566 -104 -59 -28 -129 -108 -149
                                                    -170 -13 -38 -16 -74 -13 -133 4 -71 9 -91 39 -147 39 -70 105 -129 169 -148
                                                    55 -16 153 -13 260 9 200 41 349 53 615 47 334 -7 534 -40 825 -137 890 -296
                                                    1573 -1015 1825 -1920 69 -250 98 -463 98 -740 1 -222 -11 -352 -50 -555 -32
                                                    -166 -29 -241 14 -317 35 -63 107 -121 178 -145 63 -21 176 -20 234 1 118 43
                                                    176 134 215 341 145 762 37 1539 -310 2226 -537 1063 -1586 1779 -2769 1889
                                                    -101 9 -532 12 -615 3z" />
                                            <path d="M3685 11815 c-397 -104 -717 -316 -912 -605 -85 -125 -160 -318 -189
                                                    -480 -19 -110 -14 -320 10 -430 15 -67 237 -642 366 -945 142 -334 258 -560
                                                    473 -920 818 -1370 1907 -2478 3277 -3336 573 -358 1511 -826 1827 -910 112
                                                    -30 330 -37 444 -15 222 45 546 221 759 413 225 203 415 493 486 741 24 84 26
                                                    106 22 210 -5 132 -25 194 -95 299 -71 109 -171 195 -553 479 -749 558 -831
                                                    612 -1027 677 -248 82 -455 69 -643 -40 -86 -50 -231 -196 -307 -309 -183
                                                    -270 -424 -371 -682 -285 -112 38 -345 145 -496 228 -711 392 -1228 931 -1561
                                                    1628 -126 264 -171 459 -141 609 39 191 137 319 410 535 217 172 307 296 330
                                                    454 20 138 -18 258 -171 542 -262 487 -603 935 -979 1286 -100 94 -207 157
                                                    -309 184 -88 23 -231 19 -339 -10z" />
                                            <path d="M6845 11513 c-242 -31 -301 -49 -365 -113 -62 -62 -84 -121 -84 -225
                                                    -1 -76 3 -99 25 -145 35 -75 80 -124 142 -154 74 -37 126 -41 265 -21 179 26
                                                    481 17 644 -18 528 -115 965 -428 1234 -884 104 -176 173 -355 221 -573 32
                                                    -149 43 -441 22 -601 -22 -165 -19 -234 14 -301 84 -172 328 -231 492 -118 42
                                                    29 82 81 103 135 42 107 66 554 43 778 -80 744 -485 1410 -1116 1832 -325 218
                                                    -684 350 -1085 401 -104 13 -472 18 -555 7z" />
                                            <path d="M6894 10531 c-78 -37 -128 -95 -154 -179 -53 -170 13 -341 157 -404
                                                    47 -21 85 -28 201 -37 119 -9 161 -16 250 -46 313 -105 541 -348 627 -671 9
                                                    -32 21 -120 26 -194 14 -183 46 -256 140 -315 150 -96 364 -59 456 79 45 66
                                                    53 103 53 238 0 460 -235 927 -615 1222 -282 219 -613 336 -953 336 -119 0
                                                    -131 -2 -188 -29z" />
                                        </g>
                                    </svg>
                                </div>

                            </div>
                            <h5 class="fw500 tac p-t-10 p-b-15 m-0 ls1 actioncolor"><u><a href="mailto:contact@amteweb.com">contact@amteweb.com</a></u></h5>
                            <h5 class="fw500 tac p-t-10 m-0 ls1 lh2">
                                +1 222 331 4112 (USA)
                                <br>
                                +40 757 527 656 (Romania)
                                <br>
                                +373 68 29 13 41 (Moldova)
                                <br>
                                +39 112 4412 1111 (Italy)
                            </h5>

                        </div>
                    </div>
                </section>
            </div>
           
            
        </main>
         <footer><p style="background:red; ">c122121ontent here,,,</p></footer>
    </div>
    <script lang="text/javascript" src="{{ URL::asset('/js/eff.js') }}"></script>
</body>

</html>