<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $pagename ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tester.css" rel="stylesheet" type="text/css" media="all"/>

    <script type="text/javascript" src="<?php echo base_url("assets/js/tooltipster.bundle.min.js"); ?>"></script>

    <script>
        $(document).ready(function() {
            $('.tip').tooltipster();
        });
    </script>
</head>

<body>
<div id="page" class="round">
<center><h1 class="tip" title="Beta 0.2 :)"><?php echo $title ?></h1></center></div>
<br>
<br>

	<div id="tester" class="round">

		<div id="box">

			<a id="show_html" onclick="document.getElementById('spoiler_html').style.display=''; document.getElementById('show_id').style.display='none' ; document.getElementById('show_html').style.display='none';" class="link">[Show HTML Code]</a>
			<span id="spoiler_html" style="display: none">
			<a onclick="document.getElementById('spoiler_html').style.display='none' ; document.getElementById('show_html').style.display=''; document.getElementById('show_id').style.display='';" class="link">[Hide HTML Code]</a><br>
			<textarea class="innerbox isi" placeholder="Tulis kode HTML anda disini!"></textarea></span>

			<a id="show_id" onclick="document.getElementById('spoiler_id').style.display=''; document.getElementById('show_id').style.display='none'; document.getElementById('show_html').style.display='none' ;" class="link">[Show CSS Code]</a>
			<span id="spoiler_id" style="display: none">
			<a onclick="document.getElementById('spoiler_id').style.display='none'; document.getElementById('show_id').style.display=''; document.getElementById('show_html').style.display='' ;" class="link">[Hide CSS Code]</a><br>
			<textarea class="innerbox css" placeholder="Tulis kode CSS anda disini!"></textarea></span>

			<div id="innerbox preview">
				<iframe id="live_update">
					<html lang="en">
				<head>
					<meta charset="utf-8">
				 				    
				    <!-- Bootstrap -->
				    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
				    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>


				</head>

				<body>

				</body>
				</html>


				</iframe>

		</div>
		

	</div>

	</div>

	<div style="clear:both"></div>

	<br>

	<div id="col-md-3 col-mc-offset-9">
	<center>
	<div id="ftr" class="round">
	<p> Created By : Aland Samuel Tiwa </p>
	</div>
	</center>
	</div>


	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/tooltipster.bundle.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

    <script type="text/javascript">
    	
    $(function () {

		function ambilIsi(){

			var isi = $(".isi").val();
			return isi;
		}

		function ambilCss(){
			var css = $(".css").val();
			return css;
		}

		$(".innerbox").on("keyup", function (){

			var target = $("#live_update")[0].contentWindow.document;
			target.open();
			target.close();

			var isi = ambilIsi();
			var css = ambilCss();

			$("body", target).append(isi);
			$("head", target).append("<style>"+ css +"</style>");



		});

    });


    </script>
</body>
</html>