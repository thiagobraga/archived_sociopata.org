<?php if (!isset($session['logged_in'])) {
    $this->load->view('admin/login');
} else {
    $this->load->view('admin/dashboard');
}
