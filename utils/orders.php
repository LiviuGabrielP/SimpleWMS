<?php

function orderData($employee_entries, $order_key, $order_dir) {
    $ordered_entries = $employee_entries;
    usort($ordered_entries, function($a, $b) use ($order_key, $order_dir) {
        if ($order_dir == 'asc') {
            return strcmp($a[$order_key], $b[$order_key]);
        } else {
            return strcmp($b[$order_key], $a[$order_key]);
        }
    });
    return $ordered_entries;
}
