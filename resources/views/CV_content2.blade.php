<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Front-End</title>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

  
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile">
                <h1>Jean Dupont</h1>
                <p>Développeur Front-End</p>
                <img src="https://via.placeholder.com/150" alt="Photo de profil">
            </div>
            <div class="contact-info">
                <h2>Contact</h2>
                <p>Email: <a href="mailto:jean.dupont@example.com">jean.dupont@example.com</a></p>
                <p>Téléphone: 06 12 34 56 78</p>
                <p>Site Web: <a href="https://jeandupont.dev" target="_blank">jeandupont.dev</a></p>
                <p>GitHub: <a href="https://github.com/jeandupont" target="_blank">github.com/jeandupont</a></p>
                <p>LinkedIn: <a href="https://linkedin.com/in/jeandupont" target="_blank">linkedin.com/in/jeandupont</a></p>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <section class="about">
                <h2>À propos de moi</h2>
                <p>Passionné par le développement web, je crée des interfaces utilisateur intuitives et efficaces. Mes compétences en React et en conception UI/UX me permettent de transformer des idées en solutions concrètes.</p>
            </section>

            <section class="skills">
                <h2>Compétences</h2>
                <ul>
                    <li>HTML / CSS (Avancé)</li>
                    <li>JavaScript / ES6+ (Avancé)</li>
                    <li>React / Vue.js (Intermédiaire)</li>
                    <li>Git / GitHub (Avancé)</li>
                    <li>Design avec Figma et Adobe XD (Intermédiaire)</li>
                </ul>
            </section>

            <section class="projects">
                <h2>Projets récents</h2>
                <div class="project">
                    <h3>Portfolio Personnel</h3>
                    <p>Un site web responsive présentant mes projets et compétences. <a href="https://example.com" target="_blank" class="blue">Voir le projet</a></p>
                </div>
                <div class="project">
                    <h3>Application E-Commerce</h3>
                    <p>Développement d'une application e-commerce avec React et Firebase. <a href="https://example.com" target="_blank" class="blue">Voir le projet</a></p>
                </div>
            </section>

            <section class="experience">
                <h2>Expériences professionnelles</h2>
                <div class="job">
                    <h3>Développeur Front-End</h3>
                    <p><strong>Entreprise XYZ</strong> - Janvier 2021 à Présent</p>
                    <ul>
                        <li>Création de composants réutilisables en React.</li>
                        <li>Optimisation des performances des pages web.</li>
                        <li>Collaboration avec les équipes UI/UX pour améliorer l'expérience utilisateur.</li>
                    </ul>
                </div>
                <div class="job">
                    <h3>Stagiaire Développement Web</h3>
                    <p><strong>Startup ABC</strong> - Juin 2020 à Décembre 2020</p>
                    <ul>
                        <li>Développement d'interfaces web avec HTML, CSS et JavaScript.</li>
                        <li>Implémentation d’animations interactives.</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
