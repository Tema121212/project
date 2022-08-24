<?php
session_start();
define('PORT',"8090");


require_once ("classes/chat.php");

$chat = new Chat();

$socket = socket_create(AF_INET, SOCK_STREAM,SOL_TCP);

socket_set_option($socket, SOL_SOCKET,SO_REUSEADDR, 1);
socket_bind($socket,0, PORT);


socket_listen($socket);

$clientSocketArray = array($socket);

while(true) {
    
    $newSocketArray = $clientSocketArray;
    $nullA = [];
    socket_select($newSocketArray,$nullA, $nullA,0,10);

    if(in_array($socket, $newSocketArray)) {
        $newSocket = socket_accept($socket);
        $clientSocketArray[] = $newSocket;
        
        $header = socket_read($newSocket, 1024);
        $chat->sendHeaders($header,$newSocket,'localhost/chat',PORT);

        socket_getpeername($newSocket, $client_ip_adress);
        $connectionACK = $chat->newConnectionACK($client_ip_adress);
        $chat->send($connectionACK,$clientSocketArray);

		var_dump($_SESSION);



    }



}


socket_close($socket);