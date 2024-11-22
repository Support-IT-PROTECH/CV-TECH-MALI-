<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Front-End</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body>
    <header class="header">
        {{-- @include('includes/head') --}}
        <h1>Jean Dupont</h1>
        <p>Développeur Front-End | UI/UX Designer</p>
        <div class="contacts">
            
                <a href="#"><i class="fa-brands fa-facebook"> </i></a> |
                <a href=""><i class="fa-brands fa-twitter"></i></a>  |  
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>  
         
        </div>
    </header>

    <main class="main">
        <section class="about">
            <h2>À propos de moi</h2>
            <p>Passionné par le design et le développement web, j'aime créer des expériences utilisateur fluides et attractives. J'ai une expertise en React et en design d'interface.</p>
            <p><i class="fa-solid fa-location-dot m "></i>Adresse:</p> 
            <p><i class="fa-solid fa-phone m "></i>Telephone:</p>
            <p><i class="fa-solid fa-envelope m "></i>Email:</p>
           

        </section>

        <section class="skills">
            <h2>Compétences</h2>
            <div class="skill">
                <p>HTML</p>
                <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
            </div>
            <div class="skill">
                <p>CSS</p>
                <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
            </div>
            <div class="skill">
                <p>JavaScript</p>
                <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
            </div>
            <div class="skill">
                <p>PHP</p>
                <div class="progress-bar"><div class="progress" style="width: 40%;"></div></div>
            </div>
        </section>

        <section class="projects">
            <h2>Projets</h2>
            <div class="project">
                <h3>Portfolio Personnel</h3>
                <p>Un site moderne et responsive présentant mes réalisations. <a href="https://example.com" target="_blank" class="blue">Voir le projet</a></p>
            </div>
            <div class="project">
                <h3>Application Todo React</h3>
                <p>Une application de gestion de tâches avec React et Firebase. <a href="https://example.com" target="_blank" class="blue">Voir le projet</a></p>
            </div>
        </section>

        <section class="education">
            <h2>Formation</h2>
            <ul>
                <li>Diplôme en Informatique - Université XYZ (2020)</li>
                <li>Certificat React - OpenClassrooms (2022)</li>
            </ul>
        </section>
    </main>

    <footer class="footer">
        <p>Intéressé par mon profil ? <a href="mailto:jean.dupont@example.com">Contactez-moi</a> !</p>
        {{-- <button id="toggle-theme">Mode Sombre</button> --}}
    </footer>

    <script src="script.js"></script>
</body>
</html>
