const { createApp } = Vue;

createApp({
    data() {
        return {
            title: '',
            href: ''
        }
    },
    mounted() {},
    methods: {
        generateSlug() {
            this.href = this.title
                .toLowerCase()
                .replace(/[^a-zа-яё0-9\s]/gi, '') // Удаляем спецсимволы
                .replace(/\s+/g, '-')              // Пробелы в дефисы
                .replace(/[ё]/g, 'e')              // Ё в Е
                .replace(/[а-я]/g, (char) => {     // Транслитерация
                    const map = {
                        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 
                        'ж': 'zh', 'з': 'z', 'и': 'i', 'й': 'y', 'к': 'k', 'л': 'l', 
                        'м': 'm', 'н': 'n', 'о': 'o', 'п': 'p', 'р': 'r', 'с': 's', 
                        'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h', 'ц': 'ts', 'ч': 'ch', 
                        'ш': 'sh', 'щ': 'sch', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'e', 
                        'ю': 'yu', 'я': 'ya'
                    };
                    return map[char] || char;
                });
        }
    }
}).mount('#new-form');