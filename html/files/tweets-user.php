<?php
include('tweets.php');

// Setting our Authentication Variables that we got after creating an application
// more info about script http://www.wpreads.com/2013/06/how-to-get-latest-tweets-with-twitter-api-1-1-in-wordpress.html
$settings = array(
    'oauth_access_token' => "1538392538-lvl1tlDZ18iM3sdFqESYBPTuEa973cEsDYvmH3N", // required !
    'oauth_access_token_secret' => "95lLjHZK5cYIQ7YADpjlMIG8efQSfjXFVppNY4Kw", // required !
    'consumer_key' => "pguq8XaJQ6TP7DOwaUllJA", // required !
    'consumer_secret' => "IYlGu5OpG9S20ZZglVLJGdG09alwCkF2dU0e1soI" // required !
);


function tweet_html_text(array $tweet) {
    $text = $tweet['text'];

    // hastags
    $linkified = array();
    foreach ($tweet['entities']['hashtags'] as $hashtag) {
        $hash = $hashtag['text'];

        if (in_array($hash, $linkified)) {
            continue; // do not process same hash twice or more
        }
        $linkified[] = $hash;

        // replace single words only, so looking for #Google we wont linkify >#Google<Reader
        $text = preg_replace('/#\b' . $hash . '\b/', sprintf('<a href="https://twitter.com/search?q=%%23%2$s&src=hash" target="_blank">#%1$s</a>', $hash, urlencode($hash)), $text);
    }

    // user_mentions
    $linkified = array();
    foreach ($tweet['entities']['user_mentions'] as $userMention) {
        $name = $userMention['name'];
        $screenName = $userMention['screen_name'];

        if (in_array($screenName, $linkified)) {
            continue; // do not process same user mention twice or more
        }
        $linkified[] = $screenName;

        // replace single words only, so looking for @John we wont linkify >@John<Snow
        $text = preg_replace('/@\b' . $screenName . '\b/', sprintf('<a href="https://www.twitter.com/%1$s" title="%2$s" target="_blank">@%1$s</a>', $screenName, $name), $text);
    }

    // urls
    $linkified = array();
    foreach ($tweet['entities']['urls'] as $url) {
        $url = $url['url'];

        if (in_array($url, $linkified)) {
            continue; // do not process same url twice or more
        }
        $linkified[] = $url;

        $text = str_replace($url, sprintf('<a href="%1$s" target="_blank">%1$s</a>', $url), $text);
    }

    return $text;
}

// We are using GET Method to Fetch the latest tweets.
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

// Set your screen_name to your twitter screen name. Also set the count to the number of tweets you want to be fetched. Here we are fetching 5 latest tweets.
$getfield = '?screen_name=ef1eden&count=5';
$requestMethod = 'GET';

// Making an object to access our library class
$twitter = new TwitterAPIExchange($settings);
$store = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
// Since the returned result is in json format, we need to decode it             
  $result = json_decode($store);

// After decoding, we have an standard object array, so we can print each tweet into a list item.
  $multi_array = objectToArray($result);
 ?>
<script>
$(document).ready(function() {
$(".date-tweet").timeago();
jQuery('#twitter-plugin').owlCarousel({
                    items: 1
                });


});
</script>
  <?php
 foreach($multi_array as $key => $value ){
	$date_tweet = $value["created_at"];
	$date_tweet = date( 'Y-m-d H:i:s', strtotime($date_tweet) );
	$text_tweet = tweet_html_text($value);

// printing each tweet wrapped in a <li> tag
 echo '<div><div class="text-tweet"><p>'.$text_tweet.'</p><span class="date-tweet" title="'.$date_tweet.'"></span></div></div>';

 }
echo ''; ?>