<?php

function mysql_fatal_error($msg)
{
$msg2 = mysql_error();
echo <<< _END
<br>
<br>
К сожалению, завершить запрашиваемую задачу не представилось возможным. <br>
Было получено следующее сообщение об ошибке: <br>
<p>$msg: $msg2</p>
Пожалуйста, нажмите кнопку возврата вашего браузера <br>
и повторите попытку. Если проблемы не прекратятся, <br>
пожалуйста, <a href="mailto:admin@server.com">сообщите о них
    нашему администратору </a>.

    <br>
    <br>
    Спасибо.
_END;
}

