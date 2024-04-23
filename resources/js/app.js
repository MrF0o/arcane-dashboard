import './bootstrap';

import hljs from 'highlight.js';
import 'highlight.js/styles/github.css';

window.hljs = hljs



document.addEventListener('livewire:load', function () {
    hljs.highlightAll()
})