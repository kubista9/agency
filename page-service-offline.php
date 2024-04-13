<?php /*

Template Name: Service - Offline

Template Post Type: service

 */



$title = 'Offline';

$description = 'Doplňte online marketing<br>

aj o offline aktivity';

$custom_css = [

	'dizajn.css'

];



$base_url = '//kremsa.sk/landing_pages/';

get_header(); ?>



<div class="main">

	<div class="container">

		<div class="hero">

			<h1><?=$title?></h1>

			<h2><?=$description?></h2>

			<p>

				Poradíme vám, ako sa odlíšite od konkurencie pomocou zaujímavých offline aktivít. <br>

				Organizujeme. Pripravujeme. Vymýšľame. Vzdelávame.

			</p>

			<a href="#kontakt" class="btn">napíšte nám</a>

		</div>

		<div class="row padded-row">

			<div class="col">

				<img src="<?=$base_url?>assets/img/offline/how-to.png" style="max-width: 600px" alt="">

			</div>

			<div class="col">

				<h3>ako na to</h3>

				<ul>

					<li>Nechajte vašu <b>značku vyniknúť</b></li>

					<li>Vyplňte prázdne <b>miesto na trhu</b></li>

					<li><b>Zorganizujte event</b> a pozvite naň klientov</li>

					<li><b>Prezentujte sa originálnym spôsobom</b> aj mimo online priestoru</li>

					<li>Naučte sa niečo nové</li>

				</ul>

				<a href="#kontakt" class="btn clr">pomôžeme vám</a>

			</div>

		</div>

		<div class="quote">

			<p>

				"Streetmeet event je koncept, ktorý sem hľadali a ktorý pomohol našej značke<br>

				Jack Daniel´s sa zviditeľniť. Spojil totiž veľmi pekný ”offline”<br>

				event s online priestorom. Vďaka agentúre Kremsa tento event<br>

				ušetril čas na organizáciu a bol zdrojom zaujímavého obsahu.<br>

				<span class="orange">

					Jaroslav Šišolák | managing director SFZ Marketing s.r.o.

				</span>

			</p>

		</div>

		<div class="row search-row padded-row">

			<div class="col">

				<img src="<?=$base_url?>assets/img/offline/eventy.png" alt="">

			</div>

			<div class="col">

				<h5>Eventy</h5>



				<p>

					Zorganizujeme pre vás event na mieru.<br>

					Vymyslíme koncept, zorganizujeme celý event na kľúč,<br>

					zabezpečíme služby profesionálneho fotografa a pripravíme<br>

					content na sociálne siete.<br>

					<br>

					Vďaka zaujímavému podujatiu	podporíme váš produkt alebo<br>

					službu nenásilnou formou, zabezpečíme šírenie eventu na<br>

					sociálnych sieťach a zapojíme aj influencerov.

				</p>

				<br>

				<a href="#kontakt" class="btn">potrebujem pomôcť</a>

			</div>

		</div>

		<div class="row socialne-row padded-row">

			<div class="col">

				<h5>Školenia a workshopy</h5>





				<p>

					Nemusíte sledovať aktuálne trendy. Radi to spravíme za vás,<br>

					navyše vás naučíme, ako aktuálne trendy využiť<br>

					pre váš biznis.<br>

					<br>

					Ak chcete zapojiť vašich zamestnancov do marketingových aktivít,<br>

					prídeme aj k vám do firmy. Naučíme vás,	ako tipy preniesť<b>

					aj do praxe a rovno si všetky triky môžete vyskúšať.<br>

					Ak potrebujete školenie na mieru, určite sa ozvite.

				</p>

				<br>

				<a href="#kontakt" class="btn">potrebujem pomôcť</a>

			</div>

			<div class="col">

				<img src="<?=$base_url?>assets/img/offline/skolenia.png" alt="">

			</div>

		</div>

		<div class="row search-row padded-row">

			<div class="col">

				<img src="<?=$base_url?>assets/img/offline/streetmeet.png" alt="">

			</div>

			<div class="col">

				<h5>Streetmeet</h5>





				<p>

					Projekt, pri ktorom spojíme influencerov z online priestoru a<br>

					prenesieme ich do offline prostredia. Na základe zdieľania<br>

					príspevkov dosiahneme zvýšenie povedomia<br>

					o značke pútavou formou. <br>

					<br> 

					Vďaka zaujímavému eventu podporíme produkt<br>

					alebo službu a zabezpečíme šírenie<br>

					eventu na sociálnych sieťach.

				</p>

				<br>

				<a href="#kontakt" class="btn">potrebujem pomôcť</a>

			</div>

		</div>

		<div class="line"></div>

		<div class="row lead-row padded-row">

			<div class="col">

				<img src="<?=$base_url?>assets/img/dizajn/preview.png" alt="">

			</div>

			<div class="col">

				<h3>Ukážka</h3>

				<br>

				<h5>Streetmeet - Jack Daniel´s na Grill & Beer Festival v Bratislave</h5>

				<br>





				<p>

					Prečítajte si, ako sme zorganizovali event pre nášho klienta v lete na gastro festivale.

					Podporiť značku prišli influenceri a vďaka eventu sa tento formát propagácie dostal

					aj k širokej verejnosti.

				</p>

				<br>

				<a href="https://www.kremsa.sk/letna-burka-s-jack-daniels/" target="_blank" class="btn">zobraziť</a>

			</div>

		</div>



		<?php include(__DIR__ . '/inc/contact_form.php') ?>

	</div>

</div>





<?php get_footer(); ?>

