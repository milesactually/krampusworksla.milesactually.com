jQuery(window).load(function() {

    var container = document.querySelector('#masonry');
    var msnry = new Masonry(container, {
        itemSelector: 'figure',
        columnWidth: 'figure',
    });

});