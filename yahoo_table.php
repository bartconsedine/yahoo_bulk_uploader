<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style>


</style>


</head>


<body>





 <?php

 	$folder = $_POST["folder"];
	$alias = $_POST["alias"];
	$number = $_POST["number"];
	$slug = $_POST["slug"];
  	$url = $_POST["url"];
   	$mb = $_POST["mb"];
	$images = $_POST["images"];
	$abbrv = $_POST["abbrv"];
	$dev = $_POST["dev"];
	$ads = $_POST["ads"];
	$campaign = $_POST["campaign"];
	$description = $_POST["description"];
	$repeat = $_POST["repeat"];
	$cpm = $_POST["cpm"];
	$cpc = $_POST["cpc"];
	$objective = $_POST["objective"];
	$displayURL = $_POST["displayURL"];
	$landingURL = $_POST["landingURL"];
	$sponsoredBy = $_POST["sponsoredBy"];
	$adsPerAdGroup = $_POST["adsPerAdGroup"];


	$Date = date('m/d/Y');




 $copy1 = $_POST["copy1"];
 $copy2 = $_POST["copy2"];
 $copy3 = $_POST["copy3"];
 $copy4 = $_POST["copy4"];
 $copy5 = $_POST["copy5"];
 $copy6 = $_POST["copy6"];
 $copy7 = $_POST["copy7"];
 $copy8 = $_POST["copy8"];
 $copy9 = $_POST["copy9"];
 $copy10 = $_POST["copy10"];
 $copy_numb = $_POST["copy_numb"];
 $copyArray = array($copy1,$copy2,$copy3,$copy4,$copy5,$copy6,$copy7,$copy8,$copy9,$copy10);

 $adgroup = 1;


 $copies = 0;

for($k=0;$k<10;$k++){
 	if(strlen($copyArray[$k]) > 0){
		 $copies+=1;
	 }
}

$counter = 0;
$campaignNumber = 1;
 $table = "<table style=\"font-size:10%;\" id=myTable><thead><tr><td>Action</td>	<td>Object Type</td>	<td>Campaign ID</td>	<td>Campaign</td>	<td>Campaign Objective</td>	<td>Campaign Budget</td>	<td>Campaign Budget Type</td>	<td>Channel</td>	<td>Language</td>	<td>Conversion Pixel</td>	<td>Tracking Partner</td>	<td>Ad Schedule</td>	<td>Ad Group ID</td>	<td>Ad Group</td>	<td>Object ID</td>	<td>Location ID</td>	<td>Location</td>	<td>Device</td>	<td>Segment ID</td>	<td>Interest</td>	<td>Gender</td>	<td>Age</td>	<td>Supply Group</td>	<td>OS Version</td>	<td>Radius</td>	<td>Bid Modifier</td>	<td>Search CPC</td>	<td>Stream CPC</td>	<td>CPM</td>	<td>CPV</td>	<td>ECPA Goal</td>	<td>Bidding Strategy</td>	<td>Keyword</td>	<td>Match Type</td>	<td>Title</td>	<td>Description</td>	<td>Display URL</td>	<td>Landing URL</td>	<td>Impression Tracking URL</td>	<td>Sponsored By</td>	<td>Ad Image URL</td>	<td>Ad HQ Image URL</td>	<td>Ad Primary Video URL</td>	<td>Tumblr Post URL</td>	<td>Video Completed View Tracking URL</td>	<td>Video Click Tracking URL</td>	<td>Call To Action Text</td>	<td>Sitelink Position</td>	<td>param1</td>	<td>param2</td>	<td>param3</td>	<td>Phone Number</td>	<td>Country</td>	<td>Call Only</td>	<td>Latitude</td>	<td>Longitude</td>	<td>Shared Set Type</td>	<td>Shared Set ID</td>	<td>Start Date</td>	<td>End Date</td>	<td>Network</td>	<td>Shared Object ID</td>	<td>Campaign Status</td>	<td>Ad Group Status</td>	<td>Status</td>	</tr></thead><tbody>"
