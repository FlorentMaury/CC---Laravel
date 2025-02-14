@extends('layouts.app') <!-- appel du layout : layouts/app.blade.php -->

@section('title', 'Contacts') <!-- title de la page  -->

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Affichage des Contacts</h1>
            <hr>            
            <!-- affichage du message flash -->
            @if($contacts->isEmpty())
                <p class="alert alert-success">Aucun contacts</p>
            @else
                {{-- @dump($contacts) --}}
                {{-- @dd($contacts) --}}
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    @foreach($contacts AS $contact)
                        <tr>
                         {{-- @dump($contact) --}}
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection