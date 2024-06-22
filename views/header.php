<!DOCTYPE html>
<html>
<head>
    <title>Mini Site de Vente</title>
    <style>
   
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script>
        // Script pour ouvrir et fermer le formulaire de connexion et de création de produit modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }


let prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', function() {
 
  const currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
   

    document.querySelector('.navbar').classList.remove('show');
  } else {
   
    document.querySelector('.navbar').classList.add('show');
  }

  prevScrollPos = currentScrollPos;
});
    </script>
</head>
<body>
    <header class="navbar">
        
        <h1 class="heading__primary" >Mini Site de Vente</h1>

      <div class="icon-div">  <img  class="icon" src="public/images/irt-shop-high-resolution-logo.svg" alt="" srcset="">
    <h2 class="icon-text">IRT2_shop</h2c>
    </div>

        <?php if (isset($_SESSION['username'])): ?>
            <button onclick="openModal('createProductModal')">Créer un produit</button>
            <a href="index.php?controller=user&action=logout">Déconnexion</a>
        <?php else: ?>
            <button onclick="openModal('loginModal')">Admin</button>
        <?php endif; ?>

        <nav >
        <ul>
            <li><a href="index.php?controller=home&action=index">Accueil</a></li>
            <li><a href="index.php?controller=product&action=index">Produits</a></li>
            <li><a href="index.php?controller=shop&action=index">Boutique</a></li>
            <li><a href="index.php?controller=services&action=index">Services</a></li>
            <li><a href="index.php?controller=about&action=index">À propos</a></li>
        </ul>
    </nav>
   
    </header>
    <hr>
    <!-- Formulaire de connexion  -->

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Connexion</h2>
            <form method="POST" action="index.php?controller=user&action=login">
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" name="username" required>
                <br>
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" required>
                <br>
                <button type="submit">Connexion</button>
            </form>
        </div>
    </div>
    <!-- Formulaire de création de produit  -->
    <div id="createProductModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('createProductModal')">&times;</span>
            <h2>Ajouter un produit</h2>
            <form method="POST" action="index.php?controller=product&action=create" enctype="multipart/form-data">
                <label for="name">Nom:</label>
                <input type="text" name="name" required>
                <br>
                <label for="description">Description:</label>
                <textarea name="description" required></textarea>
                <br>
                <label for="price">Prix:</label>
                <input type="text" name="price" required>
                
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image" required>
            <br>
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>