<?php
if($_SERVER['REQUEST_METHOD']!='GET'){echo "Yo Do Not Have Permission"; exit;}
if(isset($_GET['fn_name']))
{
	
	if($_GET['fn_name']=="BSE")
	{
		$ch = curl_init();
		$source = "http://www.google.com/finance/historical?q=indexdjx:.dji";
		curl_setopt($ch, CURLOPT_URL, $source);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec ($ch);
		curl_close ($ch);
		$data=explode('<td class="rgt">',$data);
		$data=explode(' ',$data[4]);
		$dats=(float)str_replace(array('<td',','),'',$data[0]);
		if(is_numeric($dats))
		{
			//echo $dats;
			$dts=array('value'=>$dats);
			echo $_GET['jsonp_callback'] . '('.json_encode($dts).')';
		}
		else
		{
			echo "Please Try again";
		}
	}elseif($_GET['fn_name']=="TEMP"){
		$city=$_GET['city'];
		$ch = curl_init();
		$source ="http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$city."%22)&format=json&diagnostics=true&callback=";
		curl_setopt($ch, CURLOPT_URL, $source);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec ($ch);
		curl_close ($ch);
		//$dts=array('value'=>$city);
		//echo $_GET['jsonp_callback'] . '('.json_encode($dts).')';
		//exit();
		$details=json_decode($data);
		$array=$details->query->results->channel->item->forecast;
		$dts=array('value'=>$array[0]->low.$array[0]->high);
		echo $_GET['jsonp_callback'] . '('.json_encode($dts).')';
	}
	else
	{
		$fn_code=$_GET['fn_name'];
		$ch = curl_init();
		$source = "http://download.finance.yahoo.com/d/quotes.csv?s=".$fn_code."&f=snl1d1t1c1ohg";
		curl_setopt($ch, CURLOPT_URL, $source);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec ($ch);
		curl_close ($ch);
		$dts=explode(',',$data);
		if($_GET['fn_name']=="CSCO")
		{
			$index=3;
		}
		else
		{
			$index=2;
		}
		if(is_numeric($dts[$index]))
		{
			//echo $dts[$index];
			$dts=array('value'=>$dts[$index]);
			echo $_GET['jsonp_callback'] . '('.json_encode($dts).')';
		}
		else
		{
			echo "Please Try again";
		}

	}
	
}
?>