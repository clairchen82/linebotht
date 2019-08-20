<?php

switch ($message['text']){
    case '您選擇「家用濾材配件」':
          echo getFiltera($client,$event['replyToken']);
          break;
    case '您選擇「商用濾材配件」':
          echo getFilterb($client,$event['replyToken']);
          break;

    default:
    #code
    break;

}




function getFiltera($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(


            array (
                'type' => 'flex',
                'altText' => '已傳送給您「家用濾材配件」的目錄',
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-9-600x600.jpg',
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
                                    'text' => 'U-2061(UF-9*3)',
                                    'size' => 'xxs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'UW-252BG-1開飲機專用濾芯(三支入)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/u-2061/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/U-458.jpg',
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
                                    'text' => 'U-458 (UF-8x3)',
                                    'size' => 'xxs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'UW-352BG開飲機專用濾芯(三支入)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-458/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-1-600x600.jpg',
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
                                    'text' => 'UF-1',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '*專利* 5微米P.P.濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-1/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-2-600x600.jpg',
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
                                    'text' => 'UF-2',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '*專利* P.P. + 高精密壓縮活性碳複合式濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-2/',
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/07/UF-200SS.jpg',
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
                                    'text' => 'UF-200SS',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '全戶式淨水器濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-200ss/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-28.jpg',
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
                                    'text' => 'UF-28',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '磁化生成器',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-28/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-3-600x600.jpg',
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
                                    'text' => 'UF-3',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '*專利* P.P. + 高精密壓縮活性碳複合式濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-3/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-4.jpg',
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
                                    'text' => 'UF-4',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '中空絲膜濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-4/',
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-18-UF-20-UF-501-UF-503-600x600.jpg',
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
                                    'text' => 'UF-501',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米P.P.濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-501/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-19-UF-502-600x600.jpg',
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
                                    'text' => 'UF-502',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '10微米顆粒活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-502/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-18-UF-20-UF-501-UF-503-600x600.jpg',
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
                                    'text' => 'UF-503',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '精密1微米P.P.濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-503/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2019/03/UF-504JPEG-600x600.jpg',
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
                                    'text' => 'UF-504',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '超精密逆滲透薄膜',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-504/',
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
                    3 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-505-600x600.jpg',
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
                                    'text' => 'UF-505',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '椰殼顆粒後置活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-505/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-513.jpg',
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
                                    'text' => 'UF-513',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '10微米塊狀活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-513/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-541.-600x600.jpg',
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
                                    'text' => 'UF-541',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '奈米除氯活水器[沐浴用]替換濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-541/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-542.-600x600.jpg',
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
                                    'text' => 'UF-542',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '奈米除氯活水器[洗淨用]替換濾芯(兩支入)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-542/',
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
                    4 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/08/UF-531RES-600x600.jpg',
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
                                    'text' => 'MF-00531RES-003(UF-531RES*3)',
                                    'size' => 'xxs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '樹脂濾芯(三支入一年份)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-531res/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-554%E6%9C%89%E8%93%8B-600x600.jpg',
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
                                    'text' => 'UF-554',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '無鈉離子樹脂濾芯 [QUICK-FIT新卡式設計]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-594/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-555%E6%9C%89%E8%93%8B.jpg',
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
                                    'text' => 'UF-555',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '*日本進口* 銀添抗菌活性碳纖維+中空絲膜複合式濾芯 [新卡式設計，簡易更換]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-555/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-556.jpg',
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
                                    'text' => 'UF-556',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '雙效除鉛濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-556/',
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
                    5 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-557.jpg',
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
                                    'text' => 'UF-557',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '雙效銀添濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-557/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-561.jpg',
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
                                    'text' => 'UF-561',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '顆粒活性碳濾芯[UA-6502JS-1電解水機專用]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-561/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-562.jpg',
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
                                    'text' => 'UF-562',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '強效除氯抗菌濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-562/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-581.jpg',
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
                                    'text' => 'UF-581',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米P.P.濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-581/',
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
                    6 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-582.jpg',
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
                                    'text' => 'UF-582',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米顆粒活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-5825%E5%BE%AE%E7%B1%B3%E9%A1%86%E7%B2%92%E6%B4%BB%E6%80%A7%E7%A2%B3%E6%BF%BE%E8%8A%AF/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/08/UF-531PP-600x600.jpg',
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
                                    'text' => 'MF-00531PP-003(UF-531PP*3)',
                                    'size' => 'xxs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米P.P.濾芯(三支入一年份)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-531pp/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-583.jpg',
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
                                    'text' => 'UF-583',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '無鈉離子樹脂濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-583/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-591%E6%9C%89%E8%93%8B-600x600.jpg',
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
                                    'text' => 'UF-591',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米P.P.濾芯 [QUICK-FIT新卡式設計]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-591/',
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
                    7 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/08/UF-531CTO-600x600.jpg',
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
                                    'text' => 'MF-00531CTO-002(UF-531CTO*2)',
                                    'size' => 'xxs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '塊狀活性碳濾芯(兩支入一年份)',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-531cto/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-592%E6%9C%89%E8%93%8B-600x600.jpg',
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
                                    'text' => 'UF-592',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '塊狀活性碳濾芯 [QUICK-FIT新卡式設計]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-592/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-593%E6%9C%89%E8%93%8B-600x600.jpg',
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
                                    'text' => 'UF-593',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '1微米P.P.濾芯 [QUICK-FIT新卡式設計]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-593/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-594%E6%9C%89%E8%93%8B-600x600.jpg',
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
                                    'text' => 'UF-594',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '椰殼顆粒活性碳濾芯 [QUICK-FIT新卡式設計]',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-594-2/',
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
                    8 => 
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-691-600x600.jpg',
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
                                    'text' => 'UF-691',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD 長效型5微米PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-691/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-692-600x600.jpg',
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
                                    'text' => 'UF-692',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD複合式防衛濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-692/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/06/UF-6931-600x600.jpg',
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
                                    'text' => 'UF-693',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'MULTI-GUARD 複合式防衛樹脂濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-693/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-7.jpg',
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
                                    'text' => 'UF-7',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '日本進口 電解水機專用 銀添活性碳中空絲膜濾芯',
                                    'size' => 'xs',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-7/',
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





function getFilterb($client,$event){
    $client->replyMessage(array(
        'replyToken' => $event,
        'messages' => array(



            array (
                'type' => 'flex',
                'altText' => '已傳送給您「商用濾材配件」的目錄',
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
                            'text' => '商用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-10P5C-2-600x600.jpg',
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
                                    'text' => 'UF-10P5C',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '雙筒導流複合式濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-10p5/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-11.jpg',
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
                                    'text' => 'UF-11',
                                    'size' => 'xs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '雙筒導流複合式濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-11/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-12.jpg',
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
                                    'text' => 'UF-12',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '兩截式濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-12/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-15.jpg',
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
                                    'text' => 'UF-15',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '塊狀活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-15/',
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
                            'text' => '家用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-18-UF-20-UF-501-UF-503-600x600.jpg',
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
                                    'text' => 'UF-18',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-18/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-19-UF-502-600x600.jpg',
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
                                    'text' => 'UF-19',
                                    'size' => 'xs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '顆粒活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-19/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-18-UF-20-UF-501-UF-503-600x600.jpg',
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
                                    'text' => 'UF-20',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '1微米PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-20/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-21.jpg',
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
                                    'text' => 'UF-21',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '後置活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-21/',
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
                            'text' => '商用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-22-600x600.jpg',
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
                                    'text' => 'UF-22',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '逆滲透薄膜',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-22/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-29.jpg',
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
                                    'text' => 'UF-29',
                                    'size' => 'xs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '塊狀活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-29/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-30-1-600x600.jpg',
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
                                    'text' => 'UF-30',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => 'PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-30/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-31-1-600x600.jpg',
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
                                    'text' => 'UF-31',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-31/',
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
                    3 => 
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
                            'text' => '商用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-36.jpg',
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
                                    'text' => 'UF-36',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '逆滲透薄膜*美國進口FILMTEC*',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-36/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-37.jpg',
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
                                    'text' => 'UF-37',
                                    'size' => 'xs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '後置活性碳濾芯*美國進口*',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-37/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-38.jpg',
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
                                    'text' => 'UF-38',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米PP濾芯 *美國進口*',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-38/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-39.jpg',
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
                                    'text' => 'UF-39',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '進口活性碳濾芯*美國進口*',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-39/',
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
                    4 => 
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
                            'text' => '商用濾材配件',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-61.jpg',
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
                                    'text' => 'UF-61',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '5微米PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-61/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-62.jpg',
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
                                    'text' => 'UF-62',
                                    'size' => 'xs',
                                    'wrap' => true,
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '顆粒活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-62/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-63.jpg',
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
                                    'text' => 'UF-63',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '1微米PP濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-63/',
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
                                'url' => 'https://9000.com.tw/wp-content/uploads/2018/05/UF-64.jpg',
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
                                    'text' => 'UF-64',
                                    'size' => 'xs',
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'text',
                                    'text' => '塊狀活性碳濾芯',
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
                                  ),
                                  1 => 
                                  array (
                                    'type' => 'button',
                                    'action' => 
                                    array (
                                      'type' => 'uri',
                                      'label' => '詳情',
                                      'uri' => 'https://9000.com.tw/product/uf-64/',
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
      

?>