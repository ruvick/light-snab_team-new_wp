<?
// https://light-snab.ru/wp-content/themes/light-new/parsing/all_tovar.php


    ini_set('max_execution_time', 9000);
    ini_set('memory_limit', '2048M');
    require_once("../../../../wp-config.php");
 
    
    global $wpdb;

    $posts = $wpdb->get_results("SELECT * FROM `light_filter` LIMIT 1000");

        $counter = 0;
?>

<table>
    <thead>
        <tr>
            <th>Изображение</th>
            <th>Наименование</th>
            <th>Артикул</th>
        </tr>
    </thead>
    
    <tbody>
<?

        foreach( $posts as $post ){
?>
        <tr>
            <td><img width = "50" height = "50" src="<? echo $post->img_lnk ?>" alt=""></td>
            <td><? echo $post->title ?></td>
            <td><? echo $post->offer_sku ?></td>
        </tr>
<?
        }

?>
    </tbody>

</table>