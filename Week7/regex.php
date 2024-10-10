<?php
$pattern = '/[0-9]{1,3}/'; 

$text = 'there are 123 apples';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';

$text = ' <br>I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; 
?>