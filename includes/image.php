<?php







if (strtolower($message['text']) == "q" || $message['text'] == "Q") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
 


          array (
            'type' => 'flex',
            'altText' => '立即掃描QRcode!',
            'contents' => 
            array (
              'type' => 'bubble',
              'direction' => 'ltr',
              'hero' => 
              array (
                'type' => 'image',
                'url' => 'https://9000.com.tw/wp-content/uploads/2017/05/9000.png',
                'size' => 'xxl',
                'aspectRatio' => '1.51:1',
                'aspectMode' => 'fit',
              ),
              'body' => 
              array (
                'type' => 'box',
                'layout' => 'vertical',
                'contents' => 
                array (
                  0 => 
                  array (
                    'type' => 'separator',
                  ),
                  1 => 
                  array (
                    'type' => 'image',
                    'url' => 'https://xeee.co.place/TESTBOT/assets/QRcode.png',
                    'size' => '4xl',
                  ),
                  2 => 
                  array (
                    'type' => 'separator',
                  ),
                ),
              ),
              'footer' => 
              array (
                'type' => 'box',
                'layout' => 'horizontal',
                'contents' => 
                array (
                  0 => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '立即掃描即可加入',
                        'align' => 'center',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => '賀眾產品目錄 LineBot!',
                        'align' => 'center',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          )



            
          )
        ));
    }
    
    









    if (strtolower($message['text']) == "預約" || $message['text'] == "預約") {
      $client->replyMessage(array(
          'replyToken' => $event['replyToken'],
          'messages' => array(

            array (
              'type' => 'flex',
              'altText' => '預約',
              'contents' => 
              array (
                'type' => 'bubble',
                'direction' => 'ltr',
                'body' => 
                array (
                  'type' => 'box',
                  'layout' => 'vertical',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'button',
                      'action' => 
                      array (
                        'type' => 'uri',
                        'label' => '預約',
                        'uri' => 'https://reurl.cc/DEprQ',
                      ),
                      'style' => 'primary',
                    ),
                  ),
                ),
              ),
            )

    
            
    )
  ));
}











?>


