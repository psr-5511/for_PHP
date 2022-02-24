<?php
echo addcslashes("hello","o");
echo "<br>";

echo addslashes("h'ello");
echo "<br>";
echo bin2hex("akash");
echo"<br>";

echo chop("     welcome to the php study");
echo"<br>";

echo chop("     welcome to the php study","yudts"); // perform as many variations as you can
echo "<br>";
echo crc32("");// cyclic redundancy checking

echo"<br>";
//echo crypt("<");

echo "<br>";
echo chunk_split("welcome to",2);
echo "<br>";

//echo convert_uuencode("");
/*
 * explode()
 * implode()
 * count()
 * count_chars()
 * join()
 * print_r()
 * fprintf()
 */

echo number_format(10000,2,'\'','+');// can work with 1,2,3,4 parameters
echo "<br>";


echo htmlspecialchars_encode("");



?>