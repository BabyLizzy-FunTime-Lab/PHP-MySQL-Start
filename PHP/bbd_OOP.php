<h3>BlueBird Day OOP</h3>
<?php
class Product {
    private $product_nr;
    private $brand;
    public $product_name;
    public $price;
    public $in_stock;
    public function __construct(
            $product_nr = 12345,
            $brand = "Solar"
    ) {
        $this->product_nr = $product_nr;
        $this->brand = $brand;
    }
    function set_productName($name) {
        $this->product_name = $name;
    }
    function set_price($price) {
        $this->price = $price;
    }
    function set_inStock($amount) {
        $this->in_stock = $amount;
    }
    function describe() {
        echo "<p>Product nr: " . $this->product_nr . "</p>";
        echo "<p>Brand: " . $this->brand . "</p>";
        echo "<p>Model: " . $this->product_name . "</p>";
        echo "<p>Price: " . $this->price . "</p>";
        echo "<p>Stock: " . $this->in_stock . "</p>";
    }
}
$canibalismo = new Product();
$canibalismo->set_productName("Canibalismo");
$canibalismo->set_price(1350.96);
$canibalismo->set_inStock("Sold Out");
$canibalismo->describe();


