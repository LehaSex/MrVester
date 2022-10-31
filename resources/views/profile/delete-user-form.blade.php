<x-action-section>
    <x-slot name="title">
        {{ __('Удалить Аккаунт') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Навсегда удалить свою учетную запись.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-slate-200">
            {{ __('Как только ваша учетная запись будет удалена, все данные будут удалены безвозвратно. Перед удалением вашей учетной записи, пожалуйста, загрузите все данные или информацию, которые вы хотите сохранить.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Удалить Аккаунт') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Удаление Аккаунта') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Вы уверены, что хотите удалить свою учетную запись? Как только ваша учетная запись будет удалена, все ее ресурсы и данные будут удалены безвозвратно. Пожалуйста, введите свой пароль, чтобы подтвердить, что вы хотите навсегда удалить свою учетную запись.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Пароль') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Отменить') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Удалить Аккаунт') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-action-section>
