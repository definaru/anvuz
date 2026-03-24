const { createApp } = Vue;
const body = document.querySelector('body');

createApp({
    data() {
        return {
            theme: localStorage.getItem('theme') === 'false' ? false : true,
            selectedData: '',
            region: '',
            wasValidated: false,
            map: [],
            show: false
        }
    },
    mounted() {
        this.updateHtmlClass();
    },
    methods: {
        async handlePathClick(event) {
            const target = event.target;
            const regionElement = target.closest('[region], [data-bs-title]');
            this.show = true;
            if (regionElement) {
                this.selectedData = regionElement.getAttribute('region');
                this.region = regionElement.dataset.bsTitle || regionElement.getAttribute('data-bs-title');
            }
            try {
                const response = await fetch(`/api/v1/universities/${this.selectedData}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });
                const result = await response.json();
                this.map = result
            } catch (error) {
                this.send = false;
                console.error(error);
            }

            console.log('Selected:', this.selectedData)
        },
        close() {
            this.show = false;
        },
        toggleTheme() {
            this.theme = !this.theme;
            localStorage.setItem('theme', this.theme);
            this.updateHtmlClass();
        },
        updateHtmlClass() {
            bg = this.theme ? 'light' : 'dark';
            body.setAttribute('data-bs-theme', bg);
        }
    }
}).mount('#app');