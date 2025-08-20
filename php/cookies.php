<?php
/*
    Cookies: - save data in remote browser
    - You can retrieve it when the user visit the site again
    */
//save data to cookie
setcookie('name','Tuong',time()+24*3600);
// after 1 day, cookie will be expired
// 1 day = 24h * 60m * 60s = 86400s

// Khi echo thì echo chạy → PHP gửi dữ liệu ra trình duyệt → headers bị khoá → setcookie() không thể thêm cookie nữa.
// Bắt buộc phải setcookies trước khi echo (dữ liệu ra)
// Trong PHP, cookie và header phải được gửi trước bất kỳ dữ liệu nào ra trình duyệt.
echo "Cookies in PHP";

?>