<?php
$request = $_SERVER['REQUEST_URI'];

$files = scandir("views");
$page_name = "";

foreach ($files as $file) {
	if ($file !== "." && $file !== "..") {
		$file = str_replace(".php", "", $file);
		

		if ($request === "/" . $file) {
			require __DIR__ . "/views/$file.php";
		}
	}
}