<div class="w-1/2 rounded-xl bg-white dark:bg-gray-800/50 p-8 shadow-lg">
    <div class="space-y-6">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Connexion</h1>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Heureux de vous revoir !</p>
        </div>
        <form class="space-y-6" wire:submit.prevent="login" >
            @if($errors->any())
                <div class="mb-4 w-1/2 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" >
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                
            @endif

            @if (session('message'))
                <div class="mb-4 w-1/2 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                    {{ session('message') }}
                </div>     
            @endif

            @if (session('error'))
                <div class="mb-4 w-1/2 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" >
                    {{ session('error') }}
                </div>
            @endif
            
            @csrf
            <div>
                <label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email ou nom
                    d'utilisateur</label>
                <input class="form-input mt-1 block w-full rounded-lg border-gray-300 bg-gray-100 dark:border-gray-600 dark:bg-gray-700/50 px-4 py-3 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" id="email" placeholder="votre@email.com" type="email">
            </div>
            <div class=" pb-7">
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">Mot
                        de passe</label>
                    <a class="text-sm font-medium text-primary hover:underline" href="#">Mot de passe oublié
                        ?</a>
                </div>
                <input class="form-input mt-1 block w-full rounded-lg border-gray-300 bg-gray-100 dark:border-gray-600 dark:bg-gray-700/50 px-4 py-3 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" id="password" placeholder="********" type="password">
            </div>
            <button class="w-full  justify-center rounded-lg bg-primary py-3 px-4 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark" type="submit">Se connecter</button>
            <button class="w-full justify-center rounded-lg bg-red-500 py-3 px-4 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-background-dark" type="button">
                <img src="path/to/google-logo.png" alt="Google Logo" class="inline-block mr-2 w-5 h-5"> Se connecter avec Google
            </button>
        </form>
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="bg-white dark:bg-gray-800 px-2 text-gray-500 dark:text-gray-400">Ou</span>
            </div>
        </div>
        <div>
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                Pas encore de compte ?
                <a class="font-medium text-primary hover:underline" href="/">Inscrivez-vous</a>
            </p>
        </div>
    </div>
</div>