;

 	$table .= "<tr><td>ADD</td>	<td>Campaign</td>	<td></td>	<td>" .$campaign. "</td>	<td>".$objective."</td>	<td>100</td>	<td>Daily</td>	<td>Native</td>	<td>en</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td> </td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>YahooAndPartner</td>	<td></td>	<td>Active</td>	<td></td>	<td></td>	</tr>"
;


 $table .= "<tr><td>ADD</td>	<td>Location Target</td>	<td></td>	<td>" .$campaign. "</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>23424977</td>	<td>US</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td> </td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>YahooAndPartner</td>	<td></td>	<td>Active</td>	<td></td>	<td></td>	</tr>"
;


	$table .= "<tr><td>ADD</td>	<td>Ad Group</td>	<td></td>	<td>" .$campaign. "</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td><td>" . $adgroup . "</td>		<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>" . $cpc . "</td>	<td>" .  $cpm . " </td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>".$Date."</td>	<td></td>	<td></td>	<td></td>	<td>Active</td>	<td>Active</td>	<td></td>	</tr>"
;

for ($y = 0; $y < $copies; $y++) {
	for ($x = 0; $x < $images; $x++) {


   	$table.= "<tr><td>ADD</td><td>Ad</td><td></td><td>" . $campaign . "</td><td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>" . $adgroup . "</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td>	<td></td>	<td></td>	<td>" .  $copyArray[$y] . "</td><td>" . $description . "</td><td>" . $displayURL . "</td><td>" . $landingURL . "&crid={adid}&cid={campaignid}&src=" . $campaign . "&sub3={adgroupid}&sub1=" . $copyArray[$y] . "&sub2=image" . ($x + 1) . "&sub3={device}&sub4={network}</td><td></td><td>" . $sponsoredBy . "</td><td>" .
	"http://www.metricreader.com/YHMG/" . $folder . $alias . "/627x627" . $abbrv . "/" . ($x+1) . ".jpg" . "</td><td>http://www.metricreader.com/YHMG/" . $folder . $alias . "/1200x627" . $abbrv . "/". ($x+1) . ".jpg" .
	"</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td><td></td>	<td></td>	<td></td>	<td></td>	<td></td>	 <td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>Active</td>	<td>Active</td>	 <td>Active</td>  </tr>";

	 if($x % ($adsPerAdGroup-1) == 0  && $x > 0){

		 $adgroup += 1;

		 $table .= "<tr><td>ADD</td>	<td>Ad Group</td>	<td></td>	<td>" .$campaign. "</td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td><td>" . $adgroup . "</td>		<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>" . $cpc . "</td>	<td>" .  $cpm . " </td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td></td>	<td>".$Date."</td>	<td></td>	<td></td>	<td></td>	<td>Active</td>	<td>Active</td>	<td></td>	</tr>";




	 }




	$counter += 1;

	/*
	if($counter == $ads){
		$campaignNumber += 1;
				 $table .= "</table><br><br><br>new campaign - " . $campaignNumber . "<br><br><br><table><tr><td>Title</td><td> </td><td>URL</td><td> </td><td>Thumbnail</td></tr>";
		 $counter = 0;

	 }

	*/

	/*if(($y = 10) && ($x = 5)){
		 $table .= "<tr><td>new campaign</td></tr>";
	 }*/

	}
}



echo "<br><br><br>";


$table .= "</tbody></table>";

echo $table;

/*for ($a = 0; $a < $image_numb; $a++) {

   	echo "<br><br><img src=\"" . $imageArray[$x] . "\" style=\"width:1200px;height:627px;\">";


	}


$table2 = "<table><tr><td>image</td><td>2</td><td>3</td></tr><tr>";

for ($a = 0; $a < $images; $a++) {

		$table2.= "<td><img src=" . "http://www.metricreader.com/ad_images/" . $folder . "/1200x627" .$abbrv. "/" . ($a+1) . ".jpg" . " style=\"width:1200px;height:px;\">" . "</td>";
		if((($a+1) % 2) == 0){
			$table2.="</tr><tr>";
		}

}
$table2 .= "</tr></table>";

echo "<br><br><br><br><br>";

echo $table2; */



?>




</body>
</html>
