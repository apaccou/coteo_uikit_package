<nav class="co-menu-desktop uk-visible@l uk-navbar-container uk-navbar-transparent" uk-navbar>
    <div class="uk-navbar-left">

    <?php
    $nav = BlockType::getByHandle('autonav');
    $nav->controller->orderBy = 'display_asc';
    $nav->controller->displayPages = 'top';
    $nav->controller->displaySubPages = 'all';
    $nav->controller->displaySubPageLevels = 'custom';
    $nav->controller->displaySubPageLevelsNum = 2;
    $nav->render('templates/uikit_dropdown_menu');
    ?>

    </div>
</nav>

<!-- This is the off-canvas -->
<div id="menu-mobile" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <?php
        $nav = BlockType::getByHandle('autonav');
        $nav->controller->orderBy = 'display_asc';
        $nav->controller->displayPages = 'top';
        $nav->controller->displaySubPages = 'all';
        $nav->controller->displaySubPageLevels = 'custom';
        $nav->controller->displaySubPageLevelsNum = 2;
        $nav->render('templates/uikit_mobile_nav_menu');
        ?>

    </div>
</div>

<nav class="co-menu-mobile uk-hidden@l uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#menu-mobile" uk-toggle>
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
    </div>
</nav>
