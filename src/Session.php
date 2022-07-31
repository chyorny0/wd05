<?

class Session
{

    public function __construct()
    {
        return session_start();
    }

    public function getSession($name)
    {
        if (!empty($_SESSION)) {
            return $_SESSION[$name];
        }
        return false;
    }

    public function setSession($name, $value)
    {
        $this->name = $name;
        $this->value = $value;

        return $_SESSION[$name] = $value;
    }

    public function unSetSsession($name)
    {
        unset($_SESSION["$name"]);
    }

    public function chekSession()
    {
        return (!empty($_SESSION));
    }
}
