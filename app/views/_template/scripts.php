<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-36613651-1', 'auto');
    ga('send', 'pageview');
</script>

<script id="facebook-jssdk" src="//connect.facebook.net/pt_BR/sdk.js"></script>

<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="<?php echo base_url($file . '.js') ?>"></script>
    <?php }
}

$file = rtrim(base_url(), '/') . ':3060/';
$file_headers = @get_headers($file);

if ($file_headers) { ?>
    <script id="__bs_script__">
        document.write("<script async src='http://HOST:3060/browser-sync/browser-sync-client.2.2.3.js'><\/script>".replace("HOST", location.hostname));
    </script>
<?php } ?>
