<section class="container mx-auto py-16">

  <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

  

  <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4"
        method="post"
        action="https://formspree.io/f/mpwvlyld">

    <input type="text" name="name"
           value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
           placeholder="Votre nom"
           class="w-full border px-4 py-2 rounded-lg">

    <input type="email" name="email"
           value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
           placeholder="Votre email"
           class="w-full border px-4 py-2 rounded-lg">

    <textarea name="message"
              placeholder="Votre message"
              class="w-full border px-4 py-2 rounded-lg"
              rows="5"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>

    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
      Envoyer
    </button>
  </form>
</section>
