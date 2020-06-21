<!doctype html>
<html>
<head>

</head>
<body>

<?php require ('partials/header.php'); ?>

<?php require ('partials/menu.php'); ?>


<?php if(isset($_SESSION['messages'])): ?>
<div>
		<?php foreach($_SESSION['messages'] as $message): ?>
		<?= $message ?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<br><h3>Formulaire du Produit</h3>

- Nom<br>
- Description<br>
- Prix<br><br>

<form action="index.php?controller=product&action=<?= isset($product) ||  (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">

	<label for="name">Nom :</label>
	<input  type="text" name="name" id="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($product) ? $product['name'] : '' ?>" /><br><br>
	
	<label for="category_id">Catégorie :</label>
	<select name="category_id" id="category_id">
		
		<?php foreach($categories as $categorie): ?>
            <?php foreach($productCategories as $productCategory): ?>
            <option value="<?= $categorie['id'] ?>" <?php if(isset($categorie) && $categorie['id'] == $productCategory['category_id']): ?>selected="selected"<?php endif; ?>><?= $categorie['name']; ?></option>
            <?php endforeach; ?>
        <?php endforeach; ?>
	
	</select><br><br>
    <label for="description">Description :</label>
	<input  type="text" name="description" id="description" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($product) ? $product['description'] : '' ?>" /><br><br>
	
	<label for="short_description">Petite Description  :</label>
	<input  type="text" name="short_description" id="short_description" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['short_description'] : '' ?><?= isset($product) ? $product['short_description'] : '' ?>" /><br><br>
	
	<label for="price">Prix :</label>
	<input  type="number" name="price" id="price" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['price'] : '' ?><?= isset($product) ? $product['price'] : '' ?>" /><br><br>

	<input type="submit" value="Enregistrer" />

</form>

</body>

</html>