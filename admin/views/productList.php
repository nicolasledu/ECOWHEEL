<?php require ('partials/header.php'); ?>

<?php require ('partials/menu.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/PanelList.css">
	<title>Document</title>
</head>
<body>

<?php if(isset($_SESSION['messages'])): ?>
	<div>
		<?php foreach($_SESSION['messages'] as $message): ?>
			<?= $message ?><br>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<div class="category">
<h2>La liste complète des Produits : </h2>
	<div class="categoryPanel">
		<div class="add">
			<a href="index.php?controller=product&action=new" class="btnAdd">Ajouter un nouveau produit</a>
		</div><br><br>
		<?php foreach($products as $product): ?>
		<p><?=  htmlspecialchars($product['name']) ?> </p>
		<div class="modify">
			<a href="index.php?controller=product&action=edit&id=<?= $product['id'] ?>" class="btnModify">Modifier</a>
		</div>
		<div class="delete">
			<a href="index.php?controller=product&action=delete&id=<?= $product['id'] ?>" class="btnDelete">Supprimer</a></br>
		</div><br><br><br> 
		<?php endforeach; ?>
	</div>
</div>
</body>
</html>





