
    <!-- Modal Sign In -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card-body text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="card-title"><strong>Admin</strong> Sign In</h5>
                        <img class="mx-auto" src="{{asset('assets/img/logoAerovile.png')}}" alt="Logo Aerovile" style="width:200px">
                        <form class="form-signin">
                            <div class="form-row text-left">
                                <div class="form-group col-md-12">
                                    <label for="inputEmailSignIn">Username</label>
                                    <input type="text" class="form-control" id="inputEmailSignIn" placeholder="E-mail ou Username" required>
                                </div>
                            </div>
                            <div class="form-row text-left">
                                <div class="form-group col-md-12">
                                    <label for="inputPasswordSignIn">Senha (8 ou mais caracteres)</label>
                                    <input type="password" class="form-control" id="inputPasswordSignIn" minlength="8" maxlength="25" placeholder="Senha" required>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3 text-right">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                            </div>
                            
                            <a href="{{route('admin.content')}}" class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Sign in</a>

                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or"><strong>ou</strong></span>
                                </div>
                            </div>
                            <div class="container">
                                <h6>Entrar com</h6>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-lg w-100 btn-primary btn-facebook text-uppercase text-center"><i class="fab fa-facebook-square"></i>Facebook</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-lg w-100 btn-danger text-uppercase text-center"><i class="fab fa-google ligth"></i>Google</button>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                Ainda não tem um cadastro?<a class="btn btn-link" href="{{route('admin.register')}}"><b>Cadastre-se Aqui</b></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

