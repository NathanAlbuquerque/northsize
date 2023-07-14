<x-adm-layout :user=$user>

    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <x-session-alert type="success" />
            <x-session-alert type="danger" />

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">
                    <div class="float-left">
                        <h1 class="title">Banners</h1>
                    </div>
                    <div class="float-right top15">
                        <a href="{{ route('banner.create') }}" class="btn btn-success btn-corner">Novo</a>
                    </div>
                    {{-- <x-adm-breadcrumb route="banner.index" name="Banners"></x-adm-breadcrumb> --}}
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-xl-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title float-left">Cadastrados</h2>
                        <div class="actions panel_actions float-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">    <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Imagem</th>
                                            <th>Link</th>
                                            <th>Operações</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($banners as $banner)
                                        <tr>
                                            <th scope="row">{{ $banner->id }}</th>
                                            <td>
                                                <img src="{{ asset('uploads/banner/'.$banner->image) }}" class="img-fluid" alt="Responsive image">
                                            </td>
                                            <td><a href="{{ $banner->link }}" target="_blank" rel="noopener noreferrer">{{ $banner->link }}</a></td>
                                            <td>
                                                <form action="{{ route('banner.edit', ['banner'=>$banner->id]) }}" class="col-lg-3 bottom15">
                                                    <button class="btn btn-warning btn-round">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('banner.destroy', ['banner'=>$banner->id]) }}" method="post" class="col-lg-3 bottom15">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn btn-orange btn-round" data-toggle="modal" href="#ultraModal-{{ $banner->id }}">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>

                                                    <!-- modal start -->
                                                    <div class="modal fade" id="ultraModal-{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
                                                        <div class="modal-dialog animated fadeInUp">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Apagar Banner</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tem certeza que deseja apagar o seguinte banner?<br>
                                                                    ID do banner: {{ $banner->id }}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancela</button>
                                                                    <button class="btn btn-orange" type="submit">Apagar banner</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- modal end -->
                                                </form>

                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <th scope="row" colspan="4" class="text-center">Nenhum banner cadastrado aqui</th>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>

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
