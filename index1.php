<?php
class PostOffice{
	
	function mailFiler(){
		$myfile="string.txt";
		if (file_exists($myfile))
	{

		 $file=fopen($myfile,"r");
    	fpassthru($file);
  }
else
  {
   echo "檔案不存在";
  }

}


function mailRegex(){
		$myfile2="string.txt";
		if (file_exists($myfile2))
	{
		 $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $myfile2);
		 $file2=fopen($cleaned,"r");
    	 fpassthru($file2);
  }
else
  {
   echo "檔案不存在";
  }

}

function spiltroad(){
  $myfile3="road.txt";
  if (file_exists($myfile3))
	{
		 $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $myfile2);
		 $file2=fopen($cleaned,"r");
    	 fpassthru($file2);
  }
else
  {
   echo "檔案不存在";
  }

}



}

$obj=new PostOffice();
$obj->mailFiler();
echo "</br>";
$obj2=new PostOffice();
$obj2->mailRegax();
	
?>

