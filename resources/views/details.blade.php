@extends("layouts.main")
@section('content')
    <div id="pdfContent">
            <div class="d-flex justify-content-end">
                <img src="{{asset('client/images/logotaskeasy.png')}}" alt="logo" style="width: 90px; height: 90px;">
            </div>
            <h1>
                <div class="text-center text-primary">
                    <b>TaskEasy</b>
                </div>
            </h1>
            <table class="table table-striped">
                <thead></thead>
                <tbody>
                    @foreach($projets_termines as $projet)
                        <tr>
                            <td> <b>Libelle du Projet:</b> {{ $projet->libelle }}</td>
                        </tr>
                        <tr>
                            <td> <b>Description:</b> {{ $projet->description }}</td>
                        </tr>
                        <tr>
                            <td> <b>Date de debut:</b> {{ $projet->datedebut }}</td>
                        </tr>
                        <tr>
                            <td> <b>Date de fin:</b> {{ $projet->datefin }}</td>
                        </tr>
                        @php
                            $currentProjet = $projet; // Stocker le projet actuel
                        @endphp
                    @endforeach
                </tbody>
            </table><br><br>
            <div class="mb-3">
                <h5> Liste des tâches de ce projet </h5>      
            </div>
            <table class="table table-striped">
                <thead></thead>
                <tbody>
                    @foreach($taches as $tache)
                        <tr>
                            <td>Libelle de la tâche: {{ $tache->libelle }}</td>
                        </tr>
                    @endforeach
                    @if($taches->isEmpty())
                        <tr>
                            <td colspan="1">Ce projet ne contient aucune tâche.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="text-success text-center">
                <p>
                    <b>Félicitations <img src="{{asset('client/images/felicitation.png')}}" alt="download" style="width: 20px; height: 20px;"></b>
                </p>
            </div>
    </div>
    <div class="position-fixed bottom-0 end-0 mb-5 me-5">
        <button class="d-flex align-items-center gap-2 dropdown-item" onclick="generatePDF()">  
            <img src="{{asset('client/images/telecharger.png')}}" alt="download" style="width: 40px; height: 40px;">   
        </button>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
        function generatePDF() {
        const pdfContent = document.getElementById('pdfContent');
        const projectName = "{{$currentProjet->libelle}}";

        html2pdf()
            .set({ filename: `${projectName}_TaskEasy.pdf` })
            .from(pdfContent)
            .save();
    }
</script>
@endsection