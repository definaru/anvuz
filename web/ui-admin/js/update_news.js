const { createApp } = Vue;

createApp({
    data() {
        return {
            token: anvuz_data.token,
            folder: anvuz_data.model.body, 
            preview: '',
            filesize: '',
            image: anvuz_data.model.image
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
            formData.append("_csrf", this.token);
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
        }
    }
}).mount('#new-form');