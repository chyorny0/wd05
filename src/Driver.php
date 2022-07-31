<?

class Driver extends Worker_3{
    private $exp;
    private $category;

    public function setExp($exp)
    {
        $this->exp = $exp;
    }

    public function getExp()
    {
        return $this->exp;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}