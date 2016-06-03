var texts, colors, positions, sizes, window1, winheight, winwidth, body, fullheight, fullwidth, navbar, navwidth, navheight, container, width, height;
var radius, circleRadius, circleRadiusSmall, circleOff, circleRadiusLogo, mobilesize;

var longtexts;

function initVars(){
    texts = ['GIB ZA VSE', 'o nas', 'mamice po porodu', 'nosečnice', 'odrasli', 'starejši', 'otroci', 'vsi\ntečaji',
        'EFM', 'servis', 'knjiga'];

    longtexts = [
        [],
        [
            'NEKAJ O NAS<br/><br/>' +
            'V Gibu za Vse poskrbimo za vse generacije od dojenčka do starostnika, ' +
            'ne glede na življenjsko obdobje in specifike le-tega. ' +
            'Pri nas ni starostne omejitve. Začnejo lahko že v trebuščku in vse do konca svojih dni. ' +
            'Vizija našega podjetja je gibanje v družini za vse generacije.' +
            'Naše vodilo je, da vadeči vadbo izvajajo pravilno in njim v zdravo korist.' +
            'Poleg pravilne izvedbe nas odlikuje tudi individualnem pristop do posameznika.' +
            'Ker gibanje zajema celostno podobo, se trudimo, da bi poskrbeli za posameznikov gibalni razvoj, ' +
            'razvoj vseh gibalnih sposobnosti (ravnotežje, koordinacija, moč, gibljivost, preciznost, vzdržljivost, hitrost), ' +
            'kondicijo, pravilno načrtovanje treningov, vzdrževanje kondicijske pripravljenosti, ' +
            'zdravega načina gibanja in izvajanja vaj …<br/><br/>' +
            'KONTAKT:<br/>' +
            '040 560 807<br/>' +
            'gibzavse@gmail.com',

            //'<div style="position: relative; top: 50%; transform: translateY(-50%); text-align:center; overflow: scroll;">' +
            'VADITELJICA Tina Petkovšek<br/><br/>' +
            'Od nekdaj rada »migam« in imam rada šport in ljudi, zato je v meni od osnovnošolskih let ' +
            'vedno bila želja poučevanja v športu, želja po aktivnem življenjskem slogu in želja po ' +
            'predajanju znanja o športu. Tako sem postala profesorica športne vzgoje (z opravljenim strokovnim izpitom), ' +
            'kondicijska trenerka in trenerka teka na smučeh. Poleg moje strokovne usposobljenosti sem med in po študiju ' +
            'opravila vrsto usposabljanj (seznam le-teh je malo nižje), za katere vsakoletno opravljam/obnavljam/potrjujem ' +
            'tudi licenco. Napisala sem tudi knjigo z naslovom Tek na smučeh v zgodnjem otroštvu ter jo s pomočjo Smučarske ' +
            'zveze Slovenije in ZUTS tudi izdala.<br/>' +
            'Za mano je že 10 let izkušenj dela z otroki in odraslimi. Že v srednji šoli sem kot pomočnica pomagala ' +
            'pri vadbah za malčke in predšolske otroke ter učila otroke in odrasle smučanja. Tekom študija sem si želela ' +
            'razširiti obzorja poučevanja, treniranja in dela z otroki in odraslimi. Zato sem bila ves čas študija aktivna ' +
            'na področju vodenja vadb za predšolske otroke in malčke, vodenju tečajev rolanja, tečajev teka na smučeh za odrasle, ' +
            'plavanja, alpskega smučanja, gimnastike in akrobatike, plesnih tečajev, vadb za seniorje, poučevanjem nordijske hoje … ' +
            'Po končanem študiju sem si dodatne izkušnje pridobila še z vodenjem vadb odraslih, s strokovnim sodelovanjem ' +
            's klubi in društvi, vodenju vadb otrok in odraslih z zdravstvenimi  in telesnimi posebnostmi ter z dojenčki, ' +
            'mladim mamicam in nosečkam.<br/>' +
            'Moja sreča je v poučevanju, vedno rada odkrivam in širim svoje znanje na različnih področjih, ki me zanimajo.'
            //'</div>'
        ],
        [
            'VADBA ZA MAMICE PO PORODU<br/><br/>' +
            'Individualna vadba za mamice po porodu je namenjena hitrejšemu okrevanju po porodu. ' +
            'Individualna vadba poteka približno do 8. oz. 12. tedna po porodu, odvisno od poroda. ' +
            'Vadba je prilagojena vsaki mamici posebej, tako vsebinsko ' +
            '(izbira vaj glede na zdravstveno stanje in sposobnosti) kot časovno (dan in ura sta prilagodljiva).<br/><br/>' +

            'Vadba za mamice z dojenčki, je namenjena mamicam po porodu in njihovim otrokom. ' +
            'Vadbe se mamice lahko udeležijo že po 8. oz. 12. tednu po porodu (odvisno kako se mamica po porodu hitro zaceli). ' +
            'Največje število udeleženk v skupini je 5. Tudi tukaj je vadba prilagojena vsaki mamici posebej, ' +
            'glede na njene sposobnosti. Prav tako je vadbena vsebina prilagojena tudi vsakemu dojenčku posebej. ' +
            'Vadbe bodo potekale v dopoldanskem času.',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'VADBA ZA NOSEČNICE<br/><br/>' +
            'Vadba za nosečnice je namenjena bodočim mamicam. Vadba pozitivno vpliva na nosečnost ' +
            'in lajša porod. Največje število udeleženk v skupini je 5, tako da se lahko vsaki bodoči' +
            'mamici tudi posebej posvetimo in ji svetujemo. Vadbe bodo potekale v popoldanskem času.',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'VADBA ZA ODRASLE<br/><br/>' +
            'Vadba za odrasle ženske in moške od 18. leta naprej. Namenjena vsem, ki radi gibate ali bi' +
            'želeli začeti gibati, ne glede na to kakšne zdravstvene težave imate, saj je vadba prilagojena' +
            'posamezniku. Z vadbo vam pomagamo preprečiti in lajšati bolečine v hrbtenici, in pomagamo' +
            'pri izboljšanju gibalnih sposobnosti. Največje število udeležencev je 10, vadba pa bo potekala' +
            'v popoldanskem času.',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'VADBA ZA STAREJŠE<br/><br/>' +
            'Vadba za starostnike je namenjena vsem upokojencem. Z vadbo v zrelih letih si lahko ' +
            'omogočite kakovostnejše preživljanje prostega časa, podaljšate si lahko obdobje samooskrbe, ' +
            'olajšate si lahko bolečine in omogočite lažje gibanje. S pravilno vodeno vadbo boste lahko dosegli ' +
            'boljšo gibljivost, večjo moč, izboljšali ravnotežje… <br/><br/>' +
            'Največje število udeležencev na vadbo je 10, vadbe pa bodo potekale v dopoldanskem času.',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'VADBA ZA OTROKE<br/><br/>' +

            '1-2 leti s starši<br/>' +
            ' Vadba poteka 2x tedensko. Vadbena ura traja 45 -50 minut.<br/>' +
            'Preko poligonov, igric, plesa, pesmic, želimo otroke spodbuditi k gibanju, jih naučiti gibalnih vzorcev, ' +
            'ki so za to starostno obdobje primerni. Poleg učenja gibanja pa otrok in starš stketa medsebojno vez, ' +
            'se bolje spoznata tudi v svetu gibanja. Ker pa je naša skupina združuje največ 8 otrok, otroke postopoma ' +
            'navajamo tudi na socializacijo in okolico.<br/><br/>' +

            '2-4 let s starši<br/>' +
            'Vadba poteka 2x tedensko. Vadbena ura pa traja 50-55 minut.<br/>' +
            'Z vadbo (poligoni, igre, ples …) vplivamo na otrokov gibalni, socialni in miselni razvoj. ' +
            'Vadba bo potekala skupaj s starši, kar bo za vašega otroka in vas enkratna priložnost za navezovanje stikov, ' +
            'medsebojno spoznavanje in še mnogo več… Maksimalno število otrok je 8.',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'KAJ VSE NUDIMO<br/><br/>' +
            'Vadba za nosečnice<br/>' +
            'Individualna vadba za mamice po porodu<br/>' +
            'Vadba za mamice z dojenčki (od 8. tedna po porodu naprej)<br/>' +
            'Vadba za očke z dojenčki<br/>' +
            'Vadba za družinico<br/>' +
            'Vadba za starostnike<br/>' +
            'Vadbe za odrasle<br/>' +
            'Funkcionalna vadba za odrasle<br/>' +
            'Vadba za lepo telesno<br/>' +
            'Telovadba za otroke od 1. do 2. leta s starši<br/>' +
            'Telovadba za otroke od 3. – 5. leta<br/>' +
            'Telovadba za šolske otroke prva triada (1. – 3. razred)<br/>' +
            'Telovadba za šolske otroke druga triada (4. – 6. razred)<br/>' +
            'Telovadba za šolske otroke tretja triada (7. – 9. razred)<br/>' +
            'Kondicijska priprava za športnike<br/>' +
            'Kondicijska priprava za rekreativce<br/>' +
            'Kondicijska priprava za društva, klube ipd.<br/>' +
            'Plavalni tečaji za otroke<br/>' +
            'Vadba v vodi za dojenčke<br/>' +
            'Vadba v vodi za nosečnice<br/>' +
            'Vadba v vodi za seniorje<br/>' +
            'Vadba v vodi za družine<br/>' +
            'Tečaji smučanja za otroke in odrasle<br/>' +
            'Tečaji teka na smučeh za otroke že od 3. leta naprej<br/>' +
            'Tečaji teka na smučeh za odrasle, osnovnošolske, srednješolske otroke in študente, seniorje<br/>' +
            'Tečaji rolanja za otroke in odrasle<br/>' +
            'Tečaji nordijske hoje za otroke in odrasle<br/>' +
            'Gimnastika za predšolske otroke<br/>' +
            'Gimnastika za odrasle<br/><br/>' +
            '<a href="programs">Vsi programi</a>',

            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'EFM',
            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'servis',
            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ],
        [
            'trgovina',
            '<img src="roundpic.png" alt="" width="100%" height="100%" />'
        ]
    ];


    colors = ['white', 'white', 'pink', 'ciklam', 'white', 'gold', 'green', 'blue',
        'orange', 'purple', 'white'];

    positions = [[], [], [], [], [], [], [], [],
        [], [], []];

    sizes = [];

    window1 = $(window);
    winheight = window1.height();
    winwidth = window1.width();

    body = $('body');
    fullheight = body.height();
    fullwidth = body.width();

    navbar = $('#navbar');
    navwidth = navbar.width();
    navheight = navbar.height();

    container = $('#container');
    width = container.width();
    height = container.height();

    if(width == 0 && navwidth != null) {
        width = fullwidth - navwidth;
    }
    else {
        width = winwidth;
    }

    //if(height == 0 && navheight != null) {
    //    height = fullheight - navheight;
    //}
    //else {
    //    height = winheight;
    //}

    height = winheight;

    console.log(height + " " + width);

    radius = height;

    circleRadiusLogo = 180;
    circleRadius = 120;
    circleRadiusSmall = 100;
    circleOff = 100;

    mobilesize = fullwidth*(1/3);
}

