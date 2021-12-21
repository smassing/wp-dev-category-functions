<?php


function getCats($included, $excluded)
{

	//get the list of included categories
	$included_out = "";

	foreach ($included as $itm) 
	{

		$temp = get_cat_id($itm);
		if (strlen($included_out)>0) 
		{
			$included_out = $included_out . "," . $temp;
		} else {
			$included_out = $temp;
		}

	}

	//get the list of exclusions
	$excluded_out = "";

	foreach ($excluded as $itm) 
	{

		$temp = get_cat_id($itm);
		if (strlen($excluded_out)>0) 
		{
			$excluded_out = $excluded_out . ",-" . $temp;
		} else {
			$excluded_out = "-" . $temp;
		}

	}

	//return the final list of categories  eg. 1,2,3,-4,-5,-6
	if (strlen($included_out)>0) 
	{
		if (strlen($excluded_out)>0) 
		{
			return $included_out . "," .$excluded_out;
		} else {
			return $included_out;
		}
	} else {
		return $excluded_out;
	}


}






?>