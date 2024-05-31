<x-dashboard>
    <style>
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 120vh;
            margin-top: 40px;
            margin-left: 190px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button.save {
            background-color: #a6935e;
            color: white;
        }
        button.previous {
            background-color: #102C57;
            color: white;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e3e6f0;
            padding: 15px;
            font-size: 1.25rem;
        }
        .card-body {
            padding: 20px;
        }
        button.previous {
        background-color: #102C57; 
        color: white;
    }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="form-container">
                <div class="card-header">
                    <h3>Modifier Enseignant</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('enseignant.update', $teacher->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control" value="{{ $teacher->nom }}" required>
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="prenom" class="form-control" value="{{ $teacher->prenom }}" required>
                            @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" name="numTelephone" class="form-control" value="{{ $teacher->numTelephone }}" required>
                            @error('numTelephone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Heures d'Enseignement par Année</label>
                            <input type="number" name="heuresEnseignementAnnee" class="form-control" value="{{ $teacher->heuresEnseignementAnnee }}" required>
                            @error('heuresEnseignementAnnee')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="button-container">
                            <button type="submit" class="save">Enregistrer</button>
                            <a href="{{ url()->previous() }}" class="previous">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard>
