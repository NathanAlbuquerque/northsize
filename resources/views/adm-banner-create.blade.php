<x-adm-layout :user=$user>

    <x-slot name="css">
        <link href="{{ asset('assets-adm/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('assets-adm/plugins/autosize/autosize.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-adm/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>

        <script>
        $("#image").change(function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#view-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
        });
        </script>
    </x-slot>

    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">
                    <div class="float-left">
                        <h1 class="title">Banners</h1>
                    </div>
                    {{-- <x-adm-breadcrumb route="banner.create" name="Banners"></x-adm-breadcrumb> --}}
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                <section class="box ">
                    <img src="{{ Vite::asset('resources/images/1920x500.png') }}" class="img-fluid" id="view-img" alt="Banner sem imagem" style="width: 100%">
                </section>
            </div>

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

                                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="image">Imagem</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>

                                    <div class="form-group">
                                        <label for="link">Link do banner</label>
                                        <input type="url" class="form-control" name="link" id="link" placeholder="Opcional">
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
