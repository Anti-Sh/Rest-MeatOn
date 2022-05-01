$(function(){
	var num = $(".carusel__item").length; // Количество слайдов в карусели
    constructCarusel(num); // Добавление элементов управления карусели
    var pageNow = 0; // текущая страница
    nextPage();
    $('#next').on("click", nextPage);
    $('#prev').on("click", prevPage);

    function caruselItemShow(id){
        let sectionID = "#carusel__item" + id;
        let pointID = "#marker" + id;
        $(sectionID).fadeIn(700);
        $(pointID).attr('src', 'src/img/icons/point.svg')
    };
    function caruselItemHide(id){
        let sectionID = "#carusel__item" + id;
        let pointID = "#marker" + id;
        $(sectionID).fadeOut(700);
        $(pointID).attr('src', 'src/img/icons/empty.svg')
    }
    function constructCarusel(num){
        $('.controls').append('<input class="arrows" id="prev" type="image" src="src/img/icons/left_arrow.svg" alt="">');
        for(var i=1; i<=num; i++){
            $('.controls').append(`<img class="points" id="${'marker'+i}" src="src/img/icons/empty.svg">`);
            caruselItemHide(i);
        }
        $('.controls').append('<input class="arrows" id="next" type="image" src="src/img/icons/right_arrow.svg" alt="">');
    };
    function nextPage(){
        caruselItemHide(pageNow);
        pageNow = (pageNow + 1) > num ? 1 : (pageNow + 1);
        caruselItemShow(pageNow);
    };
    function prevPage(){
        caruselItemHide(pageNow);
        pageNow = (pageNow - 1) == 0 ? num : (pageNow - 1);
        caruselItemShow(pageNow);
    };
});