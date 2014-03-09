<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">{$smarty.const.BLOG_LOGO_TXT}</a>
        </div>

        <ul class="nav navbar-links">
            <li class="active"><a href="index.php">{$smarty.const.HOME_TXT}</a></li>
            <li><a href="about.php">{$smarty.const.ABOUT_TXT}</a></li>
            <li><a href="add_article.php">{$smarty.const.ADD_ENTRY_TXT}</a></li>
            <li><a><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;{$smarty.const.ADD_NOTE_TXT}</a></li>
        </ul>
        <ul class="nav navbar-center">
            <li><a class="important"><i class="fa fa-times"></i>&nbsp;&nbsp;{$smarty.const.CLOSE_B_TXT}</a></li>
            
            <!--<li><a class="important"><i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Broadcast</a></li> -->
        </ul>
        <ul class="nav navbar-right">
            <li>
                <a href="login_page.php">{$smarty.const.LOGIN_TXT}</a>
            </li>
        </ul>
    </div>
</div>
