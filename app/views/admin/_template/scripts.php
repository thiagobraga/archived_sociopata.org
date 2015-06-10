<script id="facebook-jssdk" src="//connect.facebook.net/pt_BR/sdk.js"></script>

<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="<?php echo $file ?>.js"></script>
    <?php }
}

$file = rtrim(base_url(), '/') . ':3060/';
$file_headers = @get_headers($file);

if ($file_headers) { ?>
    <script id="__bs_script__">
        document.write("<script async src='http://HOST:3060/browser-sync/browser-sync-client.2.2.3.js'><\/script>".replace("HOST", location.hostname));
    </script>
<?php } ?>
