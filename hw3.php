<?php


if (date("F") == "January"){
	echo "<body background='http://get.aca.ntu.edu.tw/getcdb/retrieve/326792/097_0020_001.jpg'>";
}
if (date("F") == "Februar"){
	echo "<body background='http://www.5507.com.tw/wp-content/uploads/2016/03/%E9%A6%96%E9%A0%81%E8%83%8C%E6%99%AF2-2.jpg'>";
}
if (date("F") == "March"){
	echo "<body background='http://elearning.slps.ntpc.edu.tw/105-5a/%E5%A5%BD%E5%BA%B7%E7%A6%AE%E7%89%A9/%E8%83%8C%E6%99%AF/%E8%83%8C%E6%99%AF-25.jpg'>";
}
if (date("F") == "April"){
	echo "<body background='http://pic.pimg.tw/smile145236/1436877813-204749027_n.png'>";
}
if (date("F") == "May"){
	echo "<body background='http://pic.qiantucdn.com/58pic/16/92/15/10e58PICpBK_1024.png'>";
}
if (date("F") == "June"){
	echo "<body background='http://pic.pimg.tw/jongwenbooks/4b67da2f9715f_n.jpg'>";
}
if (date("F") == "July"){
	echo "<body background='hhttps://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT4mro7uZe2ji-bhqt5eDOYeROba3mWF17Ab-I-8h4DL0K88WAr'>";
}
if (date("F") == "August"){
	echo "<body background='http://www.fiito.com/thumb/s/-2jH7xWT7E3.jpg?c=527256878'>";
}
if (date("F") == "Septemb"){
	echo "<body background='https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQVd82X_JlHFTl_bPrfy6RU4dNIlJjyy-gA8VR9432p6W5opbNu'>";
}
if (date("F") == "October"){
	echo "<body background='http://www.wzfzl.com.cn/upimg/allimg/090806/0711570.jpg'>";
}
if (date("F") == "Novembe"){
	echo "<body background='https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQHdEeewqdnUGmD2IHrkVdmhl1KjlwMfDgZEhk8g34s1hLcUHEv'>";
}
if (date("F") == "Decembe"){
	echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVhW3IxjFZAlxXVnNpocTtkmKkKwc2S63p-ZewuiXZ7faB4iUN'>";
}


echo date("現在時間是：Y年 m月 j日 g時 i分 s秒 l").'<br/>';


$startdate=strtotime("now");
$enddate=strtotime("2017-12-31");
$days=round(($enddate-$startdate)/3600/24);
$sec=round(($enddate-$startdate));
echo 距離末日時間：.$days.日.$sec.秒."<br/>";



?>
