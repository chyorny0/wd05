<?

function my_pow($num, $exp)
{
    if (gettype($num) == "string" || gettype($exp) == "string") {
        return "Неверный тип данных";
    }
    return $num ** $exp;
}
echo my_pow(6, 2) . "<br>";


function check_str_lower($str)
{
    if (gettype($str) != "string") {
        return "Неверный тип данных";
    }
    if (mb_strtolower($str) == $str) {
        return true;
    } else {
        return false;
    }
}
var_dump(check_str_lower("ez"));


function create_rand_array(int $len)
{
    if ($len <= 0) {
        return "Такой массив не получиться сгенерировать";
    }
    $arr = [];
    for ($i = 0; $i < $len; $i++) {
        $arr[$i] = random_int(0, 100);
    }
    return $arr;
}
echo "<pre>";
print_r(create_rand_array(4));
echo "<pre>";


function get_day_name(int $numDay)
{
    if ($numDay > 7 || $numDay < 1) {
        return "Дня с таким номером не сущесвтует";
    }
    $week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return $week[$numDay - 1];
}
echo get_day_name(7) . "<br>";


function n_fib(int $n)
{
    if ($n <= 0) {
        return "Такого числа Фибоначчи не существует";
    }
    $fib_now = 0;
    $fib_next = 1;
    for ($i = 1; $i < $n; $i++) {
        $fib_sum = $fib_now + $fib_next;
        $fib_now = $fib_next;
        $fib_next = $fib_sum;
    }
    return $fib_now;
}
echo n_fib(23);
