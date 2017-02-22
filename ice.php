<form action="ice.php" method="post">
    Ванильное <input type="checkbox" name="ice[]" value="Vanilla"> <br/>
    Шоколадное <input type="checkbox" name="ice[]" value="Chocolate"> <br/>
    Земляничное <input type="checkbox" name="ice[]" value="Strawberry"> <br/>
    <input type="hidden" name="submitted" value="yes">
    <input type="submit" value="Send"/>
</form>


<?php

if ( isset($_POST['ice']) && $_POST['ice'] !== 0 ) {

    $ice = $_POST['ice'];
    foreach ($ice as $item) echo $item."<br>";
} else echo "Выберите мороженое!<br>";

if (isset($_POST['submitted']))
{
    echo "<br>Форма отправлена<br>";
}

?>
<br/>
Овощи <select name="veg" size="1">
    <option value="Горох">Горох</option>
    <option value="Фасоль">Фасоль</option>
    <option value="Морковь">Морковь</option>
    <option value="Капуста">Капуста</option>
    <option value="Брокколи">Брокколи</option>
</select>

<br/>
<br/>

<label>8.00-12.00<input type="radio" name="time" value="1"></label>