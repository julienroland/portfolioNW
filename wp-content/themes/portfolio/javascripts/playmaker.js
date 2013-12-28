/* Foundation Top-Bar dividers and Labels */
var divider = $("a:contains('divider')");
$(divider).parent().replaceWith('<li class="divider"></li>');


$("a[title=label]").each(function() {
    $(this).replaceWith($('<label/>').html($(this).html()));
});

/* Change native Wordpress gallery to work with Foundation */
$("dt.gallery-icon a").each(function() {
    $(this).replaceWith($(this).html());
});

$("div.gallery br").remove();

$("dl.gallery-item").each(function() {
    $(this).replaceWith($(this).html());
}); 

$("dt.gallery-icon").each(function() {
    $(this).replaceWith($('<li>' + this.innerHTML + '</li>'));
}); 

$("div.gallery").each(function() {
    $(this).replaceWith($('<ul class="block-grid three-up mobile-two-up gallery" data-clearing>' + this.innerHTML + '</ul>')); //Make this costumizable!!
}); 

$("ul.gallery li img").removeAttr('height');
$("ul.gallery li img").removeAttr('width');


/* Remove "width" attribute on <img> tags */
$("img").css("width","auto");