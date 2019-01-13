
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

/**
 * Enable syntax highlighting for code blocks.
 */
window.hljs = require('highlight.js/lib/highlight');
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('sql', require('highlight.js/lib/languages/sql'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));

window.onload = function () {
    var preBlocks = document.getElementsByTagName('pre');
    for (var i = 0; i < preBlocks.length; i++) {
        hljs.highlightBlock(preBlocks[i]);
    }
};
