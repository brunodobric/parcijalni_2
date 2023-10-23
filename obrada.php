<?php

if (!empty($_POST)) {
    echo "Polje ne smije biti prazno!\n";
} 

function izbroji_samoglasnike()
{
    $broj_samoglasnika = 0;
    $samoglasnici = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    for ($i=0; $i<strlen($_POST["text"]); $i++) {
        if (in_array($_POST["text"][$i], $samoglasnici)) {
            $broj_samoglasnika++;
        }
    }
    return $broj_samoglasnika;
}

$words[] = [
    'rijec' => $_POST["text"],
    'broj_slova' => strlen($_POST["text"]),
    'broj_suglasnika' => strlen($_POST["text"]) - izbroji_samoglasnike(),
    'broj_samoglasnika' => izbroji_samoglasnike()
];

$wordsJson = json_encode($words);
file_put_contents('words.json', $wordsJson);

include 'parcijalni_ispit_2.php';