// ボタンを押したらデザインが変更する（イベント編）
'use strict';
$(function(){
    

$(function(){
    var a =$('.btn'),
    o = $('.eventkind');
    a.on('click',function(){
        a.removeClass('active'),
        $(this).addClass('active');
     var e = $(this).data('group');   
     o.fadeOut(300),
     $('#table [data-group*=' + e + ']').fadeIn(300)
    })
});                 
    


// moment.jsの時刻表示
function showTime() {
    var now = moment();
    document.getElementById("schedule-item")(now.format("MM/DD(ddd) HHH:mm:ss"))
};


 });