const { createApp } = Vue;

createApp({
    data() {
        return {
            preview: '',
            filesize: '',
            image: ''
        }
    },
    mounted() {},
    methods: {
        async deleteNewsImage(folder) {
            console.log('folder:', folder);
            try {
                const response = await fetch(`/api/v1/delete-newsimage?folder=${folder}`, { 
                    method: 'POST'
                });
                const result = await response.json();
                console.log('delete News Image:', result);
            } catch (error) {
                console.log('Ошибка удаления изображения:', error);
            }
        },
        async loadNewsImage(file, id, token) {
            const formData = new FormData();
            formData.append('file', file);
            formData.append("_csrf", token);
            try {
                const response = await fetch(`/api/v1/news-image?record=${id}`, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                this.image = result.url;
            } catch (error) {
                console.log('Ошибка загрузки изображения:', error);
            }
        },
        loadImage(event, id, token) {
            const input = event.target;
            const file = input.files[0];
            this.loadNewsImage(file, id, token);
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
        async actionEditorMarkdown(folder) {
            let text = editor.getMarkdown();
            try {
                const response = await fetch(`/api/v1/editor-markdown?folder=${folder}&text=${text}`, { 
                    method: 'POST'
                });
                const result = await response.json();
                console.log('action Editor Markdown:', result);
            } catch (error) {
                console.log('Ошибка записи:', error);
            }
        },
        getSendForm(folder){
            this.actionEditorMarkdown(folder);
        },
    }
}).mount('#new-form');