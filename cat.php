<?php
try {
	$url = 'https://min-api.cryptocompare.com/data/v2/histohour?fsym=BTC&tsym=USD&limit=10&api_key=042d0e19935a4d0c8f60ab217bc1d21ae14941ce09c31366011d46a9fa88ccf4';
	$rr = json_decode(file_get_contents($url), TRUE);
	// var_dump($data);
	extract($rr);
	// var_dump($Data);
    echo "<h2>BTC</h2>";
    echo "<table border=\"1px\"><tr><td>Time</td><td>close cost in USD</tr>";
	foreach ($Data['Data'] as $val){
        $time = $val['time'];
        $datetr =  date('j,n,Y H:i:s', $time);
        echo "<tr><td>{$datetr}</td><td>{$val['close']}</td></tr>";

	}
    echo "</table>";

    $url = 'https://min-api.cryptocompare.com/data/v2/histohour?fsym=ETH&tsym=USD&limit=10&api_key=042d0e19935a4d0c8f60ab217bc1d21ae14941ce09c31366011d46a9fa88ccf4';
	$rr = json_decode(file_get_contents($url), TRUE);
	// var_dump($data);
	extract($rr);
	// var_dump($Data);
    echo "<h2>ETH</h2>";
    echo "<table border=\"1px\"><tr><td>Time</td><td>close cost in USD</tr>";
	foreach ($Data['Data'] as $val){
        $time = $val['time'];
        $datetr =  date('j,n,Y H:i:s', $time);
        echo "<tr><td>{$datetr}</td><td>{$val['close']}</td></tr>";

	}
    echo "</table>";




} catch (\Throwable $th) {
	//throw $th;
}



?>