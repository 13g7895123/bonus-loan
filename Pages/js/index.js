// init
$('input[name="name"]').val('');
$('input[name="phone"]').val('');
$('input[name="amount"]').val('');
$('textarea[name="remark"]').val('');

// submit button
$('#btn_submit').click(() => {
    // get value
    var name = $('input[name="name"]').val();
    var sex = $('select[name="sex"]').find(':selected').val();
    var phone = $('input[name="phone"]').val();
    var amount = $('input[name="amount"]').val();
    var cate = $('select[name="cate"]').find(':selected').text();
    var location = $('select[name="location"]').find(':selected').text();
    var remark = $('textarea[name="remark"]').val();

    // check value
    if (name == '' || phone == '' || amount == ''){
        alert('請確認必填項目是否有正確填寫');
    }else if(!phone.match(/^09[0-9]{8}$/)){
        alert('手機號碼有誤，請重新確認');
    }else{
        $.ajax({
            type: "POST",
            url: `../Pages/ajax/index.php?action=submit`,
            // url: `./ajax/index.php?action=submit`,
            // url: `./Pages/ajax/index.php?action=submit`,
            // url: `../ajax/index.php?action=submit`,
            // url: `http://ezloan777.com/ajax.php?action=submit`,
            dataType: 'JSON',
            async: false,
            data: {
                name: name, 
                sex: sex, 
                phone: phone, 
                amount: amount, 
                cate: cate, 
                location: location, 
                remark: remark 
            },
            success: function (response) {
                if(response.success){
                    alert('非常感謝，客服將會用最快的速度與您聯繫');
                }else{
                    alert(response.msg);
                }      
            }
        });
    }
})

// sidebar 效果
$('#right_menu_x').click(()=>{
    $('#right_menu').addClass('hidden')
    $('#right_menu').removeClass('fixed')
})

$('#btn_burger').click(()=>{
    $('#right_menu').addClass('fixed')
    $('#right_menu').removeClass('hidden')
})

// 滾動動畫
$("#nav_btn a").bind("click",function(){

    var link = $(this).attr("link");

    // 取得目標區塊的y座標
    var target_top = $("#" + link).offset().top;

    // 取得body物件 這種寫法在各瀏覽器上最保險
    var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

    // 移動捲軸無動畫效果
          //$body.scrollTop(target_top);

    // 移動捲軸有動畫效果
          $body.animate({
                scrollTop: target_top
          }, 800);

})