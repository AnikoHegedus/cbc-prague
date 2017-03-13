<?php

/*$url = "http://www.imdb.com/movies-in-theaters/";*/
/*$url = "https://httpbin.org/headers";*/
/*$options = ["http" => [
    "user_agent" => "Mozilla",
    "header" => [*/
       // "Accept: */*",
        /*"Accept-Language: hu-HU,hu;q=0.8,en-US;q=0.6,en;q=0.4"
        ]]];
$context = stream_context_create($options);
$page = file_get_contents($url, false, $context);*/

$url = "http://www.imdb.com/movies-in-theaters/";
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_HEADER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "Mozilla",
    CURLOPT_HTTPHEADER => [
        "Accept: foobar",
        "Foo: bar"
    ]      
]);

$page = curl_exec($ch);
try{
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc -> loadHTML($page);
    $xml = simplexml_import_dom($doc->getElementById('main'));
    foreach($xml->div->div[1]->div as $div){
        if(strpos($div["class"], "list_item") === false){
            throw new Exception("DIV does not have list_item class");
        }
        $movie = $div->table->tbody->tr->td[1]->h4->a;
        if((string)$div->table->tbody->tr->td[1]->h4["itemprop"] !== "name"){
            throw new Exception("H4 has unknown itemprop");
        }
        echo "<li><img src=''><a href='http://www.imdb.com" . $movie["href"] .  "'>" . $movie . "</a></li>";
    }
} catch (Exeption $e){
    echo $e->getMessage();
}
