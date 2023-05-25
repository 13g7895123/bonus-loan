<?php

include_once(__DIR__ . '/../../__Class/ClassLoad.php');
date_default_timezone_set('Asia/Taipei');

if(isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'submit':

            $post_data = [
                'name' => $_POST['name'],
                'sex' => $_POST['sex'],
                'phone' => $_POST['phone'],
                'amount' => $_POST['amount'],
                'cate' => $_POST['cate'],
                'location' => $_POST['location'],
                'remark' => $_POST['remark']
            ];

            echo json_encode($post_data);
            die();

            MYPDO::$table = 'form_record';
            MYPDO::$data = $post_data;
            $checked = MYPDO::insert();

            // if ($checked > 0){
            //     $res['success'] = true;

            //     // NOTIFY
            //     $tokens = TOKENS;
            //     foreach ($tokens as $token) {
            //         // line_notify($token, $post_data);
            //     }
                
            // }else{
            //     $res['success'] = false;
            //     $res['msg'] = '寫入資料庫錯誤';
            // }

            // echo json_encode($res);
            break;
    }
}

function line_notify($token, $form_data){

    $sex = $form_data['sex'] == 'M' ? '男' : '女';

    $msg = PHP_EOL.
        '【易速貸官網通知】'.PHP_EOL.
        '【姓名】'.$form_data['name'].PHP_EOL.
        '【性別】'.$sex.PHP_EOL.
        '【手機】'.$form_data['phone'].PHP_EOL.
        '【金額】'.$form_data['amount'].PHP_EOL.
        '【類別】'.$form_data['cate'].PHP_EOL.
        '【地區】'.$form_data['location'];
        
    if ($form_data['remark'] != ''){
        $msg .= PHP_EOL.'【備註】'.$form_data['remark'];
    }

    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization: Bearer '.$token
    );
    $message = array(
        'message' => $msg
    );
    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
}

?>