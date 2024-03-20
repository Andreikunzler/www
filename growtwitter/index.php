<?php

use Models\admin;
use Models\user;
use Models\tweet;
use Database\database;
use Models\like;
use Models\reply;

require_once './Utils/functions.php';
require_once './Database/database.php';
require_once './Models/roles.php';
require_once './Models/user.php';
require_once './Models/admin.php';
require_once './Models/tweet.php';
require_once './Models/like.php';
require_once './Models/reply.php';

echo '<pre>';
echo "<h1>Grow Twitter</h1>";


$db = new Database([
  'tweets' => [],
  'accounts' => [],
]);



$user1 = new User('joaosilva', 'joao@email.com', '123');
$user2 = new User('mariagarcia', 'maria@email.com', '123');
$user3 = new User('lucassantos', 'lucas@email.com', '123');
$user4 = new User('anamaria23', 'ana@email.com', '123');
$user5 = new User('carlota1976', 'carlota@email.com', '123');
$user6 = new User('pedroalmeida', 'pedro@email.com', '123');

$adm1 = new Admin('valentinajuwer', 'valentina@email.com', '123');
$adm2 = new Admin('valentinajuwer2', 'valentina2@email.com', '123'); 


$adm1->blockUser($user4);


$user1->follow($user3);
$user1->follow($user6);
$user3->follow($user1);
$user2->follow($user5);
$user5->follow($user1);


$db->persist('accounts', $user1);
$db->persist('accounts', $user2);
$db->persist('accounts', $user3);
$db->persist('accounts', $user4);
$db->persist('accounts', $user5);
$db->persist('accounts', $user6);
$db->persist('accounts', $adm1);
$db->persist('accounts', $adm2);


$tweet = new Tweet($user1, "Vamos fazer uma trilha neste fim de semana!");
$tweet1 = new Tweet($user1, "Quem mais gosta de comida italiana?");
$tweet2 = new Tweet($user3, "Aprender JavaScript é muito empolgante!");
$tweet3 = new Tweet($user2, "Acabei de assistir a um ótimo filme! #NoiteDeFilme");
$tweet5 = new Tweet($user6, "Planejando uma viagem de carro com amigos!");

$db->persist('tweets', $tweet);
$db->persist('tweets', $tweet1);
$db->persist('tweets', $tweet2);
$db->persist('tweets', $tweet3);
$db->persist('tweets', $tweet5);


$like1 = new Like($user2->getName(), $user2->getId(), $tweet->getId());
$like2 = new Like($user3->getName(), $user3->getId(), $tweet->getId());
$like3 = new Like($user5->getName(), $user5->getId(), $tweet->getId());
$like4 = new Like($user1->getName(), $user1->getId(), $tweet3->getId());
$like5 = new Like($user3->getName(), $user3->getId(), $tweet1->getId());
$like6 = new Like($user2->getName(), $user2->getId(), $tweet5->getId());
$like7 = new Like($user1->getName(), $user1->getId(), $tweet5->getId());

$tweet->giveLike($like2);
$tweet->giveLike($like3);
$tweet->giveLike($like1);
$tweet1->giveLike($like5);
$tweet3->giveLike($like4);
$tweet5->giveLike($like6);
$tweet5->giveLike($like7);


$reply1 = new Reply("Parece um ótimo plano!", $tweet->getId(), $user3->getName());
$reply2 = new Reply("Conte comigo!", $tweet->getId(), $user6->getName());
$reply3 = new Reply("Eu gostaria de poder participar!", $tweet5->getId(), $user1->getName());

$tweet->reply($reply1);
$tweet->reply($reply2);
$tweet5->reply($reply3);

echo "<h2>Listagem dos tweets</h2>";
Tweet::listAll($db->getAll('tweets'));


echo "<hr>";
echo "<h2>Feed do Usuário</h2>";

$tweets = $db->getAll('tweets');
User::showFeed($user1->getId(), $user1->getFollowing(), $tweets);

