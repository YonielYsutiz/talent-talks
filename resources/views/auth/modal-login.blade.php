<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="close-modal-login" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ingresa tu identificacion</h4>
            </div>
            <div class="modal-body">
                @include('auth.login-form')
            </div>
            <div id="alert-error-login" class="alert alert-danger alert-dismissible mt-2 hidden">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> No hemos encontrado tu documento en nuestro sistema.
            </div>
        </div>
    </div>
</div>