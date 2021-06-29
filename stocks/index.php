<?php
date_default_timezone_set('UTC');
setlocale(LC_MONETARY, 'en_US');

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
/*-----------ACCESS TOKEN REQUEST------------*/
try {
  $client = new Client(['defaults' => ['exceptions' => false]]);
  $response = $client->post('https://security.snl.com/SNL.Services.Security.Service/oauth/token', 
  [
    'form_params' => [
      'client_id' => 'b4f365d4eeb44d3cb356c093ca8c856c',
      'client_secret' => '1.CC4D8940E985C0BB5F462E540C6034489611E9B2.D0wQhRx7Wa1cfUJjxDxpOPbEDgT-CMA9P0HtQUQ1ij1suNFUMdBF2nV4jyd_sPxrf1V49Ep_J7apzhU8nYreQrhM5t3f8oI5jxJhabvH4NPMsZBrVljnfrUlbFua84F8BtxFWwQ1WMda3n2tnD1wbfH_sdKadprIjCKaYYpeHL_dK3-IMfod6b6jj9QkKKjyyFvwCGvkqYx_Cs3TERTdKndYrPuIBA0EkY9JQJoymd5Om_gObkJfi_brzKobdmwubConoLrMej6ST7X3Aotcq8fBFa3OcYikGOeNO_Cdr_9zQDvm6nICNvNS0mej0aMaaB55pi3HXZ72W2aOzZEsuA',
      'scope' => 'http://www.snl.com',
      'grant_type' => 'client_credentials'
    ]
  ]
  );
  $response = json_decode($response->getBody(), true);
  $accessToken = $response['access_token'];
  // echo "\xA-----------------Access Token---------------";
  // echo "\xA". $accessToken;
  // echo "\xA-----------------Access Token---------------\xA";
} catch (RequestException $e) {
  echo Psr7\str($e->getRequest());
  if ($e->hasResponse()) {
    echo Psr7\str($e->getResponse());
  }
}


try {
  // You can set any number of default request options.
  $client = new Client(['base_uri' => 'https://data.snl.com']);
  $response = $client->request('GET', 'irwebapi/v1/stocks/GetStockInfo?id=4426551&$format=json',
  [
    'headers' => [
      'Authorization' => 'Bearer ' . $accessToken,
    ]
  ]);
  // echo "\xA-----------------HTTP Response Status Code---------------";
  // echo "\xA" . $response->getStatusCode();
  // echo "\xA-----------------HTTP Response Status Code---------------\xA";
 
  // echo "\xA-----------------HTTP Raw Response Body---------------";
  // echo "\xA" . $response->getBody();
  // echo "\xA-----------------HTTP Raw Response Body---------------\xA";
 
  $stockInfo = json_decode($response->getBody(), true);
  $info = $stockInfo['d']['GetStockInfo']['Snapshot'];
  // echo '<pre>';
  // var_dump($info);


  echo '<h4>'. $info['Exchange'] .' : '. $info['Ticker'] .'</h4>';

  echo '<h2>';
  if($info['NetChangeDirection'] == 'positive') {
    echo '<small><i class="Default-caret-up" style="color:#00ff00"></i></small>';
  } else if($info['NetChangeDirection'] == 'negative') {
    echo '<small><i class="Default-caret-down" style="color:#ff0000"></i></small>';
  }
  echo ' $'. $info['CurrentPrice'] .'</h2>';

  echo '<table id="newmedia-stock">';
  echo '<tr><td>Change</td><td>'. money_format('%(#10n', $info['NetChangeFromPreviousClose']) .'</td></tr>';

  echo '<tr><td>Change</td><td>'. $info['PercentChangeFromPreviousClose'] .'%</td></tr>';

  echo '<tr><td>Market Value ($M) </td><td>'. number_format($info['MarketCap'], 2) .'</td></tr>';

  echo '<tr><td>Volume </td><td>'. $info['VolumeFormatted'] .'</td></tr>';
  echo '</table>';

  echo '<br><em>As of '. date('M d, Y', strtotime($info['QuoteTimeStamp'])) .' (minimum 20 minute delay)</em> ';
  // echo 'Minimum 20 minute delay';

} catch (RequestException $e) {
  echo Psr7\str($e->getRequest());
  if ($e->hasResponse()) {
    echo Psr7\str($e->getResponse());
  }
}



?>
