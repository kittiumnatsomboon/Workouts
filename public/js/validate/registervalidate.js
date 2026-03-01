$().ready(function () {
    $("#formregister").validate({
        rules: {
            firstname:{
                required: true,
                minlength:5,
            },
            lastname: {
                required: true,
                minlength:5,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirmpassword: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            firstname:{
                required:"กรุณาระบุชื่อ",
                minlength:"อักษรต่ำสุด 5 ตัวอักษร",
            },
            lastname:{
                required:"กรุณาระบุนามสกุล",
                minlength:"อักษรต่ำสุด 5 ตัวอักษร",
            },
            email: "กรุณาระบุอีเมลล์แอดเดรส",
            password: {
                required: "กรุณาระบุรหัสผ่าน",
                minlength: "รหัสผ่านอักษรขั้นต่ำ 5 ตัวอักษร"
            },
            confirmpassword: {
                required: "กรุณาระบุรหัสผ่าน",
                minlength: "รหัสผ่านอักษรขั้นต่ำ 5 ตัวอักษร",
                equalTo: "กรุณาระบุรหัสผ่านให้เหมือนกับอันบน"
            },
        }
    });
    $.ajax({
        
    })

});
