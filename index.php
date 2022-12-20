<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Таблицы PHP</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <table class="first">
        <div class="caption_1">Таблица истинности PHP</div>
<tr>
    <th>A</th>
    <th>B</th>
    <th>!A</th>
    <th>A || B</th>
    <th>A &&B</th>
    <th>A xor B</th>
</tr>
<tr>
    <td><?php echo $a = 0; ?></td>
    <td><?php echo $b = 0; ?></td>
    <td><?php echo var_export(!$a); ?></td>
    <td><?php echo var_export($a || $b); ?></td>
    <td><?php echo var_export($a && $b);?></td>
    <td><?php echo var_export($a xor $b);?></td>
</tr>
<tr>
    <td><?php echo $a = 0; ?></td>
    <td><?php echo $b = 1; ?></td>
    <td><?php echo var_export(!$a); ?></td>
    <td><?php echo var_export($a || $b); ?></td>
    <td><?php echo var_export($a && $b);?></td>
    <td><?php echo var_export($a xor $b);?></td>
</tr>
<tr>
    <td><?php echo $a = 1; ?></td>
    <td><?php echo $b = 0; ?></td>
    <td><?php echo var_export(!$a); ?></td>
    <td><?php echo var_export($a || $b); ?></td>
    <td><?php echo var_export($a && $b);?></td>
    <td><?php echo var_export($a xor $b);?></td>
</tr>
<tr>
    <td><?php echo $a = 1; ?></td>
    <td><?php echo $b = 1; ?></td>
    <td><?php echo var_export(!$a); ?></td>
    <td><?php echo var_export($a || $b); ?></td>
    <td><?php echo var_export($a && $b);?></td>
    <td><?php echo var_export($a xor $b);?></td>
</tr>
    </table>
    <table class="second">
        <div class="caption_2">Таблица <i>гибкого</i> сравнения PHP</div>
<tr>
    <th></th>
    <th><?php echo var_export($varTrue = true) ?></th>
    <th><?php echo var_export($varFalse = false) ?></th>
    <th><?php echo var_export($var1 = 1) ?></th>
    <th><?php echo var_export($var0 = 0) ?></th>
    <th><?php echo var_export($varNegative1 = -1) ?></th>
    <th><?php echo var_export($varString1 = "1") ?></th>
    <th><?php echo var_export($varNull = null) ?></th>
    <th><?php echo var_export($varPhp = "php") ?></th>
</tr>
<tr>
    <th><?php echo var_export($varTrue = true) ?></th>
    <td><?php echo var_export($varTrue == $varTrue)?></td>
    <td><?php echo var_export($varTrue == $varFalse); ?></td>
    <td><?php echo var_export($varTrue == $var1); ?></td>
    <td><?php echo var_export($varTrue == $var0);?></td>
    <td><?php echo var_export($varTrue == $varNegative1);?></td>
    <td><?php echo var_export($varTrue == $varString1);?></td>
    <td><?php echo var_export($varTrue == $varNull);?></td>
    <td><?php echo var_export($varTrue == $varPhp);?></td>
