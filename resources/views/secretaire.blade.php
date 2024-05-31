<x-dashboard>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Secrétaire</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter une secrétaire</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><strong>Nom</strong></th>
                            <th><strong>Prénom</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Téléphone</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($secretaires as $secretaire)
                        <tr>
                            <td>{{ $secretaire->nom }}</td>
                            <td>{{ $secretaire->prenom }}</td>
                            <td>{{ $secretaire->email }}</td>
                            <td>{{ $secretaire->numTelephone }}</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal" 
                                data-id="{{ $secretaire->id }}" 
                                data-nom="{{ $secretaire->nom }}" 
                                data-prenom="{{ $secretaire->prenom }}" 
                                data-email="{{ $secretaire->email }}" 
                                data-telephone="{{ $secretaire->numTelephone }}" 
                                <a href="{{ route('editSecretaire', $secretaire->id) }}" class="edit">
                                        <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                    </a>
                                    <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $secretaire->id }}">
                                    <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{ $secretaires->count() }}</b> sur <b>{{ $secretaires->total() }}</b></div>
                    <ul class="pagination">
                        {{ $secretaires->links() }}
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Add Modal -->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('secretaire.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter une secrétaire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="numTelephone" class="form-control" required>
                            </div>
        
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success btn-addsalle">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        

<script>
    

        // Delete modal
        $(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("secretaire.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
</script>

</x-dashboard>