@extends('home')

@section ('header', '')
@section('content')
    <!--Gerenciamento Admin-->
    <main>
        <div class="jumbotron bg-dark">
            <div class="card w-75 mx-auto p-5">
                <div class="card-body">
                    <h5 class="card-title">Gerenciamento de conteúdo</h5>
                    <hr>
                    <div class="container">
                        <form action="{{route('admin.content')}}" method="get" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-center">
                                <label class="text-left">Selecione um Card *</label><br>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline btn border border-secondary btn-md btn-block">
                                            <label class="form-check-label" for="left">Esquerdo</label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="left" value=1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline btn border border-secondary btn-md btn-block">
                                            <label class="form-check-label" for="center">Centro</label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="center" value="2">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline btn border border-secondary btn-md btn-block">
                                            <label class="form-check-label" for="right">Direito</label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="right" value="3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-check-label" for="titulo">Título</label>
                                <input class="form-control" id="titulo" type="text" placeholder="Título">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Conteúdo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="button" class="btn btn-success btn-lg float-right"><strong>Postar</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section ('footer', '')
@section ('card', '')	
