let a = Number(prompt('enter first value'));
let b = Number(prompt('enter second value'));
let counter = 1;

while (a <= b) {
  let color = counter % 2 == 0 ? 'green' : 'yellow'; 
  document.write(`<span style="background-color:${color}">${a}</span></br>`);
  a++;
  counter++;
}