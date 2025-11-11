<!DOCTYPE html>
<html class="dark" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>VidStream - Connexion</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
        @livewireStyles
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
    <div class="flex min-h-screen flex-col items-center justify-center bg-background-light dark:bg-background-dark p-4">
        <div class="flex w-full max-w-[900px] flex-col items-center">
            <div class="flex items-center gap-4 mb-8">
                <div class="size-10 text-primary">
                    <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w.org/2000/svg">
                        <path
                            d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold tracking-tight">VidStream</h2>
            </div>
            {{ $slot }}
        </div>
    </div>
@livewireScripts
</body>

</html>