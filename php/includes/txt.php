<?php 
    function defineStrings() { 
        switch($_SESSION["lang"]) { 
            case "en": 
                // navbar txt
                define("BLOG_LOGO_TXT","My Blog"); 
                define("HOME_TXT","Home"); 
                define("ABOUT_TXT", "About");
                define("ADD_ENTRY_TXT", "Add entry");
                define("ADD_NOTE_TXT", "Add note");
                define("CLOSE_B_TXT", "Close broadcast");
                define("BROADCAST_TXT", "Broadcast");
                define("LOGIN_TXT", "Log in");
                //sidebar txt
                define("NO_BROADCAST_TXT","No Broadcast"); 
                define("NO_BROADCAST_DESC_TXT","Broadcast is currently closed"); 
                // footer txt
                define("AUTHOR_TXT", "Eugenia Oshurko");
                define("GO_UP_TXT", "Go up");

                // for index.tpl
                define("HOME_TITLE_TXT", "Home page");
                define("DETAILS_TXT","Details"); 

                // for article.tpl
                define("EDIT_TXT", "Edit");
                define("DELETE_TXT", "Delete");

                // for about.tpl
                define("ABOUT_TITLE_TXT", "About project");
                define("ABOUT_HEADER_TXT", "About blog");
                define("ABOUT_BODY_TXT", "Blog was implemented within the course in Web Programming (2014). \n
                        My name is Eugenia Oshurko, I'm a student of bachelor program in Software Engineering
                        at National University of 'Kyiv-Mohyla Academy'.");
                define("CONTACTS_ACCOUNTS_TXT", "Contacts and accounts:");

                //for add_article.txt
                define("ADD_ARTICLE_TITLE_TXT", "New article page");
                define("ADD_ARTICLE_HEADER_TXT", "New Article");
                define("TITLE_LABLE_TXT", "Titile");
                define("TITLE_PLACEHOLDER_TXT", "Article Title");
                define("DESC_LABLE_TXT", "Description");
                define("DESC_PLACEHOLDER_TXT", "Article Description");
                define("BODY_LABLE_TXT", "Body");
                define("BODY_PLACEHOLDER_TXT", "Article Body");
                define("BUTTON_LABLE_TXT", "Publish");

                //for login_page.tpl
                define("LOGIN_TITLE_TXT", "Login page");
                define("LOGIN_HEADER_TXT", "Please, log in");
                define("ERROR_MESSAGE_TXT", "Log in failed, please check your username or password");
                define("USERNAME_LABLE_TXT", "Username");
                define("USERNAME_PLACEHOLDER_TXT", "Enter username");
                define("PASSWORD_LABLE_TXT", "Password");
                define("PASSWORD_PLACEHOLDER_TXT", "Enter password");
                define("REMEMBER_TXT", "Remember me");
                define("LOGIN_BUTTON_TXT", "Log In");

                break; 
            case "uk": 
                define("BLOG_LOGO_TXT","Мій Блог"); 
                define("HOME_TXT","Головна"); 
                define("ABOUT_TXT", "Про проект");
                define("ADD_ENTRY_TXT", "Додати запис");
                define("ADD_NOTE_TXT", "Нова нотатка");
                define("CLOSE_B_TXT", "Завершити");
                define("BROADCAST_TXT", "Транслювати");
                define("LOGIN_TXT", "Увійти");
                //sidebar txt
                define("NO_BROADCAST_TXT","Трансляція Неактивна"); 
                define("NO_BROADCAST_DESC_TXT","На данний момент активних трансляцій немає"); 
                //footer
                define("AUTHOR_TXT", "Євгенія Ошурко");
                define("GO_UP_TXT", "Вгору");

                // for index.tpl
                define("HOME_TITLE_TXT", "Головна сторінка");
                define("DETAILS_TXT","Деталі"); 

                // for article.tpl
                define("EDIT_TXT", "Редагувати");
                define("DELETE_TXT", "Видалити");

                // for about.tpl
                define("ABOUT_TITLE_TXT", "Про проект");
                define("ABOUT_HEADER_TXT", "Про блог");
                define("ABOUT_BODY_TXT", "Блог розроблено в рамках курсу Веб Програмування (2014). \n
                        Мене звати Євгенія Ошурко, я студентка бакалаврської програми 'Програмна інженерія' 
                        в Національному університеті 'Києво-Могилянська академія'.");
                define("CONTACTS_ACCOUNTS_TXT", "Контакти та акаунти:");

                //for add_article.txt
                define("ADD_ARTICLE_TITLE_TXT", "Додати новий запис");
                define("ADD_ARTICLE_HEADER_TXT", "Новий Запис");
                define("TITLE_LABLE_TXT", "Заголовок");
                define("TITLE_PLACEHOLDER_TXT", "Заголовок запису");
                define("DESC_LABLE_TXT", "Опис");
                define("DESC_PLACEHOLDER_TXT", "Короткий опис статті");
                define("BODY_LABLE_TXT", "Тіло");
                define("BODY_PLACEHOLDER_TXT", "Текст статті");
                define("BUTTON_LABLE_TXT", "Публікувати");

                //for login_page.tpl
                define("LOGIN_TITLE_TXT", "Сторінка входу");
                define("LOGIN_HEADER_TXT", "Будь ласка, увійдіть в систему");
                define("ERROR_MESSAGE_TXT", "Вхід неуспішний, будь ласка, перевірте логін чи пароль");
                define("USERNAME_LABLE_TXT", "Логін");
                define("USERNAME_PLACEHOLDER_TXT", "Введіть логін");
                define("PASSWORD_LABLE_TXT", "Пароль");
                define("PASSWORD_PLACEHOLDER_TXT", "Введіть пароль");
                define("REMEMBER_TXT", "Запам’ятати мене");
                define("LOGIN_BUTTON_TXT", "Увійти");
                break; 
            default: 
                define("BLOG_LOGO_TXT","My Blog"); 
                define("HOME_TXT","Home"); 
                define("ABOUT_TXT", "About");
                define("ADD_ENTRY_TXT", "Add entry");
                define("ADD_NOTE_TXT", "Add note");
                define("CLOSE_B_TXT", "Close broadcast");
                define("BROADCAST_TXT", "Broadcast");
                define("LOGIN_TXT", "Log in");
                //sidebar txt
                define("NO_BROADCAST_TXT","No Broadcast"); 
                define("NO_BROADCAST_DESC_TXT","Broadcast is currently closed"); 
                // footer txt
                define("AUTHOR_TXT", "Eugenia Oshurko");
                define("GO_UP_TXT", "Go up");

                // for index.tpl
                define("HOME_TITLE_TXT", "Home page");
                define("DETAILS_TXT","Details"); 

                // for about.tpl
                define("ABOUT_TITLE_TXT", "About project");
                define("ABOUT_HEADER_TXT", "About blog");
                define("ABOUT_BODY_TXT", "Blog was implemented within the course in Web Programming (2014). \n
                        My name is Eugenia Oshurko, I'm a student of bachelor program in Software Engineering
                        at National University of 'Kyiv-Mohyla Academy'.");
                define("CONTACTS_ACCOUNTS_TXT", "Contacts and accounts:");

                //for add_article.txt
                define("ADD_ARTICLE_TITLE_TXT", "New article page");
                define("ADD_ARTICLE_HEADER_TXT", "New Article");
                define("TITLE_LABLE_TXT", "Titile");
                define("TITLE_PLACEHOLDER_TXT", "Article Title");
                define("DESC_LABLE_TXT", "Description");
                define("DESC_PLACEHOLDER_TXT", "Article Description");
                define("BODY_LABLE_TXT", "Body");
                define("BODY_PLACEHOLDER_TXT", "Article Body");
                define("BUTTON_LABLE_TXT", "Publish");

                //for login_page.tpl
                define("LOGIN_TITLE_TXT", "Login page");
                define("LOGIN_HEADER_TXT", "Please, log in");
                define("ERROR_MESSAGE_TXT", "Log in failed, please check your username or password");
                define("USERNAME_LABLE_TXT", "Username");
                define("USERNAME_PLACEHOLDER_TXT", "Enter username");
                define("PASSWORD_LABLE_TXT", "Password");
                define("PASSWORD_PLACEHOLDER_TXT", "Enter password");
                define("REMEMBER_TXT", "Remember me");
                define("LOGIN_BUTTON_TXT", "Log In");

                // for article.tpl
                define("EDIT_TXT", "Edit");
                define("DELETE_TXT", "Delete");
                break; 
        } 
    } 
?> 