<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"       
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
	<head>
		<title>Today's Date - Xiaoyu Zhang</title>
        <link rel="shortcut icon" href="/images/favicon.png" type="image/png" >
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta http-equiv="content-type"       
        content="text/html; charset=utf-8"/>   
		<link rel="stylesheet" href="../assets/css/aboutme.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<h1>Today's Date</h1>
                                <p>Today's date (according to this web server) is   <br> 
                                <?php 
                                    echo date('l, F dS Y.');       
                                    ?>  
                                    <br>
      
                            


						</header>

								
                        <br>
                         <a title="Back to the front page" href="../index.html">To Front Page</a>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Xiaoyu Zhang 2019</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143325646-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-143325646-1');
            </script>



	</body>
</html>