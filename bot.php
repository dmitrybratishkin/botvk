<?php

require_once('simplevk-master/autoload.php');
use DigitalStar\vk_api\VK_api as vk_api;



const VK_KEY = "946f999577036bf24d306643e3893ad0b3bd1dd61b978e8e9e80763780ea63ca60f11f53645545b8189f8";
const ACCESS_KEY = "1916c3cf";
const VERSION = "5.130";

$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);

$id = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя

$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data); 

if ($data->type == 'message_new') {

    if ($message == '!бот') {

            $vk->sendMessage($peer_id, "Привет :-)"); // Отправляем ответ
            
        }


    }