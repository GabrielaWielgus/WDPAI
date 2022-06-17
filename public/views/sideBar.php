<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                </span>

            <div class="text logo-text">
                <div class="user_information_nav_bar">
                    <p class="name"><?= json_decode($_COOKIE['user'], true)['name']; ?> <?= json_decode($_COOKIE['user'], true)['surname']; ?></p>
                </div>
            </div>
        </div>

        <i class="fa-solid fa-arrow-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <li class="search-box">
                <i class="fa-solid fa-magnifying-glass icon"></i>
                <input type="text" placeholder="Wyszukaj...">
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="http://localhost:8080/addDog">
                        <i class="fa-solid fa-dog icon"></i>
                        <span class="text nav-text">Dodaj psa</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="http://localhost:8080/walks">
                        <i class="fa-solid fa-shoe-prints icon"></i>
                        <span class="text nav-text">Dodaj spacer</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="http://localhost:8080/dogs">
                        <i class="fa-solid fa-paw icon"></i>
                        <span class="text nav-text">Znane psiaki</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="http://localhost:8080/settings">
                        <i class="fa-solid fa-gear icon"></i>
                        <span class="text nav-text">Ustawienia</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="http://localhost:8080">
                    <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                    <span class="text nav-text">Wyloguj</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class="fa-solid fa-moon icon moon"></i>
                    <i class="fa-solid fa-sun icon sun"></i>
                </div>
                <span class="mode-text text">Tryb nocny</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>

</nav>
