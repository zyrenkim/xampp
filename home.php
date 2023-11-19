
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CPC Chorale</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playball&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
}
:root{
    --bg-color: #1c3b4d;
    --text-color: #ffffff;
    --second-color:  #b4dcf5;
    --main-color: #232a30;
    --big-font: 6rem;
    --h2-font: 3rem;
    --p-font: 1.1rem;
}

body{

    background: #6a11cb; 
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
}

body.dark-mode {
    background-color: var(--bg-color);
    color: var(--text-color);
}
body.dark-mode .about {
    background-color: var(--text-color);
    color: var(--bg-color);
}

.navbar {
    margin-top: 20px;
    position: fixed;
    width: 100%;
    background: transparent; 
    justify-content: space-between;
    align-items: center;
    z-index: 1000; 
    display: flex;
    
}
.navbar-brand{
    margin-left: 140px;
}
body.dark-mode .nav-link {
    color: var(--text-color);
  }
.nav-link{
    background-size: cover; 
    margin-right: 10px;
    margin-left: 10px;
    color: white;
    text-transform: uppercase;
    font-size: medium;
    font-family: 'Quicksand', sans-serif;
    text-decoration: none;
    transition: ease .40s;
    font-weight: 500;
}
.nav-link:hover{
    background: #b4dcf5;
    transform: scale(1.1);
    color: #232a30;
    border-radius: 50px;
    box-shadow: 5px 5px 15px rgba(49, 80, 221, 0.2);
}

.nav-link.active {
    background-color: #f7f9fa; 
    color: var(--second-color); 
    border-radius: 50px; 
    margin-right: 30px;
    width: 100px;
    text-align: center;
}

.nav-link.active:hover {
    background-color: #115171;
    color: #fff;
    box-shadow: 0 0 15px rgba(17, 81, 113, 0.7);
    transform: scale(1.1);
}

.dropdown-menu{
    border-radius: 30px;
}

.dropdown-menu a{
    font-family: 'Quicksand', sans-serif;
}
.dropdown-menu a:hover{
    transform: scale(1.1);
    color: #115171;
    border-radius: 50px;
    background: var(--second-color);
}

section{
    padding: 80px 18%;
}
.home{
    position: relative;
    width: 100;
    height: 100vh;
    background: url(img/backround\ 1.jpg);
    background-size: cover;
    background-position: center;
    display: grid;
    grid-template-columns: repeat(1,1fr);
    align-items: center;
}
.home-text h1{
    font-size: var(--big-font);
    line-height: 1.2;
    color: var(--bg-color);
    font-family: 'Poppins', sans-serif;
    font-style: italic;
    letter-spacing: 4px;
    margin-bottom: 20px;
    font-weight: 600;
    margin-top: 30px;
}
.home-text p{
    font-size: 20px;
    font-weight: 400;
    line-height: 38px;
    margin-bottom: 50px;
    color: var(--text-color);
    font-family: 'Quicksand', sans-serif;
}
.home-btn{
    display: inline-block;
    padding: 15px 20px;
    background: #213C4D;
    color: var(--main-color);
    border-radius: 75px;
    transition: ease .40s;
}
.home-btn:hover{
    background: #232a30;
    transform: scale(1.1);
}
.carousel-container{
    padding: 100px 100px;
}
.carousel-item img {
    border-radius: 50px; 

}
.about{
    background: var(--bg-color);
    color: var(--text-color);
    font-weight: 600;
}
.about p{
    margin-top: 30px;
    font-weight: 400;
}
.about span{
    margin-top: 20px;
}
.about .bx{

    font-size: 2rem;
    cursor: pointer;
    margin-top: 10px;
    color: #4267B2;
}
.hr p{
    font-family: 'Quicksand, sans-serif';
}
.dark-mode-button {
    position: absolute;
    bottom: unset;
    right: 50px;
    border: 1px solid var(--bg-color);
    border-radius: 20px; 
    padding: 10px 20px; 
    background-color: var(--text-color);
    color: var(--bg-color); 
    text-transform: uppercase; 
    font-weight: bold; 
    cursor: pointer;
}
    </style>
</head>

  <body>

    <!--navbar-->
    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
          <img src="img/CPC-PhotoRoom (3).png" alt="Logo" width="200" height="90">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto my-2 my-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="news&updates.html">News & Updates</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="members&mentors.html">Members & Mentors</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="signin.html">Sign-in</a></li>
                  <li><a class="dropdown-item" href="login.html">Login</a></li>
                  <li><a class="dropdown-item" href="logout.html">Logout</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </nav>

      <!--home-->

      <section class="home" id="home">
        <div class="home-text">
           <h1>CPC <br> Chorale</h1>
           <p>Where your bright future begins.</p>
           <a href="#" class="home-btn"><i class='bx bxs-right-arrow' style='color:#dad6cd'></i></a>
        </div>
    </section>

    <!--carousel-->

    <div class="carousel-container mt-5" id="carousel">
      <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/cover2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/cover3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <section class="contact ">
        <div class="container">
          <div class="row py-5">
            <div class="col-lg-5 m-auto text-center">
              <h1>CONTACT US</h1>
            </div>
          </div>

          <div class="row">
            <div class="co-lg-9 m-auto">
              <div class="row">

                <div class="col-lg-4">
                  <h6>LOCATION</h6>
                  <p>HQM3+FCH, Arzobispo Street, Roxas City, Capiz</p>

                  <h6>PHONE</h6>
                  <p>(036) 621 1882</p>

                  <h6>EMAIL</h6>
                  <p>cpcchorale@gmail.com</p>
                
              </div>
            </div>
        </div>
      </div>
      </section>  

    <section class="about py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-9 m-auto text-center">
              <h1>ABOUT</h1>
              <p>This website was created with the intention of presenting Colegio de la Pursima Conception's resident chorale. It lists their members, accomplishments, and previous, current, and upcoming activities and events.</p>
            </div>
   

            <div class="col-lg-9 m-auto text-center mt-4">
              <h1>SOCIAL</h1>
              <a href="https://www.facebook.com/ColegioDeLaPurisimaConcepcionGrandChorale" id="facebook-button">
              <span><i class='bx bxl-facebook-circle text-center' ></i></span>
              </a>
            </div>
          </div>
        </div>
      </section>
      
      <hr>
      <p class="text-center">Copyright ©2023 All rights reserved | This template is made by Kiersten</p>

      <button id="dark-mode-toggle" class="dark-mode-button"><i class="bx bx-moon"></i></button>


      <script>
      
  const darkModeToggle = document.getElementById('dark-mode-toggle');
  const body = document.body;
  const moonIconClass = 'bx bx-moon';
  const sunIconClass = 'bx bx-sun';

  darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    // Update the icon class based on the dark mode state
    const iconElement = darkModeToggle.querySelector('i');
    if (body.classList.contains('dark-mode')) {
      // Dark mode is active, change to sun icon
      iconElement.className = sunIconClass;
    } else {
      // Light mode is active, change to moon icon
      iconElement.className = moonIconClass;
    }
  });


      </script>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>