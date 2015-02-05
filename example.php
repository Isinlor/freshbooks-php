<?
//include particular file for entity you need (Client, Invoice, Category...)
require_once "vendor/autoload.php";

//you API url and token obtained from freshbooks.com
$url = "your-url-please-replace";
$token = "your-token-please-replace";

//init singleton FreshBooks_HttpClient
FreshBooks_HttpClient::init($url,$token);

//new Client object
$client = new FreshBooks_Client();

//try to get client with client_id 3
if(!$client->get(3)){
//no data - read error
	echo $client->lastError;
}
else{
//investigate populated data
	print_r($client);
}
?>