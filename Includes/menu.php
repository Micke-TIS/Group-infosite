<?php
include_once("config.php");
?>

<!-- ***** Menu Start ***** -->
<ul class="nav">
    <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
    <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
    <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
    </li>
    <li class="submenu">
        <a href="javascript:;">Drop Down</a>
        <ul>
            <li><a href="" class="menu-item"><?php echo $menu_about; ?></a></li>
            <li><a href="" class="menu-item"><?php echo $menu_features; ?></a></li>
            <li><a href="" class="menu-item"><?php echo $menu_faq; ?></a></li>
            <li><a href="" class="menu-item"><?php echo $menu_blog; ?></a></li>
        </ul>
    </li>
    <li class="scroll-to-section"><a href="#contact-us" class="menu-item"><?php echo $contact; ?></a></li>
</ul>
<a class='menu-trigger'>
    <span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
