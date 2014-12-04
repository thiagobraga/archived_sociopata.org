<?php if (isset($session['logged_in']) && $session['logged_in']) { ?>
    <div class="dropdown fixed-top">
        <button class="btn btn-default user-menu dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            Olá, <?php echo $session['name'] ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin') ?>">Admin</a></li>
            <li><a href="<?php echo base_url('styleguide') ?>">Styleguide</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
        </ul>
    </div>
<?php } ?>
