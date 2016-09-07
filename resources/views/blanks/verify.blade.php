<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Kích hoạt email của bạn</h2>
<div>
    Cảm ơn bạn đã tạo tài khoản, vui lòng nhấp vào link để kích hoạt tài khoản
    {{ action('Auth\AuthController@verify',['confirm_code' => $confirm_code]) }}.<br/>
</div>
</body>
</html>