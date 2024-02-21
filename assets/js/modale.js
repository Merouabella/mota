jQuery(document).ready(function($) {
    var popup = $('.popup-contact');
    var overlay = $('.popup-overlay');

    // Ouvrir la modale lorsque le bouton est cliqué
    $('#open-contact-popup').click(function() {
        popup.show();
        overlay.show();
    });

    // Fermer la modale lorsque le bouton de fermeture est cliqué
    $('.popup-close').click(function() {
        popup.hide();
        overlay.hide();
    });

    // Fermer la modale lorsque l'utilisateur clique en dehors de la modale
    $(document).mouseup(function(e) {
        if (e.target == overlay[0]) {
            popup.hide();
            overlay.hide();
        }
    });
});