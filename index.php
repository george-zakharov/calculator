<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom main stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome stylesheet TODO: Delete if there is no use -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <!-- Header text -->
    <h1 class="page-header text-center">Calculator</h1>
    <!-- Content starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form class="form-group" role="form" id="form">
                    <!-- First operand input -->
                    <div class="col-sm-5 text-right">
                        <label for="firstOperand"></label>
                        <input class="well" type="number" id="firstOperand" name="firstOperand" placeholder="First operand">
                    </div>
                    <!-- Operator input -->
                    <div class="col-sm-2 text-center">
                        <label for="operator"></label>
                        <select class="well" id="operator" name="operator">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </div>
                    <!-- Second operand input -->
                    <div class="col-sm-5 text-left">
                        <label for="secondOperand"></label>
                        <input class="well" type="number" id="secondOperand" name="secondOperand" placeholder="Second operand">
                    </div>
                    <!-- Result -->
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3 class="text-center">Result</h3>
                        <div class="well">
                            no data
                        </div>
                    </div>
                    <!-- Calculate button -->
                    <div class="button-area col-sm-8 col-sm-offset-2 text-center">
                        <button type="submit" class="btn btn-info">Calculate</button>
                    </div>
                </form>
                <!-- Form ends -->
            </div>
        </div>
    </div>
    <!-- Content ends -->

    <!-- JQuery script -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap script -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>