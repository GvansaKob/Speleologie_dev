<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Experiences</title>
    <link rel="stylesheet" href="./style.css">
</head>
</body>

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