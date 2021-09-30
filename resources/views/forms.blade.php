@extends('layouts.main')

@section('form')
<form action ="/hasil" method ="POST">
    @csrf
    @foreach($formData as $key=>$value)
        @if($value['0']=='text')
            <div class="mb-3">
                <label for="{{ $key }}" class="form-label"><strong>{{$value['1']}}</strong></label>
                <input name="{{ $key }}" type="{{ $value[0] }}" class="form-control" id="{{ $key }}">
            </div>

        @elseif($value['0']=='email')
            <div class="mb-3">
                <label for="{{ $key }}" class="form-label"><strong>{{ $value['1'] }}</strong></label>
                <input name="{{ $key }}" input type="{{ $value[0] }}" class="form-control" id="{{ $key }}">
            </div>

        @elseif($value['0']=='password')
            <div class="mb-3">
                <label for="{{ $key }}" class="form-label"><strong>{{$value['1']}}</strong></label>
                <input input name="{{ $key }}" type="{{ $value[0] }}" class="form-control" id="{{ $key }}">
            </div>

        @elseif($value['0']=='select')
            <label for="{{ $key }}" class="form-label"><strong>{{ $value['1'] }}</strong></label>
            <select name="{{ $key }}" class="form-select mb-3">
                <option selected>Pilih Golongan Darah</option>>  
                @foreach ($value[2] as $datavalue)    
                    <option value="{{ $datavalue }}">{{ $datavalue }}</option>
                @endforeach
            </select>

        @elseif($value['0']=='checkbox')
            <label for="{{ $key }}" class="form-label"><strong>{{ $value['1'] }}</strong></label>
            @foreach ($value['2'] as $datavalue)
                <div class="form-check"> 
                    <input name="{{ $key }}" class="form-check-input" type="checkbox" value="{{ $datavalue }}" id="{{ $datavalue }}">
                    <label class="form-check-label" for="{{ $datavalue }}">
                        {{$datavalue}}
                    </label>
                </div>
            @endforeach

        @elseif($value['0']=='radio')
            <label for="{{ $key }}" class="form-label mt-3"><strong>{{ $value['1'] }}</strong></label>
            @foreach ($value['2'] as $datavalue)
                <div class="form-check">
                    <input name="{{ $key }}" class="form-check-input" type="radio" value="{{ $datavalue }}" id="{{ $datavalue }}">
                    <label class="form-check-label" for="{{ $datavalue }}">
                        {{$datavalue}}
                    </label>
                </div>
            @endforeach

        @elseif($value['0']=='textarea')
            <label for="{{ $key }}" class="form-label mt-3"><strong>{{ $value['1'] }}</strong></label>
            <div class="mb-3">
                <textarea name="{{ $key }}" class="form-control" id="{{ $key }}""></textarea>
            </div>

        @elseif($value['0']=='submit')
            <button type="{{ $value[0] }}" class="btn btn-primary mb-3">
                {{$value['1']}}
            </button>

        @endif
    @endforeach
@endsection