function createFields() {
    $('.newfield').remove();
    var container = $('#circle-container');
    for(var i = 0; i < texts.length; i++) {
        $('<div/>', {
            'class': 'newfield ' + colors[i] + '',
            'id': 'newfield' + i,
            'onclick': 'focusOne(' + i + ')',
            'html': '<div class="newinner" id="newinner' + i + '">' + texts[i] + '</div>'
        }).appendTo(container);
    }
    //console.log("createFields");
}

function setPositionAndSize(element, left, top, width, height){
    $(element).css({
        left: left + 'px',
        top: top + 'px',
        width: width + 'px',
        height: height + 'px',
        'z-index': 1
    });
}

function setPositionAndSizeAndZ(element, left, top, width, height, z){
    $(element).css({
        left: left + 'px',
        top: top + 'px',
        width: width + 'px',
        height: height + 'px',
        'z-index': z
    });
}

function setMiddle(element){
    $(element).css({
        position: 'relative',
        top: '50%',
        transform: 'translateY(-50%)'
    });
}

function reSetPositions(){
    var fields = $('.newfield');
    for(j=0; j<fields.length; j++){
        $('#newfield' + j).css({
            top: positions[j][1],
            left: positions[j][0]
        });
    }
}

function reSetPositionsAndSizes(){
    var fields = $('.newfield');
    for(j=0; j<fields.length; j++){
        $('#newfield' + j).css({
            top: positions[j][1],
            left: positions[j][0],
            width: sizes[j],
            height: sizes[j],
            'z-index': 1
        });
    }
}

