@extends("layouts.main")
@section('content')
    @isset($projets)
        @if(count($projets) > 0)
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
                    @foreach($projets as $projet)
                        <tr>
                            <td>{{ $projet->libelle }}</td>
                            <td>{{ $projet->description }}</td>
                            <td>{{ $projet->datedebut }}</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-end">
                                    <form method="POST" action="{{ route('delete_task', ['id' => $projet->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger bg bg-danger me-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le projet \'{{$projet->libelle}}\' ?')">
                                            <img src="client/images/supprimer.png" alt="Supprimer" style="width: 20px; height: 20px;">
                                        </button>
                                    </form>
                                    <a href="/updatetask/{{$projet->id}}" class="btn btn-light bg bg-light me-2">
                                        <img src="client/images/mise-a-jour.png" alt="Modifier" style="width: 20px; height: 20px;">
                                    </a>
                                    <a href="/etapetask/{{$projet->id}}" class="sidebar-link btn btn-info bg bg-info btn-block  me-2">
                                        <img src="client/images/etapes.png" alt="etapes" style="width: 20px; height: 20px;">
                                    </a>
                                    <form method="POST" action="{{ route('update-state') }}">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <button type="submit" class="btn btn-primary bg bg-primary">
                                            <img src="client/images/bouton-jouer.png" alt="Commencer" style="width: 20px; height: 20px;">
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal Modification -->
                        <!-- Pop-up modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modification... • TaskEasy</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="" action="">
                                        <input type="hidden" name="projet_id" id="projet_id">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Libelle</label>
                                                <input type="text" class="form-control" id="libelle" name="libelle" 
                                                placeholder="Renommer votre projet ici" autocomplete="off" 
                                                    value="{{ $projet->libelle }}"
                                                required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="description" autocomplete="off"  text-center required>
                                                    {{ $projet->description }}
                                                </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date de debut</label>
                                                <input type="date" class="form-control" id="datedebut" name="datedebut" placeholder="YYYY-MM-DD" 
                                                autocomplete="off" 
                                                    value="{{ $projet->datedebut }}"
                                                required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="bg bg-secondary btn btn-secondary">Appliquer les changements</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun projet disponible!
            </div>
        @endif
    @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun projet disponible!
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
        }, 5000);
        /*
        //Recuperration de l'id du projet
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = document.getElementById('exampleModal');
            myModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget; 
                var projetId = button.getAttribute('data-projet-id'); 
                var projetIdInput = document.getElementById('projet_id');
                if (projetIdInput) {
                    projetIdInput.value = projetId;
                }
            });
        });*/

        var buttons = document.getElementsByClassName('modifie-projet-btn');
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener('click', function() {
            var ProjetId = this.getAttribute('data-projet-id');
          document.getElementById('projet_id').value = ProjetId;

            var libelle = this.getAttribute('data-projet-libelle');
            document.getElementById('libelle').value = libelle;

            var description = this.getAttribute('data-projet-description');
            document.getElementById('description').value = description;

            var datedebut = this.getAttribute('data-projet-datedebut');
            document.getElementById('datedebut').value = datedebut;
          });
        }
    </script>

    

@endsection