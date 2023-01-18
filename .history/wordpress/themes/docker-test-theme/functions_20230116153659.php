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
        #image with anchor
        #$content = "<p><a href=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7.jpg\"><img src=\"https://androidauthstg.wpengine.com/wp-content/uploads/2023/01/Tecno-Phantom-X2-Promo7-675w-540h.jpg\" alt=\"Tecno Phantom X2 Promo7\" ></a></p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p>";
        #youtube
        #$content = "<p> </p><p><a href=\"https://www.youtube.com/watch?v=mAPLqPaeygg\" target=\"_blank\" style=\"display:inline-block;\"><img src=\"https://img.youtube.com/vi/mAPLqPaeygg/sddefault.jpg\"  ></a><span style=\"display:block;\"><a href=\"https://www.youtube.com/watch?v=mAPLqPaeygg\" target=\"_blank\" style=\"font-family: sans-serif;font-size:14px;text-transform:uppercase;font-weight:bold;color:#000;text-decoration:none;display:flex;align-items: center;\"><img src=\"https://androidauthstg.wpengine.com/wp-content/themes/aa/images/youtube_icon_feed.png\"  ><span>Click To Watch On Youtube</span></a></span></p><p>235235Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p><p>Chest straps usually perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p><p>While most modern wearables can track your resting and active heart rate throughout the day, they’re also less accurate than chest straps. But if accuracy shouldn’t be a major problem if you’re buying a watch as a complete portable health monitoring solution.</p>";
        #polls
        #$content = "<p> </p><p class=\"aa-poll-question\">Do you like apples?</p><ul class=\"aa-poll-custom\"><li><a href=\"https://staging.androidauthority.com/dt-2425-test-first-paragraph-2732350/?polls=true&amp;pollid=2732425&amp;pollchoice=1&amp;pollvote=true\" class=\"aa-poll-choice\">yes</a></li><li><a href=\"https://staging.androidauthority.com/dt-2425-test-first-paragraph-2732350/?polls=true&amp;pollid=2732425&amp;pollchoice=2&amp;pollvote=true\" class=\"aa-poll-choice\">no</a></li></ul><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";    
        #table
        #$content = "<table style=\"border-collapse: collapse; width: 100%; height: 48px;\"><tbody><tr style=\"height: 24px;\"><td style=\"width: 25%; height: 24px;\">efwefg</td><td style=\"width: 25%; height: 24px;\">gwrgrg</td><td style=\"width: 25%; height: 24px;\">gwrgr</td><td style=\"width: 25%; height: 24px;\">gwrgr</td></tr><tr style=\"height: 24px;\"><td style=\"width: 25%; height: 24px;\">gwrgr</td><td style=\"width: 25%; height: 24px;\">rwgrgw</td><td style=\"width: 25%; height: 24px;\">gwrgwr</td><td style=\"width: 25%; height: 24px;\">grwgrr</td></tr></tbody></table><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";    
        #button
        #$content = "<p><a class=\"aa_button cbs_button add-active cbs_icon cbs-apple\" style=\"background-color: #ad6096;\" target=\"_blank\" rel=\"nofollow noopener\" href=\"http://cewef.fwf\">button</a></p><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";    
        #faq
        #$content = "<h3 class=\"faq_que\">jyjty</h3><table><tr><td class=\"faq_content\">ttttt</td></tr><tr><td><hr></td></tr></table><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";

        #table2
        #$content = "<h3 class=\"faq_que\">jyjty</h3><table><tr><td class=\"faq_content\">jyjty</td></tr><tr><td><hr></td></tr></table><table style=\"border-collapse: collapse; width: 100%; height: 46px;\"><tbody><tr style=\"height: 24px;\"><td style=\"width: 33.3333%; height: 24px;\">ggg</td><td style=\"width: 33.3333%; height: 24px;\">yyy</td><td style=\"width: 33.3333%; height: 24px;\">hh</td></tr><tr style=\"height: 22px;\"><td style=\"width: 33.3333%; height: 22px;\">fff</td><td style=\"width: 33.3333%; height: 22px;\">bbb</td><td style=\"width: 33.3333%; height: 22px;\">nnn</td></tr></tbody></table><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-worn trackers, from smartwatch features to additional health metrics.</p>";
        
        #tiktok
        $content = "<div class=\"video-container\"><div class=\"rve\" data-content-width=\"1340\"><blockquote class=\"tiktok-embed\" cite=\"https://www.tiktok.com/@annet_lovart/video/7159964224922389765\" data-video-id=\"7159964224922389765\" data-embed-from=\"oembed\" style=\"max-width: 605px;min-width: 325px;\"><section><a target=\"_blank\" title=\"@annet_lovart\" href=\"https://www.tiktok.com/@annet_lovart?refer=embed\">@annet_lovart</a> <p><a title=\"halloween\" target=\"_blank\" href=\"https://www.tiktok.com/tag/halloween?refer=embed\">#halloween</a> </p><p> <a target=\"_blank\" title=\"♬ оригінальний звук - Annet_lovart\" href=\"https://www.tiktok.com/music/%D0%BE%D1%80%D0%B8%D0%B3%D1%96%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%B9-%D0%B7%D0%B2%D1%83%D0%BA-7159964243318803205?refer=embed\">♬ оригінальний звук – Annet_lovart</a> </p></section></blockquote><p> <script async src=\"https://www.tiktok.com/embed.js\"></script></p></div><p><!-- Responsive Video Embeds plugin by www.kevinleary.net --></p></div><p>Chest straps <a href=\"https://staging.androidauthority.com/chromebook-deals-update-952897/\">usually</a> perform one thing and one thing only: tracking your heart rate. This means you’ll forego the advantages of wrist-word trackers, from smartwatch features to additional health metrics.</p>";


        echo '<hr>';    
        echo sailthru_first_paragraph_into_content( $content);
        
        ?>
	</div>
	<?php

}

function sailthru_first_paragraph_into_content( $content = '' ) {
    if( $content !== '' ) {
        $content = preg_replace( '/<--aa-widget-start(.*?)aa-widget-end-->/U', '', $content ); #remove widget
        $content = preg_replace( '#<p class=\W+aa-poll-question[^>]+>.*?<\/p>#im', '', $content ); #remove poll
        $content = preg_replace( '#<ul class=\W+aa-poll-custom[^>]+>.*?<\/ul>#im', '', $content ); #remove poll
        $content = preg_replace( '#<table.*?>.*?<\/table>#im', '', $content ); #remove table
        $content = preg_replace( '#<a class=\W+aa_button[^>]+>.*?<\/a>#im', '', $content ); #remove buttons
        $content = preg_replace( '#<div class=\W.*?<a .*tiktok[^>]+>.*?<\/a>\W.*<\/div>#im', '', $content ); #remove tiktok
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