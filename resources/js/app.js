import './navbar.js';
import './theme-mode.js';

import Editor from '@toast-ui/editor';
import '@toast-ui/editor/dist/toastui-editor.css';
import '@toast-ui/editor/dist/theme/toastui-editor-dark.css';
import '@toast-ui/editor/dist/i18n/es-es';


const editorElement = document.querySelector('#editor');
const editor_enElement = document.querySelector('#editor_en');
const formElement = document.querySelector('#ProjectForm');
const contentElement = document.querySelector('#content');
const content_enElement = document.querySelector('#content_en');

function initializeEditor(element, theme, initialValue) {
    return new Editor({
        el: element,
        height: '400px',
        initialEditType: 'markdown',
        initialValue: initialValue,
        clear: true,
        theme: theme,
        language: 'es-ES',
    });
}

if (editorElement && editor_enElement && formElement && contentElement && content_enElement) {
    let theme = localStorage.getItem('color-theme') === 'dark' ? 'dark' : 'light';
    let editor = initializeEditor(editorElement, theme, editorElement.innerHTML.trim());
    let editor_en = initializeEditor(editor_enElement, theme, editor_enElement.innerHTML.trim());

    formElement.addEventListener('submit', e => {
        e.preventDefault();
        contentElement.value = editor.getMarkdown();
        content_enElement.value = editor_en.getMarkdown();
        e.target.submit();
    });

    document.addEventListener('theme-changed', (e) => {
        const currentMarkdown = editor.getMarkdown();
        const currentMarkdownEn = editor_en.getMarkdown();
        
        editor.destroy();
        editor_en.destroy();
        
        editorElement.innerHTML = '';
        editor_enElement.innerHTML = '';

        editor = initializeEditor(editorElement, e.detail.theme, currentMarkdown);
        editor_en = initializeEditor(editor_enElement, e.detail.theme, currentMarkdownEn);
    });
}


