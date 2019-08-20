<?php


switch ($message['text']){
    case '商用產品':
          echo getBUsinee($client,$event['replyToken']);
          break;
    case '家庭淨水':
          echo getHome($client,$event['replyToken']);
          break;
    case '濾材配件':
          echo getFilter($client,$event['replyToken']);
          




    default:
    #code
    break;

}

function getBUsinee($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(

            array (
                'type' => 'flex',
                'altText' => '已傳送給您「商用產品」的類型目錄',
                'contents' => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
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
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://9000.com.tw/wp-content/uploads/2017/05/9000.png',
                    'size' => 'full',
                    'aspectRatio' => '3:1',
                    'aspectMode' => 'fit',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'Action',
                      'uri' => 'https://linecorp.com/',
                    ),
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'spacing' => 'md',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'none',
                        'color' => '#98C4E8',
                      ),
                      1 => 
                      array (
                        'type' => 'filler',
                      ),
                      2 => 
                      array (
                        'type' => 'text',
                        'text' => '請選擇商用產品類別',
                        'size' => 'sm',
                        'align' => 'center',
                        'color' => '#A8A7B2',
                      ),
                      3 => 
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
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '桶裝水飲水機',
                              'text' => '您選擇「桶裝水飲水機」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          2 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          3 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '商用飲水設備',
                              'text' => '您選擇「商用飲水設備」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          4 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          5 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '商用開水機',
                              'text' => '您選擇「商用開水機」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'styles' => 
                  array (
                    'header' => 
                    array (
                      'backgroundColor' => '#FFFFFF',
                    ),
                  ),
                ),
              )







        )
    ));

}

function getHome($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(
            array (
                'type' => 'flex',
                'altText' => '已傳送給您「家庭淨水」的類型目錄',
                'contents' => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
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
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://9000.com.tw/wp-content/uploads/2017/05/9000.png',
                    'size' => 'full',
                    'aspectRatio' => '3:1',
                    'aspectMode' => 'fit',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'Action',
                      'uri' => 'https://linecorp.com/',
                    ),
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'spacing' => 'md',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'none',
                        'color' => '#98C4E8',
                      ),
                      1 => 
                      array (
                        'type' => 'filler',
                      ),
                      2 => 
                      array (
                        'type' => 'text',
                        'text' => '請選擇家庭淨水產品類別',
                        'size' => 'sm',
                        'align' => 'center',
                        'color' => '#A8A7B2',
                      ),
                      3 => 
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
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '電解水機',
                              'text' => '您選擇「電解水機」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          2 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          3 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '家用飲水設備',
                              'text' => '您選擇「家用飲水設備」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          4 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          5 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '家用淨水設備',
                              'text' => '您選擇「家用淨水設備」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          6 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          7 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '全戶式淨水系統',
                              'text' => '您選擇「全戶式淨水系統」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'styles' => 
                  array (
                    'header' => 
                    array (
                      'backgroundColor' => '#FFFFFF',
                    ),
                  ),
                ),
              )
        )
    ));
}




function getFilter($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(
           


            array (
                'type' => 'flex',
                'altText' => '已傳送給您「濾材配件」的類型目錄',
                'contents' => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
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
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://9000.com.tw/wp-content/uploads/2017/05/9000.png',
                    'size' => 'full',
                    'aspectRatio' => '3:1',
                    'aspectMode' => 'fit',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'Action',
                      'uri' => 'https://linecorp.com/',
                    ),
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'spacing' => 'md',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'none',
                        'color' => '#98C4E8',
                      ),
                      1 => 
                      array (
                        'type' => 'filler',
                      ),
                      2 => 
                      array (
                        'type' => 'text',
                        'text' => '請選擇濾材配件產品類別',
                        'size' => 'sm',
                        'align' => 'center',
                        'color' => '#A8A7B2',
                      ),
                      3 => 
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
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '家用濾材配件',
                              'text' => '您選擇「家用濾材配件」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                          2 => 
                          array (
                            'type' => 'separator',
                            'margin' => 'md',
                          ),
                          3 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'message',
                              'label' => '商用濾材配件',
                              'text' => '您選擇「商用濾材配件」',
                            ),
                            'color' => '#8BBDD4',
                            'style' => 'primary',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'styles' => 
                  array (
                    'header' => 
                    array (
                      'backgroundColor' => '#FFFFFF',
                    ),
                  ),
                ),
              )











              )
            ));
        }
        





?>




