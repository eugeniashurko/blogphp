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
                define("LOGOUT_TXT", "Log out");
                define("GREETING","Hi");

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

                define("TITLE_LABLE_EN_TXT", "Title English");
                define("TITLE_PLACEHOLDER_EN_TXT", "Article Title in English");
                define("TITLE_LABLE_UK_TXT", "Title Ukrainian");
                define("TITLE_PLACEHOLDER_UK_TXT", "Article Title in Ukrainian");
                
                define("DESC_LABLE_EN_TXT", "Description English");
                define("DESC_PLACEHOLDER_EN_TXT", "Article Description in Ukrainian");
                define("DESC_LABLE_UK_TXT", "Description Ukrainian");
                define("DESC_PLACEHOLDER_UK_TXT", "Article Description in Ukrainian");
                
                define("BODY_LABLE_EN_TXT", "Body English");
                define("BODY_PLACEHOLDER_EN_TXT", "Article Body in English");
                define("BODY_LABLE_UK_TXT", "Body Ukrainian");
                define("BODY_PLACEHOLDER_UK_TXT", "Article Body in Ukrainian");
                                    
                define("BUTTON_LABLE_TXT", "Publish");

                // for add_note.tpl
                define("ADD_NOTE_TITLE_TXT", "New note page");
                define("ADD_NOTE_HEADER_TXT", "New Note to Broadcast");

                define("NOTE_BODY_LABLE_EN_TXT", "Body English");
                define("NOTE_BODY_PLACEHOLDER_EN_TXT", "Note Body in English");
                define("NOTE_BODY_LABLE_UK_TXT", "Body Ukrainian");
                define("NOTE_BODY_PLACEHOLDER_UK_TXT", "Note Body in Ukrainian");


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

                // error messages
                define("LOGIN_ERROR", "Please enter a valid username and password");
                define("LOGGED_USER_LOG_ATTEMPT", "User is already logged in");
                define("LOGIN_USERNAME_ERROR", "Invalid username");
                define("LOGIN_PASSWORD_ERROR", "Invalid password");
                define("LOGIN_USER_DOES_NOT_EXIST", "Authentication failed, check your username and password!");
                define("PERMISSION_DENIED", "You don't have permission for this action");
                
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
                define("LOGOUT_TXT", "Вийти");
                define("GREETING","Привіт");

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
                
                define("TITLE_LABLE_EN_TXT", "Заголовок англійською");
                define("TITLE_PLACEHOLDER_EN_TXT", "Заголовок запису англійською мовою");
                define("TITLE_LABLE_UK_TXT", "Заголовок українською");
                define("TITLE_PLACEHOLDER_UK_TXT", "Заголовок запису українською мовою");
                
                define("DESC_LABLE_EN_TXT", "Опис англійською");
                define("DESC_PLACEHOLDER_EN_TXT", "Короткий опис статті англійською мовою");
                define("DESC_LABLE_UK_TXT", "Опис українською");
                define("DESC_PLACEHOLDER_UK_TXT", "Короткий опис статті українською мовою");
                
                define("BODY_LABLE_EN_TXT", "Тіло англійською");
                define("BODY_PLACEHOLDER_EN_TXT", "Текст статті англійською мовою");
                define("BODY_LABLE_UK_TXT", "Тіло українською");
                define("BODY_PLACEHOLDER_UK_TXT", "Текст статті українською мовою");

                define("BUTTON_LABLE_TXT", "Публікувати");


                // for add_note.tpl
                define("ADD_NOTE_TITLE_TXT", "Додати нову нотатку");
                define("ADD_NOTE_HEADER_TXT", "Нова Нотатка до Трансляції");

                define("NOTE_BODY_LABLE_EN_TXT", "Тіло англійською");
                define("NOTE_BODY_PLACEHOLDER_EN_TXT", "Текс нотатки англійською мовою");
                define("NOTE_BODY_LABLE_UK_TXT", "Тіло українською");
                define("NOTE_BODY_PLACEHOLDER_UK_TXT", "Текс нотатки українською мовою");


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

                // error messages
                define("LOGIN_ERROR", "Будь-ласка введіть правильне ім’я та пароль");
                define("LOGGED_USER_LOG_ATTEMPT", "Користувач вже увійшов у систему");
                define("LOGIN_USERNAME_ERROR", "Некоректне ім’я користувача");
                define("LOGIN_PASSWORD_ERROR", "Некоректний пароль");
                define("LOGIN_USER_DOES_NOT_EXIST", "Помилка автентифікації, перевірте своє ім’я та пароль");
                define("PERMISSION_DENIED", "Ви не маєте прав на здійснення цієї дії");
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
                define("LOGOUT_TXT", "Log out");
                define("GREETING","Hi");
                
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

                define("TITLE_LABLE_EN_TXT", "Title English");
                define("TITLE_PLACEHOLDER_EN_TXT", "Article Title in English");
                define("TITLE_LABLE_UK_TXT", "Title Ukrainian");
                define("TITLE_PLACEHOLDER_UK_TXT", "Article Title in Ukrainian");
                
                define("DESC_LABLE_EN_TXT", "Description English");
                define("DESC_PLACEHOLDER_EN_TXT", "Article Description in Ukrainian");
                define("DESC_LABLE_UK_TXT", "Description Ukrainian");
                define("DESC_PLACEHOLDER_UK_TXT", "Article Description in Ukrainian");
                
                define("BODY_LABLE_EN_TXT", "Body English");
                define("BODY_PLACEHOLDER_EN_TXT", "Article Body in English");
                define("BODY_LABLE_UK_TXT", "Body Ukrainian");
                define("BODY_PLACEHOLDER_UK_TXT", "Article Body in Ukrainian");
                define("BUTTON_LABLE_TXT", "Publish");

                // for add_note.tpl
                define("ADD_NOTE_TITLE_TXT", "New note page");
                define("ADD_NOTE_HEADER_TXT", "New Note to Broadcast");

                define("NOTE_BODY_LABLE_EN_TXT", "Body English");
                define("NOTE_BODY_PLACEHOLDER_EN_TXT", "Note Body in English");
                define("NOTE_BODY_LABLE_UK_TXT", "Body Ukrainian");
                define("NOTE_BODY_PLACEHOLDER_UK_TXT", "Note Body in Ukrainian");

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

                // error messages
                define("LOGIN_ERROR", "Please enter a valid username and password");
                define("LOGGED_USER_LOG_ATTEMPT", "User is already logged in");
                define("LOGIN_USERNAME_ERROR", "Invalid username");
                define("LOGIN_PASSWORD_ERROR", "Invalid password");
                define("LOGIN_USER_DOES_NOT_EXIST", "Authentication failed, check your username and password!");
                define("PERMISSION_DENIED", "You don't have permission for this action");
                break; 
        } 
    } 
?> 