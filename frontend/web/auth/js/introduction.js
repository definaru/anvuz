const { createApp } = Vue;

createApp({
    data() {
        return { 
            isSuccess: '',
            wasValidated: false,
            emailError: false,
            send: false,
            form: {
                title: '',
                person: '',
                email: '',
                phone: ''
            }
        }
    },
    methods: {
        validateEmail(value) {
            const regex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
            return regex.test(value);
        },
        async handleSubmit(event) {
            const form = event.target;
            this.wasValidated = true;

            if (!this.validateEmail(this.form.email) && this.form.email !== '') {
                console.log("validateEmail:", 'Ошибка сработала!');
                this.emailError = true;
                return;
            }

            if (!form.checkValidity()) return;

            try {
                this.send = true;
                const response = await fetch('/api/v1/introduction', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(this.form)
                });

                const result = await response.json();
                console.log('Ответ сервера:', JSON.stringify(result, null, 4));
                if(result) {
                    this.isSuccess = result;
                    this.send = false;
                }
            } catch (error) {
                this.send = false;
                console.error(error);
            }

        }
    }
}).mount('#introduction');