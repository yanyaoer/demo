/* vim: set et sw=4 ts=4 sts=4 fdm=sytanx ff=unix fenc=utf8: */
if (!util) var util = {};
(function(){
    util.frameResize = function() {
        if (window.parent) window.parent.$('#J_frame').height($(document).height());
    }
    util.batch = function(trigger, target, fn){
        trigger.click(function(){
            target.each(function(idx, el){
                el.checked = 'checked'?'checked':'';
            })
            if (fn) fn();
        })
    
    }
})()
