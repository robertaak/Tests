<?php

use App\Cashier;
use App\Products;

test ('should return total sum for all products', function () {
    expect (Cashier::totalPrice([
        new Products('Milk', 1, 1.50)
    ]))->toEqual(1.5);
    expect (Cashier::totalPrice([
        new Products('Milk', 1, 1.50),
        new Products('Cereals', 1, 2.50)
    ]))->toEqual(4);
    expect (Cashier::totalPrice([
        new Products('Milk', 1, 1.50),
        new Products('Eggs', 12, 0.10),
        new Products('Bread', 2, 1.60),
        new Products('Cheese', 1, 4.50)
    ]))->toEqual(10.4);
});