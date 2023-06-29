@extends("layouts.main")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="/addtask_load" method="POST">
                        @csrf     
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Libelle</label>
                                <input type="text" class="form-control" id="libelle" placeholder="ex: Realisation d'un serveur web" name="libelle" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3" name="description" autocomplete="off" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Date de debut</label>
                                <input type="date" class="form-control" id="datedebut" name="datedebut" autocomplete="off" min="{{ date('Y-m-d') }}" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger" onclick="clearFields()">Effacer</button>
                                <button class="btn btn-primary">Ajouter</button>
                            </div>
                            <br>
                        </form>
                        @if(session('message'))
                            <div id="myAlert" class="alert alert-success" role="alert" style="display: none;">
                                {{ session('message') }}
                            </div>
				        @endif	
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function clearFields() {
            document.getElementById("libelle").value = "";
            document.getElementById("description").value = "";
            document.getElementById("datedebut").value = "";
        }

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
