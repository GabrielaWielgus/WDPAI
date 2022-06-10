<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/settings_dog.css">


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
    <div class="add-dog-container">
        <form class="edit-dog">
            <!-- TODO: picture of dog -->
            <li class="name-dog-input">
                <i class="fa-solid fa-pen"></i>
                <label for="fname">Edytuj imię psa</label><br>
                <input type="text" id="fname" name="fname" placeholder="Kira">
            </li>
            <li class="breed-dog">
                <i class="fa-solid fa-user"></i>
                <label for="fbreed">Edytuj rasę</label><br>
                <input type="text" id="fbreed" name="fbreed" placeholder="Kundel">
            </li>
            <li class="gender-dog">
                <i class="fa-solid fa-mars-and-venus"></i>
                <label for="fgender">Edytuj płeć</label><br>
                <input type="text" id="fgender" name="fgender" placeholder="Suczka">
            </li>
            <li class="description-dog">
                <i class="fa-solid fa-message"></i>
                <label for="fdescription">Edytuj opis</label><br>
                <textarea class="textarea" placeholder="Napisz krótki opis swojego psiaka..."></textarea>
            </li>
            <button2 type="submit"><i class="fa-solid fa-check"></i></button2>
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