function distributeFields() {
    var fields = $('.newfield');
    var angle = - Math.PI/2;
    var step = (Math.PI/2) / (fields.length-4);
    //2*Math.PI -> cel krog
    //Math.PI/2 -> 90 stopinj

    if(fullwidth >= '768') {
        $("#maincenter").css({
            height: fullheight + 'px'
        });
    }
    else {
        $("#maincenter").css({
            height: seqnum + (width*0.9) + 'px'
        });
    }

    var seqnum = 0;
    var i = 0;
    fields.each(function() {

        if(i == 0){
            positions[i][0] = 10;
            positions[i][1] = 10;

            sizes[i] = circleRadiusLogo;

            setPositionAndSize(this, positions[i][0], positions[i][1], circleRadiusLogo, circleRadiusLogo);
        }
        else if(i < fields.length-3){ // krog

            if(fullwidth >= '768') {
                //var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
                //var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);

                var x = Math.round(width/15 + radius * Math.cos(angle) - $(this).width()/2);
                var y = Math.round(height + radius * Math.sin(angle) - $(this).height()/2);

                positions[i][0] = (-0.05 * width) + x + 200;
                if(fullwidth < 1000) {
                    positions[i][0] = (-0.1 * width) + x + 200;
                }
                positions[i][1] = (0.01 * winheight) + y +20; // navbar height HARDCODED

                sizes[i] = circleRadius;

                setPositionAndSize(this, positions[i][0], positions[i][1], circleRadius, circleRadius);


                angle += step;
            }
            else {
                positions[i][0] = (width/2) - (mobilesize/2);
                positions[i][1] = seqnum;

                sizes[i] = mobilesize;

                setPositionAndSize(this, positions[i][0], positions[i][1], mobilesize, mobilesize);
            }
        }
        else if(i === fields.length-3) { // posebi prvi
            if(fullwidth >= '768') {
                //var x = 100;
                //var y = fullheight;

                positions[i][0] = width - circleRadiusSmall - 10;
                if(fullwidth < 1000) {
                    positions[i][0] = width - circleRadiusSmall - 10;
                }
                positions[i][1] = winheight - circleRadiusSmall;

                sizes[i] = circleRadiusSmall;

                setPositionAndSize(this, positions[i][0], positions[i][1], circleRadiusSmall, circleRadiusSmall);
            }
            else {
                positions[i][0] = (width/2) - (mobilesize/2);
                positions[i][1] = seqnum;

                sizes[i] = mobilesize;

                setPositionAndSize(this, positions[i][0], positions[i][1], mobilesize, mobilesize);
            }
        }
        else if(i === fields.length-2) { // posebi drugi
            if(fullwidth >= '768') {
                //var x = width*0.9;
                //var y = height;

                positions[i][0] = width - 2*circleRadiusSmall - 10;
                if(fullwidth < 1000) {
                    positions[i][0] = width - 2*circleRadiusSmall - 10;
                }
                positions[i][1] = winheight - circleRadiusSmall;

                sizes[i] = circleRadiusSmall;

                setPositionAndSize(this, positions[i][0], positions[i][1], circleRadiusSmall, circleRadiusSmall);
            }
            else {
                positions[i][0] = (width/2) - (mobilesize/2);
                positions[i][1] = seqnum;

                sizes[i] = mobilesize;

                setPositionAndSize(this, positions[i][0], positions[i][1], mobilesize, mobilesize);
            }
        }
        else if(i === fields.length-1) { // posebi tretji
            if(fullwidth >= '768') {
                //var x = width*0.9;
                //var y = height;

                positions[i][0] = width - circleRadiusSmall - 10;
                if(fullwidth < 1000) {
                    positions[i][0] = width - circleRadiusSmall - 10;
                }
                positions[i][1] = winheight - 2*circleRadiusSmall;

                sizes[i] = circleRadiusSmall;

                setPositionAndSize(this, positions[i][0], positions[i][1], circleRadiusSmall, circleRadiusSmall);
            }
            else {
                positions[i][0] = (width/2) - (mobilesize/2);
                positions[i][1] = seqnum;

                sizes[i] = mobilesize;

                setPositionAndSize(this, positions[i][0], positions[i][1], mobilesize, mobilesize);
            }
        }

        seqnum += mobilesize;

        //console.log("fullheight " + fullheight + " fullwidth " + fullwidth);
        //console.log('i ' + i + ' len ' + fields.length);

        i++;
    });

    //reSetPositionsAndSizes();
    //console.log("distributeFields");
    //console.log("sizes" + sizes);

    var inners = $('.newinner');

    inners.each(function(){
        setMiddle(this);
    });
}

