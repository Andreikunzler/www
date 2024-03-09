<?php
require_once('./camarote.php');
require_once('./ingresso.php');
require_once('./vip.php');
$ingresso_normal = new Normal(50.00);
$ingresso_normal->imprimeValor();

$ingresso_vip = new VIP(50.00, 20.00);
$ingresso_vip->imprimeValor();

$ingresso_camarote = new Camarote(50.00, 30.00);
$ingresso_camarote->imprimeValor();