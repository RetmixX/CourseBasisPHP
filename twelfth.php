<?php
function authUser($login, $password){
    $abstractDB = [
        "user1"=>[
            "login"=>"retmix",
            "password"=>"12345"
        ],

        "user2"=>[
            "login"=>"admin",
            "password"=>"qwerty"
        ]
    ];

    foreach($abstractDB as $value){
        if ($value["login"]==$login&&$value["password"]==$password){
            return true;
        }
    }
    return false;
}

$login = !empty($_GET["login"])?$_GET["login"]:"";
$password = !empty($_GET["password"])?$_GET["password"]:"";

echo "<h1>"."Информация"."<br>";
if (authUser($login, $password)) echo "Вы успешно вошли!";
else echo "Авторизация провалена!";