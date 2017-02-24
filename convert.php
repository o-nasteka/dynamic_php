<?php // convert.php

$f = $c = '';
if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

if($c != '' && $f != ''){
    $out = "Укажите только 1 значение!";
    $c = '';
    $f = '';
}
elseif ($f != '')
{
    $c = intval((5 / 9) * ($f - 32));
    $out = "$f °f равно $c °c";
}
elseif($c != '')
{
    $f = intval((9 / 5) * $c + 32);
    $out = "$c °c равно $f °f";
}
else $out = "";

end:

echo <<<_END
<html>
<head>
    <title>Программа перевода температуры</title>
</head>
<body>
    <pre>
        Введите температуру по Фаренгейту или по Цельсию
        и нажмите кнопку Перевести <br>
        <strong>$out</strong>
        <form method="post" action="convert.php">
            По Фаренгейту <input type="text" name="f" size="7">
            По цельсию <input type="text" name="c" size="7">
            <input type="submit" value="Перевести">
        </form>
    </pre>
</body>
</html>
_END;

function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
?>


Выберите нужный сайт:
<input type='url' name='site' list='links'>
<datalist id='links'>
    <option label='Google' value='http://google.com'>
    <option label='Yahoo!' value='http://yahoo.com'>
    <option label='Bing' value='http://bing.com'>
    <option label='Ask' value='http://ask.com'>
</datalist>
<br/>

<input type='time' name='alarm' value='07:00' min='05:00' max='09:00'>
<br/>

<input type='time' name='meeting' value='12:00'
       min='09:00' max='16:00' step='3600'>

<br/>
<input type='color' name='color' value="#fafafa">

<br/>
<input type='time' name='time' value='12:34'>

<br/>

<form method="post"
      enctype="application/x-www-form-urlencoded"
      action="https://pizza.example.com/order.cgi">
    <p><label>Customer name: <input name="custname"></label></p>
    <p><label>Telephone: <input type=tel name="custtel"></label></p>
    <p><label>E-mail address: <input type=email name="custemail"></label></p>
    <fieldset>
        <legend> Pizza Size </legend>
        <p><label> <input type=radio name=size value="small"> Small </label></p>
        <p><label> <input type=radio name=size value="medium"> Medium </label></p>
        <p><label> <input type=radio name=size value="large"> Large </label></p>
    </fieldset>
    <fieldset>
        <legend> Pizza Toppings </legend>
        <p><label> <input type=checkbox name="topping" value="bacon"> Bacon </label></p>
        <p><label> <input type=checkbox name="topping" value="cheese"> Extra Cheese </label></p>
        <p><label> <input type=checkbox name="topping" value="onion"> Onion </label></p>
        <p><label> <input type=checkbox name="topping" value="mushroom"> Mushroom </label></p>
    </fieldset>
    <p><label>Preferred delivery time: <input type=time min="11:00" max="21:00" step="900" name="delivery"></label></p>
    <p><label>Delivery instructions: <textarea name="comments"></textarea></label></p>
    <p><button>Submit order</button></p>
</form>
