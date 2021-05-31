<?php
class Restaurant extends Shop
{

    private $money_for_build;


    /**
     * Restaurant constructor.
     * @param $money_for_build
     */
    public function __construct($money_for_build)
    {
        $this->money_for_build = $money_for_build;
        parent::__construct(30, 200);
    }

    public function __destruct()
    {
        print "Destructs " . __CLASS__ . "<br><br>";
    }

    /**
     * @return mixed
     */
    public function getMoney_for_build()
    {
        return $this->money_for_build;
    }

    /**
     * @param mixed $money_for_build
     */
    public function setMoney_for_build($money_for_build)
    {
        $this->money_for_build = $money_for_build;
    }

    public function work()
    {
        echo("The restaurant is working now.<br>");
    }

    public function show()
    {
        echo "Restaurant was built... Money to build:  ".'<br>';
        foreach ($this->money_for_build as $key => $value) {
            echo "$key: $value grn" . "<br>";
        }
    }
}