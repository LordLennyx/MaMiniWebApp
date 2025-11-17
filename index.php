<?php
// Partie PHP pour gérer un formulaire simple (ex: message utilisateur)
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['user_message'])) {
    $message = htmlspecialchars($_POST['user_message']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Mini Web App - TD DevOps</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            margin: 0; padding: 0; min-height: 100vh;
            display: flex; justify-content: center; align-items: center;
        }
        .container {
            background: rgba(0,0,0,0.4);
            padding: 2rem;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 0 15px rgba(255,255,255,0.3);
            text-align: center;
        }
        h1 {
            margin-bottom: 1rem;
        }
        textarea {
            width: 100%;
            padding: 0.5rem;
            border-radius: 6px;
            border: none;
            resize: none;
            font-size: 1rem;
        }
        button {
            margin-top: 1rem;
            background-color: #2575fc;
            border: none;
            padding: 0.7rem 1.5rem;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #1a52c7;
        }
        .message-box {
            margin-top: 1.5rem;
            background-color: #0b224d;
            padding: 1rem;
            border-radius: 6px;
            min-height: 60px;
            font-style: italic;
        }
        footer {
            margin-top: 2rem;
            font-size: 0.8rem;
            color: #aaa;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('msgForm');
            form.addEventListener('submit', function() {
                // Simple client-side validation
                const textarea = document.getElementById('user_message');
                if(textarea.value.trim() === '') {
                    alert('Veuillez saisir un message avant de soumettre.');
                    return false;
                }
                return true;
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Ma Mini WebApp</h1>
        <form id="msgForm" method="POST" action="">
            <textarea id="user_message" name="user_message" rows="4" placeholder="Tapez un message ici..."></textarea>
            <button type="submit">Envoyer</button>
        </form>

        <?php if ($message): ?>
            <div class="message-box">
                Message reçu: <br><strong><?php echo $message; ?></strong>
            </div>
        <?php endif; ?>

        <footer>Développé par LordLennyx - TD DevOps</footer>
    </div>
</body>
</html>
