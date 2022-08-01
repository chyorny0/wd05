<?

class SmartForm extends Form
{

    public function input($arr)
    {
        $atrib = self::strFromArr($arr);
        if (!empty($_POST)) {
            if ($arr["type"] == "password") {
                $password = "value=" . $_POST['password'];
                $atrib = $atrib . $password;
                return "<input $atrib>";
            }
            $name = "value=" . $_POST['name'];
            $name = "value=" . $_POST['name'];
            $atrib = $atrib . $name;
            return "<input $atrib>";
        } else {
            return "<input $atrib>";
        }
    }
}
