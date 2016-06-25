$(function(){
    $("#quantity").change(function(){
        var gg = $('#cartBody').find('tr');
        var sum = 0;
        for (var i = 0; i < gg.length; i++) {
            $(gg[i]).find("#allprice").text($(gg[i]).find("#quantity").val() * $(gg[i]).find("#price").text());
            sum += parseFloat($(gg[i]).find("#allprice").text());
        }
        $("#sum").html(sum.toFixed(2));
    }).change();
})