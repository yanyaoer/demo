/* vim: set et sw=4 ts=4 sts=4 fdm=sytanx ff=unix fenc=utf8: */
if (!util) var util = {};
(function(){
    util.frameResize = function() {
        if (window.parent) window.parent.$('#J_frame').height($(document).height());
    }
})()
