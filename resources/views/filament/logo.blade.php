<div x-on:dark-mode-toggled.window="toggle()" x-data="{
            init() {
                this.toggle()
            },
            mode: 'light',
            toggle() {
                this.mode = document.documentElement.classList.contains('dark') ? 'dark' : 'light'
            },
            get isDarkMode() {
                return this.mode === 'dark'
            },
            get isLightMode() {
                return this.mode === 'light'
            }
        }">

    <img x-show="isLightMode" src="{{ asset('images/logo/logo.svg') }}" class="h-full w-full" alt="arcane logo">
    <img x-show="isDarkMode" src="{{ asset('images/logo/logo-white.svg') }}" class="h-full w-full" alt="arcane logo">
</div>