<?php
        $profile = [
            "name"    => "Jade Carlos Castillo",
            "image"   => "https://paraverse.feutech.edu.ph/briefcase/assets/images/avatars/T2024/MD-T202410413.jpg",
            "githubUser"  => "CodexJade",
            "githubURL" => "https://github.com/CodexJade",
            "email"   => "jadecarlosc@gmail.com",
            "phone"   => "(+63) 921-479-1858"
        ];
?>

<div class="profile-image">
    <img src="<?= $profile['image']?>" alt="Profile Picture">
</div>
<div class="contact-name">
    <h1><?= $profile['name'] ?></h1>
    <div class="contact-info">
        <p>Email: <a href="mailto:<?= $profile['email'] ?>"><?= $profile['email'] ?></a> | Phone: <?= $profile['phone'] ?></p>
        <p>Github: <a href="<?= $profile['githubURL'] ?>" target="_blank"><?= $profile['githubUser'] ?></a></p>
    </div>
</div>