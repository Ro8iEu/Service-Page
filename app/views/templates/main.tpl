<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Serwis </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<style>
		.messages { }
		.messages ul { list-style-type: none; padding: 0; }
		.msg{
			border-radius: 0.5em;
			padding: 1em;
			margin-bottom: 0.5em;
			box-shadow: 0.2em 0.2em 0.4em #ccc;
		}
		.error{	background-color: #f88; }
		.warning{ background-color: #fd2; }
		.info{ background-color: #afa; }

	</style>
	<body class="is-preload">
	{block name=login} {/block}

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="reportList" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">RKCOMPANY</span>
								</a>
						</div>
					</header>



				<!-- Main -->
					<div id="main">
						<div class="inner">
					{block name=top} {/block}
                         {block name=welcome} {/block}
                         {block name=bot} {/block}
                         {block name=search} {/block}


                         {block name=bottom} {/block}
                        {block name=register}{/block}
						 {block name=messages}
 <br>

							 {if $msgs->isMessage()}
								 <div class="messagess">
									 <ul>
										 {foreach $msgs->getMessages() as $msg}
											 {strip}
												 <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
											 {/strip}
										 {/foreach}
									 </ul>
								 </div>
							 {/if}
							{/block}
					</div>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/functions.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>