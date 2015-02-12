<script id="facebook-jssdk" src="//connect.facebook.net/pt_BR/sdk.js"></script>

<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="/assets/<?php echo $file ?>.js"></script>
    <?php }
} ?>
