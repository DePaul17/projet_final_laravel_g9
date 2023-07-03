@extends("layouts.main")
@section('content')

    <!-- Button ajout tache -->
    <div class="d-flex justify-content-between">
        <div class="ml-auto">
            <button type="button" class="btn btn-primary d-flex align-items-center" style="margin-top: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="mr-1"> 
                    <img src="{{asset('client/images/plus.png')}}" alt="Modifier" style="width: 15px; height: 15px;"> &nbsp;
                </span>
                <span>
                    Nouvelle tâche à votre projet
                </span>
            </button>
        </div>
    </div> <br>
    <!-- Modal ajout tache -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Taskeasy • Nouvelle tache</h5>
                </div>
                <form method="POST" action="">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Libelle</label>
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Ajouter une tache" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="clearFields()">Effacer</button>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(session('notification'))
        <div id="myAlert" class="alert alert-success text-center" role="alert" style="display: none;">
            {{ session('notification') }}
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
            @forelse($taches as $tache)
                <tr>
                    <td>{{ $tache->libelle }}</td>
                    <td>
                        <div class="d-flex justify-content-end">
                        <a href="/updatetache/{{$tache->id}}" class="btn btn-white bg bg-white  me-2" > 
                                <img src="{{asset('client/images/crayon.png')}}" alt="editer" style="width: 20px; height: 20px;">
                            </a>
                            <form method="POST" action="{{ route('delete_tache', ['id' => $tache->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger bg bg-danger me-2" data-tache-id="{{ $tache->id }}" onclick="deleteTask(event)">
                                    <img src="{{asset('client/images/supprimer.png')}}" alt="Supprimer" style="width: 20px; height: 20px;">
                                </button>
                            </form>
                            <!-- <a href="/listtask" class="sidebar-link btn btn-white bg bg-white btn-block">
                                <img src="{{asset('client/images/continuer.png')}}" alt="etapes" style="width: 20px; height: 20px;">
                            </a> -->
                            <!-- bouton menu-taches -->
                            <!-- <button type="button" class="btn btn-primary bg bg-primary" data-bs-toggle="modal" data-bs-target="#MiniMenu">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </button> -->
                            <!-- Menu -->
                            <!-- <div class="modal fade" id="MiniMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form method="" action="">
                                                <button type="submit" class="btn btn-warning bg bg-warning w-100 mb-2" > 
                                                    Modifier
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('delete_tache', ['id' => $tache->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger bg bg-danger w-100 mb-2" data-tache-id="{{ $tache->id }}" onclick="deleteTask(event)">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Aucune tâche ajoutée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        function clearFields() {
            document.getElementById("libelle").value = "";
        }
        // Récupérer la div d'alerte
        const alertDiv = document.getElementById('myAlert');

        // Afficher la div d'alerte
        alertDiv.style.display = 'block';

        // Définir un délai de 5 secondes pour masquer la div d'alerte
        setTimeout(function() {
        alertDiv.style.display = 'none';
        }, 3000);

        //Supprimer l'id avec le pop-up
        function deleteTask(event) {
            event.preventDefault(); // Empêche la soumission du formulaire
            if (confirm("Êtes-vous sûr de vouloir supprimer cette tâche ?")) {
                const taskId = event.target.dataset.tacheId;
                const form = event.target.closest('form');
                form.action = form.action.replace('{id}', taskId);
                form.submit();
            }
        }
    </script> 

@endsection