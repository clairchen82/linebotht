<?php


switch ($message['text']){
    case '以下是新北地區的服務據點':
          echo getTaipei($client,$event['replyToken']);
          break;
    case '以下是桃園地區的服務據點':
          echo getTaoyuan($client,$event['replyToken']);
          break;
    case '以下是高雄地區的服務據點':
          echo getKaohsiung($client,$event['replyToken']);
          break;
    case '以下是新竹地區的服務據點':
          echo getHsinchu($client,$event['replyToken']);
          break;
    case '以下是苗栗地區的服務據點':
          echo getMiaoli($client,$event['replyToken']);
          break;
    case '以下是屏東地區的服務據點':
          echo getPingtung($client,$event['replyToken']);
          break;
 
    case '聯絡我們':
          echo getContact($client,$event['replyToken']);
          break;
   
    default:
    #code
    break;
  
  }



  function getContact($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(



          array (
            'type' => 'flex',
            'altText' => '已傳送給您聯絡資訊',
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
                    'text' => '請選擇您所在的地區',
                    'size' => 'md',
                    'align' => 'center',
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
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '新北地區',
                          'text' => '以下是新北地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'md',
                        'color' => '#FFFFFF',
                      ),
                      2 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '桃園地區',
                          'text' => '以下是桃園地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
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
                    'layout' => 'horizontal',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '苗栗地區',
                          'text' => '以下是苗栗地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'md',
                        'color' => '#FFFFFF',
                      ),
                      2 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '新竹地區',
                          'text' => '以下是新竹地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
                      ),
                    ),
                  ),
                  3 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'md',
                    'color' => '#FFFFFF',
                  ),
                  4 => 
                  array (
                    'type' => 'box',
                    'layout' => 'horizontal',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '高雄地區',
                          'text' => '以下是高雄地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'md',
                        'color' => '#FFFFFF',
                      ),
                      2 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => '屏東地區',
                          'text' => '以下是屏東地區的服務據點',
                        ),
                        'color' => '#6685C7',
                        'style' => 'primary',
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



  function getPingtung($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(


          array (
            'type' => 'flex',
            'altText' => '已傳送給您，屏東地區的聯絡資訊',
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
                    'text' => '屏東地區 :',
                    'size' => 'xl',
                    'align' => 'start',
                    'weight' => 'bold',
                  ),
                  1 => 
                  array (
                    'type' => 'text',
                    'text' => 'Pingtung',
                    'size' => 'xs',
                    'color' => '#AAAAAA',
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
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'text',
                            'text' => '賀屏 - 屏東區域服務中心',
                            'size' => 'md',
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '屏東市公園西路127號',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(08) 751-9000',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'image',
                        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                        'flex' => 0,
                        'margin' => 'none',
                        'align' => 'end',
                        'size' => 'xxs',
                        'aspectMode' => 'fit',
                        'action' => 
                        array (
                          'type' => 'uri',
                          'uri' => 'tel:08-7519000',
                        ),
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


  function getMiaoli($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(


          array (
            'type' => 'flex',
            'altText' => '已傳送給您，苗栗地區的聯絡資訊',
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
                    'text' => '苗栗地區 :',
                    'size' => 'xl',
                    'align' => 'start',
                    'weight' => 'bold',
                  ),
                  1 => 
                  array (
                    'type' => 'text',
                    'text' => 'Miaoli',
                    'size' => 'xs',
                    'color' => '#AAAAAA',
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
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'text',
                            'text' => '賀祥 - 苗栗北區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '苗栗縣頭份鎮中正路376號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(037) 692-000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'flex' => 0,
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:037-692000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  1 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  2 => 
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
                            'text' => '賀苗 - 苗栗南區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '苗栗市自治路383號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(037) 363-000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:037-363000',
                            ),
                          ),
                        ),
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


  function getHsinchu($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(

          array (
            'type' => 'flex',
            'altText' => '已傳送給您，新竹地區的聯絡資訊',
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
                    'text' => '新竹地區 :',
                    'size' => 'xl',
                    'align' => 'start',
                    'weight' => 'bold',
                  ),
                  1 => 
                  array (
                    'type' => 'text',
                    'text' => 'Hsinchu',
                    'size' => 'xs',
                    'color' => '#AAAAAA',
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
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'text',
                            'text' => '賀超 - 新竹竹北服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹縣竹北市環北路一段288號(台元園區對面)',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 551-3000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'flex' => 0,
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5513000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  1 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  2 => 
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
                            'text' => '賀鵬 - 新竹竹北服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹縣竹北市縣政九路 24號1樓',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 554-3000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5543000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  3 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  4 => 
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
                            'text' => '賀泓 - 新竹西區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹市東區民族路231號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 545-7000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5457000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  5 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  6 => 
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
                            'text' => '賀一 - 新竹東區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹市北區經國路二段394號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 523-9000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5239000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  7 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  8 => 
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
                            'text' => '賀麒 - 新竹公園服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹市公園路166號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 523-3000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5233000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  9 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  10 => 
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
                            'text' => '鈞寶 - 新竹新豐服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新竹縣新豐鄉中興路46號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(03) 557-5000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:03-5575000',
                            ),
                          ),
                        ),
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
      






 
  function getKaohsiung($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(

          array (
            'type' => 'flex',
            'altText' => '已傳送給您，高雄地區的聯絡資訊',
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
                    'text' => '高雄地區 :',
                    'size' => 'xl',
                    'align' => 'start',
                    'weight' => 'bold',
                  ),
                  1 => 
                  array (
                    'type' => 'text',
                    'text' => 'Kaohsiung',
                    'size' => 'xs',
                    'color' => '#AAAAAA',
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
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'text',
                            'text' => '賀展 - 高雄岡山服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '高雄市岡山區介壽路76號1樓',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(07) 626-9000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'flex' => 0,
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:07-6269000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  1 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  2 => 
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
                            'text' => '賀旺 - 高雄北區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '高雄市左營區文莊路81號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(07) 343-9000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:07-3439000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  3 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  4 => 
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
                            'text' => '賀欣 - 高雄南區服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '高雄市前鎮區二聖路31號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(07) 725-9000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:07-7259000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  5 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  6 => 
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
                            'text' => '賀峻 - 高雄鳳山服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '高雄市鳳山區龍成路51號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(07) 821-6000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:07-8216000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  7 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  8 => 
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
                            'text' => '賀桐 - 高雄三民服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '高雄市三民區義華路66號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(07) 398-6000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:07-3986000',
                            ),
                          ),
                        ),
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
      
      


  
  function getTaipei($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(
  
          array (
            'type' => 'flex',
            'altText' => '已傳送給您，新北地區的聯絡資訊',
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
                    'text' => '新北地區 :',
                    'size' => 'xl',
                    'align' => 'start',
                    'weight' => 'bold',
                  ),
                  1 => 
                  array (
                    'type' => 'text',
                    'text' => 'NewTaipei',
                    'size' => 'xs',
                    'color' => '#AAAAAA',
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
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'text',
                            'text' => '賀裕 - 台北土城服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新北市土城區青雲路317號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(02) 2264-9000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'flex' => 0,
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:02-22649000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  1 => 
                  array (
                    'type' => 'separator',
                    'margin' => 'lg',
                  ),
                  2 => 
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
                            'text' => '賀崧 - 台北板橋服務中心',
                            'flex' => 0,
                            'weight' => 'bold',
                            'color' => '#0F2A6C',
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '新北市板橋區四川路一段296號',
                            'flex' => 0,
                            'margin' => 'none',
                            'size' => 'sm',
                            'align' => 'start',
                            'wrap' => true,
                          ),
                          2 => 
                          array (
                            'type' => 'text',
                            'text' => '(02) 8952-1000',
                            'size' => 'sm',
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 0,
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'image',
                            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                            'align' => 'end',
                            'size' => 'xxs',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'uri' => 'tel:02-89521000',
                            ),
                          ),
                        ),
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
      



      function getTaoyuan($client,$event){
        $client->replyMessage(array(
            'replyToken' => $event,
            'messages' => array(



              array (
                'type' => 'flex',
                'altText' => '已傳送給您，桃園地區的聯絡資訊',
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
                        'text' => '桃園地區 :',
                        'size' => 'xl',
                        'align' => 'start',
                        'weight' => 'bold',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Taoyuan',
                        'size' => 'xs',
                        'color' => '#AAAAAA',
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
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '賀桃 - 桃園南區服務中心',
                                'flex' => 0,
                                'weight' => 'bold',
                                'color' => '#0F2A6C',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '桃園市平鎮區新光路四段101號',
                                'flex' => 0,
                                'margin' => 'none',
                                'size' => 'sm',
                                'align' => 'start',
                                'wrap' => true,
                              ),
                              2 => 
                              array (
                                'type' => 'text',
                                'text' => '(03) 492-9000',
                                'size' => 'sm',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'flex' => 0,
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'image',
                                'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                                'flex' => 0,
                                'align' => 'end',
                                'size' => 'xxs',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'uri' => 'tel:03-4929000',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      1 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'lg',
                      ),
                      2 => 
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
                                'text' => '賀昇 -桃園中壢服務中心',
                                'flex' => 0,
                                'weight' => 'bold',
                                'color' => '#0F2A6C',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '桃園市中壢區環中東路898號',
                                'flex' => 0,
                                'margin' => 'none',
                                'size' => 'sm',
                                'align' => 'start',
                                'wrap' => true,
                              ),
                              2 => 
                              array (
                                'type' => 'text',
                                'text' => '(03) 438-7000',
                                'size' => 'sm',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'flex' => 0,
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'image',
                                'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                                'align' => 'end',
                                'size' => 'xxs',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'uri' => 'tel:03-4387000',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      3 => 
                      array (
                        'type' => 'separator',
                        'margin' => 'lg',
                      ),
                      4 => 
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
                                'text' => '賀達 -桃園楊梅服務中心',
                                'flex' => 0,
                                'weight' => 'bold',
                                'color' => '#0F2A6C',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => '桃園市楊梅區永美路119號',
                                'flex' => 0,
                                'margin' => 'none',
                                'size' => 'sm',
                                'align' => 'start',
                                'wrap' => true,
                              ),
                              2 => 
                              array (
                                'type' => 'text',
                                'text' => '(03) 481-2000',
                                'size' => 'sm',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'flex' => 0,
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'image',
                                'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2SOzkP5L-JkZk9NkAgqKkXu6OwVK7tO_ZjVMGjHz7KWsm32vG0w',
                                'align' => 'end',
                                'size' => 'xxs',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'uri' => 'tel:03-4812000',
                                ),
                              ),
                            ),
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


     

  
       
    




?>