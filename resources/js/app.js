require('./bootstrap');

/**
 * Enable syntax highlighting for code blocks.
 */
window.hljs = require('highlight.js');
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('sql', require('highlight.js/lib/languages/sql'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));

window.onload = function () {
    var preBlocks = document.getElementsByTagName('pre');
    for (var i = 0; i < preBlocks.length; i++) {
        hljs.highlightElement(preBlocks[i]);
    }
};
