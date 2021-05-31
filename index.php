<?php

define("HELLO", "Hello world!<br/><br/>");

final class Index
{

    public function foreachTry()
    {
        echo "foreachTry():<br/><br/>";

        echo "Приклад 1(просто передаємо значення):<br/><br/>";
        $a = array(100, 200, 300, 400);

        foreach ($a as $v) {
            echo "Значення змінної \$a: $v.<br/>";
        }
        echo"<br/>";


        echo "Приклад 2(передаємо значення, дивимось який елемент в массиві:<br/><br/>";
        $a = array(100, 200, 300, 400);

        $i = 0;

        foreach ($a as $v) {
            echo "\$a[$i] => $v.<br/><br/>";
            $i++;
        }


        echo "Приклад 3(з ключем, асоціат масив):<br/><br/>";
        $garden = array(
            "flowers" => 15,
            "trees" => 5,
            "apples" => 30,
            "gnomes" => 4
        );

        foreach ($garden as $k => $v) {
            echo "\$a[$k] => $v.<br/><br/>";
        }


        echo "Приклад 4(з багатовимірним масивом):<br/><br/>";
        $a = array();
        $a[0][0] = "a";
        $a[0][1] = "b";
        $a[1][0] = "y";
        $a[1][1] = "z";

        foreach ($a as $v1) {
            foreach ($v1 as $v2) {
                echo "$v2";
            }
        }
        echo "<br/><br/>";

    }
    public function explodeImplode(){
        echo "Implode:<br/><br/>";

        $a = array('dog', 'cat', 'cow');
        $b = array('1st' => 'Bolt', '2rd' => 'Getlin');

        echo "Перед implode:<br/><br/> ";
        print_r($a);
        echo "<br>";
        print_r($b);
        echo "<br><br>";

        echo "Після implode: <br/><br/>";
        echo implode(', ', $a), '<br/>', implode(', ', $b), '<br/><br/>';

        echo "Explode:<br/><br/>";
        $dish = "hi my name is vova ";
        echo "Перед explode: <br/><br/>";
        echo $dish."<br/><br/>";
        echo "Після explode:<br/><br/>";
        $dishes = explode(" ", $dish);
        foreach ($dishes as $dish) {
            echo $dish."<br>";
        }
        print_r($dishes);
    }
    public function init()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function loadClass($name)
    {
        $classes = array(
            'Working' => 'Working.php',
            'Shop' => 'Shop.php',
            'Restaurant' => 'Restaurant.php',
        );
        require_once $classes[$name];
    }

    public function run()
    {
        $money_for_build = ["1st rest" => "22500", "2nd rest" => "654512", "3rd rest" => "444555"];
        $rest = new Restaurant($money_for_build);
        echo "<br>";
        $rest->show();
        echo "<br>" . $rest->work() . "<br>";

    }
}
class SingleTest
{
    private static $instance;
    private $field;
    private function __construct(){

    }
    private function __clone(){

    }
    private function __wakeup(){

    }
    public static function getInstance() : SingleTest{
        if (self::$instance===null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

}
$instance = SingleTest::getInstance();
$instance ->setField(100);
$instance2 = SingleTest::getInstance();
print_r($instance2);


echo HELLO;
$index = new Index();
$index->foreachTry();
$index->explodeImplode();
$index->init();
$index->run();
