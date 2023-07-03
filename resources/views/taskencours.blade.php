@extends("layouts.main")
@section('content')
    @isset($projetencours)
        @if(count($projetencours) > 0)
            @if(session('message'))
                <div id="myAlert" class="alert alert-success text-center" role="alert" style="display: none;">
                    {{ session('message') }}
                </div>
			@endif	
            <table class="table table-striped">
                <thead>
                    <!-- <tr>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Date de début</th>
                        <th>Actions</th>
                    </tr> -->
                </thead>
                <tbody>
                    @foreach($projetencours as $projet)
                        <tr>
                            <td>{{ $projet->libelle }}</td>
                            <td>{{ $projet->description }}</td>
                            <td>{{ $projet->datedebut }}</td>
                            <td>
                                <!-- <button type="button" class="p-3 mb-2 bg-transparent text-dark btn-options" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button> --> 
                                <div class="d-flex align-items-center justify-content-end">
                                    <form method="POST" action="{{ route('delete_taskencours', ['id' => $projet->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger bg bg-danger btn-block me-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le projet \'{{$projet->libelle}}\' ?')"> 
                                            <img src="client/images/supprimer.png" alt="Supprimer" style="width: 20px; height: 20px;"> 
                                        </button>
                                    </form>
                                    <a href="/etapetask/{{$projet->id}}" class="sidebar-link btn btn-info bg bg-info btn-block  me-2">
                                        <img src="client/images/etapes.png" alt="etapes" style="width: 20px; height: 20px;">
                                    </a>
                                    <form method="POST" action="{{route('update-state-first')}}">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <button type="submit" class="btn btn-light bg bg-light btn-block me-2" onclick="return confirm('Vous allez interrompre le projet \'{{$projet->libelle}}\' ?')">
                                            <img src="client/images/droit-au-non-refoulement.png" alt="return" style="width: 20px; height: 20px;"> 
                                        </button>
                                    </form>
                                    <form method="POST" action="{{route('update-state-finish')}}">
                                        @csrf 
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <button type="submit" class="btn btn-success bg bg-success btn-block">
                                            <img src="client/images/terminer.png" alt="terminer" style="width: 20px; height: 20px;">
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @if(session('error'))
                            <div id="myAlert" class="alert alert-danger text-center" role="alert" style="display: none;">
                                {{ session('error') }}
                            </div>
				        @endif	
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun projet en cours!
            </div>
        @endif
    @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun projet en cours!
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
    </script>

@endsection