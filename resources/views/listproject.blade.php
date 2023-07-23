@include('wp-admin/Menue')

@if(!$isAdmin)
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projet en attentes</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </th>
                <th></th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Date de debut</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projets as $projet)
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>

                  <img src="{{asset('src/assets/images/logos/'.$user['photo']) }}" alt="image" />
                  <span class="pl-2"></span>
                </td>
                <td>{{ $projet['libelle'] }}</td>
                <td>{{ $projet['description'] }}</td>
                <td>{{ $projet['datedebut'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projet en cours</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </th>
                <th></th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Date de debut</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projetencours as $projet)
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>

                  <img src="{{asset('src/assets/images/logos/'.$user['photo']) }}" alt="image" />
                  <span class="pl-2"></span>
                </td>
                <td>{{ $projet['libelle'] }}</td>
                <td>{{ $projet['description'] }}</td>
                <td>{{ $projet['datedebut'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projet termines</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </th>
                <th></th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projets_termines as $projet)
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>

                  <img src="{{asset('src/assets/images/logos/'.$user['photo']) }}" alt="image" />
                  <span class="pl-2"></span>
                </td>
                <td>{{ $projet['libelle'] }}</td>
                <td>{{ $projet['description'] }}</td>
                <td>{{ $projet['datedebut'] }}</td>
                <td>{{ $projet['datefin'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projet archives</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </th>
                <th></th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($archive as $projet)
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>

                  <img src="{{asset('src/assets/images/logos/'.$user['photo']) }}" alt="image" />
                  <span class="pl-2"></span>
                </td>
                <td>{{ $projet['libelle'] }}</td>
                <td>{{ $projet['description'] }}</td>
                <td>{{ $projet['datedebut'] }}</td>
                <td>{{ $projet['datefin '] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@if($isAdmin)
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projet archives</h4>
        <div class="table-responsive">
           <p><b>Compte Admin</b></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@include('wp-admin/Menuef')