function focusOne(x){

    var fields = $('.newfield');
    var chosen = $('#newfield' + x);
    //console.log(x + " " + tmpw);

    if(x == 0){
        reSetPositions();

        $('.cc1').hide();
        $('.cc2').hide();
        $('.cc3').hide();

        return;
    }

    $('.cc1').hide();
    $('.cc2').hide();
    $('.cc3').hide();

    reSetPositions();

    if(fullwidth >= '768'){

        if(x > 0 && x < fields.length-3) {

            $('#newfield' + 4).css({
                left: positions[x][0],
                top: positions[x][1]
            });

            chosen.css({
                left: positions[4][0],
                top: positions[4][1]
            });

        }

        $('#circle-content1').html(longtexts[x][0]);

        $('.cc1').show();

        if(x == 1){
            $('#circle-content3').html(longtexts[x][1]);
            $('.cc3').show();
        }
        else{
            $('#circle-content2').html(longtexts[x][1]);
            $('.cc2').show();
        }
    } // end of if for big screens
    else {
        var tmpw = $('#newfield' + x).width();
        //console.log(tmpw);
        if(tmpw >= mobilesize-2 && tmpw <= mobilesize+2 ) {

            distributeFields();

            var lower1 = (width*0.9)-tmpw, i = 0;
            fields.each(function() {
                if($(this)[0].id != 'newfield' + x) {
                    if(i > x){
                        $(this).css({
                            top: positions[i][1] + lower1  + 'px',
                        });
                        //lower1 += lower1;
                    }
                }
                /*console.log('popravi text ' + i);*/
                $('#newinner' + i).text(texts[i]);
                i++;
            });

            $('#newfield' + x).css({
                height: (width*0.9) + 'px',
                width: (width*0.9) + 'px',
                left: (width*0.07) + 'px',
                'z-index': 2
            });

            //setPositionAndSizeAndZ('#newfield' + x, (width*0.07), positions[i][1], (width*0.9), (width*0.9), 1);

            $('#newinner' + x).html(
                '<h2>' + texts[x] + '</h2>' +
                '<p>Testno besedilo, da vidim, ali dela tudi z daljšim besedilom.' +
                '<br /> Ali delajo tudi odstavki/nove vrstice?</p>' +
                '<p>Test test test.</p>'
            );
        }
        else {
            var i=0;
            fields.each(function() {
                $(this).css({
                    width: mobilesize + 'px',
                    height: mobilesize + 'px',
                    left: positions[i][0] + 'px',
                    top: positions[i][1] + 'px',
                    'z-index': 1
                });

                //setPositionAndSizeAndZ(this, positions[i][0], positions[i][1], mobilesize, mobilesize, 0);

                /*console.log('popravi text ' + i);*/
                $('#newinner' + i).text(texts[i]);
                i++;
            });
        }
    }
}

$('#showNews').on('click', function(){
    $.ajax({
        url: "articles/json",
        context: document.body
    }).done(function(context) {

        //console.log(context);

        $('.cc1').hide();

        $('.cc2').hide();

        $('.cc3').hide();

        var text = '<h1>Najnovejše ... <small><a href="articles">Vse novice</a></small></h1>';

        for(x in context) {
            //console.log(x);
            text += '<a href="articles/' + context[x].id + '">' + context[x].title + '</a><br/>' +
                '<p>' + context[x].content + '</p><br/>';
        }

        $('#circle-content3').html(text);

        //$('.cc3').css({
        //    visibility: 'visible'
        //});

        $('.cc3').show();

    });
});

$(document).ready(function(){

    initVars();
    createFields();
    distributeFields();
    //console.log("ready");

});
