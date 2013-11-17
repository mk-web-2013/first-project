/* 
 Многосточный комментарий
 */
// односторчный комментарий
var perem1;
//alert('Какой-то текст');
console.log(typeof perem1);
perem1 = 123.12;
console.log(typeof perem1);
perem1 = '123.12';
console.log(typeof perem1);
perem1 = true;
console.log(typeof perem1);
perem1 = new Object();
console.log(typeof perem1);
perem1 = {name:"Кристина",age:19};
for(var index in perem1){
  console.log(perem1[index]);
}
for(var i = 0;i<perem1.length;i+2){
  console.log(perem1[index]);
}
console.log(perem1.name);
perem1 = [123,false,'Соня',{},34,[23,67,'Привет']];
console.log(perem1.length);
for(var index in perem1){
  console.log(perem1[index]);
}
perem1 = 12+13;
console.log(perem1);
function my_count(){
  console.log(perem1-7);
}
console.log(typeof my_count);

setTimeout(my_count,2000);
var perem2 = function (){
  console.log(perem1*7);
};
perem2();
//setInterval(function(){
//  var curr_date = new Date();
//  console.log(curr_date.getHours()+":"+curr_date.getMinutes()+":"+curr_date.getSeconds());
//},1000);
var curr_date = new Date();
var my_birth_date = new Date(1978,1,14);
var my_life_days = curr_date - my_birth_date;
console.log(Math.floor(my_life_days/(1000*60*60*24)));
//Math.
