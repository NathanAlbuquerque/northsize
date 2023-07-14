@props(['route, name'])

<div class="float-right d-none">
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dash-index') }}"><i class="fa fa-home"></i>Início</a>
        </li>
        <li>
            <a href="{{ route($route) }}">{{ $name }}</a>
        </li>
        <li class="active">
            <strong>Cadastrados</strong>
        </li>
    </ol>
</div>
