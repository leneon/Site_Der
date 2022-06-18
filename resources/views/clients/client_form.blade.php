@extends('layouts.master')

@section('content')
        <div class="container-fluid mt--7">
            <!--Pie chart to show number of car categories-->
            <div class="row">
            <div class="center card col-md-12">
                <h2 class=" card-header"> @if($form_type=='creer')Ajouter Nouvelle 🏎 Catégorie @else Modifier <b>{{$categorie['nom']}}</b> @endif</h2>
                <div class="card-body">
                    <!--Form-->
                    <form action="@if($form_type=='creer') {{ route('categorie.store') }} @else {{ route('categorie.update',$categorie) }}@endif" method="POST">
                    @if($form_type=='creer') {{csrf_field()}} @else {{csrf_field()}} {{method_field('PUT')}} @endif
                        <div class="row">
                            <div class="text-left form-group col-md-12">
                                <label >Nom</label>
                                <input type="text"  name="nom" value="@if(!empty(old('nom'))) {{old('nom')}}  @elseif(!empty($categorie)) {{ $categorie['nom'] }} @endif" placeholder="Entrer le Nom" class="form-control" >
                                <p class="err">{{$errors->first('nom')}}</p>

                                <label >Description</label>
                                <textarea type="text" rows="5"  name="desc"  placeholder="Entrer une description"  class="form-control">@if(!empty($categorie)) {{ $categorie['desc'] }} @elseif(!empty(old('desc'))) {{old('desc')}} @endif</textarea>
                            <p class="err">{{$errors->first('desc')}}</p>
                            </div>
                        </div>

                        @if($form_type=='creer')
                        <button type="submit"  class="btn btn-outline-success">Ajouter</button>
                        <button type="reset"  class="btn btn-outline-danger">Réinitialiser</button>
                        @else
                        <button type="submit"  class="btn btn-outline-success">Modifier</button>
                        <button type="submit"  class="btn btn-outline-danger"><a href="{{route('categorie.index')}}">Annuler</a></button>
                        @endif
                    </form>
                    <!-- ./ Form -->
                </div>
            </div>
        </div>

@stop



