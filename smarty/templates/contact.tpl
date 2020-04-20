<div class="divLeftContainer">
    <div class="divTextSmaller3">
        <span class="spanSubTitle">Kontakt informacije</span>
        <br /><br />
        Rezervacije se primaju na<br />
        tel.  01-4826-031,<br />
        fax. 01-4826-052,<br />
        email: <a href="mailto:info@restoran-muzej.hr">info@restoran-muzej.hr</a>,<br />
        preko kontakt obrasca<br />
        ili osobno u restoranu.<br />
        Zagreb, Trg maršala Tita 10<br /><br />
        Radno vrijeme je svaki dan od <font style="color:red">9-24</font> sata,<br />
        uključući i nedjelje, osim blagdana.
        <br/><br/>
        <a href="#" onclick="window.open('map.html', '_blank', 'width=500, height=500'); return false;">Naša lokacija na karti</a>
        <br/><br/>
        <form method="post" action="index.php?task=contact" style="margin-bottom:0px">

            <fieldset>
            <legend style="color:#004A00">Kontakt obrazac</legend>
            <div style="margin:10px">
            <p>
                <span class="msg">Ime i prezime:</span>
                <input maxlength="50" id="name" name="name" type="text" class="msg" />
            </p>
            <p>
                <span class="msg">E- mail adresa:</span>
                <input maxlength="50" id="email" name="email" type="text" class="msg" />
            </p>
            <p>
                <span class="msg">Poruka:</span>
                <textarea rows="20" cols="30"  id="message" name="message" class="msg" ></textarea>
            </p>     
            <p><input type="submit" 
            	onclick="if(document.getElementById('message').value.length > 5000){alert('Maksimalna dužina kontakt poruke je 5000 znakova.'); return false;}"
                name="send_msg" value="Pošalji" /></p>
            </div>
            </fieldset>
        
        </form>
        
    </div>
    <br />
    <div class="divTextSmaller2" style="height:100%; overflow:auto">
        <img alt="" src="images/fish.jpg" class="imgSmallFilm" style="margin-left:3px" />
        <img alt="" src="images/veal_medallions.jpg" class="imgSmallFilm" />
        <img alt="" src="images/fish_steak.jpg" class="imgSmallFilm" />
    </div>
</div>
<div class="divRightContainer">
    <img alt="" src="images/grill.jpg" class="imgSmall" /><br />
    <img alt="" src="images/beef_cutlet.jpg" class="imgSmall" /><br />
    <img alt="" src="images/steak.jpg" class="imgSmall" /><br />
</div>
<img alt="" src="images/pixel.gif" style="width:800px; height:20px" />
