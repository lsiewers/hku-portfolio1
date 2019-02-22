<div class="contact">
  <p>Even gezellig kletsen of FaceTimen? Een nieuwe opdracht bespreken of
iets van mijn portfolio bespreken? Een 2-persoons diner delen of
een bakkie koffie doen? Wil je samenwerken of wil je me alleen aan
het werk zetten? Wil je advies van mij of wil je mij advies geven?</p>
  <h1>Stuur een berichtje!</h1>

  <FORM METHOD="POST" ACTION="http://home.hku.nl/cgi-bin/FormMail.cgi">
    <INPUT TYPE="hidden" NAME="recipient" VALUE="luuk.siewers@student.hku.nl">
    <INPUT TYPE="hidden" NAME="subject" VALUE="Een bericht via je portfolio site">
    <INPUT TYPE="hidden" NAME="redirect" VALUE="http://studenthome.hku.nl/~luuk.siewers/?page=4">
    <INPUT TYPE="hidden" NAME="required" VALUE="email,realname">

    <label>Naam</label>
    <INPUT TYPE="text" NAME="realname" SIZE=32 MAXLENGTH ="32" placeholder="Typ hier..." required>
    <label>Email</label>
    <INPUT TYPE="text" NAME="email" SIZE=32 MAXLENGTH ="40" placeholder="Typ hier..." required>
    <label>Bericht</label>
    <TEXTAREA NAME="message" ROWS = 3 COLS = 40 placeholder="Typ hier..." required></TEXTAREA>
    <INPUT TYPE="submit" VALUE="Verzenden >">
  </FORM>
</div>