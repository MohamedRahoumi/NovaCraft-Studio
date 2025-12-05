<section class="container mx-auto py-16">
  <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
  <div class="grid md:grid-cols-3 gap-8">
    <?php 


$data = file_get_contents("./data/services.json");
$services = json_decode($data, true);

foreach ($services as $s) {
    echo "<div class='bg-white p-6 shadow-md rounded-lg transition transform hover:-translate-y-2 hover:shadow-xl'>";
    echo "<h3 class='text-xl font-bold mb-2'>{$s['title']}</h3>";
    echo "<p class='text-gray-600'>{$s['description']}</p>";
    echo "</div>";
}
?>

  </div>
</section>

