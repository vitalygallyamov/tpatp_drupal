<!DOCTYPE HTML>
<html>
<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
    (function($){
        $(function(){
            $('#schedule-form select, #schedule-form input:checkbox').styler();
            $('#slider-box').slider({width: 714, height: 240});
        });
    })(jQuery);
    </script>

	<title><?php print $head_title; ?></title>
</head>

<body>
<?print $page;?>
</body>
</html>