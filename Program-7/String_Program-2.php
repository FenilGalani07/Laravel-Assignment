<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function reverseWords($sentence) {
   
    $words = explode(' ', $sentence);
   
   
    $reversedWords = array_reverse($words);
    $reversedSentence = implode(' ', $reversedWords);
   
    return $reversedSentence; 
}


$inputSentence = "PHP is fun";
$reversedSentence = reverseWords($inputSentence);
echo "Original Sentence: '$inputSentence'\n";
echo "Reversed Sentence: '$reversedSentence'\n";
?>


</body>
</html>
