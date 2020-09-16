<?
          break;
          case '您選擇「全戶式淨水系統」':
                echo getHomed($client,$event['replyToken']);
                break;
          case '您選擇「殺菌器」':
                echo getHomef($client,$event['replyToken']);
                
          default:
          #code
          break;
      
      }
      
      
      
      
      
      function getHomea($client,$event){
          $client->replyMessage(array(
              'replyToken' => $event,
              'messages' => array(
      
      
                array (
                  'type' => 'flex',
                  'altText' => '已傳送給您「電解水機」的目錄',
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
                          'text' => '電解水機',
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
                              'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UA-3102JW-1-600x600.jpg',
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
                                  'type' => 'spacer',
                                  'size' => 'lg',
                                ),
                                1 => 
                                array (
                                  'type' => 'text',
                                  'text' => 'UA-3102JW-1',
                                  'size' => 'xs',
                                ),
                                2 => 
                                array (
                                  'type' => 'text',
                                  'text' => '廚下型電解水機',
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
                                    'uri' => 'https://9000.com.tw/product/ua-3102jw-1/',
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
                              'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UA-3502JW-1-600x600.jpg',
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
                                  'type' => 'spacer',
                                  'size' => 'lg',
                                ),
                                1 => 
                                array (
                                  'type' => 'text',
                                  'text' => 'UA-3502JW-1',
                                  'size' => 'xs',
                                ),
                                2 => 
                                array (
                                  'type' => 'text',
                                  'text' => '液晶廚下型電解水機',
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
                                    'uri' => 'https://9000.com.tw/product/ua-3502jw-1/',
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
                              'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UA-6502JS-1-600x600.jpg',
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
                                  'type' => 'spacer',
                                ),
                                1 => 
                                array (
                                  'type' => 'text',
                                  'text' => 'UA-6502JS-1',
                                  'size' => 'xs',
                                  'align' => 'start',
                                  'wrap' => false,
                                ),
                                2 => 
                                array (
                                  'type' => 'text',
                                  'text' => '桌上型活性氫電解水機',
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
                                0 => 
                                array (
                                  'type' => 'button',
                                  'action' => 
                                  array (
                                    'type' => 'uri',
                                    'label' => '詳情',
                                    'uri' => 'https://9000.com.tw/product/ua-6502js-1/',
                                  ),
                                  'margin' => 'none',
                                  'height' => 'sm',
                                  ),
                                   1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                 array (
                                    'type' => 'uri',
                                    'label' => '實例',
                                    'uri' => 'https://imgur.com/a/0MvBwZo',
                                       ),
                                    'color' => '#707070',
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
                )
      
      
        
      
            )
        ));
      
      }
      
      
      
      
      
      
      
      
      function getHomeb($client,$event){
        $client->replyMessage(array(
            'replyToken' => $event,
            'messages' => array(
      
      
              array (
                'type' => 'flex',
                'altText' => '已傳送給您「家用飲水設備」的目錄',
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
                            'text' => '家用飲水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2019/02/UN-6802AW-1-600x600.jpg',
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
                                    'text' => 'UN-6802AW-1',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '直立式極緻淨化冰溫熱飲水機',
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
                                0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/un-6802aw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/xywydgu',
                                         ),
                                      'color' => '#707070',
      
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2019/02/UW-2502DW-1%E5%81%B4-600x600.jpg',
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
                                    'text' => 'UW-2502DW-1',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
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
                                    'size' => 'lg',
                                  ),
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uw-2502dw-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/09/UW-2202HW-1-1-600x600.jpg',
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
                                    'text' => 'UW-2202HW-1',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下型節能冷熱飲水機',
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
                                      'uri' => 'https://9000.com.tw/product/uw-2202hw-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/09/UR-672BW-1_01.jpg',
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
                                    'text' => 'UR-672BW-1',
                                    'size' => 'xs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '智能型微電腦桌上純水飲水機 (溫熱)',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/ur-672bw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/sdeiqCS',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/1302-1-600x600.jpg',
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
                                    'text' => 'UN-1322AG-1-L',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '微電腦節能除鉛飲水機',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/un-1322ag-1-l/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/Jjy5DjZ',
                                         ),
                                      'color' => '#707070',
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
                            'text' => '家用飲水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/09/UR-6602AW-1%E5%8F%B3%E5%81%B4-600x600.jpg',
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
                                    'text' => 'UR-6602AW-1',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '賀眾牌桌上型極緻淨化飲水機',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/ur-6602aw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/5VSZ5Pc',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/252-600x600.jpg',
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
                                    'text' => 'UW-252BW-1',
                                    'size' => 'xs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '桌上型開飲機 [溫熱]',
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
                                      'uri' => 'https://9000.com.tw/product/ur-252bw-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/672-600x600.jpg',
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
                                    'text' => 'UW-672AW-1',
                                    'size' => 'xs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '智能型微電腦桌上飲水機(冰溫熱)',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uw-672aw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/sdeiqCS',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/632_3-600x600.jpg',
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
                                    'text' => 'UR-632AW-1',
                                    'size' => 'xs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '智能型直立式RO+磁化飲水機(冰溫熱)',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/ur-632aw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/0cS5bqY',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/1302-1-600x600.jpg',
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
                                    'text' => 'UN-1322AG-1-R',
                                    'size' => 'xxs',
                                  ),
                                  2 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '微電腦節能純淨飲水機',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/un-1322ag-1-r/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/Jjy5DjZ',
                                         ),
                                      'color' => '#707070',
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
                            'text' => '家用飲水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2019/09/UV-6702%E7%99%BD-45%E5%BA%A6%E8%A7%92-600x600.jpg',
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
                                    'text' => 'UV-6702EW-1(天使白)',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '超效瞬淨冷熱飲水機',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uv-6702ew-1-uv-6702ebk-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2019/09/UV-6702%E9%BB%91-%E4%BF%AF%E8%A7%92-600x600.jpg',
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
                                    'text' => 'UV-6702EBK-1(粉霧黑)',
                                    'size' => 'xxs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '超效瞬淨冷熱飲水機',
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
                                      'uri' => 'https://9000.com.tw/product/uv-6702ew-1-uv-6702ebk-1/',
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
      
      
      
      
      
      
      function getHomec($client,$event){
        $client->replyMessage(array(
            'replyToken' => $event,
            'messages' => array(
      
      
              array (
                'type' => 'flex',
                'altText' => '已傳送給您「家用淨水設備」的目錄',
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
                            'text' => '家用淨水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/U-2026-600x600.jpg',
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
                                    'text' => 'U-2026',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '奈米除氯活水器 [沐浴用]',
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
                                      'uri' => 'https://9000.com.tw/product/u-2026/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/U-2027-600x600.jpg',
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
                                    'text' => 'U-2027',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '奈米除氯活水器 [洗淨用]',
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
                                      'uri' => 'https://9000.com.tw/product/u-2027/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-602PP-%E6%AD%A3%E9%9D%A2-600x600.jpg',
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
                                    'text' => 'UF-602PP',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD 複合式防衛淨水器：潔淨組',
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
                                      'uri' => 'https://9000.com.tw/product/uf-602pp/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-311-%E5%9C%96%E7%89%871-600x600.jpg',
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
                                    'text' => 'UF-311PLUS',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '賀眾牌中空絲膜抑菌淨水器[升級版]',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-311plus/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/FHwpAxF',
                                    ),
                                    'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/08/UP-310-%E6%AD%A3%E9%9D%A2-%E6%8B%B7%E8%B2%9D.jpg',
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
                                    'text' => 'UP-310',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '簡易式DIY淨水器',
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
                                      'uri' => 'https://9000.com.tw/product/up-310/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                ),
                              ),
                            ),
                          ),
      
      
      //第二個
      
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
                            'text' => '家用淨水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UR-5401JW-1-600x600.jpg',
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
                                    'text' => 'UR-5401JW-1',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下型快拆式逆滲透淨水器',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/ur-5401jw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/b60aCSs',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2017/11/UR-5802JW-1-600x600.jpg',
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
                                    'text' => 'UR-5802JW-1',
                                    'size' => 'xxs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下輕巧型微電腦純水機',
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
                                      'uri' => 'https://9000.com.tw/product/ur-5802jw-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-692-%E5%90%AB%E6%BF%BE%E8%93%8B-1-600x600.png',
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
                                    'text' => 'UF-601',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD 複合式防衛淨水器：單道淨化組',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-601/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/YGMS4Qr',
                                    ),
                                    'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-601PP.jpg',
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
                                    'text' => 'UF-601PP',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD前置PP濾芯組',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-601pp/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/YGMS4Qr',
                                    ),
                                    'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-601RES-600x600.jpg',
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
                                    'text' => 'UF-601RES',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD樹脂濾芯組',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-601res/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                     1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/YGMS4Qr',
                                    ),
                                    'color' => '#707070',
                                  ),
                                ),
                              ),
                            ),
                          ),
      
      
      
      //第三個
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
                            'text' => '家用淨水設備',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UR-5501JW-1-600x600.jpg',
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
                                    'text' => 'UR-5501JW-1',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下型磁礦淨水器',
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
                                  0 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/ur-5501jw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                    ),
                                     1 => 
                                    array (
                                      'type' => 'button',
                                      'action' => 
                                   array (
                                      'type' => 'uri',
                                      'label' => '實例',
                                      'uri' => 'https://imgur.com/a/RegzBbE',
                                         ),
                                      'color' => '#707070',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UR-5602JW-1-600x600.jpg',
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
                                    'text' => 'UR-5602JW-1',
                                    'size' => 'xxs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下型LED龍頭磁化淨水器',
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
                                      'uri' => 'https://9000.com.tw/product/ur-5602jw-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/US-5001JW-1-600x600.jpg',
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
                                    'text' => 'US-5001JW-1',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '廚下型UV紫外線殺菌淨水器',
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
                                      'uri' => 'https://9000.com.tw/product/us-5001jw-1/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          //56 開始
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2020/07/UR-5920JW-1-768x768.jpg',
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
                                    'text' => 'UR-5902JW-1',
                                    'size' => 'xxs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '無桶式RO逆滲透淨水器',
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
                                      'uri' => 'https://9000.com.tw/product/ur-5902jw-1-%E7%84%A1%E6%A1%B6%E5%BC%8Fro%E9%80%86%E6%BB%B2%E9%80%8F%E6%B7%A8%E6%B0%B4%E5%99%A8/',
                                    ),
                                    'margin' => 'none',
                                    'height' => 'sm',
                                  ),
                                ),
                              ),
                            ),
                          ),
      
      //56結束
      
      
                          
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
      
      
      
      
      
      
      
      function getHomed($client,$event){
        $client->replyMessage(array(
            'replyToken' => $event,
            'messages' => array(
      
      
              array (
                'type' => 'flex',
                'altText' => '已傳送給您「全戶式淨水系統」的目錄',
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
                        'text' => '全戶式淨水系統',
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
                            'url' => 'https://9000.com.tw/wp-content/uploads/9999/09/9200SS.-1-600x600.jpg',
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
                                'type' => 'spacer',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'UP-9200SS',
                                'size' => 'xs',
                              ),
                              2 => 
                              array (
                                'type' => 'text',
                                'text' => '全戶式不鏽鋼淨水器',
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
                              0 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/up-9200ss/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                                ),
                                 1 => 
                                array (
                                  'type' => 'button',
                                  'action' => 
                               array (
                                  'type' => 'uri',
                                  'label' => '實例',
                                  'uri' => 'https://imgur.com/a/pigiuld',
                                     ),
                                  'color' => '#707070',
                              ),
                            ),
                          ),
                          3 => 
                          array (
                            'type' => 'spacer',
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
              )
      
         )
      ));
      
      }
      
      
      
      //殺菌器
      function getHomef($client,$event){
        $client->replyMessage(array(
            'replyToken' => $event,
            'messages' => array(
      
      
              array (
                'type' => 'flex',
                'altText' => '已傳送給您「殺菌器」的目錄',
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
                        'text' => '殺菌器',
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
                            'url' => 'https://9000.com.tw/wp-content/uploads/2020/08/UV-2200JS%E6%96%9C%E8%A7%92%E5%A3%81%E6%8E%9B%E6%9E%B6-%E5%90%88%E4%BD%B5-01-768x768.jpg',
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
                                'type' => 'spacer',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'UV-2200JS',
                                'size' => 'xs',
                              ),
                              2 => 
                              array (
                                'type' => 'text',
                                'text' => 'UVC LED極效殺菌模組',
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
                              0 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'uri',
                                  'label' => '詳情',
                                  'uri' => 'https://9000.com.tw/product/uv-2200js-uvc-led%e6%a5%b5%e6%95%88%e6%ae%ba%e8%8f%8c%e6%a8%a1%e7%b5%84/',
                                ),
                                'margin' => 'none',
                                'height' => 'sm',
                                ),
                              
                            ),
                          ),
                          3 => 
                          array (
                            'type' => 'spacer',
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
              )
      
         )
      ));
      
      }
      
      
      

?>