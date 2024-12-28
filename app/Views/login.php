<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <!-- Lien Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="text-center mb-4">Connexion</h2>
        <form method="POST" action="connexion.php">
            <!-- Champ ID utilisateur -->
            <div class="mb-3">
                <label for="user-id" class="form-label">ID Utilisateur</label>
                <input type="text" class="form-control" id="user-id" name="user_id" placeholder="Entrez votre ID" required>
            </div>
            <!-- Champ Mot de passe -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <!-- Bouton Soumettre -->
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $password = $_POST['password'];

            // Exemple de vérification (à adapter selon votre base de données)
            if ($user_id === 'admin' && $password === 'adminpass') {
                echo "<div class='alert alert-success mt-3'>Connexion réussie !</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>ID ou mot de passe incorrect.</div>";
            }
        }
        ?>
    </div>

    <!-- Lien Bootstrap JS et Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

