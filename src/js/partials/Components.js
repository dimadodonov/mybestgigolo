/**
 * Components.js
 *
 * @author Dima Dodonov <dimadodonov@icloud.com>
 */

App.define('Components');

App.Components = (function() {
    function _init() {
        console.log('Site Components Init');
        // App.Components.Menu.init();
    }

    return {
        init: _init,
    };
})();
