<?php

use App\ObjectThatIConquer;
use App\ObjectPro;

test ('should return array of keys separately from array of values', function () {
    expect (ObjectPro::sortObject([
        new ObjectThatIConquer('a', 1),
        new ObjectThatIConquer('b', 2),
        new ObjectThatIConquer('c', 3),
    ]))->toEqual([["a", "b", "c"], [1, 2, 3]]);
    expect (ObjectPro::sortObject([
        new ObjectThatIConquer('a', 'Apple'),
        new ObjectThatIConquer('b', 'Microsoft'),
        new ObjectThatIConquer('c', 'Google'),
    ]))->toEqual([["a", "b", "c"], ["Apple", "Microsoft", "Google"]]);
    expect (ObjectPro::sortObject([
        new ObjectThatIConquer('key1', true),
        new ObjectThatIConquer('key2', false),
        new ObjectThatIConquer('key3', null),
    ]))->toEqual([["key1", "key2", "key3"], [true, false, null]]);
});
