var this_js_script = $('script[src*=somefile]');
var city = this_js_script.attr('data-city');
var counter = this_js_script.attr('data-counter');

var temp = "<div class=\"cell\" style=\"width:{width}px; height: {height}px; background-image: url(\"/images/{city}_{index}.jpg\")\"></div>";
var w = 1,
    html = '',
    limitItem = counter;
for (var i = 0; i < limitItem; ++i) {
    w = 250 + 250 * Math.random() << 0;
    html += temp.replace(/\{height\}/g, 250).replace(/\{width\}/g, w).replace("{city}", city).replace("{index}", i + 1);
}
$("#freewall").html(html);

var wall = new Freewall("#freewall");
wall.reset({
    selector: '.cell',
    animate: true,
    cellW: 20,
    cellH: 200,
    onResize: function () {
        wall.fitWidth();
    }
});
wall.fitWidth();
// for scroll bar appear;
$(window).trigger("resize");