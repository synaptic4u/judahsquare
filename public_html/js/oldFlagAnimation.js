
let onloadFunction = function() {
    let flag = null;
    for (let cnt = 0; cnt < flags.length; cnt ++) { 
        flag = document.getElementById(flags[cnt]);
        let amp = 15;
        let reduce = 2.1;
        flag.setAttribute("style","position:relative;");
        flag.setAttribute("class","flagShift flagHeightP");
        flag.width  = image.width/reduce;
        flag.height = image.height/reduce + amp*2;

        flag.parentElement.style.width = (flag.width)+"px";
        flag.getContext('2d').drawImage(image, 0, amp, image.width/reduce, image.height/reduce);
        flag.style.marginLeft = -(flag.width/reduce)+'px';
        flag.style.marginTop  = -(flag.height/reduce)+'px';
        let timer = waveFlag( flag, image.width/35, amp );
    }
};

function waveFlag( canvas, wavelength, amplitude, period, shading, squeeze ){
    if (!squeeze)    squeeze    = 0;
    if (!shading)    shading    = 100;
    if (!period)     period     = 200;
    if (!amplitude)  amplitude  = 15;
    if (!wavelength) wavelength = canvas.width/10;

    var fps = 30;
    var ctx = canvas.getContext('2d');
    var   w = canvas.width, h = canvas.height;
    var  od = ctx.getImageData(0,0,w,h).data;
    // var ct = 0, st=new Date;
    return setInterval(function(){
        var id = ctx.getImageData(0,0,w,h);
        var  d = id.data;
        var now = (new Date)/period;
        for (var y=0;y<h;++y){
            var lastO=0,shade=0;
            var sq = (y-h/2)*squeeze;
            for (var x=0;x<w;++x){
                var px  = (y*w + x)*4;
                var pct = x/w;
                var o   = Math.sin(x/wavelength-now)*amplitude*pct;
                var y2  = y + (o+sq*pct)<<0;
                var opx = (y2*w + x)*4;
                shade = (o-lastO)*shading;
                d[px  ] = od[opx  ]+shade;
                d[px+1] = od[opx+1]+shade;
                d[px+2] = od[opx+2]+shade;
                d[px+3] = od[opx+3];
                lastO = o;
            }
        }
        ctx.putImageData(id,0,0);		
        // if ((++ct)%100 == 0) console.log( 1000 * ct / (new Date - st));
    },1000/fps);
}

var flags = [
    'flagCanvas',
    'offcanvasFlagCanvas'
];
// var flags = [
//     'flagCanvas'
// ];

let image = new Image;

image.loading = "eager";
image.onload = onloadFunction;
image.src = "./images/background/logo.webp";



