const { createApp } = Vue;

createApp({
    data() {
        return {
            token: anvuz_data.token,
            folder: anvuz_data.folder, 
            preview: '',
            filesize: '',
            image: '',
            title: '',
            href: ''
        }
    },
    mounted() {},
    methods: {
        async deleteNewsImage() {
            try {
                const response = await fetch(
                    `/api/v1/delete-newsimage?folder=${this.folder}`, 
                    {method: 'POST'}
                );
                const result = await response.json();
                console.log('delete News Image:', result);
            } catch (error) {
                console.log('Ошибка удаления изображения:', error);
            }
        },
        async loadNewsImage(file) {
            const formData = new FormData();
            formData.append('file', file);
            formData.append('_csrf', this.token);
            try {
                const response = await fetch(`/api/v1/news-image?record=${this.folder}`, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                this.image = result.url;
            } catch (error) {
                console.log('Ошибка загрузки изображения:', error);
            }
        },
        async actionEditorMarkdown() {
            const formData = new FormData();
            formData.append('content', editor.getMarkdown());
            formData.append('folder', this.folder);
            formData.append('_csrf', this.token);
            try {
                const response = await fetch(`/api/v1/editor-markdown`, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                console.log('action Editor Markdown:', result);
            } catch (error) {
                console.log('Ошибка записи:', error);
            }
        },
        getSendForm(){
            this.actionEditorMarkdown();
        },
        loadImage(event) {
            const input = event.target;
            const file = input.files[0];
            this.loadNewsImage(file);
            if (file) {
                let size = (file.size / 1024).toFixed(2);
                this.preview = URL.createObjectURL(file);
                this.filesize = `Размер файла: ${size} KB`;
            }
        },
        removeFile() {
            if(this.preview !== '') {
                this.deleteNewsImage(this.image);
                URL.revokeObjectURL(this.preview);
                this.preview = '';
                this.filesize = '';
                this.image = '';
            }
        },
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