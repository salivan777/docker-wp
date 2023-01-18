<?php

add_action('admin_menu', function(){
	add_menu_page( 'Docker Theme Page', 
    'Docker Theme Page', 
    'manage_options', 
    'docker-theme-page', 
    'page_theme_settings', 
    '',
    2 );
} );

function page_theme_settings(){
    ?>
	<div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>
        <p>Hello from Docker Theme!</p>
        <?php 
        #$content = "<p><a href=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7.jpg\"><img src=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7-675w-540h.jpg\" alt=\"Tecno Phantom X2 Promo7\" ></a></p><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p>";
        #$content = "<p><a href=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7.jpg\"><img src=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7-675w-540h.jpg\" alt=\"Tecno Phantom X2 Promo7\" ></a></p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p>";
        #youtube
        #$content = "<p> </p><p><a href=\"https://www.youtube.com/watch?v=mAPLqPaeygg\" target=\"_blank\" style=\"display:inline-block;\"><img src=\"https://img.youtube.com/vi/mAPLqPaeygg/sddefault.jpg\"  ></a><span style=\"display:block;\"><a href=\"https://www.youtube.com/watch?v=mAPLqPaeygg\" target=\"_blank\" style=\"font-family: sans-serif;font-size:14px;text-transform:uppercase;font-weight:bold;color:#000;text-decoration:none;display:flex;align-items: center;\"><img src=\"https://androidauthstg.wpengine.com/wp-content/themes/aa/images/youtube_icon_feed.png\"  ><span>Click To Watch On Youtube</span></a></span></p><p>235235Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p>";
        #polls
        $content = "<p> </p><p class=\"aa-poll-question\">Do you like apples?</p><ul class=\"aa-poll-custom\"><li><a href=\"https://staging.androidauthority.com/dt-2425-test-first-paragraph-2732350/?polls=true&amp;pollid=2732425&amp;pollchoice=1&amp;pollvote=true\" class=\"aa-poll-choice\">yes</a></li><li><a href=\"https://staging.androidauthority.com/dt-2425-test-first-paragraph-2732350/?polls=true&amp;pollid=2732425&amp;pollchoice=2&amp;pollvote=true\" class=\"aa-poll-choice\">no</a></li></ul><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";    
        echo '<hr>';    
            
        echo sailthru_first_paragraph_into_content( $content);
        
        ?>
	</div>
	<?php

}

function sailthru_first_paragraph_into_content( $content = '' ) {
    if( $content !== '' ) {
        $content = preg_replace( '/<--aa-widget-start(.*?)aa-widget-end-->/U', '', $content ); #remove widget
        $content = preg_replace( '#<p class=\W+aa-poll-question[^>]+>.*?<\/p>#', '', $content ); #remove widget
        $content = preg_replace( '#<ul class=\W+aa-poll-custom[^>]+>.*?<\/ul>#', '', $content ); #remove widget
        $content = preg_replace( '#<div.*?start-aa-widget.*?><div.*?end-aa-widget.*?>#', '', $content ); #remove widget
        $content = preg_replace( '/<img[^>]+\>/i', '', $content ); #remove imgs
        $content = preg_replace( '/<a[^>]+\><\/a>/i', '', $content ); #remove a tag if anchor does not exist
        $content = preg_replace( '#<iframe[^>]+>.*?</iframe>#is', '', $content ); #remove frame
        $content = strip_shortcodes( $content ); #remove shortcodes
        $content = preg_replace( '/<p>\W*<\/p>/s', "", $content ); #remove empty <p>
        #$content = wpautop( $content );
        #$content = str_replace( "<p></p>", "", $content );
        $content = preg_replace( '/<p>&nbsp;<\/p>/i', '', $content ); #remove <p> with &nbsp;
        $first_paragraph = substr( $content, 0, strpos( $content, '</p>' ) + 4 ); #serch first <p>
        if( strip_tags( $first_paragraph ) === 'Click To Watch On Youtube' ) { 
            $content = str_replace($first_paragraph, '', $content); #replase first <p> if it is youtube video
        }
        $content = substr( $content, 0, strpos( $content, '</p>' ) + 4 ); #again find first <p>
        /* Remove heading tag */
        $headingtag_regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
        $content = preg_replace( $headingtag_regex, '', $content );
        $content = strip_tags($content, '<a><strong><em>'); #remove all tags except <a><strong><em>
        $content = str_replace( "\n", "", $content ); #remove \n
        return $content;
    }
    return '';
}