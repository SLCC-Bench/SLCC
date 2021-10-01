<header>
    <img class="nav-logo" src="<?php echo $logo ?>" alt="">
    <nav>
        <input type="checkbox" id="dropdown-nav-li" class="dropdown-nav-li">
        <label for="dropdown-nav-li" class="dropdown-nav-li-label">
            <span></span>
        </label>
        <ul class="nav-ul">
            <li class="nav-li active"><a href="<?php echo $homeLink ?>">Home</a></li>
            <li class="nav-li"><a href="<?php if ($homeLink == '') { echo './pages/mcfm'; } else { echo $mcfmLink; } ?>">MCFM</a></li>
            <li class="nav-li"><a href="<?php if ($homeLink == '') { echo './pages/hof'; } else { echo $hofLink; } ?>">HOF</a></li>
            <li class="nav-li ministries">Ministries
                <input type="checkbox" id="dropdown-ministries" class="dropdown-ministries">
                <label for="dropdown-ministries" class="dropdown-ministries-label"></label>
                <ul class="nav-ul-ministries">
                    <li class="nav-li-ministries"><a href="">Children</a></li>
                    <li class="nav-li-ministries"><a href="">Manna</a></li>
                    <li class="nav-li-ministries"><a href="">Youth</a></li>
                    <li class="nav-li-ministries"><a href="">Young Professional</a></li>
                    <li class="nav-li-ministries"><a href="">Admin</a></li>
                </ul>
            </li>
            <li class="nav-li"><a href="<?php if ($homeLink == '') { echo './pages/about'; } else { echo $aboutLink; } ?>">About</a></li>
            <li class="nav-li"><a href="<?php if ($homeLink == '') { echo './pages/contacts'; } else { echo $contactsLink; } ?>">Contacts</a></li>
        </ul>
    </nav>
</header>

<div class="social-media-container">
    <ul class="social-media">
        <li><a href="https://www.facebook.com/shinelikechristchurch" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCglUjF48fdVcqTaeW0aE0xA" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/shinelikechristchurch/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
</div>