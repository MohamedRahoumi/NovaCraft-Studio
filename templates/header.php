<?php
$lienClick = $page;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  
<header class="bg-white shadow-md">
  <nav class="container mx-auto flex justify-between items-center py-4">
    <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
    <ul class="flex space-x-6">

      <li>
        <a href="/" 
           class="<?= $lienClick === 'home' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
           Accueil
        </a>
      </li>

      <li>
        <a href="/services" 
           class="<?= $lienClick === 'services' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
      Services
        </a>
      </li>

      <li>
        <a href="/about" 
           class="<?= $lienClick === 'about' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
           A propos
        </a>
      </li>

      <li>
        <a href="/contact" 
           class="<?= $lienClick === 'contact' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
           Contact
        </a>
      </li>

    </ul>
  </nav>
</header>
