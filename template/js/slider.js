// Получаем элемент (узел, node) с id="slides"
var slides = document.getElementById('slides');

// количество дочерних боков (маленьких рекламных)
var slides_count = slides.children.length;

// ширина одного рекламного блока (от внешней стороны левой границы до внешней стороны правой границы)
var slide_width = 110;

// начальное смещение слайдов
var slides_left = 0;

// временной интервал в мс движения одного рекламного блока
var slides_move_delay = 2000;

// время в мс изменения смещени на 2px
var slides_delay = Math.round(slides_move_delay / slide_width) * 2;

// флаг (разрешено ли) движения
var access_to_move = true;

// текущая реклама
var slide_index = 1;

// запуск движения через каждые slides_delay мс
setInterval(function() {
  if (access_to_move) {//если разрешено движение
    if (slides_left >= slide_width * slide_index) {// если доехали до границы текущего блока рекламы
      access_to_move = false; // запретить движение
      slide_index++;// сделать текущим следующий блок рекламы
      if((slide_index+3)>slides_count){// если текущий блок рекламы больше, чем их количество
        setTimeout(function(){
        slide_index = 1;// переключаем текущий слайд на первый
        slides_left = 0;// устанавливаем смещение в 0px
        slides.style.left = slides_left + 'px';
      },1000);
        // применяем смещение
      }
    } else {// если еще не доехали до границы текущего блока
      slides_left += 2;// увеличиваем смещение на +2px
      slides.style.left = '-' + slides_left + 'px';// смещаем
    }
  }
}, slides_delay);

// интервал каждые 7с возобновляем движение
setInterval(function() {
  access_to_move = true;// переключаем флаг движения в "разрешено"
}, 7000);

