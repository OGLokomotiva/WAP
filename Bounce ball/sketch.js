let x = 320;
let y = 185;
let xspeed = 16;
let yspeed = 12;

let r = 50;

function setup() {
  createCanvas(1680, 1050);
}

function draw() {
  background(0);
  ellipse(x, y, r*2, r*2);
  x += xspeed;
  y += yspeed;
  if (x > width - r || x < r) {
    xspeed = -xspeed;
  }
  if (y > height - r || y < r) {
    yspeed = -yspeed;
  }


}