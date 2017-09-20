<?php
 $myName = 'Долгополова Ольга';
 $myAge = 35;
 $myAddress = 'Можайск';
 $myEmail = 'olgusha0707@mail.ru';
 $myProfession = 'Программист';
 $married = 'Замужем';
 $countChild = 2;
?>

<html>
<body>
    <div>
        <h2>Информация обо мне</h2>
        <table>
            <tr>
                <td>Фамилия и Имя</td>
                <td><?=$myName ?></td>
            </tr>
            <tr>
                <td>Возраст</td>
                <td><?=$myAge ?></td>
            </tr>
            <tr>
                <td>Город</td>
                <td><?=$myAddress ?></td>
            </tr>
            <tr>
                <td>Электронная почта</td>
                <td><?=$myEmail ?></td>
            </tr>
            <tr>
                <td>Профессия</td>
                <td><?=$myProfession ?></td>
            </tr>
            <tr>
                <td>Семейное положение</td>
                <td><?=$married ?></td>
            </tr>
            <tr>
                <td>Количество детей</td>
                <td><?=$countChild ?></td>
            </tr>
        </table>
    </div>
</body>
</html>


