@extends('layouts.app')

@section('content')

    <div class="col-xs-12">
        <div class="row  container">

            <div class="col-xs-3 white">
                <p>Sumbus</p>
                <hr>
            </div>

            <div class="panel white col-md-offset-1 col-xs-6">

                <h1>Chat</h1>

                <chat-log :messages="messages"></chat-log>

                <chat-composer v-on:messagesent="addMessage"></chat-composer>

            </div>


        </div>
    </div>

@endsection