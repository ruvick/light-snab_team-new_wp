<?
define("IN_PAGE_COUNT", 48);

function generate_query($PARAM) {
    if (empty($PARAM)) $PARAM = $_REQUEST;

    $material = "";

	if (!empty($PARAM["material"])) {
		
		for ($i = 0; $i<count($PARAM["material"]); $i++) {
			$material .= "(offer_material = '".$PARAM["material"][$i]."')";
			if ($i != count($PARAM["material"]) - 1) $material .= " OR ";
		} 
	}

    if (!empty($material)) $material = ' AND ('.$material.')';
    
    $tsokol = "";
	if (!empty($PARAM["tsokol"])) {
		
		for ($i = 0; $i<count($PARAM["tsokol"]); $i++) {
			$tsokol .= "(offer_tsokol = '".$PARAM["tsokol"][$i]."')";
			if ($i != count($PARAM["tsokol"]) - 1) $tsokol .= " OR ";
		} 
	}

    if (!empty($tsokol)) $tsokol = " AND (".$tsokol.")";

	
    $lamp_count = "";
    if (!empty($PARAM["lamp_count"])) {
		
		for ($i = 0; $i<count($PARAM["lamp_count"]); $i++) {
			$lamp_count .= "(offer_lamp_count = '".$PARAM["lamp_count"][$i]."')";
			if ($i != count($PARAM["lamp_count"]) - 1) $lamp_count .= " OR ";
		} 
	}

    if (!empty($lamp_count)) $lamp_count = " AND (".$lamp_count.")";


    $size = "";
    if (!empty($PARAM["size"])) {
		
		for ($i = 0; $i<count($PARAM["size"]); $i++) {
			$size .= "(offer_size = '".$PARAM["size"][$i]."')";
			if ($i != count($PARAM["size"]) - 1) $size .= " OR ";
		} 
	}
    if (!empty($size)) $size = " AND (".$size.")";

    $designer = "";
    if (!empty($PARAM["designer"])) {
		
		for ($i = 0; $i<count($PARAM["designer"]); $i++) {
			$designer .= "(offer_designer = '".$PARAM["designer"][$i]."')";
			if ($i != count($PARAM["designer"]) - 1) $designer .= " OR ";
		} 
	}
    if (!empty($designer)) $designer = " AND (".$designer.")";


    $price = "";
    if ((!empty($PARAM["price_ot"]))&&(!empty($PARAM["price_do"]))) {
        $price = "(offer_price != 0 AND offer_price >= ".$PARAM["price_ot"]." AND offer_price <=".$PARAM["price_do"].")";
    } else {
        $price = "(offer_price != 0)";
    }
    if (!empty($price)) $price = " AND ".$price;

    return $material.$lamp_count.$size.$tsokol.$designer.$price." ORDER BY offer_price ASC" ;
}

function get_tovar_count($thisCatID) {
    global $wpdb;
    $dopquery = generate_query([]);
    $rez = $wpdb->get_results( "SELECT COUNT(*) as 'total_count' FROM light_filter WHERE (cat= ".$thisCatID." OR cat1= ".$thisCatID." OR cat2= ".$thisCatID.") ".$dopquery);
    return $rez[0]->total_count;
}

function cat_query_param($thisCatID, $sparam) {
    if (empty($thisCatID))
        return "(cat LIKE '%' OR cat1 LIKE '%' OR cat2 LIKE '%') ";
    if ($thisCatID == "%")
        return "(title LIKE '%".$sparam."%' OR offer_brend LIKE '%".$sparam."%' OR offer_material_plaf LIKE '%".$sparam."%') ";
    else
        return "(cat= ".$thisCatID." OR cat1= ".$thisCatID." OR cat2= ".$thisCatID.") ";
}

function get_tovar($thisCatID, $offset) {
    global $wpdb;

    $cat_query = cat_query_param($thisCatID,$_REQUEST["s"]);
    
    $dopquery = generate_query([]);


    $total_count = get_tovar_count($thisCatID);

    $start = microtime(true);
    $qq = "SELECT * FROM light_filter WHERE ".$cat_query.$dopquery." LIMIT ".$offset.", ".IN_PAGE_COUNT;					
	
    $rez = $wpdb->get_results($qq);

	$totalTime = microtime(true) - $start;

    return array(
        "total_count" => $total_count,
        "time" => $totalTime,
        "tovars" => $rez,
        "query" => $qq
    ); 
}


add_action('rest_api_init', function () {
	register_rest_route('gensvet/v2', '/get_filter_count', array(
		'methods'  => 'GET',
		'callback' => 'get_filter_count',
		'args' => array(
			'catid' => array(
				'default'           => null,
				'required'          => true,
            ),
            'filter_param' => array(
				'default'           => "",
			)
		),
	));
});

//https://marketsveta.su/wp-json/gensvet/v2/get_filter_count?catid=14
function get_filter_count(WP_REST_Request $request)
{
	$start = microtime(true);
	
	global $wpdb; 

	$filter = FILTER_CONTENT;

    $cat_query = cat_query_param($request["catid"],json_decode($request['filter_param'], true)["s"]);

    $dopquery = generate_query(json_decode($request['filter_param'], true));
    
    $q = "SELECT * FROM `light_filter` WHERE ".$cat_query.$dopquery;

	$rez = $wpdb->get_results($q, ARRAY_A );
	
    foreach ($rez as $r) {
        if (!empty($r["offer_material"]))
            $filter["offer_material"][$r["offer_material"]]+=1;
        
        if (!empty($r["offer_lamp_count"]))
            $filter["offer_lamp_count"][$r["offer_lamp_count"]]+=1;
        
        if (!empty($r["offer_size"]))
            $filter["offer_size"][$r["offer_size"]]+=1;
        
        if (!empty($r["offer_designer"]))
            $filter["offer_designer"][$r["offer_designer"]]+=1;
        
        if (!empty($r["offer_tsokol"]))
            $filter["offer_tsokol"][$r["offer_tsokol"]]+=1;
        
    }

    $mm = $wpdb->get_results("SELECT MIN(`offer_price`) as 'min', MAX(`offer_price`) as 'max' FROM `light_filter` WHERE ".$cat_query.$dopquery );
	$filter["offer_price_max"] = $mm[0]->max;
	$filter["offer_price_min"] = $mm[0]->min;

	$filter["count"] = count($rez);
	$filter["query"] = $q;
	$filter["filter"] = json_decode($request['filter_param']);
	$filter["time"] = (microtime(true) - $start);

    uasort($filter["offer_material"], function($a, $b) { return $a < $b; });
    uasort($filter["offer_lamp_count"], function($a, $b) { return $a < $b; });
    uasort($filter["offer_size"], function($a, $b) { return $a < $b; });
    uasort($filter["offer_designer"], function($a, $b) { return $a < $b; });
    uasort($filter["offer_tsokol"], function($a, $b) { return $a < $b; });

	if (!empty($filter))
		return $filter;
	else
		return new WP_Error('no_token', 'Токен не найден или пользователь уже разлогинен.', ['status' => 403]);
}

?>