<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation de Safidy</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #2c3e50;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 2rem 0;
        }

        .profile {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
            background: #fff;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 2rem;
            border: 5px solid #2c3e50;
        }

        .skills-section {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .skill-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 30%;
        }

        .skill-card h3 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 0.5rem;
        }

        footer {
            background: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Présentation de Safidy</h1>
    </header>

    <div class="container">
        <div class="profile">
            <img src="https://via.placeholder.com/150" alt="Photo de Safidy" class="profile-img">
            <div>
                <h2>Bonjour, je suis Safidy</h2>
                <p>Développeur passionné par les technologies web et les systèmes open-source.</p>
                <p>J'aime créer des solutions innovantes et partager mes connaissances avec la communauté.</p>
            </div>
        </div>

        <div class="skills-section">
            <div class="skill-card">
                <h3>Git</h3>
                <p>Maîtrise des concepts de versioning avec Git :</p>
                <ul>
                    <li>Branches et merges</li>
                    <li>Gestion des dépôts distants</li>
                    <li>Workflow collaboratif</li>
                    <li>GitHub/GitLab</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Ubuntu</h3>
                <p>Expérience avec le système d'exploitation Ubuntu :</p>
                <ul>
                    <li>Administration système</li>
                    <li>Gestion des paquets (apt)</li>
                    <li>Configuration serveur</li>
                    <li>Scripting Bash</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Développement Web</h3>
                <p>Compétences en développement front-end :</p>
                <ul>
                    <li>HTML5, CSS3</li>
                    <li>JavaScript</li>
                    <li>Responsive Design</li>
                    <li>Frameworks modernes</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <p>Contact : safidy@example.com</p>
        <p>&copy; 2023 Tous droits réservés</p>
    </footer>
</body>
</html>
