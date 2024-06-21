import './bootstrap';
import 'flowbite';
import TomSelect from 'tom-select';

import.meta.glob([
    '../images/**'
]);

const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

const themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});

new TomSelect('#tags', {
    plugins: ['remove_button'],
    create: true,
    onItemAdd: function () {
        this.setTextboxValue('');
        this.refreshOptions();
    },
});

document.querySelectorAll('.ts-control').forEach(el => {
    el.classList.add('rounded-xl', 'bg-white/10', 'dark:bg-white/10', 'border', 'border-black/10', 'dark:border-white/10', 'px-5', 'py-4', 'w-full');
});

const element = document.getElementById('tags-ts-control');
element.classList.add('dark:text-gray-100');
