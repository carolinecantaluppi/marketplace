require('./bootstrap');

const parent = document.getElementById('colortext');
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

let img = new Image();
img.crossOrigin = 'http://localhost:8080';
img.addEventListener("load", ()=>{
  ctx.canvas.width = parent.offsetWidth;
  ctx.canvas.height = parent.offsetWidth;
    ctx.drawImage(img, 0, 0, img.width, img.height,
                       0, 0, ctx.canvas.width, ctx.canvas.height);
    ctx.font = '50px serif';
    let txt = 'Testo'
    ctx.fillText(txt, ctx.canvas.width /2 - (ctx.measureText(txt).width / 2) , ctx.canvas.width / 2);
});
img.src = "http://localhost:8000/img/tshirt.jpeg"
document.getElementById('imgBase').value = "http://localhost:8000/img/tshirt.jpeg"

document.getElementById('text').addEventListener('keyup', (ev) =>{
  ctx.canvas.width = parent.offsetWidth;
  ctx.canvas.height = parent.offsetWidth;
  ctx.fillRect(0, 0, canvas.width, canvas.height)
  ctx.drawImage(img, 0, 0, img.width, img.height,
                     0, 0, ctx.canvas.width, ctx.canvas.height);

  ctx.font = '50px serif';
  let txt = ev.target.value;
  ctx.fillText(txt, ctx.canvas.width /2 - (ctx.measureText(txt).width / 2) , ctx.canvas.width / 2);

  document.getElementById('img64').value = canvas.toDataURL('image/png').split(";base64")[1];
})