<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Experiences</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section id="header">
        <img class="logo" src="https://mathieutu.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F012141a6-a777-45c9-95f5-b566bcc8971b%2F3e3a4294-a46f-4c48-a7e9-4b0d116eb362%2Flogo-ffs.webp?table=block&id=00844314-a6ab-4257-94e9-dbac68aae6f3&spaceId=012141a6-a777-45c9-95f5-b566bcc8971b&width=250&userId=&cache=v2" alt="">
        <nav>
            <a href="{{route('experiences')}}">Expériences</a>
            <a href="{{route('login')}}">Espace Modérateur</a>
            <a href="{{route('register')}}">Créer un compte</a>
        </nav>
    </section>

    <form id="experiences" method="POST" action="{{route('experiences')}}">
        @csrf
        <p>
            <label for="email">E-mail</label required><br>
            <input type="text" name="email" placeholder="gvansa@gmail.com">
        </p>
        <p>
            <label for="nom_activite">Nom de l'activité :</label required><br>
            <input type="text" name="nom_activite" placeholder="Spéléologie">
        </p>
        <p>
            <label for="site">Nom du site :</label required><br>
            <input type="text" name="site" placeholder="Grotte 1">
        </p>

        <p>
            <label for="date">Date de l'évènement</label required><br>
            <input type="date" name="date" placeholder="2024-02-04">
        </p>
        <p>
            <label for="titre">Titre du retour :</label required><br>
            <input type="text" name="titre" placeholder="Problème avec un noeud">
        </p>
        <p>
            <label for="description">Description de votre experience</label required><br>
            <input type="text" name="description" placeholder="Message...">
        </p>
        <label for="select">Êtes-vous satisfait de votre expérience ? :</label required><br>
        <select id="select" name="select">
            <option value="Pas satisfait">Peu satisfait</option>
            <option value="Peu satisfait">Pas satisfait</option>
            <option value="Moyennement satisfait">Moyennement satisfait</option>
            <option value="Satisfait">Satisfait</option>
            <option value="Très satisfait">Très satisfait</option>
        </select><br>
        <p>Acceptez-vous d'être contacté par email ?</p>
        <label>
            <input type="radio" name="reception_email" value="oui" >
        Oui
        </label required> <br>
        <label>
            <input type="radio" name="reception_email" value="non">
            Non
        </label required><br><br>

        <a href="{{route('experiences')}}">
            <button class="button" type="submit">Soumettre</button>
        </a>
    </form>
</body>

</html>