<?

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if (self::checkAge($age)) {
            $this->age = $age;
            return true;
        }
        return false;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        return $age > 0 && $age <= 100;
    }

    
}
