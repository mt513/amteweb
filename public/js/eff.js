var pitems = document.getElementById('pitems');
var arrodn = document.getElementById('arrowdn');
var body = document.getElementsByTagName('body');
var header = document.getElementById('header');

var vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);


////////////////////////////////////////////////////////////////////////
// SMOOTH SCROLL //
////////////////////////////////////////////////////////////////////////
arrodn.addEventListener("click",  function(){
   // pitems.scrollIntoView({ behavior: 'smooth', block:"start", inline:"end" }
  // window.scrollBy({ top: -100, behavior: 'smooth' });
   // );
   smoothScroll(pitems);
});

function currypos(){
    if (self.pageYOffset) return self.pageYOffset;
    if (document.documentElement && document.documentElement.scrollTop)
    return document.documentElement.scrollTop;

    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

function eleypos(eID){
    var ele = pitems;
    var y = ele.offsetTop;
    var node = ele;
    while (node.offsetParent && node.offsetParent !=document.body){
        node = node.offsetParent;
        y+=node.offsetTop;
    } return y;
}

function smoothScroll(eID){
    var startY = currypos();
    var stopY = eleypos(eID) - (header.offsetHeight - 2);
    var dist = stopY > startY ? stopY - startY : startY - stopY;
    if (dist < 100){
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(dist / 100);
    if (speed >=20) speed = 20;
    var step = Math.round(dist / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY){
        for (var i=startY; i<stopY; i+=step){
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step;
            if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }

    for (var i= startY; i>stopY; i-=step){
        setTimeout("window.scrollTo(0,"+leapY+")", timer * speed);
        leapY -= step; 
        if (leapY < stopY) leapY = stopY; timer++;
    }
}

////////////////////////////////////////////////////////////////////////
// ITEMS RE-HEIGHT //
////////////////////////////////////////////////////////////////////////



window.addEventListener("resize",setsbitems);


var restimer;
var sbitems = document.querySelectorAll('.sbitem');

function setsbitems(){

    // vh = window.innerHeight * 0.01;
    // document.documentElement.style.setProperty('--vh', `${vh}px`);
    console.log(vh);


    clearTimeout(restimer);
    restimer=setTimeout(function(){
        
        var max=0; 
        for (let i=0; i<sbitems.length; i++){
            sbitems[i].removeAttribute("style");
            if (sbitems[i].offsetHeight > max) max = sbitems[i].offsetHeight;
        }
        for (let i=0; i<sbitems.length; i++){
            sbitems[i].style.height=max+"px";
        }
    },150)
}