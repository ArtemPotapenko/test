<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LAB1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='src/main.css'>
    <script src='src/main.js'></script>
    <script src='src/main.php'></script>
</head>
<body>

       <header>Потапенко Артем Денисович <br>
        P32312, 336773 <br>
        Вриант 3314</header>
        <form method="POST" action="src/main.php">
    <table id="main">

<tr><td rowspan="3" ><img src="src/image.jpg" alt="Временная недоступность изображения"></td><td class="choice">
   <label><a>Введите X:<br></a><textarea placeholder="Значение от -5 до 3..." name="x" ></textarea></label>
</td><td><table id="table" border="1" width="400px">
    <thead>
    <tr id="resulttable">
        <th>X</th>
        <th>Y</th>
        <th>R</th>
        <th>Результат</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</td></tr><tr><td id="y" class="choice">
    <a>Выберете Y: </a>
<label>
    <br>
    <input id="y" class="point" name="y" value="" type="hidden">
    <button id="y" class="point" name="y" value="-3" type="submit" >-3</button>
    <input id="y" class="point" name="y" value="-2" type="submit" >
    <input id="y" class="point" name="y" value="-1" type="submit" >
    <input id="y" class="point" name="y" value="0" type="submit" >
    <br id="y">
    <input id="y" class="point" name="y" value="1" type="submit" >
    <input id="y" class="point" name="y" value="2" type="submit" >
    <input id="y" class="point" name="y" value="3" type="submit" >
    <input id="y" class="point" name="y" value="4" type="submit" >
    <input id="y" class="point" name="y" value="5"type="submit" >
</label>
</tr>
<tr><td id="R" class="choice"><a>Выберете R: </a>
    <label>
        <br>
        <input id="r" class="point" name="r" value="" type="hidden">
    <input id="R" class="point" name="r" value="1.0" type="submit" >
    <input id="R" class="point" name="r" value="1.5" type="submit" >
    <input id="R" class="point" name="r" value="2.0" type="submit" >
    <input id="R" class="point" name="r" value="2.5" type="submit" >
    <input id="R" class="point" name="r" value="3.0" type="submit" >
</label>
</td>

</tr></table>

</body>
<button class="check" type="submit">
    <b>CHECK</b>
</button>
</form>
</html>