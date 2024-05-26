<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fédération Française de Spéléologie</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section id="header">
        <img class="logo" src="https://mathieutu.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F012141a6-a777-45c9-95f5-b566bcc8971b%2F3e3a4294-a46f-4c48-a7e9-4b0d116eb362%2Flogo-ffs.webp?table=block&id=00844314-a6ab-4257-94e9-dbac68aae6f3&spaceId=012141a6-a777-45c9-95f5-b566bcc8971b&width=250&userId=&cache=v2" alt="">
        <nav>
            <a href="{{route('experiences')}}">Expériences</a>
            <a href="{{route('login')}}">Espace Modérateur</a>
        </nav>
    </section>

</body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous êtes connectés!") }}
                </div>
            </div>
        </div>
    </div>

    <section>
        <div>
            <h1>Liste d'expériences</h1>
            <table>
                <tr>
                    <th>Email</th>
                    <th>Nom de l'activite</th>
                    <th>Nom du site</th>
                    <th>Date de l'évènement</th>
                    <th>Titre du retour</th>
                    <th>Description de l'évènement</th>
                    <th>Satisfaction</th>
                </tr>

                @foreach($publishedpost as $experience)
                <tr>
                    <td>{{ $experience->email }}</td>
                    <td>{{ $experience->nom_activite }}</td>
                    <td>{{ $experience->site }}</td>
                    <td>{{ $experience->date }}</td>
                    <td>{{ $experience->titre }}</td>
                    <td>{{ $experience->description }}</td>
                    <td>{{ $experience->select }}</td>
                    <td>{{ $experience->reception_email }}</td>
                </tr>
                @endforeach
            </table>
            <a href="/moderateur" id="bouttonDashboard">
                                <button>Consulter</button>
                            </a>
    </section>
</x-app-layout>
