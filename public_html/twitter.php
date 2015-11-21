<ul class="list-group">
        <?php
            if(isset($_GET['user']))
            {
                    $api_key = urlencode('yJW3bSsTeBzeTCdg0JvQVTLlj'); // Consumer Key (API Key)
                    $api_secret = urlencode('AqrIxKa9Q5WSsPjzrT8Um8YqtZHToqoPhUx8QCbNm5C29qix7Y'); // Consumer Secret (API Secret)
                    $auth_url = 'https://api.twitter.com/oauth2/token';

                    $data_username=$_GET['user']; //username
                    $data_count='10';
                    $data_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

                    $api_credentials = base64_encode($api_key.':'.$api_secret);

                    $auth_headers = 'Authorization: Basic '.$api_credentials."\r\n".
                                    'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'."\r\n";

                    $auth_context = stream_context_create(
                        array(
                            'http' => array(
                                'header' => $auth_headers,
                                'method' => 'POST',
                                'content'=> http_build_query(array('grant_type' => 'client_credentials', )),
                            )
                        )
                    );

                    $auth_response = json_decode(file_get_contents($auth_url, 0, $auth_context), true);
                    $auth_token = $auth_response['access_token'];

                    // get tweets
                    $data_context = stream_context_create( array( 'http' => array( 'header' => 'Authorization: Bearer '.$auth_token."\r\n", ) ) );

                    $data = json_decode(file_get_contents($data_url.'?count='.$data_count.'&screen_name='.urlencode($data_username), 0, $data_context), true);

                    // result - do what you want
                    //print('<pre>');
                //print_r($data);
                foreach($data as $item) {
                  echo "<li class='list-group-item'><span id='twitter'>".$item['text']."</span> - created ".$item['created_at']."</li>";
                }
            }
        ?>
    </ul>



