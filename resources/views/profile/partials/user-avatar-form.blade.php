<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            User Avatar
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Update or add
        </p>
    </header>



    <form method="post" action="/profile/avatar">

    </form>

    <div>
        <x-input-label for="name" value="Avatar" />
        <x-text-input id="avatar" avatar="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
        <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
    </div>


    <div class="flex items-center gap-4 mt-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

    </div>
    </form>

</section>