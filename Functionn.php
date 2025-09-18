<?php
function happy_birthday(string $first_name, int $age): void {
    echo "<div style='margin:10px; padding:10px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; width:fit-content;'>";
    echo "<strong>🎉 Happy Birthday, {$first_name}! 🎉</strong><br>";
    echo "Happy Birthday to you! 🎂<br>";
    echo "Happy Birthday dear <em>{$first_name}</em>! 💐<br>";
    echo "🎁 You are <strong>{$age}</strong> years old!<br>";
    echo "</div>";
}

$friends = [
    ["Shrishti", 20],
    ["Aahana", 15],
    ["Khushi", 21]
];

foreach ($friends as [$name, $age]) {
    happy_birthday($name, $age);
}
?>
