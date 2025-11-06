<?php
if (!function_exists('renderLogoButton')) {
    function renderLogoButton($src, $alt = '', $link = '/')
    {
        return '
        <a href="' . esc($link) . '" class="logo-btn">
            <img src="' . esc($src) . '" alt="' . esc($alt) . '">
        </a>';
    }
}
?>

<style>
    .logo-btn {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .logo-btn img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .logo-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }
</style>