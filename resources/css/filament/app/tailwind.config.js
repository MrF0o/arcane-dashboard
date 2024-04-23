import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    extend: {
        keyframes: {
            fade: {
                '0%': {
                    height: 0
                },
                '100%': {
                    height: "100px"
                }
            }
        },
        animation: {
            fade: 'fade 1s ease-in-out'
        }
    }
}
