<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Haci Cömert</title>
	<?php wp_head();?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link href="C:\xampp\htdocs\php\Portfolio\wp-content\themes\Portfolio\css\portfolio.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="/style.css">
</head>
<body>
<header>

		<nav class="navbar ">
    <img class="brand-logo" src="http://localhost/php/Portfolio/wp-content/uploads/2022/05/22.png"alt="gggg">

    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>

    <div class="navbar-links">
        <ul>
			<li>
				<?php
					$arguments =[
						"menu" => "primary-menu",
						"theme_location" => "primary-menu",
						];
					$menuItems = wp_nav_menu($arguments);
				?>	
			</li>

        </ul>
    </div>
</nav>



</header>
