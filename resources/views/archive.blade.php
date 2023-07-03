@extends("layouts.main")
@section('content')

    @isset($archive)
        @if(count($archive) > 0)
            <table class="table table-striped">
                <thead>
                    <!-- <tr>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th class="text-center">Actions</th>
                    </tr> -->
                </thead>
                <tbody>
                    @foreach($archive as $projet)
                        <tr>
                            <td>{{ $projet->libelle }}</td>
                            <td>{{ $projet->description }}</td>
                            <td>{{ $projet->datedebut }}</td>
                            <td>{{ $projet->datefin }}</td>
                            <td>
                                <div class="d-flex justify-content-center"> <!-- Utiliser "justify-content-center" ici -->
                                    <form method="POST" action="{{route('update-state-finish')}}">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="submit" class="nav-link nav-icon-hover btn btn-link" onclick="return confirm('Êtes-vous sûr de vouloir reafficher ce projet ? Vous le retrouverez dans la setion Projets terminés ')">  
                                                <i class="ti ti-eye fs-6"></i>
                                                <div class="notification bg-primary rounded-circle"></div>
                                            </button> 
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun projet archivé!
            </div>
        @endif
    @else
        <div class="alert alert-warning text-center" role="alert">
            Aucun projet archivé!
        </div>
    @endisset

    <script>
        // Récupérer la div d'alerte
        const alertDiv = document.getElementById('myAlert');

        // Afficher la div d'alerte
        alertDiv.style.display = 'block';

        // Définir un délai de 5 secondes pour masquer la div d'alerte
        setTimeout(function() {
            alertDiv.style.display = 'none';
        }, 3000);

        function clearFields() {
            document.getElementById("password").value = "";
        }
    </script>
@endsection