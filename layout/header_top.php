<?php
// Mengimpor (use) namespace dan kelas
require_once 'app/profile.php';

// Membuat objek dari kelas dalam namespace
$profile = new Profile();
?>
<div class="header_top">
    <div class="container-fluid bg-dark">
        <div class="contact_nav">
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    Call : <?= $profile->no_telepon(); ?>
                </span>
            </a>
            <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                    Email : <?= $profile->email(); ?>
                </span>
            </a>
        </div>
    </div>
</div>