</tr>
<tr>
    <th><?php echo var_export($varFalse = false) ?></th>
    <td><?php echo var_export($varFalse == $varTrue)?></td>
    <td><?php echo var_export($varFalse == $varFalse)?></td>
    <td><?php echo var_export($varFalse == $var1)?></td>
    <td><?php echo var_export($varFalse == $var0)?></td>
    <td><?php echo var_export($varFalse == $varNegative1)?></td>
    <td><?php echo var_export($varFalse == $varString1)?></td>
    <td><?php echo var_export($varFalse == $varNull)?></td>
    <td><?php echo var_export($varFalse == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($var1 = 1) ?></th>
    <td><?php echo var_export($var1 == $varTrue)?></td>
    <td><?php echo var_export($var1 == $varFalse)?></td>
    <td><?php echo var_export($var1 == $var1)?></td>
    <td><?php echo var_export($var1 == $var0)?></td>
    <td><?php echo var_export($var1 == $varNegative1)?></td>
    <td><?php echo var_export($var1 == $varString1)?></td>
    <td><?php echo var_export($var1 == $varNull)?></td>
    <td><?php echo var_export($var1 == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($var0 = 0) ?></th>
    <td><?php echo var_export($var0 == $varTrue)?></td>
    <td><?php echo var_export($var0 == $varFalse)?></td>
    <td><?php echo var_export($var0 == $var1)?></td>
    <td><?php echo var_export($var0 == $var0)?></td>
    <td><?php echo var_export($var0 == $varNegative1)?></td>
    <td><?php echo var_export($var0 == $varString1)?></td>
    <td><?php echo var_export($var0 == $varNull)?></td>
    <td><?php echo var_export($var0 == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varNegative1 = -1) ?></th>
    <td><?php echo var_export($varNegative1 == $varTrue)?></td>
    <td><?php echo var_export($varNegative1 == $varFalse)?></td>
    <td><?php echo var_export($varNegative1 == $var1)?></td>
    <td><?php echo var_export($varNegative1 == $var0)?></td>
    <td><?php echo var_export($varNegative1 == $varNegative1)?></td>
    <td><?php echo var_export($varNegative1 == $varString1)?></td>
    <td><?php echo var_export($varNegative1 == $varNull)?></td>
    <td><?php echo var_export($varNegative1 == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varString1 = "1") ?></th>
    <td><?php echo var_export($varString1 == $varTrue)?></td>
    <td><?php echo var_export($varString1 == $varFalse)?></td>
    <td><?php echo var_export($varString1 == $var1)?></td>
    <td><?php echo var_export($varString1 == $var0)?></td>
    <td><?php echo var_export($varString1 == $varNegative1)?></td>
    <td><?php echo var_export($varString1 == $varString1)?></td>
    <td><?php echo var_export($varString1 == $varNull)?></td>
    <td><?php echo var_export($varString1 == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varNull = null) ?></th>
    <td><?php echo var_export($varNull == $varTrue)?></td>
    <td><?php echo var_export($varNull == $varFalse)?></td>
    <td><?php echo var_export($varNull == $var1)?></td>
    <td><?php echo var_export($varNull == $var0)?></td>
    <td><?php echo var_export($varNull == $varNegative1)?></td>
    <td><?php echo var_export($varNull == $varString1)?></td>
    <td><?php echo var_export($varNull == $varNull)?></td>
    <td><?php echo var_export($varNull == $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varPhp = "php") ?></th>
    <td><?php echo var_export($varPhp == $varTrue)?></td>
    <td><?php echo var_export($varPhp == $varFalse)?></td>
    <td><?php echo var_export($varPhp == $var1)?></td>
    <td><?php echo var_export($varPhp == $var0)?></td>
    <td><?php echo var_export($varPhp == $varNegative1)?></td>
    <td><?php echo var_export($varPhp == $varString1)?></td>
    <td><?php echo var_export($varPhp == $varNull)?></td>
    <td><?php echo var_export($varPhp == $varPhp)?></td>
</tr>
    </table>
    <table class="third">
        <div class="caption_3">Таблица <b>жесткого</b> сравнения PHP</div>
<tr>
    <th></th>
    <th><?php echo var_export($varTrue = true) ?></th>
    <th><?php echo var_export($varFalse = false) ?></th>
    <th><?php echo var_export($var1 = 1) ?></th>
    <th><?php echo var_export($var0 = 0) ?></th>
    <th><?php echo var_export($varNegative1 = -1) ?></th>
    <th><?php echo var_export($varString1 = "1") ?></th>
    <th><?php echo var_export($varNull = null) ?></th>
    <th><?php echo var_export($varPhp = "php") ?></th>
</tr>
<tr>
    <th><?php echo var_export($varTrue = true) ?></th>
    <td><?php echo var_export($varTrue === $varTrue)?></td>
    <td><?php echo var_export($varTrue === $varFalse); ?></td>
    <td><?php echo var_export($varTrue === $var1); ?></td>
    <td><?php echo var_export($varTrue === $var0);?></td>
    <td><?php echo var_export($varTrue === $varNegative1);?></td>
    <td><?php echo var_export($varTrue === $varString1);?></td>
    <td><?php echo var_export($varTrue === $varNull);?></td>
    <td><?php echo var_export($varTrue === $varPhp);?></td>
</tr>
<tr>
    <th><?php echo var_export($varFalse = false) ?></th>
    <td><?php echo var_export($varFalse === $varTrue)?></td>
    <td><?php echo var_export($varFalse === $varFalse)?></td>
    <td><?php echo var_export($varFalse === $var1)?></td>
    <td><?php echo var_export($varFalse === $var0)?></td>
    <td><?php echo var_export($varFalse === $varNegative1)?></td>
    <td><?php echo var_export($varFalse === $varString1)?></td>
    <td><?php echo var_export($varFalse === $varNull)?></td>
    <td><?php echo var_export($varFalse === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($var1 = 1) ?></th>
    <td><?php echo var_export($var1 === $varTrue)?></td>
    <td><?php echo var_export($var1 === $varFalse)?></td>
    <td><?php echo var_export($var1 === $var1)?></td>
    <td><?php echo var_export($var1 === $var0)?></td>
    <td><?php echo var_export($var1 === $varNegative1)?></td>
    <td><?php echo var_export($var1 === $varString1)?></td>
    <td><?php echo var_export($var1 === $varNull)?></td>
    <td><?php echo var_export($var1 === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($var0 = 0) ?></th>
    <td><?php echo var_export($var0 === $varTrue)?></td>
    <td><?php echo var_export($var0 === $varFalse)?></td>
    <td><?php echo var_export($var0 === $var1)?></td>
    <td><?php echo var_export($var0 === $var0)?></td>
    <td><?php echo var_export($var0 === $varNegative1)?></td>
    <td><?php echo var_export($var0 === $varString1)?></td>
    <td><?php echo var_export($var0 === $varNull)?></td>
    <td><?php echo var_export($var0 === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varNegative1 = -1) ?></th>
    <td><?php echo var_export($varNegative1 === $varTrue)?></td>
    <td><?php echo var_export($varNegative1 === $varFalse)?></td>
    <td><?php echo var_export($varNegative1 === $var1)?></td>
    <td><?php echo var_export($varNegative1 === $var0)?></td>
    <td><?php echo var_export($varNegative1 === $varNegative1)?></td>
    <td><?php echo var_export($varNegative1 === $varString1)?></td>
    <td><?php echo var_export($varNegative1 === $varNull)?></td>
    <td><?php echo var_export($varNegative1 === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varString1 = "1") ?></th>
    <td><?php echo var_export($varString1 === $varTrue)?></td>
    <td><?php echo var_export($varString1 === $varFalse)?></td>
    <td><?php echo var_export($varString1 === $var1)?></td>
    <td><?php echo var_export($varString1 === $var0)?></td>
    <td><?php echo var_export($varString1 === $varNegative1)?></td>
    <td><?php echo var_export($varString1 === $varString1)?></td>
    <td><?php echo var_export($varString1 === $varNull)?></td>
    <td><?php echo var_export($varString1 === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varNull = null) ?></th>
    <td><?php echo var_export($varNull === $varTrue)?></td>
    <td><?php echo var_export($varNull === $varFalse)?></td>
    <td><?php echo var_export($varNull === $var1)?></td>
    <td><?php echo var_export($varNull === $var0)?></td>
    <td><?php echo var_export($varNull === $varNegative1)?></td>
    <td><?php echo var_export($varNull === $varString1)?></td>
    <td><?php echo var_export($varNull === $varNull)?></td>
    <td><?php echo var_export($varNull === $varPhp)?></td>
</tr>
<tr>
    <th><?php echo var_export($varPhp = "php") ?></th>
    <td><?php echo var_export($varPhp === $varTrue)?></td>
    <td><?php echo var_export($varPhp === $varFalse)?></td>
    <td><?php echo var_export($varPhp === $var1)?></td>
    <td><?php echo var_export($varPhp === $var0)?></td>
    <td><?php echo var_export($varPhp === $varNegative1)?></td>
    <td><?php echo var_export($varPhp === $varString1)?></td>
    <td><?php echo var_export($varPhp === $varNull)?></td>
    <td><?php echo var_export($varPhp === $varPhp)?></td>
</tr>
    </table>
    <div class="conclusion"><b>Вывод:</b> при <i>гибком</i> сравнении переменных с разными типами(строка и целое число и т.д.) после их преобразования значение может быть "true", так как сравнение не является строгим и
         пытается сравнить между собой значения разных типов переменных(подробнее о том, как именно происходит преобразование определенных типов, показано в таблице <a href="https://www.php.net/manual/ru/language.operators.comparison.php">официальной документации PHP</a>), а в случае <b>жёсткого</b> сравнения, сравнение окажется истинным только если переменные равны друг другу и имеют тот же тип.     </div>
</body>