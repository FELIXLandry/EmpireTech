@extends('layouts.admin')
@section('content')
<style>
    .nom .a{
        text-align: left;
        font-size: 18px;
        letter-spacing: 1px;
        color: #000000;
    }
    .nom {
        text-align: left;
        font-size: 15px;
        letter-spacing: 1px;
        color: #000000;
    }
    .nom .a:hover{
        text-align: left;
        font-size: 20px;
        letter-spacing: 2px;
        color: rgb(43, 39, 39);
        transition: 0.4s;
        padding-left: 5px;
    }
    .name{
        text-align: left;
    }
    .fonction{
        color: black;
    }
    .fonction:hover{
        color: rgb(15, 65, 85);
        letter-spacing: 1px;
        transition: 0,7s;
    }
</style>

<div class="card">
    <div class="card-header" style="background-color: #1977cc; color: white;">
        <h4 style="font-weight: lighter;letter-spacing: 2px;">
            <i class="fa fa-tag"></i> GESTION DES DOCTEURS <i class="fa fa-users"></i>
            <a href="#" class="btn btn-default btn-sm float-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-user-plus"></i></a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered table-striped table-sm">
            <thead class="">
                <tr>
                    <th class="name">Libelé</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docteurs as $docteur)
                <tr>
                    <td class="nom"> <a class="a" href="{{ route("docteurs.show",$docteur->id) }}"> {{ $docteur->label }} </a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $docteurs->links() }}
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">AJOUT D'UN DOCTEUR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('docteurs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="label" placeholder="label">
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="image_uri" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <textarea class="form-control" name="description" id="" rows="5" placeholder="description sur le docteur"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="poste" placeholder="indiquer son poste">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <button class="btn btn-success mt-2"> Enrégistrer <i class="fa fa-save"></i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
