@extends("layouts.main")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Modification... • TaskEasy</h3>
                    </div>
                    <div class="card-body">
                        <form action="/edittache/{{$tache->id}}" method="POST">
                            @csrf   
                            @method('PUT')  
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Libelle</label>
                                <input type="text" class="form-control" id="libelle" name="libelle" autocomplete="off" value="{{ $tache->libelle }}" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger" onclick="clearFields()">Effacer</button>
                                <button class="bg bg-secondary btn btn-secondary">Appliquer les changements</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function clearFields() {
            document.getElementById("libelle").value = "";
        }
    </script>
@endsection