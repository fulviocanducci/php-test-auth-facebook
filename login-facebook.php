<?php

require 'facebook-init.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes'];
$loginUrl = $helper->getLoginUrl('http://localhost:8001/login-callback.php', $permissions);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?php echo $loginUrl; ?>">Login Facebook</a>
    <div>
        <?php
        if (isset($_SESSION['facebook_access_token'])) {
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

            try {
                $response = $fb->get('/me?fields=name,email,location,gender,birthday,hometown,id');
                $userNode = $response->getGraphUser();
            } catch (Facebook\Exception\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exception\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            echo 'Logged in as ' . $userNode->getName();
            echo '<br />';
            echo $_SESSION['facebook_access_token'];
            echo '<br />';
            echo $userNode->getId();
            echo '<br/>';
            echo $userNode->getEmail();
            echo '<br /><pre>';
            echo print_r($response->getDecodedBody());
        }
        ?>
    </div>
</body>

</html>