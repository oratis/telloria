<?php
// 检查是否有表单提交
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 获取电子邮件地址
    $email = $_POST['email'];

    // 打开或创建文件并写入电子邮件地址
    $file = fopen('email.txt', 'a');
    fwrite($file, $email. "\n");
    fclose($file);

    echo 'Email saved successfully!';
}
?>