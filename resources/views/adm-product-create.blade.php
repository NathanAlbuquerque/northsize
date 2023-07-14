<x-adm-layout :user=$user>

    <x-slot name="css">
        <link href="{{ asset('assets-adm/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        {{-- for editor --}}
        <link href="{{ asset('assets-adm/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('assets-adm/plugins/autosize/autosize.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        {{-- for editor --}}
        <script src="{{ asset('assets-adm/plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.js') }}" type="text/javascript"></script>
        {{-- For input .00 --}}
        <script src="{{ asset('assets-adm/plugins/autonumeric/autoNumeric-min.js') }}" type="text/javascript"></script>
    </x-slot>

    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">
                    <div class="float-left">
                        <h1 class="title">Products</h1>
                    </div>
                    {{-- <x-adm-breadcrumb route="product.create" name="Products"></x-adm-breadcrumb> --}}
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title float-left">Cadastrar</h2>
                        <div class="actions panel_actions float-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">

                                <form action="{{ route('product.store') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Preencha este ..." required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="price">Preço (R$)</label>
                                        <span class="desc">ex. "R$ 4,532.00"</span>
                                        <div class="controls">
                                            <input type="text" class="autoNumeric form-control" name="price" id="price" data-a-sign="R$ "  data-a-sep="." data-a-dec=","  placeholder="Preencha este ..." required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Categoria</label>
                                        <input type="text" class="form-control" name="category" id="category" placeholder="Preencha este ..." required>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <textarea name="description" class="bootstrap-wysihtml5-textarea" placeholder="Preencha este ..." style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px;" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                                Tudo conferido
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Criar !</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>
    </section>
    <!-- END CONTENT -->

    <x-aaachatapi />

</x-adm-layout>
