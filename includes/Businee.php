<?php


switch ($message['text']){
    case '您選擇「商用飲水設備」':
          echo getBusinessa($client,$event['replyToken']);
          break;
    case '您選擇「商用開水機」':
          echo getBusinessb($client,$event['replyToken']);
          break;
    case '您選擇「桶裝水飲水機」':
          echo getBusinessc($client,$event['replyToken']);




    default:
    #code
    break;

}

function getBusinessa($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(


          array (
            'type' => 'flex',
            'altText' => '已傳送給您「商用飲水設備」的目錄',
            'contents' => 
            array (
              'type' => 'carousel',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '商用飲水設備',
                        'size' => 'md',
                        'align' => 'center',
                        'weight' => 'bold',
                        'color' => '#FFFFFF',
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
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UN-9505-1-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UN-9505BG',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '賀眾牌智慧節能飲水機系列',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/un-9505bg/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                      ),
                      2 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/21000A-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-21000A',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '冰溫熱程控殺菌飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-21000a/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      3 => 
                      array (
                        'type' => 'separator',
                      ),
                      4 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UW-3201EW-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-3201EW',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '新一代 冷熱鉤管式飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-3201ew/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      5 => 
                      array (
                        'type' => 'separator',
                      ),
                      6 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/1302-1-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UN-1302AG-1',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '微電腦節能型飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/un-1302ag-1/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
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
                      'backgroundColor' => '#585D70',
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '商用飲水設備',
                        'size' => 'md',
                        'align' => 'center',
                        'weight' => 'bold',
                        'color' => '#FFFFFF',
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
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/11000.999.998-600x600-1.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UR-11000B',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '溫熱程控殺菌純水飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/ur-11000b/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                      ),
                      2 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/21000A-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UR-21000A',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '冰溫熱程控殺菌純水飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/ur-21000a/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      3 => 
                      array (
                        'type' => 'separator',
                      ),
                      4 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/11000.999.998-600x600-1.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-11000B',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '溫熱程控殺菌飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-11000b/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      5 => 
                      array (
                        'type' => 'separator',
                      ),
                      6 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UW-2302DW-2-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-2302DW-2',
                                'size' => 'xxs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '廚下型冰熱飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-2302dw-2/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
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
                      'backgroundColor' => '#585D70',
                    ),
                  ),
                ),
                2 => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '商用飲水設備',
                        'size' => 'md',
                        'align' => 'center',
                        'weight' => 'bold',
                        'color' => '#FFFFFF',
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
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/11000.999.998-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-998',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '冰溫熱程控殺菌飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-998/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                      ),
                      2 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/11000.999.998-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-999',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '冰溫熱程控殺菌純水飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-999/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      3 => 
                      array (
                        'type' => 'separator',
                      ),
                      4 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UW-6201DW-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UW-6201DW',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '新一代 冰熱鉤管式飲水機',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uw-6201dw/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                              ),
                            ),
                          ),
                        ),
                      ),
                      5 => 
                      array (
                        'type' => 'separator',
                      ),
                      6 => 
                      array (
                        'type' => 'box',
                        'layout' => 'horizontal',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UN-9505-1-600x600.jpg',
                            'margin' => 'none',
                            'align' => 'start',
                            'aspectRatio' => '1:1',
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'UN-9505AG',
                                'size' => 'xs',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '賀眾牌智慧節能飲水機系列',
                                'size' => 'sm',
                                'wrap' => true,
                              ),
                            ),
                          ),
                          2 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'spacer',
                                'size' => 'xxl',
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/un-9505ag/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
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
                      'backgroundColor' => '#585D70',
                    ),
                  ),
                ),
              ),
            ),
          )
  

      )
  ));

}









function getBusinessb($client,$event){
  $client->replyMessage(array(
      'replyToken' => $event,
      'messages' => array(

        array (
          'type' => 'flex',
          'altText' => '已傳送給您「商用飲水設備」的目錄',
          'contents' => 
          array (
            'type' => 'carousel',
            'contents' => 
            array (
              0 => 
              array (
                'type' => 'bubble',
                'direction' => 'ltr',
                'header' => 
                array (
                  'type' => 'box',
                  'layout' => 'vertical',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'text',
                      'text' => '商用開水機',
                      'size' => 'md',
                      'align' => 'center',
                      'weight' => 'bold',
                      'color' => '#FFFFFF',
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
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/20111222_134818.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UB-022HS-2',
                              'size' => 'xs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '數位開水機 20加侖型',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/ub-022hs-2/',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'type' => 'separator',
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/20111222_134818.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UB-032HS-2',
                              'size' => 'xs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '數位開水機30加侖型',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/ub-032hs-2/',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    3 => 
                    array (
                      'type' => 'separator',
                    ),
                    4 => 
                    array (
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/20111222_134216.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UB-042HS-2',
                              'size' => 'xs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '數位開水機40加侖型',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/ub-042hs-2/',
                              ),
                            ),
                          ),
                        ),
                      ),
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
                      'type' => 'filler',
                    ),
                  ),
                ),
                'styles' => 
                array (
                  'header' => 
                  array (
                    'backgroundColor' => '#585D70',
                  ),
                ),
              ),
              1 => 
              array (
                'type' => 'bubble',
                'direction' => 'ltr',
                'header' => 
                array (
                  'type' => 'box',
                  'layout' => 'vertical',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'text',
                      'text' => '商用開水機',
                      'size' => 'md',
                      'align' => 'center',
                      'weight' => 'bold',
                      'color' => '#FFFFFF',
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
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/20111222_134216.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UB-052HS-2',
                              'size' => 'xs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '數位開水機50加侖型',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/ub-052hs-2/',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'type' => 'separator',
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2019/03/UW-1602EG-1%E7%84%A1%E6%8E%A5%E6%B0%B4%E7%9B%92-600x600.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UW-1602EG-1',
                              'size' => 'xxs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '桌上型冷熱飲水機',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/uw-1602eg-1/',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    3 => 
                    array (
                      'type' => 'separator',
                    ),
                    4 => 
                    array (
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/20170822_185949.jpg',
                        ),
                        1 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                            ),
                            1 => 
                            array (
                              'type' => 'text',
                              'text' => 'UW-1512HM-2',
                              'size' => 'xxs',
                            ),
                            2 => 
                            array (
                              'type' => 'text',
                              'text' => '桌上型速熱儲備型飲水機',
                              'size' => 'sm',
                              'wrap' => true,
                            ),
                          ),
                        ),
                        2 => 
                        array (
                          'type' => 'box',
                          'layout' => 'vertical',
                          'contents' => 
                          array (
                            0 => 
                            array (
                              'type' => 'spacer',
                              'size' => 'lg',
                            ),
                            1 => 
                            array (
                              'type' => 'button',
                              'action' => 
                              array (
                                'type' => 'uri',
                                'label' => '詳情',
                                'uri' => 'https://9000.com.tw/product/uw-1512hm-2/',
                              ),
                            ),
                          ),
                        ),
                      ),
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
                      'type' => 'filler',
                    ),
                  ),
                ),
                'styles' => 
                array (
                  'header' => 
                  array (
                    'backgroundColor' => '#585D70',
                  ),
                ),
              ),
            ),
          ),
        )


        

      )
  ));

}














