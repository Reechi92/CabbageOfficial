<?php

/* // Получаем данные из POST-запроса
$data = json_decode(file_get_contents('php://input'), true);

// Обрабатываем данные
// Здесь вы можете сохранить данные в базе данных, файле или выполнить другие операции

// Возвращаем ответ в формате JSON
$response = [
    'status' => 'success',
    'message' => 'Data received successfully',
    'data' => $data
];

// Устанавливаем заголовок Content-Type для JSON
header('Content-Type: application/json');

// Возвращаем JSON-ответ
echo json_encode($response);

echo var_dump($_POST); */

// // Получаем данные из POST-запроса
// $data = json_decode(file_get_contents('php://input'), true);

// // Проверяем, что данные были получены
// if ($data) {
//     // Подготовка данных для записи в файл
//     $logEntry = date('Y-m-d H:i:s') . " - " . json_encode($data) . PHP_EOL;
    
//     // Записываем данные в файл device_info_log.txt
//     file_put_contents('device_info_log.txt', $logEntry, FILE_APPEND | LOCK_EX);

//     // Формируем JSON-ответ для клиента
//     $response = [
//         'status' => 'Успешно',
//         'message' => 'Данные сохраннены',
//         'data' => $data
//     ];
// } else {
//     // Обрабатываем случай, если данные не были получены
//     $response = [
//         'status' => 'error',
//         'message' => 'No data received'
//     ];
// }

// // Устанавливаем заголовок Content-Type для JSON
// header('Content-Type: application/json');

// // Возвращаем JSON-ответ
// echo json_encode($response);