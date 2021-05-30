var canvas=null, ctx=null, x=10, y=10;

window.requestAnimationFrame=(
        function(){
            return window.requestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationRame ||
            function(callback){
                window.setTimeout(callback,17);
            };
        }()
);

function paint(ctx){
    ctx.fillStyle='#8FE872';
    ctx.fillRect(0,0,canvas.width, canvas.height);
   
    
    ctx.fillStyle='#000';
    ctx.fillText("TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  \n\
                TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  \n\
                TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA  TURRIFLOFA",x,y);
    ctx.font="bold italic 12px arial";
} // paint

function update(){
    x+=3;
    if(x>canvas.width)
        x=0;
}

function run(){
    window.requestAnimationFrame(run);
    update();
    paint(ctx);
}

function init(){
    canvas=document.getElementById('canvas');
    ctx=canvas.getContext('2d');
    run();
}

window.addEventListener('load', init, false);
