<!DOCTYPE html>

<html class="dark" lang="fr">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>VidStream - Accueil</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  @livewireStyles
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }
  </style>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#4fb5c4",
            "background-light": "#f4f6f8",
            "background-dark": "#141d1e",
          },
          fontFamily: {
            "display": ["Spline Sans", "sans-serif"]
          },
          borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
        },
      },
    }
  </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-white">
  <div class="relative flex h-auto min-h-screen w-full flex-col">
    <!-- Top Navigation Bar -->
    <header
      class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-gray-200 dark:border-gray-700/50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm px-6 py-3">
      <div class="flex items-center gap-4">
        <div class="size-6 text-primary">
          <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"
              fill="currentColor"></path>
          </svg>
        </div>
        <h2 class="text-xl font-bold tracking-tight">VidStream</h2>
      </div>
      <div class="flex flex-1 justify-center px-8">
        <label class="flex flex-col w-full  max-w-2xl">
          <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
            <div
              class="text-gray-400 dark:text-gray-500 flex bg-gray-100 dark:bg-gray-800/50 items-center justify-center pl-4 rounded-l-lg border-r-0">
              <span class="material-symbols-outlined text-2xl">search</span>
            </div>
            <input
              class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg focus:outline-0 focus:ring-2 focus:ring-primary border-none bg-gray-100 dark:bg-gray-800/50 h-full placeholder:text-gray-500 dark:placeholder:text-gray-400 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal"
              placeholder="Rechercher" />
          </div>
        </label>
      </div>
      <div class="flex items-center gap-3">
        <button
          class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 w-10 bg-transparent hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300">
          <span class="material-symbols-outlined text-2xl">upload</span>
        </button>
        <button
          class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 w-10 bg-transparent hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300">
          <span class="material-symbols-outlined text-2xl">notifications</span>
        </button>
        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
          data-alt="Avatar de l'utilisateur"
          style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDkW_pwPQNWYVrw4PCzArXkcp7JVpd7N4vImkRbiiAkjlBLw27ZAIOYNOLW95qEEy1Mc0QRzTgPnXZG4WqnbfcASrfNP5ldwl6QGNRPc-kNcekaNFhr6XM9OEUguULpLe9xGFyNMDEjys0rlj_AzEzg27m6NNhPEHE1P0qIE4qHEjdVjnwMqVe1aCFq2TF3NleWkjwnRhxazht6eVTvz57saVh0aKbShX8HnxaifZ_wja_lTfsTlfewKYXJC4Z0lS3VZzJkRPX4Zugt");'>
        </div>
      </div>
    </header>
    <div class="flex flex-1">
      <!-- Side Navigation Bar -->
      <aside
        class="w-64 fixed h-[calc(100vh-68px)] top-[68px] left-0 border-r border-gray-200 dark:border-gray-700/50 p-4">
        <div class="flex h-full flex-col justify-between">
          <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-1">
              <a class="flex items-center gap-4 px-3 py-2.5 rounded-lg bg-primary/20 text-primary" href="#">
                <span class="material-symbols-outlined">home</span>
                <p class="text-sm font-semibold">Accueil</p>
              </a>
              <a class="flex items-center gap-4 px-3 py-2.5 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300"
                href="#">
                <span class="material-symbols-outlined">trending_up</span>
                <p class="text-sm font-medium">Tendances</p>
              </a>
              <a class="flex items-center gap-4 px-3 py-2.5 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300"
                href="#">
                <span class="material-symbols-outlined">subscriptions</span>
                <p class="text-sm font-medium">Abonnements</p>
              </a>
            </div>
            <div class="border-t border-gray-200 dark:border-gray-700/50"></div>
            <div class="flex flex-col gap-1">
              <a class="flex items-center gap-4 px-3 py-2.5 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300"
                href="#">
                <span class="material-symbols-outlined">video_library</span>
                <p class="text-sm font-medium">Bibliothèque</p>
              </a>
              <a class="flex items-center gap-4 px-3 py-2.5 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800/50 text-gray-600 dark:text-gray-300"
                href="#">
                <span class="material-symbols-outlined">history</span>
                <p class="text-sm font-medium">Historique</p>
              </a>
            </div>
          </div>
        </div>
      </aside>
      <!-- Main Content -->
      <main class="flex-1 ml-64 overflow-y-auto">
        <div class="px-8 py-6">
          <!-- Chips for categories -->
          <div class="flex gap-3 pb-6 border-b border-gray-200 dark:border-gray-700/50">
            <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary text-white px-4">
              <p class="text-sm font-semibold leading-normal">Tout</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Gaming</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Musique</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Technologie</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Humour</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Films</p>
            </button>
            <button
              class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-800/50 hover:bg-gray-300 dark:hover:bg-gray-700/50 px-4">
              <p class="text-sm font-medium leading-normal">Actualités</p>
            </button>
          </div>
          <!-- Tendances Actuelles Section -->
          <section class="py-8">
            <h2 class="text-2xl font-bold tracking-tight mb-4">Tendances Actuelles</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-4 gap-y-8">
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Une scène de concert avec des lumières vives"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCG4hcjztj0myAW3C528fy7lNI2H3GDLS-JmyCf3AknxWBvDb0s70u6ijNe_t4vZYpmYEF8XCtU0IK_PMAflLy01mzllg5Vk2VG3rvkj5vRp8g2hB8JE8UyS66SGTLYxWR8O4KjCjHrty3qV_7gKmvZslXufQj6nfYpEUleX7bjKFJQZxv1DHxXoLv0EyQNP6tKs6QARKWo3iFMBWUBX5K1Wv9JB_bGosW2sZiVtMqm1CtzanjrnY1RkMQ5C0zfbdCt443xJtE3jUBR" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">2:45:12</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Concert Épique en Direct de "The Rockers"</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">ArtisteLive • 1.2M vues • il y a 1
                    jour</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Une scène explosive d'un film d'action"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDao6RwxUiNptDHgM6uzwopHCPyt5jLvvrYjIMxgjCByDueHPIU7mcdvlYo0segaHbwwl4aT2rGr4yf6K8vPf7NTWuZBFMOKBu7uD6VeDQT-yyehTq_btH1ngZr5w-b2OENEF0EWvyb4hsEj9_nNZIpEnnQ-h_P9-eQ5B3pjtye1GLvB9eROCCjIUNm5roFXYKoBZo87Km_pnM4N98uXO2GXlY4N2ao5zxJ0bfyt4WGzn3DPC05PKPZpwgREwZbno_pvoz367OZP-YZ" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">2:31</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Bande-Annonce Officielle: CyberStorm</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">StudioDeCinéma • 5M vues • il y a 16
                    heures</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Un chanteur sur scène avec un microphone"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMlgomN_H6wPZuz-Un7p0XHpqyFcw_5kkmm55FQoMBXvbNqrjrvYMdw5Yo_J-uLc6GvCaedcX0djO4bLZobF5FQ40MSStxSjnxYz1vWlN2t1cXm5NwFNg3sVoQ3yAGe5sM-3Tydckr0rM76p8TLKoLItHO9xlfNocD0ZXRaEDBVmmKiOyInVHyWAQVEPsAYiq9SEzXSjPb81WnCevFTX87I2aRdjrXj0tMcM8kQxHLErfEB2HjrfC6Q-OS5th7zoZu_UjW1mSfgl-W" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">4:02</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Clip Vidéo - "Échoes" par Aurora</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">AuroraVEVO • 3.4M vues • il y a 3
                    jours</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Un joueur de football marquant un but"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAD1PDlP2ghLEc9f9Vc9YnKyKDAvLrMq80KYJcz9WufsNpZR_3q6bsF5lOi2WxeM0ucQdN8wrxo2kQdzsIWMcc0myvpkR8SyinY7O_cqljsG56MIlVqCjjOJixoqckUvNxpOHRBYazY8pibjxviuNHoC3_TP5BjQ-vb9-bkT-ZNE_EHyZqxFzUye0bfoltdd2oyNd39e1KpMcvc7V0sMzl09YY8mhajivmgRrGGDQbfGVHVeQciY_C4IbTEvrZiU4qeqVMvBgUTeURh" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">8:15</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Top 10 Buts de la Semaine en Ligue 1</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">LigueSportive • 800K vues • il y a 5
                    heures</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover"
                    data-alt="Une configuration de jeu vidéo avec un éclairage néon"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu0z55_-DcGbk3Dw1iKG1hjTUnNxjnn2TYLpk0rmoW-QRDquM3aLHAHcKCWUipBQYT6rj-GIyhhujLEHG-oAKxIbVQBvq-DupuGFBSEIj1nLCpgSU28QJTK7Mrw53U0leiFSm7UD9NZggGu52mEgSGCOgcLB-LqWmfRuacBmOKmL6HN28LuS4iT4uRqGp9Bnydpk8KIqqlkOd9UkZPGe4euf25vHugOY88br3nHTHAZO70MAD_uk0Kty3qXoSvdxpcAOi0gAvySvwZ" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">35:48</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Let's Play - Aventure Épique Part. 3</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">GamerPro • 250K vues • il y a 22
                    heures</p>
                </div>
              </div>
            </div>
          </section>
          <!-- Recommandé pour vous Section -->
          <section class="py-8">
            <h2 class="text-2xl font-bold tracking-tight mb-4">Recommandé pour vous</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-4 gap-y-8">
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover"
                    data-alt="Un circuit imprimé avec des composants électroniques"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC76KQE_bTF8fMEeT8DPniYtCtSzwbFkcmhKwn2Eii5dYZsi0EOERHRWMhyVbor-oAJMV3IUQxOOsf9cffM7-Ez5J7-NTU22bMb3EAUp8n-bjIoy9rVMwplzgRNbp2x-J9BxdDYTj4JSxK55Ghh8rbNtsSwae_UbyeXJ-eh_a9-zE7RDw1V8Z_-viU1iBGJeMLBvCQ1Cy4WcSGDG3NbMA0paXx6JQnwuMm6b__KYwF4ki_oeAx3AH34PWHtsk8g3173HkA0bJ8Wwp5q" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">15:20</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Comment construire son propre PC en 2024</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">TechExplorateur • 450K vues • il y a 1
                    semaine</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Une rue animée à Tokyo la nuit"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQr_DelFWs8QDiExs1qFMz53OkR_ZEGLQ69QP30vzHlhdelHxGmvgD_aLysJWCWjuuv20b-WRPi-i_4_U4IkRM0ub3_hyUhTLbOuCH6xQMpght8Vn8l8EzgGQB9G3IQMOpzbOwbs39a4c5DSTPKjcfPrESV7c2qHTVxajbggzeDuh-VMoORTCjdDRDAyAbQgnamNbSxTbhS84uqQZq2hey7ENimK1plYqJqqFG_mUGyb5QO7umfn0wgvUjC2BzbJ8QmXCZRloWSvCQ" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">22:05</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Voyage au Japon : Un guide complet</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">GlobeTrotter • 1.1M vues • il y a 2
                    mois</p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover"
                    data-alt="Des accessoires de cinéma comme un clap et du pop-corn"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2NWSa6fBTMfEZMeSFnkRVxerjnvPCbMWKOr6FwIWwsZ0hjQYC4aglmBc8j3E8V29d68KCm3v-ar20jmhUslGpEjM0ooR7G7qeswI6SLqADCx924VgYtiIxui56dglpDWzuQyTeglywor9ND5AdH2pUPI3OIziMV38BN0nIPjvyaVbMFBeT6uIgAzRQksa4HA07DhzObboJvPoa_esTT4b4ufgTAwYFkh05PKe2rIa49ngc1t6eDJdQkW1_dVTyjVos4vnvFm1Yqq5" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">12:34</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Les secrets de tournage que vous ignorez</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">Cinéphile • 980K vues • il y a 1 mois
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover"
                    data-alt="Un ordinateur portable avec du code affiché à l'écran"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuANMoYGGjCJ50rGP8XiCDAQrJX8qLkUEOwm26UlfwkvBifMyjrjo0JhI2iIb-0uP33-7HWyW3Zfl8TWDU0-Hr3QF5YaQFcX4rufmCyqtcIjtxgAVu704a0bkIHmxbLQB11OHeCTHmeazc3MkqYay8krGHK3cOy2ncz8KhK3iMBqYiH_LgaaoDPQxqBtOKOZ9BWE4ngPDVKlIEsfPwbnM8XNb9LKiBuocTDGWTZpvROnfQoZ5appGklltuvcdN6yzvVaYy1LArcIB-B8" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">1:12:45</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Apprendre le Python : Cours complet pour débutants</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">CodeFacile • 2.3M vues • il y a 6 mois
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-2 group">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl relative overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                  <img class="w-full h-full object-cover" data-alt="Une personne jouant de la guitare acoustique"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbnL8yRx93RqbyTBUl5UpHutNeUXD2_TxmG4mPc_trUoXRjcZpOdtgEXNCYXHXGdLp52d7UgiEANINt4thGUn5NuVz2KYGYov3AdA-4y9xGHWALSPEHCSh_EHts3qOicHJDxKNKWLgORMcV6Izl1jazruC_ho10IR2S8ThQ1T0vnyH0igrVw9jJZsNNN0o5QQeP9JQ_JuHxwtWURVrsIDAIvp4aSQFvyeKSur1earqJQOJQGMR68QsjstfbknbBCtFIAIc29ZPi9Pa" />
                  <span
                    class="absolute bottom-2 right-2 bg-black/70 text-white text-xs font-semibold px-1.5 py-0.5 rounded">3:19</span>
                </div>
                <div>
                  <p class="text-base font-semibold leading-snug">Relaxing Acoustic Music for Studying</p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">ChillBeats • 15M vues • il y a 1 an
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>
  @livewireScripts
</body>

</html>