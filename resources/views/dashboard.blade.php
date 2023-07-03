@extends("layouts.main")
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!------------------------------------------------------------------------------------------------------------------------------>
@isset($projetencours)
@if(count($projetencours) > 0)
    @if(session('message'))
        <div hidden id="myAlert" class="alert alert-success text-center" role="alert" style="display: none;">
            {{ session('message') }}
        </div>
@endif	
    <table class="table table-striped" hidden>
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
                    <div hidden id="myAlert" class="alert alert-danger text-center" role="alert" style="display: none;">
                        {{ session('error') }}
                    </div>
        @endif	
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-warning text-center" role="alert" hidden>
        Aucun projet en cours!
    </div>
@endif
@else
    <div class="alert alert-warning text-center" hidden role="alert">
        Aucun projet en cours!
    </div>
@endisset 
@isset($projets_termines)
@if(count($projets_termines) > 0)
    @if(session('message'))
        <div id="myAlert" class="alert alert-success text-center" role="alert" hidden style="display: none;">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-striped" hidden>
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
            @foreach($projets_termines as $projet)
                <tr>
                    <td>{{ $projet->libelle }}</td>
                    <td>{{ $projet->description }}</td>
                    <td>{{ $projet->datedebut }}</td>
                    <td>{{ $projet->datefin }}</td>
                    <td>
                        <div class="d-flex justify-content-center"> <!-- Utiliser "justify-content-center" ici -->
                            <form method="" action="">
                                <button type="submit" class="bg bg-light btn btn-light me-2" onclick="return confirm('Une fois le projet masqué vous ne pourrez plus le voir. Êtes-vous sûr de vouloir masquer ce projet ?')">
                                    <img src="client/images/oeil.png" alt="masquer" style="width: 20px; height: 20px;">
                                </button>
                            </form>
                            <form method="" action="">
                                <button type="submit" class="bg bg-light btn btn-light me-2" onclick="return confirm('Confirmé pour imprimer le projet')">
                                    <img src="client/images/pdf.png" alt="pdf" style="width: 20px; height: 20px;">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-warning text-center" role="alert" hidden>
        Aucun projet terminé!
    </div>
@endif
@else
<div class="alert alert-warning text-center" role="alert" hidden>
    Aucun projet terminé!
</div>
@endisset
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Pourcentage de projet </h5>
            </div>

        </div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Nombre de projet en cours</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{ count($projetencours) }}</h4>
                      <div class="d-flex align-items-center mb-3">
                        <span
                          class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                          <i class="ti ti-arrow-up-left text-success"></i>
                          @php
                            $nombreTotalProjets = count($projetencours);
                            $pourcentageProjets = ($nombreTotalProjets * 12) / 100; // Calcul du pourcentage des projets en cours par année
                        @endphp
                        </span>
                        <p class="text-dark me-1 fs-3 mb-0">+{{ $pourcentageProjets }}%</p>
                        <p class="fs-3 mb-0">Cette année</p>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="me-4">
                          <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                          <span class="fs-2">2023</span>
                        </div>
                        <div>
                          <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                          <span class="fs-2">2023</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-center">
                        <div id="breakup"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-12">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold"> Nombre de projets terminé </h5>
                  <h4 class="fw-semibold mb-3">{{ count($projets_termines) }}</h4>
                  <div class="d-flex align-items-center pb-1">
                    <span
                      class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-down-right text-danger"></i>
                    </span>
                    @php
                        $nombreTotalProjetst = count($projets_termines);
                        $pourcentageProjetst = ($nombreTotalProjetst * 12) / 100; // Calcul du pourcentage des projets en cours par année
                     @endphp
                    <p class="text-dark me-1 fs-3 mb-0">+{{ $pourcentageProjetst }}%</p>
                    <p class="fs-3 mb-0">Cette année</p>
                  </div>
                </div>
              <div class="col-4">
              <div class="d-flex justify-content-end">
                 <div
                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                    <i class="ti ti-currency-dollar fs-6"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="earning"></div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var enCours = {!! json_encode($projetencours) !!};
    var termines = {!! json_encode($projets_termines) !!};

    var data = {
        labels: ['En cours', 'Terminés'],
        datasets: [{
            label: 'Nombre de projets',
            data: [enCours.length, termines.length],
            backgroundColor: ['rgb(54, 162, 235)', 'rgb(75, 192, 192)']
        }]
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script>

@endsection
