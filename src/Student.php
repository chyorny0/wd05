<?

class Student extends User{
    private $grants;
    private $course;

    public function setGrants($grants)
    {
        $this->grants = $grants;
    }

    public function getGrants()
    {
        return $this->grants;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCorse()
    {
        return $this->course;
    }
}