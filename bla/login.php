<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le mot de passe est correct
    $password = $_POST["password"];
    if ($password === "unordinateur") {
        // Rediriger vers la page de téléchargement des PDF
        header("Location: downloads.php");
        exit;
    } else {
        // Mot de passe incorrect, rediriger vers la page d'accueil avec un message d'erreur
        header("Location: index.html?error=1");
        exit;
    }
} else {
    // Rediriger vers la page d'accueil si le formulaire n'a pas été soumis
    header("Location: index.html");
    exit;
}
?>
