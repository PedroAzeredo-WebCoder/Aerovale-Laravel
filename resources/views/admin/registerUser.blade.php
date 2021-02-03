@extends('home')

@section ('header', '')
@section('content')
<style>
	body{
		background-image: url({{asset('theme/assets/img/bgRegisterUser.png')}});
		background-size: 100%;
	}
</style>
<main>
    <div class="cotainer p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Cadastro de Usuário</div>
                        <div class="card-body">
                            <form name="cadastro" method="post" action="{{route('admin.do-register')}}">
							@csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="input_name" class="form-control valid" name="name" required>
                                    </div>
                                </div>

								<div class="form-group row">
                                    <label for="last_name" class="col-md-4 col-form-label text-md-right">Sobrenome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="input_last_name" class="form-control valid" name="last_name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control valid" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control valid" name="username" required>
                                    </div>
                                </div> 

								<div class="form-group row">
									<label for="inputPassword" class="col-md-4 col-form-label text-md-right">Senha </label>
									<div class="col-md-6">
										<input type="password" name="pass" class="form-control valid" id="inputPassword" minlength="8" maxlength="25" required>
									</div>
								</div>                          

								<div class="form-group row">
									<label for="input_confirm_password" class="col-md-4 col-form-label text-md-right">Confirme Senha </label>
									<div class="col-md-6">
										<input type="password" name="confirmPass" class="form-control valid" id="input_confirm_password" minlength="8" maxlength="25" required>
									</div>
								</div> 

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success"  onsubmit="return validform()">
										<strong>
											Cadastrar
										</strong>
									</button>
								</div>

                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section ('footer', '')
@section ('card', '')				



	
			