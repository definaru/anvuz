const fullScreenButton = document.createElement('div');
fullScreenButton.innerHTML = '⛶'; // Или используйте иконку
fullScreenButton.className = 'toastui-editor-toolbar-icons custom-fullscreen-btn';
fullScreenButton.style.cssText = 'font-size:20px; background:none;cursor:pointer';

let isFullScreen = false;

fullScreenButton.addEventListener('click', () => {
    const editorEl = document.querySelector('#editor');
    console.log('full Screen Button:', 'action');
    if (!isFullScreen) {
        editorEl.style.cssText = `
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            background: #fff;
        `;
        //editorEl.querySelector('.toastui-editor-defaultUI').style.height = 'calc(100vh - 40px)';
    } else {
        editorEl.style.cssText = '';
        editorEl.style.height = '600px'; 
    }
    
    isFullScreen = !isFullScreen;
});