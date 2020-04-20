// 500939d869bad09b1a02a5a1c6d34b8b

hs.graphicsDir   = '/highslide/graphics/';
hs.showCredits   = false;

hs.lang = {
   loadingText :     '',
   loadingTitle :    'Klikni za prekid',
   focusTitle :      'Klikom povuci naprijed',
   fullExpandTitle : 'Povećanje na stvarnu veličinu (f)',
   fullExpandText :  'Puna veličina',
   creditsText :     'Kreirano pomoću <i>Highslide JS</i>',
   creditsTitle :    'Idi na Highslide JS naslovnicu',
   previousText :    'Prethodno',
   previousTitle :   'Prethodno (strelica lijevo)',
   nextText :        'Slijedeće',
   nextTitle :       'Slijedeće (strelica desno)',
   moveTitle :       'Pomakni',
   moveText :        'Pomakni',
   closeText :       'Zatvori',
   closeTitle :      'Zatvori (esc)',
   resizeTitle :     'Promjena veličine',
   playText :        'Pokreni',
   playTitle :       'Pokreni prikaz slika (razmaknica)',
   pauseText :       'Pauza',
   pauseTitle :      'Pauziraj prikaz slika (razmaknica)',   
   number :          'Slika %1 od %2',
   restoreTitle :    'Kliknite za zatvaranje slike.'
   
};

hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
hs.fadeInOut = true;
/*
hs.captionEval = 'this.thumb.alt';
hs.numberPosition = 'none';
hs.dimmingOpacity = 0.75;
*/

// Add the controlbar
/*
if (hs.addSlideshow) hs.addSlideshow({
        slideshowGroup: 'pix',
        interval: 5000,
        repeat: true,
        useControls: true,
        fixedControls: true,
        overlayOptions: {
                opacity: .80,
                position: 'bottom center',
                hideOnMouseOut: true
        },
        thumbstrip: {
                position: 'bottom center',
                mode: 'horizontal',
                relativeTo: 'viewport'
        }
});*/

hs.registerOverlay({
html: '<div class="closebutton" onclick="return hs.close(this)" title="Zatvori"></div>',
position: 'top right',
fade: 2 // fading the semi-transparent overlay looks bad in IE

});

