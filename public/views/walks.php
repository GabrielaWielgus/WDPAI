<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/walks.css">

    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

            <div class="text logo-text">
                <span class="name">Dog Name</span>
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
                    <a href="http://localhost:8080/add_dog">
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

    <section class="home">
        <!-- TODO: ADD MAPS FUNCTIONALY -->
        <div class="'add-walk-container">
            <form class="add-walk">
                <b>Dodaj spacer</b>
                <li class="search-adress">
                    <i class="fa-solid fa-earth-europe icon"></i>
                    <input type="text" placeholder="Podaj adres spaceru...">
                </li>
                <li class="walk-description">
                    <i class="fa-solid fa-message icon"></i>
                    <input type="text" placeholder="Napisz krótki opis spaceru... Np. Dzisiaj jesteśmy bez smyczy!">
                </li>
                <button><img src="public/img/button_login.svg"></button>
            </form>
        </div>
    </section>



    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Tryb dzienny";
    }else{
        modeText.innerText = "Tryb nocny";
        
    }
});
    </script>

</body>
</html>


       