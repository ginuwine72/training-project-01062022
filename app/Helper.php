<?php



function DateThai($Date)
{
		$Year = date("Y",strtotime($Date))+543;
		$Month= date("n",strtotime($Date));
		$Day= date("j",strtotime($Date));
		$Hour= date("H",strtotime($Date));
		$Minute= date("i",strtotime($Date));
		$Seconds= date("s",strtotime($Date));
		$MonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$MonthThai=$MonthCut[$Month];
		return "$Day $MonthThai $Year";
}

function DateThaiDateTime($Date)
{
		$Year = date("Y",strtotime($Date))+543;
		$Month= date("n",strtotime($Date));
		$Day= date("j",strtotime($Date));
		$Hour= date("H",strtotime($Date));
		$Minute= date("i",strtotime($Date));
		$Seconds= date("s",strtotime($Date));
		$MonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$MonthThai=$MonthCut[$Month];
		return "$Day $MonthThai $Year $Hour:$Minute ";
}


function DateThaiDate($Date)
{
		$Year = date("Y",strtotime($Date))+543;
		$Month= date("n",strtotime($Date));
		$Day= date("j",strtotime($Date));
		$Hour= date("H",strtotime($Date));
		$Minute= date("i",strtotime($Date));
		$Seconds= date("s",strtotime($Date));
		$MonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$MonthThai=$MonthCut[$Month];
		return "$Day $MonthThai $Year";
}

function DateThaiMonth($Date)
{
		$Year = date("Y",strtotime($Date))+543;
		$Month= date("n",strtotime($Date));
		$Day= date("j",strtotime($Date));
		$Hour= date("H",strtotime($Date));
		$Minute= date("i",strtotime($Date));
		$Seconds= date("s",strtotime($Date));
		$MonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$MonthThai=$MonthCut[$Month];
		return "$MonthThai $Year";
}

function DateThaiTime($Date)
{
		$Year = date("Y",strtotime($Date))+543;
		$Month= date("n",strtotime($Date));
		$Day= date("j",strtotime($Date));
		$Hour= date("H",strtotime($Date));
		$Minute= date("i",strtotime($Date));
		$Seconds= date("s",strtotime($Date));
		$MonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$MonthThai=$MonthCut[$Month];
		return "$Hour:$Minute ";
}


function rank_point($rank_point)
{
      
		return 1;
}
