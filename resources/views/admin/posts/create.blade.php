@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h2>Aggiungi nuovo progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group my-2">
                        <label class="control-label">Titolo</label>
                        <input type="text" class="form-control" placeholder="Inserisci il titolo" id="title" name="title">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label">Tipi</label>
                        <select name="type_id" id="type_id" class="form-control">
                                <option value="">Seleziona il tipo</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label class="control-label">Contenuto</label>
                        <textarea class="form-control" placeholder="Inserisci il contenuto" name="content" id="content"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success btn-sm">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection