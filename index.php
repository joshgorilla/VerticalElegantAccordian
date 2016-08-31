<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Elegant Accordion with jQuery and CSS3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    </head>
    <body>
    <ul class="accordion" id="accordion">
        <?php
            $arr = [
                1 => [
                    'background_image' => '../images/1.jpg',
                    'heading' => 'Heading 1',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                      ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                      reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                       nulla pariatur',
                    'link' => 'http://google.com'
                ],
                2 => [
                    'background_image' => '../images/2.jpg',
                    'heading' => 'Heading 2',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                      ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                      reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                       nulla pariatur',
                    'link' => 'http://google.com'
                ],
                3 => [
                    'background_image' => '../images/3.jpg',
                    'heading' => 'Heading 3',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                      ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                      reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                       nulla pariatur',
                    'link' => 'http://google.com'
                    ],
                4 => [
                    'background_image' => '../images/3.jpg',
                    'heading' => 'Heading 4',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                      ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                      reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                       nulla pariatur',
                    'link' => 'http://google.com'
                ]
            ];
            //made this a while loop until we start pulling from a db
            $i = 1;
            foreach($arr as $value) { ?>
                <li style="background-image:url(<?php echo $value['background_image'] ?>)">
                    <div class="heading"><?php echo $value['heading']; ?></div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2><?php echo $value['heading']; ?></h2>
                        <p></p>
                        <a href="<?php echo $value['link'] ?>">more &rarr;</a>
                    </div>
                </li>
         <?php $i++;
            } ?>
    </ul>
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#accordion > li').hover(
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'height':'300px'},500);
                        $('.heading',$this).stop(true,true).fadeOut();
                        $('.bgDescription',$this).stop(true,true).slideDown(500);
                        $('.description',$this).stop(true,true).fadeIn();
                    },
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'height':'115px'},1000);
                        $('.heading',$this).stop(true,true).fadeIn();
                        $('.description',$this).stop(true,true).fadeOut(500);
                        $('.bgDescription',$this).stop(true,true).slideUp(700);
                    }
                );
            });
        </script>
    </body>
</html>