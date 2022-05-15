$(function(){
    $(".error__div").hide();
    function updateCost(blockId){
        let count = parseInt($(".count__num")[blockId].innerHTML);
        let price = parseInt($(".price")[blockId].innerHTML);
        $(".cost")[blockId].innerHTML = count * price;
    }

	$(".count__minus").on("click", function(e){
        let blockId = $(".count__minus").index(e.currentTarget);
        let dish = $(".count__minus")[blockId].value;
        let prevVal = parseInt($(".count__num")[blockId].innerHTML);
        if(prevVal > 1){
            prevVal -=  1;
            $.ajax({
                url: '../../core/add_dish.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    dish: dish,
                    plus: 0,
                    delete: 0
                }
            });
            $(".count__num")[blockId].innerHTML = prevVal;
            updateCost(blockId);
        };
        
    });

	$(".count__plus").on("click", function(e){
        let blockId = $(".count__plus").index(e.currentTarget);
        let dish = $(".count__minus")[blockId].value;
        let prevVal = parseInt($(".count__num")[blockId].innerHTML);
        if(prevVal < 9){
            prevVal +=  1;
            $.ajax({
                url: '../../core/add_dish.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    dish: dish,
                    plus: 1,
                    delete: 0
                }
            });
            $(".count__num")[blockId].innerHTML = prevVal;
            updateCost(blockId);
        };
    });

    $(".delete__dish").on("click", function(e){
        let blockId = $(".delete__dish").index(e.currentTarget);
        let dish = $(".delete__dish")[blockId].value;
        $.ajax({
            url: '../../core/add_dish.php',
            type: 'POST',
            dataType: 'json',
            data: {
                dish: dish,
                plus: 1,
                delete: 1
            },
            success (data) {
                document.location.href = '/pages/cart.php';
            }
        });
    });

    $("#add__dish").on("click", function(e){
        e.preventDefault();
        let dish = parseInt($('select[name="dishes"]').val());
        $.ajax({
            url: '../../core/add_dish.php',
            type: 'POST',
            dataType: 'json',
            data: {
                dish: dish,
                plus: 1,
                delete: 0
            },
            success (data) {
                document.location.href = '/pages/cart.php';
            }
        });
    });

    $("#make__order").on("click", function(e){
        e.preventDefault();
        let date = ""+$('input[name="dateto"]').val();
        $.ajax({
            url: '../../core/makeorder.php',
            type: 'POST',
            dataType: 'json',
            data: {
                date: date
            },
            success (data) {
                if (data.status){
                    document.location.href = '/pages/profile.php';
                }
                else{
                    $('input[name="dateto"]').addClass("except");
                    $(".error__text").html(data.message);
                    $(".error__div").show(500);
                }
            }
        });
    });
}); 