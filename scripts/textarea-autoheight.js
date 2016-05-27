/* 2015-10-11 - Robin C. Ladiges - https://rcl.blackpinguin.de/ */
$(function(){

    var init = function(){
        var $t = $(this);
        var min = $t.data('min-rows');
        var max = $t.data('max-rows');
        min = min ? Math.max(parseInt(min)) : 2;
        max = max ? Math.max(min, parseInt(max)) : Number.MAX_SAFE_INTEGER;
        $t.data('min-rows', min);
        $t.data('max-rows', max);
        onChange.call(this);
    }

    var onChange = function(){
        var t = this, $t = $(t); // textarea
        var $p = $t.parent(), p = $p[0]; // parent

        // pre calculations
        var min = $t.data('min-rows');
        var max = $t.data('max-rows');
        var ph = p.style.height;
        var ts = window.getComputedStyle(t);
        var pad = parseFloat(ts.paddingTop) + parseFloat(ts.paddingBottom);
        var lh = parseFloat(ts.lineHeight);

        // calculate & replace rows attribute
        p.style.height = $p.height()+'px'; // keep parent's height despite removeAttr
        $t.removeAttr('rows');
        t.style.height = lh+pad+'px'; // limit textarea height to one line
        var rows = Math.round((this.scrollHeight - pad) / lh); // calculate rows by content
        t.style.height = null; // unlimit textarea height
        $t.attr('rows', Math.max(min, Math.min(max, rows))); // clamp & set rows attribute
        p.style.height = ph; // restore old parent height
    };

    $('textarea.autoheight')
        .css({resize: 'none', 'overflow-y': 'auto', 'overflow-x': 'hidden'})
        .each(init) // initialization
        .on('input', onChange) // add onChange listener
        .on('change', onChange) // add onChange listener
    ;
    $(window).resize(function(){
        $('textarea.autoheight').trigger('change');
    });
});
