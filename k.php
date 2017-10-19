<?php


	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	date_default_timezone_set('Asia/Kolkata');

	$year = date("Y");
	$month = date("m");
	$day= date("d");
	$yesterday = date('Y-m-d',strtotime("-1 days"));
	$dyesterday = date('Y-m-d',strtotime("-2 days"));
	$ddyesterday = date('Y-m-d',strtotime("-3 days"));


	$main ="http://epaper.ekantipur.com/epaper/the-kathmandu-post/$year-$month-$day/$year-$month-$day.pdf";
	$sup = "http://epaper.ekantipur.com/epaper/the-kathmandu-post/$year-$month-$day/suppliments/money.pdf";

	$main0 ="http://epaper.ekantipur.com/epaper/the-kathmandu-post/$yesterday/$yesterday.pdf";
	$sup0 = "http://epaper.ekantipur.com/epaper/the-kathmandu-post/$yesterday/suppliments/money.pdf";

	$main00 = "http://epaper.ekantipur.com/epaper/the-kathmandu-post/$dyesterday/$yesterday.pdf";
	$sup00 = "http://epaper.ekantipur.com/epaper/the-kathmandu-post/$dyesterday/suppliments/money.pdf";

	$main000 ="http://epaper.ekantipur.com/epaper/the-kathmandu-post/$ddyesterday/$yesterday.pdf";
	$sup000 = "http://epaper.ekantipur.com/epaper/the-kathmandu-post/$ddyesterday/suppliments/money.pdf";

	$file = $main;

	$file_headers = @get_headers($file);
	if(!$file_headers || $file_headers[0] == 'HTTP/1.1 200 OK') {
	    echo "<br><br><big><center><a href='$main' target=_blank>main</a>&nbsp&nbsp|&nbsp&nbsp<a href='$sup' target=_blank>sup</a></big></center>";
	    echo "<br><br><small><center><a href='$main0' target=_blank>m0</a>&nbsp&nbsp|&nbsp&nbsp<a href='$sup0' target=_blank>sup0</a></small>";
	    echo "<br><br><small><center><a href='$main00' target=_blank>m00</a>&nbsp&nbsp|&nbsp&nbsp<a href='$sup00' target=_blank>sup0</a></small>";
	    echo "<br><br><small><center><a href='$main000' target=_blank>m000</a>&nbsp&nbsp|&nbsp&nbsp<a href='$sup000' target=_blank>sup0</a></small>";

	}
	else {
	    echo "Paper not published online.";
	}

	?>
