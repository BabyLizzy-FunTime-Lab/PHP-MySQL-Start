const canvas = document.getElementById('canvas1');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// This setting sets new frames behind the one before it
ctx.globalCompositeOperation = 'destination-over';

let number = 0;
let scale = 10;

// Make a rectangle
// ctx.fillRect(200, 200, 100, 100);


function drawFlower() {
    let angle = number * 1;
    let radius = scale * Math.sqrt(number);
    let positionX = radius * Math.sin(angle) + canvas.width / 2;
    let positionY = radius * Math.cos(angle) + canvas.height / 2;

    ctx.fillStyle = "red";
    ctx.strokeStyle = 'blue';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.arc(positionX, positionY, 20, 0, Math.PI * 2);
    ctx.closePath();
    ctx.fill();
    ctx.stroke();

    number++;
}

// Make an animation with recursion.
function animate() {
    // Clear old frames
    // ctx.clearRect(0, 0, canvas.width, canvas.height);

    // draw each frame
    if (number == 200) return;
    drawFlower();
    requestAnimationFrame(animate);

}
animate();


let loopcount = 8;

function tree(x1,y1,x2,y2,maxloops) {
    if(loopcount == maxloops) return;

    let dx = x2 - x1;
    let dy = y1 - y2;

    let x3 = x2 - dy;
    let y3 = y2 - dx;
    let x4 = x1 - dy;
    let y4 = y1 - dx;

    let x5 = x4 + (dx - dy)/2;
    let y5 = y4 - (dx + dy)/2;

    // square
    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2); //300,200
    ctx.lineTo(x3, y3); //300,400
    ctx.lineTo(x4, y4); //100,400
    ctx.closePath();
    ctx.stroke();

    // Triangle
    ctx.beginPath()
    ctx.moveTo(x4, y4);
    ctx.lineTo(x5, y5);
    ctx.lineTo(x3, y3);
    ctx.closePath()
    ctx.stroke();
    tree(x5,y5,x3,y3,maxloops + 1);
    tree(x4,y4,x5,y5,maxloops + 1);
}
// let x1 = 375;
// let y1 = 600;
// let x2 = 475;
// let y2 = 600;
function draw() {
    ctx.clearRect(0,0,canvas.width, canvas.height);
    tree(375,600,475,600,0);
}
draw();