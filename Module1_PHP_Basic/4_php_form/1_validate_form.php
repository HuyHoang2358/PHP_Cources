<?php

function validateName($name)
{
    if (empty($name)) {
        return "Họ và tên không được để trống";
    }

    if (preg_match("/[^a-zA-Z\s]/", $name)) {
        return "Họ và tên chỉ được chứa chữ cái và khoảng trắng";
    }

    $words = explode(" ", $name);
    if (count($words) < 2) {
        return "Họ và tên cần ít nhất 2 từ";
    }

    return "";
}

function validateEmail($email)
{
    if (empty($email)) {
        return "Email không được để trống";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email không hợp lệ";
    }

    return "";
}

function validatePassword($password)
{
    if (strlen($password) < 8) {
        return "Mật khẩu phải có ít nhất 8 ký tự";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        return "Mật khẩu phải chứa ít nhất một chữ cái viết hoa, một chữ cái viết thường, một số và một ký tự đặc biệt";
    }

    return "";
}