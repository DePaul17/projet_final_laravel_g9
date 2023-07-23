@include('wp-admin/Menue')

<style>
  .a {
    text-decoration: none;
    color: inherit;
    cursor: pointer;
  }
</style>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Utilisateurs inscrits</h4>
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
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
              </tr>
            </thead>
            <tbody>
              @foreach($simpleUsers as $user)
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
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['firstname'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['datenaiss'] }}</td>
                <td>{{ $user['sexe'] }}</td>
                <td>
                  <div class="badge badge-outline-success">
                    <a href="{{ route('listproject', ['userId' => $user->id]) }}" style="text-decoration: none; color: inherit; cursor: pointer;">Projets</a>
                  </div>
                </td> 
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
        <h4 class="card-title">Utilisateurs inscrits avec Google</h4>
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
                <th>Nom</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($googleUsers as $user)
              <tr>
                <td>
                  <div class="form-check form-check-muted m-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>
                  <img src="{{asset('src/assets/images/logos/user-1.jpg')}}" alt="image" />
                  <span class="pl-2"></span>
                </td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
       
                <td>
                  <div class="badge badge-outline-success">Projets</div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>  
    </div>
  </div>
</div>

@include('wp-admin/Menuef')
