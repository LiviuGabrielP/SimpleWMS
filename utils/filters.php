<?php
function filterData($employee_entries, $filter_type, $filter_data) {
    $filtered_entries = array();
    foreach ($employee_entries as $entry) {
        if ( $entry[$filter_type] == $filter_data) {
            $filtered_entries[] = $entry;
        }
    }
    return $filtered_entries;
}