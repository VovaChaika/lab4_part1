<?php
/**
 * parent
 */
abstract class Shop implements Working
{
    private $max_clients;
    private $area;

    /**
     * shop constructor
     * @param $max_clients
     * @param $area
     */
    public function __construct($max_clients, $area)
    {
        $this->max_clients = $max_clients;
        $this->area = $area;
    }

    /**
     * counts avg income per day.
     * @param $income_hour
     * @param $hours_of_work
     * @return float
     */
    public function income_day($income_hour, $hours_of_work)
    {
        return $income_hour * $hours_of_work;
    }

    /**
     * counts pure income.
     * @param $all_money
     * @param $money_for_business
     * @return float
     */
    public function pure_income($all_money, $money_for_business)
    {
        return $all_money - $money_for_business;
    }

    public function work()
    {
        echo "the shop opens";
    }
}
