<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">{$smarty.const.BLOG_LOGO_TXT}</a>
        </div>

        <ul class="nav navbar-links">
            <li class="active"><a href="index.php">{$smarty.const.HOME_TXT}</a></li>
            <li><a href="about.php">{$smarty.const.ABOUT_TXT}</a></li>
            {if $logged_in}
                <li><a href="add_article.php">{$smarty.const.ADD_ENTRY_TXT}</a></li>
                {if !is_null($broadcast)}
                    <li><a href="add_note.php"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;{$smarty.const.ADD_NOTE_TXT}</a></li>
                {/if}
            {/if}
        </ul>
        <ul class="nav navbar-center">
            {if $logged_in}
                {if !is_null($broadcast)}
                <li>
                    <a href="close_broadcast.php" class="important"><i class="fa fa-times"></i>
                        &nbsp;&nbsp; {$smarty.const.CLOSE_B_TXT}
                    </a>
                </li>
                {else}
                <li>
                    <a href="add_broadcast.php" class="important"><i class="fa fa-bullhorn"></i>
                        &nbsp;&nbsp;{$smarty.const.BROADCAST_TXT}
                    </a>
                </li>
                {/if}
            {/if}
        </ul>
        <ul class="nav navbar-right">
            {if !$logged_in}
                <li>
                    <a href="login_page.php">{$smarty.const.LOGIN_TXT}</a>
                </li>
            {else}
                <div class="greet"><i>{$smarty.const.GREETING}, {$smarty.session.user_id} &nbsp; &nbsp;</i></div>
                <li>
                    <a href="logout.php">{$smarty.const.LOGOUT_TXT}</a>
                </li>
            {/if}
        </ul>
    </div>
</div>
