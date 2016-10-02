# Calculator project #
This form takes the users input data and do math operations.

## File structure ##

### index.php ###
This is the entry point of the application.
It consists of html layout with math form inside.

### core/MathOperations.php ###
Provides math operations with data.
* Parameters:
    * `$firstOperand` for first field entry,
    * `$operator` for second field entry,
    * `$secondOperand` for third filed entry.
* Main methods are:
    * `__construct()` for setting values for properties of the class from POST request,
    * `setResultOfTheMathOperation()` to set result of the math operations to `$result` property,
    * `addition()` for addition operation,
    * `subtraction()` for subtraction operation,
    * `multiplication()` for multiplication operation,
    * `division()` for division operation.

## css/bootstrap.min.css ##
__Bootstrap__ file for html layout.

## css/font-awesome.min.css ##
__Font Awesome__ file for html layout.

## css/main.css ##
Main stylesheet for custom style.

## js/bootstrap.min.js ##
__Bootstrap__ file for dynamic html layout.

## js/jquery-3.1.0.min.js ##
__JQuery__ file for dynamic layout and AJAX support.