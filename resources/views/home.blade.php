@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default row">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#escrever" aria-expanded="false" aria-controls="collapseExample">
                                Escrever
                            </a>

                            <a class="btn btn-primary" data-toggle="collapse" href="#inbox" aria-expanded="false" aria-controls="collapseExample">
                               Inbox
                            </a>


                        </p>
                        <div class="collapse" id="escrever">
                            <div class="card card-body">

                                <form method="post" action="post/menssage">

                                    <div class="form-group col-xs-10">

                                        <label for="assunto">Destinatario/s:</label>
                                        <input id="assunto" type="text" class="form-control" placeholder="Destinatario/s">

                                        <label for="assunto">Assunto</label>
                                        <input id="assunto" type="text" class="form-control" placeholder="Assunto">
                                        <label for="comment">Escreve a Message</label>
                                        <textarea placeholder="Start Typing here your message..." class="form-control mb-4" rows="4" id="comment" v-model="messageText" @keyup.enter="sendMessage"></textarea>

                                        <button class="btn btn-primary pull-right px-5">Enviar</button>

                                    </div>

                                </form>

                            </div>
                        </div>

                        <div class="collapse" id="inbox">
                            <div class="card card-body">

                                <hr>
                                <p> teste</p>
                                <hr>

                                <p>John Doe</p>
                                <hr>


                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
