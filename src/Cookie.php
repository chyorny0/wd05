<?

class Cookie
{

    public $name;
    public $value;

    public function setCookie($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
        return setcookie($name, $value, time() + 86400);
    }

    public function getCookie($name)
    {
        if (!empty($_COOKIE)) {
            return $_COOKIE[$name];
        }
        return false;
    }

    public function unSetCookie($name)
    {
        return setcookie($name);
    }
}
