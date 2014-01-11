/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$('li.active > a').css({'color': 'green', 'background': 'red', 'borderTop': '3px solid grey'});
//$('li.active~li a').css({'color': 'yellow'});
////TODO: Раскрасить все сестринские элементы
//$('li:not(".active")').children('a').css({'color': 'red'});
//$('a:contains("Пункт 3")').css({'color': 'white'});
//$('li:has("ul")').css({'background': 'orange'}).addClass('cont-sub-menu');
//$('li:even').css({'border': '7px solid red'});
//$('li:nth-child(even)').css({'outline': '7px solid green'});
//$('li:nth-child(3n+4)').css({'outline': '2px solid blue'});
//$('input:text').css({'background-color': 'lightgreen'});
//$('#curr-page').animate({'width': '-=50px'}, 'normal');
//$('#curr-page-description').animate({'left': '400px'}, 'normal');
//$('#curr-page-description').click(function() {
//  $('#curr-page').fadeToggle('slow', function() {
//    $('#right-panel').toggleClass('down');
//  });
//});
//$('.box-header').click(function() {
//  $(this).next('.box-content').slideToggle();
//});
//$(document).on('click','.box-header',function() {
//  $(this).next('.box-content').slideToggle();
//});
$('.box').each(function() {
  $(this).attr('start_width', $(this).width());
  console.log('0');
});
$('.box-header').toggle(function() {
  $(this).parent().animate({'width': '30px'}, 400, 'easeOutBack');
  console.log('1');
}, function() {
  var start_width = $(this).parent().attr('start_width');
  $(this).parent().animate({'width': start_width + 'px'}, 600, 'easeOutBack');
  console.log('2');
});
$("form").submit(function(event) {
  $(this).find('.requare').each(function() {
    if ($(this).next().val() == '') {
      event.preventDefault();
      $(this).next().val('Ведите значение').css({'color': 'red'});
      $(this).css({'background-color': 'red', 'color': 'white'});
    }
  });
});
$('#right-panel>div').click(function() {
  $('.box-header').trigger('click');
});

$('#curr-page').attr('box-count', $('#sidebar>div.box').length - 1);
$('#curr-page').click(function() {
  $('#sidebar>div.box:first-child').clone().appendTo('#sidebar');
  var new_box_count = +($('#curr-page').attr('box-count')) + 1;
  //var new_box_count = 1+parseInt($('#curr-page').attr('box-count'));
  $('#curr-page').attr('box-count', new_box_count);
});
$("#content").resizable();
$('.box').draggable();