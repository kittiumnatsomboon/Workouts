<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            
            <header class="login-card__header">
                <img class="login-card__logo" 
                    src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
                </header>

                <form class="login-form" id="formregister" action="{{route('/signin')}}" method="post">
                    @csrf

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
                    <div class="login-form__actions">
                        <input class="login-form__button login-form__button--primary" 
                            type="submit" value="เข้าสู่ระบบ">
                    </div>
                </form>
            <footer class="login-card__footer">
            <a class="login-card__link" href="#">ลืมรหัสผ่าน?</a>
            </footer>
        </div>
    </div>
    <script src="{{asset('js/lib/jquery.js')}}"></script>
	<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
	<script src="{{asset('js/validate/registervalidate.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>