<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Обновить Пароль') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Убедитесь, что в вашей учетной записи используется длинный случайный пароль, чтобы оставаться в безопасности.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Текущий Пароль') }}" />
            <x-input id="current_password" type="password" placeholder="{{ __('Введите текущий пароль') }}" class="mt-1 block w-full border-slate-500 bg-slate-700" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Новый Пароль') }}" />
            <x-input id="password" type="password" placeholder="{{ __('Введите новый пароль') }}" class="mt-1 block w-full border-slate-500 bg-slate-700" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Подтвердите Новый Пароль') }}" />
            <x-input id="password_confirmation" type="password" placeholder="{{ __('Повторите новый пароль ещё раз') }}" class="mt-1 block w-full border-slate-500 bg-slate-700" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Сохранено.') }}
        </x-jet-action-message>

        <x-button>
            {{ __('Сохранить') }}
        </x-button>
    </x-slot>
</x-form-section>
