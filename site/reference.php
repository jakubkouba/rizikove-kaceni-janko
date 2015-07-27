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