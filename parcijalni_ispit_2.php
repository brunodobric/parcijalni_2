<!DOCTYPE php>

<?php

$wordsJson = file_get_contents('words.json');
$words = json_decode($wordsJson, true);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
        h1 {text-align: center;}
        .row {
        display: flex;
        margin-left:-5px;
        margin-right:-5px;
        }
        .column {
        flex: 50%;
        padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Upišite željenu riječ</h1>

    <div class="row">
        <div class="column">
            <form action=obrada.php method="post">
                <label>Upišite riječ:</label>
                <br><br>
                <input type="text" name="text" />
                <br><br>
                <input type="submit" value="Pošalji" />
            </form>
        </div>
        <div class="column">
            <table>
                <thead>
                    <tr>
                        <th>Rijec</th>
                        <th>Broj slova</th>
                        <th>Broj suglasnika</th>
                        <th>Broj samoglasnika</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($words as $word) : ?>
                        <tr>
                            <td><?= $words[0]['rijec'] ?></td>
                            <td><?= $words[0]['broj_slova'] ?></td>
                            <td><?= $words[0]['broj_suglasnika'] ?></td>
                            <td><?= $words[0]['broj_samoglasnika'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
