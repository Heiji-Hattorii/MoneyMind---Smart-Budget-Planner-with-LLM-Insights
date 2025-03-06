
    <div class="container">
        <h1>Détails de l'utilisateur</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nom : {{ $user->name }}</h5>
                <p class="card-text">Email : {{ $user->email }}</p>
                <p class="card-text">Dernière activité : {{ $user->last_activity ? $user->last_activity : 'Aucune' }}</p>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
