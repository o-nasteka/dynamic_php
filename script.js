n = '838102050' // Присваивание 'n' строкового значения
document.write('n = ' + n + ', и имеет тип ' + typeof n + '<br>');
n = 12345 * 67890; // Присваивание 'n' числа
document.write('n = ' + n + ', и имеет тип ' + typeof n + '<br>');
n += ' плюс текст' // Изменение типа 'n' с числового на строковое
document.write('n = ' + n + ', и имеет тип ' + typeof n + '<br><br><br>');


function product(a, b)
{
    return a*b;
}


document.write( product(12,5) );