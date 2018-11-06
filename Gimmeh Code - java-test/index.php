<!DOCTYPE html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gruppe 6 code</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php 
	include "header.html"
	?>


	<div id="main">
		<div id="sort_button">

			<a href="#" onclick="visModal()"> <img src="assets/Placeholder.png" alt="sorterings knap"></a>
		</div>
		<div id="modal_vindue">
			<div id="menuVindue">
				<div class="modal_knap">
					<img src="assets/Placeholder.png" alt="sorterings knap1">
				</div>
				<div class="modal_knap">
					<img src="assets/Placeholder.png" alt="sorterings knap2">
				</div>
				<div class="modal_knap">
					<img src="assets/Placeholder.png" alt="sorterings knap3">
				</div>
			</div>

		</div>
		<div id="indholdsArea">
			<!--Templaten skal være her	-->
			<section class="container" data-container>

			</section>
			<template data-template>
                <article class="postListview">

                    
                    <img data-img id="template_img">
                    	<div id="template_container">
                    	<h2 data-title id="template_tittel"></h2>
                    	<p data-text id="template_desc"></p>
                   		<p data-dato id="template_dato"></p>
                   		<p data-tid id="template_tid"></p>
                   		<p data-sted id="template_sted"></p>
                   		<p data-genre id="template_genre"></p>
                  		<p data-pris id="template_pris"></p>
					</div>

                </article>
                
                
            </template>
		</div>
	</div>
	<div id="nyhedsbrev">
		<img src="assets/Placeholder.png" alt="" id="nyhedsbrevImg">
	</div>
	<?php
		include "footer.html"
	?>

		<script src="javascript.js"></script>
</body>

</html>
