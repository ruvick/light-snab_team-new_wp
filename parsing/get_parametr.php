<?
    //php lsnab/wp-content/themes/light-new/parsing/get_parametr.php
    ini_set('memory_limit', '2048M'); 
    require_once("../../../../wp-config.php");
        
    // параметры по умолчанию
    $posts = get_posts( array(
        'numberposts' => -1,
        'post_type' => "light",
        'offset' => 0,

        // 'tax_query' => array(
        //     array(
        //         'taxonomy' => 'lightcat',
        //         'field'    => 'id',
        //         'terms'    => 113
        //     )
        // )
    ) );

    $counter = 0;
    foreach( $posts as $post ){
    
        // if ($post->ID != 27063) continue;

        // $curPrice = carbon_get_post_meta($post->ID, "offer_price");
        // $curPriceNew = round($curPrice * 0.9);
        // update_post_meta( $post->ID, '_offer_price', $curPriceNew);    
        
        echo $post->post_title . "\n\r";

        
        
        $modif = carbon_get_the_post_meta('offer_cherecter');
        if($modif) {
            $i = 0;
            foreach($modif as $item) {

                $val_m = trim(str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $item["c_val"]));

                if ($item["c_name"] === "Материал") {
                    carbon_set_post_meta( $post->ID, 'offer_material', $val_m );
                    echo "Добавлено: ". $item["c_name"] . " -> ". $val_m . "\n\r";
                }
                
                if ($item["c_name"] === "Тип цоколя") {
                    carbon_set_post_meta( $post->ID, 'offer_tsokol', $val_m );
                    echo "Добавлено: ". $item["c_name"] . " -> ". $val_m . "\n\r";
                }
                
                if ($item["c_name"] === "Количество ламп") {
                    carbon_set_post_meta( $post->ID, 'offer_lamp_count', $val_m );
                    echo "Добавлено: ". $item["c_name"] . " -> ". $val_m . "\n\r";
                }
                
                if ($item["c_name"] === "Размеры") {
                    carbon_set_post_meta( $post->ID, 'offer_size', $val_m );
                    echo "Добавлено: ". $item["c_name"] . " -> ". $val_m . "\n\r";
                }
                
                if ($item["c_name"] === "Дизайнер") {
                    carbon_set_post_meta( $post->ID, 'offer_designer', $val_m );
                    echo "Добавлено: ". $item["c_name"] . " -> ". $val_m . "\n\r";
                }

                
                $i++;

                
            }
        }

        echo "\n\r";
        
        $counter ++; 
     }


?>