const { createApp } = Vue;
const body = document.querySelector('body');

createApp({
    data() {
        return { 
            count: 0,
            theme: localStorage.getItem('theme') === 'false' ? false : true,
            show: false,
            selectedData: {
                title: '',
                region: ''
            },
            wasValidated: false,
            send: true,
            form: {
                title: '',
                person: '',
                email: '',
                phone: ''
            }
        }
    },
    mounted() {
        this.updateHtmlClass();
    },
    methods: {
        handleSubmit(event) {
            const form = event.target

            // включаем Bootstrap-валидацию
            this.wasValidated = true

            // если форма невалидна — Bootstrap сам покажет invalid-feedback
            if (!form.checkValidity()) {
                return
            }

            // если всё ок — можно отправлять данные
            alert("Форма успешно отправлена!")
            console.log("Данные:", this.form)
        },

        handlePathClick(event) {
            const target = event.target;
            const regionElement = target.closest('[region], [data-bs-title]');
            this.show = true;
            if (regionElement) {
                this.selectedData = {
                    title: regionElement.dataset.bsTitle || regionElement.getAttribute('data-bs-title'),
                    region: regionElement.getAttribute('region')
                }
            }
            console.log('Selected:', this.selectedData)
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