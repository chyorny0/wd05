
<?

class Form
{
    public function strFromArr($arr)
    {
        $res = " ";
        foreach ($arr as $key => $el) {
            $res .= $key . '="' . $el . '" ';
        }
        return $res;
    }

    public function input($arr)
    {
        return "<input " . self::strFromArr($arr) . "><br>";;
    }

    public function textarea($arr)
    {
        return "<textarea" . self::strFromArr($arr) . "></textarea><br>";
    }

    public function button($arr)
    {
        return "<button" . self::strFromArr($arr) . ">" . $arr["value"] . "</button><br>";
    }

    public function open($arr)
    {
        $res = "<form ";
        foreach ($arr as $key => $el) {
            $res .= $key . '="' . $el . '" ';
        }
        $res .= "/>";
        return $res;
    }

    public function close()
    {
        return "</form>";
    }
}
