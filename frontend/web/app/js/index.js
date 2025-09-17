const { createApp } = Vue;
const body = document.querySelector('body');

createApp({
    data() {
        return { 
            count: 0,
            theme: localStorage.getItem('theme') === 'false' ? false : true,
        }
    },
    mounted() {
        this.updateHtmlClass();
    },
    methods: {
        toggleTheme() {
            this.theme = !this.theme;
            localStorage.setItem('theme', this.theme);
            this.updateHtmlClass();
        },
        updateHtmlClass() {
            // data-bs-theme="dark"
            bg = this.theme ? 'light' : 'dark';
            body.setAttribute('data-bs-theme', bg);
        }
    }
}).mount('#app');