<?php
echo "Welke hoofdstad heeft Japan?" . PHP_EOL;
$japan = readline(">");
$nummer = 0;

if ($japan === "Tokyo"){
    echo "correct!" . PHP_EOL;
    $nummer++;
} else {
    echo "Helaas, het goede antwoord is Tokyo." . PHP_EOL;
}

echo "Welke hoofdstad heeft Mexico?" . PHP_EOL;
$mexico = readline(">");

if ($mexico === "Mexico City"){
    echo "correct!" . PHP_EOL;
    $nummer++;
} else {
    echo "Helaas, het goede antwoord is Mexico City." . PHP_EOL;
}

echo "Welke hoofdstad heeft de USA?" . PHP_EOL;
$usa = readline(">");

if ($usa === "Washington D.C."){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Washington D.C." . PHP_EOL;
}

echo "Welke hoofdstad heeft India?" . PHP_EOL;
$india = readline(">");

if ($india === "New Delhi"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is New Delhi." . PHP_EOL;
}

echo "Welke hoofdstad heeft Zuid-Korea?" . PHP_EOL;
$korea = readline(">");

if ($korea === "Seoul"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Seoul." . PHP_EOL;
}

echo "Welke hoofdstad heeft China?" . PHP_EOL;
$china = readline(">");

if ($china === "Peking"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Peking." . PHP_EOL;
}

echo "Welke hoofdstad heeft Nigeria?" . PHP_EOL;
$nigeria = readline(">");

if ($nigeria === "Abuja"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Abuja." . PHP_EOL;
}

echo "Welke hoofdstad heeft Argentina?" . PHP_EOL;
$argentina = readline(">");

if ($argentina === "Buenos Aires"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Buenos Aires." . PHP_EOL;
}

echo "Welke hoofdstad heeft Egypt?" . PHP_EOL;
$egypt = readline(">");

if ($egypt === "Cairo"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is Cairo." . PHP_EOL;
}

echo "Welke hoofdstad heeft de UK?" . PHP_EOL;
$uk = readline(">");

if ($uk === "London"){
    echo "correct!" . PHP_EOL;
    $nummer++;
}else {
    echo "Helaas, het goede antwoord is London." . PHP_EOL;
}

echo "Je hebt ", $nummer, " van de 10 goed geraden!";