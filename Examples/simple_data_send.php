<?php
use ByteKing\Transport\TransportUDP;
use ByteKing\ByteKingClient;

//initialising transmitter and client
$data_transfer = new TransportUDP();
$data_transfer->setConfiguration('127.0.0.1', '41452');
ByteKingClient::setTransport($data_transfer);

$api = 'your_key';
ByteKingClient::setApiKey($api);


//php script
echo "Doing something\n";

//metric sending
ByteKingClient::send('data_type_1', 'Current date is '.date('Y-m-d H:i:s'));

echo "The end of test script\n";
