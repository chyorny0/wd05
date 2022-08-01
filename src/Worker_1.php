<?

class Worker_1
{
    private $name;
    private $age;
    private $salary;


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
        if(self::checkAge($age)){
            $this->age = $age;
            return true;
        }
        return false;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }


    private function checkAge($age)
    {
        return $age > 0 && $age <= 100;
    }
}
