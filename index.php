<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 13.07.2018
 * Time: 20:59
 */

$text = file_get_contents(__DIR__ . '/addressbook.json');
$persons = json_decode($text, true);
//var_dump($text); exit;

?>

<html>
<head>
    <title>Адресная книга</title>
    
    <style>
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        thead {
          background: lightgoldenrodyellow;
          text-align: center;
        }
        td {
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>

<body>
<table>
    <thead>
    <tr>
        <td><em>Имя</em></td>
        <td><em>Фамилия</em></td>
        <td><em>Адрес</em></td>
        <td><em>Тел. номер</em></td>
    </tr>
    </thead>
    <?php foreach ($persons as $person) { ?>
        <tr>
            <td><?php echo $person['firstName'];?></td>
            <td><?php echo $person['lastName'];?></td>
            <td><?php echo $person['address'];?></td>
            <td><?php echo $person['phoneNumber'];?></td>
        </tr>
    
    <?php } ?>
</table>

</body>
</html>