<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Viga&display=swap" rel="stylesheet">
        <link rel="icon" href="../assets/images/logo/favicon.svg" type="image/svg+xml">
        <link rel="icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">

        <link href="../styles/main.css" rel="stylesheet">
        <link href="../styles/account.css" rel="stylesheet">
        <link href="../styles/second_main.css" rel="stylesheet"> 

        <script src="../scripts/ext/node_modules/chart.js/dist/chart.js"></script>
        <script src="https://kit.fontawesome.com/8ce9f97409.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="../scripts/modules/displayModule.js"></script>
        <script type="text/javascript" src="../scripts/modules/controlerModule.js"></script>
        <script type="text/javascript" src="../scripts/modules/validationModule.js"></script>
        
        <script type="text/javascript" src="../scripts/modules/chatModule.js"></script>
        <script type="text/javascript" src="../scripts/modules/formModule.js"></script>

        <script type="text/javascript" src="../scripts/account.js" defer></script>
        <script type="text/javascript" src="../scripts/main.js" defer></script>    
        <title>My account</title>
    </head>

    <body>
        <h2 class="subtitles"> Account </h2>
        
        <section id="chat_container">
            <aside id="chat_tabs" class="admin_specific"></aside>
            <form name="chat">
                <header>
                    <img id="avatar" src="../assets/images/logo/round_white.png">
                    <div>
                        <span id="chat_name"></span>
                    </div>
                    <svg class="chat_icons admin_specific" id="chat_back" viewBox="0 0 512 512">
                        <path d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM502.6 9.367C496.8 3.578 488.8 0 480 0h-160c-17.67 0-31.1 14.32-31.1 31.1c0 17.67 14.32 31.1 31.99 31.1h82.75L178.7 290.7c-12.5 12.5-12.5 32.76 0 45.26C191.2 348.5 211.5 348.5 224 336l224-226.8V192c0 17.67 14.33 31.1 31.1 31.1S512 209.7 512 192V31.1C512 23.16 508.4 15.16 502.6 9.367z"/>
                    </svg>
                </header>
                <div id="messages_display"></div>
                <footer>
                    <input type="textarea" name="message" placeholder="Enter your message here !">
                </footer>
            </form>
        </section>
        
        <main>                
            <form action="update_account_form" name="update">
                <img alt="account" src="../assets/images/icons/account_icon.svg">
                
                <ul>
                    <li>Your actual pseudo is : <span id="user_pseudo"></span></li>
                </ul>
                <div>
                    <label for="pseudo"> New pseudo :</label>
                    <input type="text" name="pseudo" placeholder="Bob653">
                </div>
                <div>
                    <label for="password"> New password :</label>
                    <input type="password" name="password" placeholder="Z2Cn$%*e1256DF">    
                </div>
                <div>
                    <label for="email"> New email adress :</label>
                    <input type="text" name="email" placeholder="myemail@something.com">       
                </div>
                <div>
                    <label for="password"> Current password :</label>
                    <input type="password" name="current_password" placeholder="Z2Cn$%*e1256DF" required>    
                </div>
                <input type="submit" name="submit" class="buttons forms_buttons">
            </form>



            <section id="admin_section" class="admin_specific">
                <h2 class="subtitles" id="dashboard_title"> Dashboard </h2>

                <article>
                    <canvas width="400px" height="350px"></canvas>
                </article>
            </section>
        </main>

        <nav id="main_menu" class="logged_specific">
            <ul>
                <li> 
                    <a id="home_button" href="../index.php"> Home </a>
                </li>                          
                <li> 
                    <a id="services_button" href="./services.php"> Services </a>
                </li>
                <li> 
                    <a id="account_button" href="./account.php"> Account </a>
                </li>                                       
                <li> 
                    <button id="chat_button"> Chat </button>
                </li> 
                <li>
                    <button id="logout_button"> Log Out </button>
                </li>
            </ul>         
        </nav>
    </body>
</html>