function getBusinessc($client,$event){
  $client->replyMessage(array(
      'replyToken' => $event,
      'messages' => array(

         
        array (
          'type' => 'flex',
          'altText' => '已傳送給您「商用開水機」的目錄',
          'contents' => 
          array (
            'type' => 'bubble',
            'direction' => 'ltr',
            'header' => 
            array (
              'type' => 'box',
              'layout' => 'vertical',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'text',
                  'text' => '桶裝水飲水機',
                  'size' => 'md',
                  'align' => 'center',
                  'weight' => 'bold',
                  'color' => '#FFFFFF',
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
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'image',
                      'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/%E8%B3%80%E7%9C%BE%E7%89%8C%E7%B4%94%E6%B7%A8%E6%B0%B4-600x600.jpg',
                    ),
                    1 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                        ),
                       
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => '5加侖桶裝水',
                          'size' => 'sm',
                          'wrap' => true,
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                          'size' => 'lg',
                        ),
                        1 => 
                        array (
                          'type' => 'button',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'label' => '詳情',
                            'uri' => 'https://9000.com.tw/product/5%E5%8A%A0%E4%BE%96%E6%A1%B6%E8%A3%9D%E6%B0%B4/',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'separator',
                ),
                2 => 
                array (
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'image',
                      'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/5%E5%8A%A0%E4%BE%96%E7%B4%99%E7%AE%B1%E6%B0%B4-600x600.jpg',
                    ),
                    1 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                        ),
                       
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => '5加侖紙箱水',
                          'size' => 'sm',
                          'wrap' => true,
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                          'size' => 'lg',
                        ),
                        1 => 
                        array (
                          'type' => 'button',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'label' => '詳情',
                            'uri' => 'https://9000.com.tw/product/5%E5%8A%A0%E4%BE%96%E7%B4%99%E7%AE%B1%E6%B0%B4/',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                3 => 
                array (
                  'type' => 'separator',
                ),
                4 => 
                array (
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'image',
                      'url' => 'https://9000.com.tw/wp-content/uploads/2018/09/UC-081-600x600.jpg',
                    ),
                    1 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'UC-081AW-1',
                          'size' => 'xs',
                        ),
                        2 => 
                        array (
                          'type' => 'text',
                          'text' => '直立式冰冷熱瓶裝機',
                          'size' => 'sm',
                          'wrap' => true,
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                          'size' => 'lg',
                        ),
                        1 => 
                        array (
                          'type' => 'button',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'label' => '詳情',
                            'uri' => 'https://9000.com.tw/product/uc-081aw-1/',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                5 => 
                array (
                  'type' => 'separator',
                ),
                6 => 
                array (
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'image',
                      'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UC-082NBK-11-600x600.jpg',
                    ),
                    1 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'UC-082NBK-1',
                          'size' => 'xs',
                        ),
                        2 => 
                        array (
                          'type' => 'text',
                          'text' => '上流式冰冷熱瓶裝型飲水機',
                          'size' => 'sm',
                          'wrap' => true,
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                          'size' => 'lg',
                        ),
                        1 => 
                        array (
                          'type' => 'button',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'label' => '詳情',
                            'uri' => 'https://9000.com.tw/product/uc-082nbk-1/',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                7 => 
                array (
                  'type' => 'separator',
                ),
                8 => 
                array (
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'image',
                      'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/YS-8205BW-600x600.jpg',
                    ),
                    1 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'YS-8205BW',
                          'size' => 'xs',
                        ),
                        2 => 
                        array (
                          'type' => 'text',
                          'text' => '桌上型冷熱瓶裝飲水機',
                          'size' => 'sm',
                          'wrap' => true,
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'box',
                      'layout' => 'vertical',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'spacer',
                          'size' => 'lg',
                        ),
                        1 => 
                        array (
                          'type' => 'button',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'label' => '詳情',
                            'uri' => 'https://9000.com.tw/product/ys-8205bw/',
                          ),
                        ),
                      ),
                    ),
                  ),
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
                  'type' => 'filler',
                ),
              ),
            ),
            'styles' => 
            array (
              'header' => 
              array (
                'backgroundColor' => '#585D70',
              ),
            ),
          ),
        )





      )
  ));

}




?>




