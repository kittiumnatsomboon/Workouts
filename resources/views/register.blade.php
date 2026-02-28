<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <title>Document</title>
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            
            <header class="login-card__header">
                <img class="login-card__logo" 
                    src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
                </header>

                <form class="login-form" action="{{route('/signup')}}" method="post">
                    @csrf
                    <div class="login-form__group">
                        <label class="login-form__label" for="firstname">ชื่อ</label>
                        <input class="login-form__input" 
                            type="text" 
                            name="firstname"
                            id="firstname"
                            placeholder="กรุณาระบุชื่อ"
                            >
                    </div>

                    <div class="login-form__group">
                        <label class="login-form__label" for="lastname">นามสกุล</label>
                        <input class="login-form__input" 
                            type="text" 
                            name="lastname"
                            id="lastname"
                            placeholder="กรุณาระบุนามสกุล"
                            >
                    </div>

                    <div class="login-form__group">
                        <label class="login-form__label" for="email">ที่อยู่อีเมลล์</label>
                        <input class="login-form__input" 
                            type="text" 
                            name="email"
                            id="email"
                            placeholder="กรุณาระบุที่อยู่อีเมลล์"
                            >
                    </div>
                    
                    <div class="login-form__group">
                        <label class="login-form__label" for="password">รหัสผ่าน</label>
                        <input class="login-form__input" 
                            type="password" 
                            name="password"
                            id="password"
                            placeholder="กรุณาระบุรหัสผ่าน"
                            >
                    </div>

                    <div class="login-form__group">
                        <label class="login-form__label" for="confirmpassword">ยืนยันรหัสผ่าน</label>
                        <input class="login-form__input" 
                            type="password" 
                            name="confirmpassword"
                            id="confirmpassword"
                            placeholder="กรุณาระบุยืนยันรหัสผ่าน"
                        >
                    </div>
                    @if(session('success'))
                        <div class="message">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="login-form__actions">
                        <input class="login-form__button login-form__button--primary" 
                            type="submit" value="สมัครสมาชิก">
                    </div>
                </form>
            <footer class="login-card__footer">
            <a class="login-card__link" href="#">ลืมรหัสผ่าน?</a>
            </footer>
        </div>
    </div>
</body>
</html>