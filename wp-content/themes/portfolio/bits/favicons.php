<!-- Favicons! --> 
        <!-- http://www.jonathantneal.com/blog/understand-the-favicon/ -->
        
        <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="icon" >
        <!--[if IE]><link href="path/to/favicon.ico" rel="shortcut icon"><![endif]-->
        <!-- or, set /favicon.ico for IE10 win -->
            <!-- This is the traditional favicon.
             - size: 16x16 or 32x32
             - transparency is OK -->
        
        <meta content="#D83434" name="msapplication-TileColor">
        <meta content="<?php bloginfo('template_directory'); ?>/tileicon.png" name="msapplication-TileImage">
            <!-- With IE10 Metro we can display a unique tile icon when the visitor pins our site to their Start screen. These tile icons are 144×144 PNG files, and for best results they use a transparent background. A background tile color can be specified using a hex RGB color (using the six-character #RRGGBB notation), a CSS color name, or the CSS rgb() function. The markup is pretty simple. -->
           
        <link href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
            <!-- The is the icon for iOS's Web Clip.
             - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
             - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
             - Transparency is not recommended (iOS will put a black BG behind the icon) -->