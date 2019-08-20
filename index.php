<?php

error_reporting(0); // 不顯示錯誤 (Debug 時請註解掉)
date_default_timezone_set("Asia/Taipei"); // 設定時區為台北時區
require_once('LINEBotTiny.php');
if (file_exists(__DIR__ . '/config.ini')) {
    $config = parse_ini_file("config.ini", true); // 解析配置檔
    if ($config['Channel']['Token'] == Null || $config['Channel']['Secret'] == Null) {
        error_log("config.ini 配置檔未設定完全！", 0); // 輸出錯誤
    } else {
        $channelAccessToken = $config['Channel']['Token'];
        $channelSecret = $config['Channel']['Secret'];
    }
} else {
    $configFile = fopen("config.ini", "w") or die("Unable to open file!");
    $configFileContent = '';
    fwrite($configFile, $configFileContent); // 建立文件並寫入
    fclose($configFile); // 關閉文件
    error_log("config.ini 配置檔建立成功，請編輯檔案填入資料！", 0); // 輸出錯誤
}
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    require_once('includes/Family.php'); 
                    require_once('includes/Menu.php'); 
                    require_once('includes/Businee.php'); 
                    require_once('includes/Filter.php'); 
                    require_once('includes/image.php');
                    require_once('includes/location.php');
                    break;
                default:
                    //error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;

            case 'follow': // 加為好友觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array (
                        'type' => 'flex',
                        'altText' => '賀桃關係企業歡迎您的加入!',
                        'contents' => 
                        array (
                          'type' => 'bubble',
                          'header' => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'flex' => 0,
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'image',
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/05/9000.png',
                                'size' => 'xl',
                                'aspectRatio' => '16:9',
                                'aspectMode' => 'fit',
                              ),
                            ),
                          ),
                          'body' => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '歡迎您的加入!',
                                'size' => 'lg',
                                'align' => 'center',
                                'weight' => 'bold',
                                'color' => '#054D7D',
                              ),
                              1 => 
                              array (
                                'type' => 'box',
                                'layout' => 'vertical',
                                'spacing' => 'sm',
                                'margin' => 'lg',
                                'contents' => 
                                array (
                                  0 => 
                                  array (
                                    'type' => 'box',
                                    'layout' => 'baseline',
                                    'spacing' => 'sm',
                                    'contents' => 
                                    array (
                                      0 => 
                                      array (
                                        'type' => 'text',
                                        'text' => '您能夠在此瀏覽賀眾牌所有產品',
                                        'flex' => 1,
                                        'size' => 'md',
                                        'align' => 'center',
                                        'weight' => 'bold',
                                        'color' => '#666666',
                                        'wrap' => true,
                                      ),
                                    ),
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'separator',
                                    'margin' => 'md',
                                    'color' => '#FFFFFF',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'box',
                                    'layout' => 'baseline',
                                    'spacing' => 'sm',
                                    'contents' => 
                                    array (
                                      0 => 
                                      array (
                                        'type' => 'icon',
                                        'url' => 'https://xeee.co.place/TESTBOT/assets/W.png',
                                      ),
                                      1 => 
                                      array (
                                        'type' => 'text',
                                        'text' => '「目錄選單」可選擇產品類型',
                                        'flex' => 1,
                                        'size' => 'md',
                                        'color' => '#666666',
                                      ),
                                    ),
                                  ),
                                  3 => 
                                  array (
                                    'type' => 'separator',
                                    'color' => '#FFFFFF',
                                  ),
                                  4 => 
                                  array (
                                    'type' => 'box',
                                    'layout' => 'baseline',
                                    'spacing' => 'sm',
                                    'contents' => 
                                    array (
                                      0 => 
                                      array (
                                        'type' => 'icon',
                                        'url' => 'https://xeee.co.place/TESTBOT/assets/W.png',
                                      ),
                                      1 => 
                                      array (
                                        'type' => 'text',
                                        'text' => '「聯絡我們」可查看服務據點',
                                        'flex' => 1,
                                        'size' => 'md',
                                        'color' => '#666666',
                                      ),
                                    ),
                                  ),
                                  5 => 
                                  array (
                                    'type' => 'separator',
                                    'color' => '#FFFFFF',
                                  ),
                                  6 => 
                                  array (
                                    'type' => 'box',
                                    'layout' => 'baseline',
                                    'spacing' => 'sm',
                                    'contents' => 
                                    array (
                                      0 => 
                                      array (
                                        'type' => 'icon',
                                        'url' => 'https://xeee.co.place/TESTBOT/assets/W.png',
                                      ),
                                      1 => 
                                      array (
                                        'type' => 'text',
                                        'text' => '「賀眾牌」可查看企業介紹',
                                        'flex' => 1,
                                        'size' => 'md',
                                        'color' => '#666666',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'styles' => 
                          array (
                            'header' => 
                            array (
                              'backgroundColor' => '#DEEBF7',
                            ),
                          ),
                        ),
                      )
                )
            ));
            break;

        default:
            //error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
?>