<?php
/****************************************************
date:		4.2.2013  20:44:17
autor:		Jakub Adler
file: 		contact.php
encoding:	UTF-8 		
file description:

******************************************************/

require 'libs.php';


$content = <<<HTML

<div id="contact" class="section visible corner-bottom">
	<h1>Kontakt</h1>
	<div id=adresa>
		<p>
			Ján Pavlík<br />
			U Vápenky 163<br/>
			Krupka - Vrchoslav<br/>
			417 41
			<table>
			<tbody>
			<tr><td>Tel:</td><td class="l">720546667</td></tr>
			<tr><td>e-mail:</td><td class="l"><a href="mailto:janko.pavlik@seznam.cz">Janko.Pavlik@seznam.cz</a></td></tr>
			<tr></tr>
			<tr><td>IČ:</td><td class="l">887 19 995</td></tr>
			<tr><td>DIČ:</td><td class="l">CZ7905018946</td></tr>
			</tbody>
			</table>
		</p>
	</div>
	<!--[if lt IE 9]>
	<div id="no-email">
		<p>Velice se omlouváme, ale tento prohlížeč neposkytuje formulář pro okamžité zasílání emailů.</p>
		<p>Pokud chcete využít tuto funkci použijte jiný prohlížeč (Mozzila, Chrome).</p>
	</div>
	<![endif]-->
	<div id="email-form">
		<p style="text-align:center">Pro okamžitý kontakt použijte následující emailový formulář</p>
		<form id="send-email"  method="post" action="">
			<label for="email_addr">Email:</label><input type="text" name="email_addr" id="email_addr" size=50><br/>
			<label for="predmet">Předmět:</label><input type="text" name="subject" id="subject" size=50><br/>
			<label for="mail_text">Zpráva:</label><textarea name="mail_text" id="mail_text" rows=10 cols=50></textarea>
			<button type="button" id="send">Odešli</button>
		</form>
	</div>
	<div id="certifications">
			        <h2>Certifikáty a osvědčení</h2>
			        <div class="cert-wrap">
			            <div class="cert-title">Arboristika</div>
			             <img class="cert img-shadow" src="images/certificate/certificate0.jpg" title="arboristika" alt="arboristika"/>
			             
			        </div>
                    <div id="arboristika" class="cert-big hide corner-all">
                        <span class="close">Zavřít</span>
                        <img src="images/certificate/certificate0.jpg" alt="arboristika"/>
                    </div>
                    <div class="cert-wrap">
                        <div class="cert-title">Výškové práce</div>
                        <img class="cert img-shadow" src="images/certificate/certificate1.jpg" title="stromolezectvi" alt="výškové práce" />
                        
                    </div>
                    <div id="stromolezectvi" class="cert-big hide corner-all">
                        <span class="close">Zavřít</span>
                        <img src="images/certificate/certificate1.jpg" alt="výškové práce" />
                    </div>
                    <div class="cert-wrap">
                        <div class="cert-title">Pojištění</div>
                        <img class="cert img-shadow" src="images/certificate/certificate2.jpg" title="pojistka" alt="pojistka"/>
                        
                    </div>    
                    <div id="pojistka" class="cert-big hide corner-all">
                        <span class="close">Zavřít</span>
                        <img src="images/certificate/certificate2.jpg" alt="pojistka"/>
                   </div>                    
                </div>
</div>


HTML;

$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);

?>