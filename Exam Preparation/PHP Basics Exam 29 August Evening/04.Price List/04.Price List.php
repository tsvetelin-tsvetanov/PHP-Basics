<?php
$pattern = "/<tr>[\W]+<td>([\w\W\s\d]+?)</td>[\W]*<td>([\w\W\s\d]+?)</td>*
    <td>([\w\W\s\d]+?)</td>*<td>([\w\W\s\d]+?)</td></tr>/";

$table = $_GET['priceList'];

preg_match_all($pattern, $table, $matches);
$products = array();
foreach($matches as $match) {
    $product = array('product' => trim($match[1]),
        'price' => trim($match[3]),
        'currency' => trim($match[4]));
    $category = trim($match[2]);
    echo '<br>';
    if (isset($products[$match[2]])) {
        $procucts[$match[2]] = array();
    }
    $products[$category][] = $product;
}

ksort($products);
foreach($products as $key => $value){
    usort($value, function($a, $b){
       return strcmp($a['product'], $b['product']) ;
    });
}

