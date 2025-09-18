<?php
function is_even(int $number): bool {
    return $number % 2 === 0;
}

// Example usage
$testNumbers = [10, 11, 22, 35];

foreach ($testNumbers as $num) {
    if (is_even($num)) {
        echo "$num is Even ✅<br>";
    } else {
        echo "$num is Odd ❌<br>";
    }
}
?>
