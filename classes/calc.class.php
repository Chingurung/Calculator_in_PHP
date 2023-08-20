<?php
class Calc
{
    public $num1;
    public $num2;
    public $operator;

    public function __construct(int $one, int $two, string $three)
    {
        $this->num1 = $one;
        $this->num2 = $two;
        $this->operator = $three;

    }

    public function calculator()
    {
        $result = 0;

        switch ($this->operator) {
            case "add":
                $result = $this->num1 + $this->num2;
                break;
            case "sub":
                $result = $this->num1 - $this->num2;
                break;
            case "multiply":
                $result = $this->num1 * $this->num2;
                break;
            case "divide":
                $result = $this->num1 / $this->num2;
                break;
        }

        return $result;
    }
}
?>