<?php
/**
 * Math controller.
 * Do the math operations that were gotten from POST request.
 *
 * @package: calculator
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
 */
class MathOperations
{
    /**
     * Operand from the first field of the form.
     *
     * @var integer
     */
    private $firstOperand;

    /**
     * Operator used in math expression.
     *
     * @var string
     */
    private $operator;

    /**
     * Operand from the second field of the form.
     *
     * @var integer
     */
    private $secondOperand;

    /**
     * Marker shows if the POST data was gotten.
     *
     * @var bool
     */
    private $gotData = false;

    /**
     * The result of math operation.
     *
     * @var string
     */
    public static $result;

    /**
     * MathOperations constructor.
     * It sets POST data to properties of the class.
     *
     * @see setResultOfTheMathOperation
     */
    public function __construct() {
        if ($_POST['firstOperand']
            && $_POST['operator']
            && $_POST['secondOperand']
        ) {
            $this->firstOperand = $_POST['firstOperand'];
            $this->operator = $_POST['operator'];
            $this->secondOperand = $_POST['secondOperand'];
            $this->gotData = true;
        }
        $this->setResultOfTheMathOperation();
    }

    /**
     * Set value to `result` property.
     * This method checks the `operator`, call relevant math method and set value to `result` property.
     */
    private function setResultOfTheMathOperation() {
        if ($this->gotData === true) {
            if ($this->operator == '+') {
                self::$result = $this->addition();
            } elseif($this->operator == '-') {
                self::$result = $this->subtraction();
            } elseif ($this->operator == '*') {
                self::$result = $this->multiplication();
            } elseif ($this->operator == '/') {
                self::$result = $this->division();
            }
        } else {
            self::$result = 'no data';
        }
    }

    /**
     * Method that provides addition.
     *
     * @return int
     */
    private function addition() {
        return $this->firstOperand + $this->secondOperand;
    }

    /**
     * Method that provides substraction.
     *
     * @return int
     */
    private function subtraction() {
        return $this->firstOperand - $this->secondOperand;
    }

    /**
     * Method that provides multiplication.
     *
     * @return int
     */
    private function multiplication() {
        return $this->firstOperand * $this->secondOperand;
    }

    /**
     * Method that provides division.
     *
     * @return float|int
     */
    private function division() {
        return $this->firstOperand / $this->secondOperand;
    }
}