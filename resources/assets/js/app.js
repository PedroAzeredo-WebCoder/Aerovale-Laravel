import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'bootstrap';

import docs from './components/docs'
($ => {
    $(() => {
     
        docs();
    });
})(jQuery);

