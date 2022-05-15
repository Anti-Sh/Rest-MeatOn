$(function(){

    function updateCost(blockId){
        let count = parseInt($(".count__num")[blockId].innerHTML);
        let price = parseInt($(".price")[blockId].innerHTML);
        $(".cost")[blockId].innerHTML = count * price;
    }

	$(".count__minus").on("click", function(e){
        let blockId = $(".count__minus").index(e.currentTarget);
        let prevVal = parseInt($(".count__num")[blockId].innerHTML);
        let val = prevVal > 1 ? prevVal - 1 : prevVal;
        $(".count__num")[blockId].innerHTML = val;
        updateCost(blockId);
    });

	$(".count__plus").on("click", function(e){
        let blockId = $(".count__plus").index(e.currentTarget);
        let prevVal = parseInt($(".count__num")[blockId].innerHTML);
        let val = prevVal < 9 ? prevVal + 1 : prevVal;
        $(".count__num")[blockId].innerHTML = val;
        updateCost(blockId);
    });

    $(".delete__dish").on("click", function(e){
        let blockId = $(".delete__dish").index(e.currentTarget);
        $(".order__inner")[blockId].remove();
    })

    $("#add__dish").on("click", function(e){
        e.preventDefault();
        let dish = $('select[name="dishes"]').val();
        $.ajax({
            url: '../../core/add_dish.php',
            type: 'POST',
            dataType: 'json',
            data: {
                dish: dish
            },
            success (data) {
                document.location.href = '/pages/cart.php';
            }
        });
    })
}); 