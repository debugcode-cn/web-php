<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
$url_in = site_url(array('c'=>'sign','m'=>'in','from'=>'in'));
$url_up = site_url(array('c'=>'sign','m'=>'up','from'=>'up'));
$url_forget = site_url(array('c'=>'sign','m'=>'forget','from'=>'forget'));

?>

<div class="dowebok" id="dowebok">
    <div class="form-container sign-up-container">
        <form action="<?=$url_up?>" method="post">
            <h1>注册</h1>
            <input name="nickname" type="hidden" placeholder="昵称">
            <input name="email" type="email" placeholder="电子邮箱">
            <input name="password" type="password" placeholder="密码">
            <button type="submit">注册</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="<?=$url_in?>" method="post">
            <h1>登录</h1>
            <input name="email" type="email" placeholder="电子邮箱">
            <input name="password" type="password" placeholder="密码">
            <button type="submit">登录</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>已有帐号？</h1>
                <p>请使用您的帐号进行登录</p>
                <button class="ghost" id="signIn">登录</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>没有帐号？</h1>
                <p>立即注册加入我们，和我们一起开始旅程吧</p>
                <button class="ghost" id="signUp">注册</button>
            </div>
        </div>
    </div>
</div>