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
    ctx.lineWidth = 5;
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