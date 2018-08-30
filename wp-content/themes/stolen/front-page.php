<?php get_header(); 

function get_client_ip() {
     $ipaddress = '';
     if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
     else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
     else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
     else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
     else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
     else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
     else
        $ipaddress = 'UNKNOWN';

     return $ipaddress;
}

function ip_details($url) {
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
   $data = curl_exec($ch);
   curl_close($ch);

   return $data;
}

$myipd = get_client_ip(); 
// var_dump($myipd);
$url = 'http://www.geoplugin.net/json.gp?ip='.$myipd; 
$details    =   ip_details($url); 
$v = json_decode($details);
$mycountry = $v->geoplugin_countryName;
// var_dump($mycountry);
if ($mycountry == '') {
    $mycountry = "United States";
} 

?>

<article id="first">
    <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/A-strong-spirit-transcends-rules.png">
    <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/hatfirst.jpg">
</article>

<article id="second">
    <img class="float" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/grafitti.png">
    <!-- <img class="float" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/text.png"> -->
    <div class="bottles">
       <?php if ($mycountry == "United States") { ?>
       <div><img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0004_whiskeybottlewhitelabelred900.png.png"/></div>
       <?php } ?>
       <?php if ($mycountry == "United States" || $mycountry == "Australia" || $mycountry == "New Zealand") { ?>
       <div><img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0005_smoked-rum-700ml.png.png"/></div>
       <?php } ?>
       <?php if ($mycountry == "United States") { ?>
       <div><img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0000_download-1.jpeg.png"/></div>
       <?php } ?>
       <?php if ($mycountry == "New Zealand" || $mycountry == "Australia") { ?>
       <div><img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0002_download.png.png"/></div>
       <?php } ?>
       <?php if ($mycountry == "New Zealand") { ?>
       <div><img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0001_download-3.jpeg.png"/></div>
       <?php } ?>
    </div>
    <h2 id="stat"></h2>
    <a class="cta" href="/stolen/products" target=”_blank”>
        <h2>EXPLORE PRODUCTS</h2>
    </a>
    <ul class="blog">
        <?php
            $posts = get_posts( array( 'posts_per_page' => 5, 'category' => 9 ) );
            foreach ( $posts as $_post ) {
                // var_dump($_post);
                // echo $_post;
                if ( has_post_thumbnail( $_post->ID ) ) {
                    echo '<li><a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '" target=”_blank”>';
                    echo get_the_post_thumbnail( $_post->ID, '300x300' );
                    echo '<p>' . esc_attr( $_post->post_title ) . '</p></a><span><p>';
                    $post_categories = wp_get_post_categories( $_post->ID );                         
                    foreach($post_categories as $c){
                        $cat = get_category( $c );
                        // var_dump($cat);
                        if($cat->term_id != 9) {
                          echo $cat->name . ' ';
                        }
                        //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                    }
                    echo " | ";
                    // echo ' | ' . get_the_author_meta('display_name', $_post->post_author);
                    // echo ' | ' . get_the_author_meta('display_name', $_post->post_author);
                    $brief = apply_filters('the_content', $_post->post_content);
                    $brief = substr($brief, 0, 140) . '...';
                    $brief = str_replace("<p>", "", $brief);
                    $brief = str_replace("</p>", "", $brief);
                    echo $brief;
                    // echo ' | ' . get_the_date( 'm.j.y' ); 
                    echo '</p></span></li>';

                }
            }
        ?>
    </ul>
    <img class="float" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/Kiss-Girl.png">
</article>

<article id="third">
    <script src="https://fast.wistia.com/embed/medias/tmwf9lg7kl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_tmwf9lg7kl videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
    <!-- <video autoplay playsinline loop muted>
        <source src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/melo.mp4">            
    </video> -->
    <div id="signup">
        <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/GET-IN-THE-KNOW.jpg">
        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
          #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
          /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
        <form action="https://thisisstolen.us1.list-manage.com/subscribe/post?u=b273bd113bcd7552ec4e39eaa&amp;id=4dcefb311d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="ENTER YOUR EMAIL" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b273bd113bcd7552ec4e39eaa_4dcefb311d" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
        </form>
        </div>

        <!--End mc_embed_signup-->
    </div>
</article>

<article id="fourth">
    <img id="thisbg" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/Stolen_Stencil_A-revised.png">
    <img id="lorem" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/lorem.png">
    <?php echo do_shortcode("[instagram-feed]"); ?>
</article>

<?php wp_footer(); ?>
<?php get_footer(); ?>
