<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CV - Coumba Sarr</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="max-w-5xl mx-auto my-10 bg-white shadow-2xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-3">

    <!-- Sidebar -->
    <div class="bg-blue-900 text-white p-8">
      <div class="text-center">
        <img 
          src="https://via.placeholder.com/150" 
          alt="Photo Profil"
          class="w-36 h-36 rounded-full mx-auto border-4 border-white object-cover"
        >

        <h1 class="text-3xl font-bold mt-4">Coumba Sarr</h1>
        <p class="text-blue-200 mt-2">Étudiante en Data Science & Génie Logiciel</p>
      </div>

      <!-- Contact -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold border-b border-blue-400 pb-2 mb-4">Contact</h2>

        <div class="space-y-3 text-sm">
          <p>📍 Dakar, Sénégal</p>
          <p>📧 coumba@email.com</p>
          <p>📞 +221 77 000 00 00</p>
          <p>🌐 github.com/coumba</p>
        </div>
      </div>

      <!-- Skills -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold border-b border-blue-400 pb-2 mb-4">Compétences</h2>

        <div class="space-y-4">
          <div>
            <p class="mb-1">Flutter</p>
            <div class="w-full bg-blue-200 rounded-full h-2">
              <div class="bg-white h-2 rounded-full w-4/5"></div>
            </div>
          </div>

          <div>
            <p class="mb-1">Laravel</p>
            <div class="w-full bg-blue-200 rounded-full h-2">
              <div class="bg-white h-2 rounded-full w-3/4"></div>
            </div>
          </div>

          <div>
            <p class="mb-1">Java & Swing</p>
            <div class="w-full bg-blue-200 rounded-full h-2">
              <div class="bg-white h-2 rounded-full w-4/5"></div>
            </div>
          </div>

          <div>
            <p class="mb-1">Python</p>
            <div class="w-full bg-blue-200 rounded-full h-2">
              <div class="bg-white h-2 rounded-full w-3/5"></div>
            </div>
          </div>

          <div>
            <p class="mb-1">MySQL</p>
            <div class="w-full bg-blue-200 rounded-full h-2">
              <div class="bg-white h-2 rounded-full w-4/5"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Languages -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold border-b border-blue-400 pb-2 mb-4">Langues</h2>

        <ul class="space-y-2 text-sm">
          <li>🇫🇷 Français — Courant</li>
          <li>🇬🇧 Anglais — Intermédiaire</li>
          <li>🇩🇪 Allemand — Niveau B1</li>
          <li>🇸🇳 Wolof — Langue maternelle</li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-span-2 p-8">

      <!-- Profile -->
      <section>
        <h2 class="text-2xl font-bold text-blue-900 mb-4">Profil</h2>
        <p class="text-gray-700 leading-7">
          Étudiante passionnée par les systèmes réseaux, le développement logiciel et la Data Science.
          Je travaille actuellement sur des projets liés à la détection de spam et de fraude dans les SMS
          et appels téléphoniques en utilisant des outils modernes comme DataRobot, Flutter et Laravel.
        </p>
      </section>

      <!-- Education -->
      <section class="mt-10">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Formation</h2>

        <div class="border-l-4 border-blue-900 pl-4 space-y-6">
          <div>
            <h3 class="font-bold text-lg">Master 1 — Data Science & Génie Logiciel</h3>
            <p class="text-gray-600">2025 - Présent</p>
          </div>

          <div>
            <h3 class="font-bold text-lg">Licence — Systèmes Réseaux & Télécommunications</h3>
            <p class="text-gray-600">Université | Sénégal</p>
          </div>
        </div>
      </section>

      <!-- Projects -->
      <section class="mt-10">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Projets</h2>

        <div class="space-y-6">

          <div class="bg-gray-100 p-5 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-bold text-lg">Application de Détection de Spam</h3>
            <p class="text-gray-700 mt-2">
              Développement d'une application intelligente de détection de spam et fraude
              dans les SMS et appels téléphoniques avec DataRobot et automatisation via n8n.
            </p>
          </div>

          <div class="bg-gray-100 p-5 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-bold text-lg">Dictionnaire Électronique Wolof-Français</h3>
            <p class="text-gray-700 mt-2">
              Application Java Swing connectée à MySQL permettant la gestion et la recherche
              de mots avec export JSON et CSV.
            </p>
          </div>

          <div class="bg-gray-100 p-5 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-bold text-lg">Application Flutter Immobilier</h3>
            <p class="text-gray-700 mt-2">
              Développement d'une application mobile Flutter avec authentification,
              navigation GoRouter et backend Laravel.
            </p>
          </div>

        </div>
      </section>

      <!-- Experience -->
      <section class="mt-10">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Expériences</h2>

        <div class="space-y-5">
          <div>
            <h3 class="font-bold text-lg">Développeuse Full Stack — Projets Académiques</h3>
            <p class="text-gray-600">2024 - 2026</p>
            <p class="text-gray-700 mt-2">
              Réalisation de projets web et mobile avec Flutter, Laravel, Node.js,
              MySQL et API REST.
            </p>
          </div>
        </div>
      </section>

    </div>
  </div>

</body>
</html>