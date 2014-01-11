/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var a = '4';
switch (a) {
  case 1:
    console.log('111');
    break;
  case 2:
    console.log('222');
    break;
  case 3:
    console.log('333');
    break;
  case '4':
    console.log('444');
    break;
  case 5:
    console.log('555');
    break;
  default :
    console.log('Нет нужного варианта!');
    break;
}
//var va = 'Виталий'.split('и');
//console.log(va);
//var sva = va.join("і");
//console.log(sva);
String.prototype.to_ukr = function(letter_ru, letter_uk) {
  var va = this.valueOf().split(letter_ru);
  return va.join(letter_uk);
};
console.log("Кристина".to_ukr("и", "і"));
document.getElementById("smi2").style.border = "1px solid red";
var ali = document.getElementsByTagName('a');
var $this;
for (var ili in ali) {
  $this = ali[ili];
  if (($this.nodeName == 'A') && ($this.parentNode.className === 'active')) {
    $this.style.color = 'green';
  }
}



