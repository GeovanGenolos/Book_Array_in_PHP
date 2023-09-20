<?php

class GroceriesList {
    protected $groceries_list = [];

    public function __construct($list) {
        $this->groceries_list = $list;
    }

    public function displayGroceriesList() : array {
        return $this->groceries_list;
    }

    public function addGroceriesOnTop(string $groceries_name) : void {
        array_unshift($this->groceries_list, $groceries_name);
    }

    public function addGroceriesAtEnd(string $groceries_name) : void {
        array_push($this->groceries_list, $groceries_name);
    }

    public function removeFirstItem() : void {
        if (!empty($this->groceries_list)) {
            array_shift($this->groceries_list);
        }
    }

    public function displayFirstThreeItems() : array {
        return array_slice($this->groceries_list, 0, 3);
    }
}

$groceries = new GroceriesList([
    'Avocado',
    'Apple',
    'Orange',
    'Potato',
    'Banana',
]);

$groceries->addGroceriesOnTop('Hamburger');
$groceries->addGroceriesAtEnd('Pineapple');
$groceries->removeFirstItem();
?>

<html>

<head>
    <title></title>
</head>

<body>
    <table border="5">
        <tr>
            <td><br>Groceries</br></td>
        </tr>
        <?php
        foreach ($groceries->displayFirstThreeItems() as $key => $value) {
            echo  "<tr><td>" . "Item " . ($key + 1) . ": " . $value . "<br/>" . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>
