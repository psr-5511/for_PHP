<?php
echo addcslashes("hello","o");
echo "<br>";
echo addslashes("lau'ghter");
echo "<br>";
echo bin2hex("a");
echo "<br>";
echo chop("with due respect","tcep");
echo "<br>";
echo chunk_split("wonderful",3);
echo "<br>";
//echo convert_cyr_string("due respect","respect");
echo convert_uuencode("amaze");
echo "<br>";
echo convert_uudecode("%86UA>F4` `");
echo "<br>";

echo crc32("Hello world!");
echo "<br>";

$str = "hello world";
print_r(explode("l",$str));
echo "<br>";

print_r(get_html_translation_table());

echo "<br>";
echo hebrev("á çùåï äúùñâ");
echo "<br>";
echo hex2bin("48656c6c6f20576f726c6421");
echo "<br>";
echo html_entity_decode("&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;'");
echo "<br>";
$str1 = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str1);
echo "<br>";

$str3 = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str3);

echo "<br>";

$str4="This is some <b> bold</b> text";
echo htmlspecialchars($str4);

$arr = array("hello","world","beautiful","day");
echo implode("@@@",$arr);
echo "<br>";

echo join(" ",$arr);
echo "<br>";
echo join("+",$arr);
echo "<br>";
echo join("@",$arr);
echo "<br>";
echo join("-",$arr);


?>
