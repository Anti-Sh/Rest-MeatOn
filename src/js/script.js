$(function(){
	var num = $(".carusel__item").length; // Количество слайдов в карусели
    constructCarusel(num); // Добавление элементов управления карусели
    var pageNow = 0; // текущая страница
    nextPage(); // включение первой страницы
    $('#next').on("click", nextPage); // Обработка нажатия на кнопку
    $('#prev').on("click", prevPage); // Обработка нажатия на кнопку

    function caruselItemShow(id){
        let sectionID = "#carusel__item" + id;
        let pointID = "#marker" + id;
        $(sectionID).fadeIn(700); // Плавное появление элемента
        $(pointID).attr('src', 'src/img/icons/point.svg') // Изменение точки
    };
    function caruselItemHide(id){
        let sectionID = "#carusel__item" + id; 
        let pointID = "#marker" + id;
        $(sectionID).fadeOut(700); // Плавное скрытие элемента
        $(pointID).attr('src', 'src/img/icons/empty.svg') // Изменение точки
    }
    function constructCarusel(num){ // функция Добавление элементов управления "каруселью"
        $('.controls').append('<input class="arrows" id="prev" type="image" src="src/img/icons/left_arrow.svg" alt="">');
        // кнопка "предыдущий элемент"
        for(var i=1; i<=num; i++){
            $('.controls').append(`<img class="points" id="${'marker'+i}" src="src/img/icons/empty.svg">`);
            // добавление точек (индикаторы выбранного экрана)
            caruselItemHide(i);
        }
        $('.controls').append('<input class="arrows" id="next" type="image" src="src/img/icons/right_arrow.svg" alt="">');
        // кнопка "следующий элемент"
    };
    function nextPage(){
        caruselItemHide(pageNow); // скрытие предыдущей страницы
        pageNow = (pageNow + 1) > num ? 1 : (pageNow + 1); // номер новой страницы
        caruselItemShow(pageNow); // появление новой страницы
    };
    function prevPage(){
        caruselItemHide(pageNow); // скрытие предыдущей страницы
        pageNow = (pageNow - 1) == 0 ? num : (pageNow - 1); // номер новой страницы
        caruselItemShow(pageNow); // появление новой страницы
    };
});