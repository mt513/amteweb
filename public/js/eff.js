var pitems = document.getElementById('pitems');
var arrodn = document.getElementById('arrowdn');
var body = document.getElementsByTagName('body');

arrodn.addEventListener("click",  function(){
    pitems.scrollIntoView({ behavior: 'smooth' }
    );

});
