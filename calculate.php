<?php
class Calculator
{
    private $number1;
    private $number2;
    private $operator;

    public function __construct($number1, $number2, $operator)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operator = $operator;
    }

    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                return $this->number1 + $this->number2;
                break;
            case 'subtract':
                return $this->number1 - $this->number2;
                break;
            case 'multiply':
                return $this->number1 * $this->number2;
                break;
            case 'divide':
                if ($this->number2 != 0) {
                    return $this->number1 / $this->number2;
                } else {
                    return "Error: Division by zero is not allowed.";
                }
                break;
            default:
                return "Error: Invalid operator.";
                break;
        }
    }
}

// Mengecek apakah data telah dikirim dari form
if (isset($_POST['calculate'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    // Membuat objek Calculator
    $calculator = new Calculator($number1, $number2, $operator);

    // Menghitung hasil perhitungan
    $result = $calculator->calculate();
} else {
    $result = "";
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <center>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <div class="calculator">
        <form method="post" action="calculate.php">
            <input type="text" name="number1" placeholder="Angka 1" required>
            
            <input type="text" name="number2" placeholder="Angka 2" required>
            <br>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <br>
            <button type="submit" name="calculate" class="btn btn-outline-success">Hitung</button>
        </form>
        <div class="result">
            Hasil: <?php echo $result; ?>
            </div>
</div>
        </div>
    </div>
    </center>
</body>

</html>