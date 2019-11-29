<?php
// 攻撃されないための、関数定義文
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}