<?

include_once "Worker_1.php";
include_once "Worker_2.php";
include_once "Form.php";
include_once "SmartForm.php";
include_once "Cookie.php";
include_once "Session.php";


//task 2

$person1_1 = new Worker_1();
$person1_1->setName("Ivan");
$person1_1->setAge(25);
$person1_1->setSalary(1000);

$person1_2 = new Worker_1();
$person1_2->setName("Vasya");
$person1_2->setAge(26);
$person1_2->setSalary(2000);

echo $person1_1->getSalary() + $person1_2->getSalary() . "<br>";
echo $person1_1->getAge() + $person1_2->getAge() . "<br>";


//task 4

$person2_1 = new Worker_2("Dima", 25, 1000);
echo $person2_1->getAge() * $person2_1->getSalary() . "<br>";


//task 7-8

$form1 = new SmartForm;
echo $form1->open(["method" => "POST", "action" => ""]);
echo $form1->input(["type" => "text", "placeholder" => "Your name...", "name" => "name"]);
echo $form1->input(["type" => "password", "placeholder" => "Your password...", "name" => "password"]);
echo $form1->textarea(["placeholder" => "Your message...", "name" => "message"]);
echo $form1->button(["type" => "submit", "value" => "Send"]);
echo $form1->close();


//task 9

$cookie = new Cookie;
$cookie->setCookie("key", "val");
$cookie->unSetCookie("key");
print_r($_COOKIE);


//task 10

$session = new Session;
$session->setSession("ANDREY", "GL");
$session->unSetSsession("ANDREY");
print_r($_SESSION);
