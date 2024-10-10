const flagAnimation = {
    'amplitude' : null,
    'sizeReduce' : null,
    'wavelength' : null,
    'period' : null,
    'shading' : null,
    'squueze' : null,
    'fps' : null,
    'canvas' : null,
    'containerID' : null,
    'image' : null,
    'flag' : null,
    'construct' : function ( containerID, imageURL, amplitude = 15, sizeReduce = 2.1, wavelength = 23, period = 200, shading = 100, squueze = 0, fps = 30, width = 250, height = 180) {

        console.log("construct");
        this.canvas = document.getElementById(containerID);
        this.image = new Image;
        this.image.src = imageURL;
        // console.log(this.image);
        // console.log(this.image.width);
        // console.log(this.image.height);
        this.amplitude = amplitude;
        this.sizeReduce = sizeReduce;
        this.wavelength = wavelength;
        this.period = period;
        this.shading = shading;
        this.squueze = squueze;
        this.fps = fps;
        // this.image.onload = this.onloadFunction;
        this.onloadFunction();
        // this.image.onload();
    },
    'onloadFunction' : function () {
        console.log("onloadFunction");

        console.log(this.image);
        console.log(this.canvas);
        console.log(this.image.height);
        console.log(this.canvas.height);
        console.log(this.image.width);
        console.log(this.canvas.width);
        console.log(this.sizeReduce);
        console.log(this.amplitude);
        this.image.width  = this.canvas.width;
        this.image.height = this.canvas.height;
        // this.canvas.width  = this.canvas.width / this.sizeReduce;
        // this.canvas.height = this.canvas.height / this.sizeReduce + this.amplitude * 2;
        this.canvas.getContext('2d').drawImage(this.image,0,this.amplitude,this.image.width,this.image.height);
        // this.canvas.style.marginLeft = -(this.canvas.width * this.sizeReduce)+'px';
        // this.canvas.style.marginTop  = (this.canvas.height / this.sizeReduce)+'px';
        // let timer = this.waveFlag( this.canvas, this.image.width/this.wavelength, this.amplitude );
    },
    'waveFlag' : function ( canvas, wavelength, amplitude, period, shading, squeeze ){
        console.log("waveFlag");
        if (!squeeze)    squeeze    = 0;
        if (!shading)    shading    = 100;
        if (!period)     period     = 200;
        if (!amplitude)  amplitude  = 10;
        if (!wavelength) wavelength = canvas.width/10;
    
        var fps = 30;
        var ctx = canvas.getContext('2d');
        var   w = canvas.width, h = canvas.height;
        var  od = ctx.getImageData(0,0,w,h).data;
        // var ct = 0, st=new Date;

        return setInterval(function(){
            console.log("setInterval");
            let id = ctx.getImageData(0,0,w,h);
            let  d = id.data;
            let now = (new Date)/period;
            for (let y=0;y<h;++y){
                let lastO=0,shade=0;
                let sq = (y-h/2)*this.squeeze;
                for (let x=0;x<w;++x){
                    let px  = (y*w + x)*4;
                    let pct = x/w;
                    let o   = Math.sin(x/wavelength-now)*amplitude*pct;
                    let y2  = y + (o+sq*pct)<<0;
                    let opx = (y2*w + x)*4;
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
}

// flagAnimation.construct( 'flagCanvas', './images/logo.png', 15, 2.1, 23, 100, 200, 0, 30);
// flagAnimation.construct( 'offcanvasFlagCanvas', './images/logo.png', 15, 2.1, 23, 100, 200, 0, 30);

let one = flagAnimation;
one.construct( 'flagCanvas', './images/logo.png', 15, 2.1, 23, 100, 200, 0, 30);
// let two = flagAnimation;
// two.construct( 'offcanvasFlagCanvas', './images/logo.png');