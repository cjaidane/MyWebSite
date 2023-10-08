<header>

	<div class="head">
		<h1><a href="../index.php">Sneakers Addict</h1>
		<div class="meta">
			Toute les infos sur vos paires favorites
		</div>
	</div>

	<div class="logo">
		<a href="../index.php"><img src="../image/Logo.jpeg" alt="Logo du site Sneakers Addict"/></a>
	</div>

	<div class="categorie">
		<div class="categorie_ham">
			<label for="ham">&#9776;</label>
			<input type="checkbox" id="ham">
		</div>

       
	<nav class="categorie_nav">
        <ul>
        <li><a href="/php/nike.php">Nike</a></li>
        <li><a href="/php/adidas.php">Adidas</a></li>
        <li><a href="/php/nb.php">New Balance</a></li>
        <li><a href="/php/converse.php">Converse</a></li>
        <li><a href="/php/formulaire.php"><?= $trad["connecter"]["connexion"] ?></a></li>
		<li>
		<a href="<?= basename($_SERVER['PHP_SELF']).'?lang=fr'; ?>">Français</a>
		<a href="<?= basename($_SERVER['PHP_SELF']).'?lang=en'; ?>">English</a>
		</li>
	</div>
		</ul>
	</nav>
        
	</div>

	

</header>
