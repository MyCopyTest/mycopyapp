@extends('mycopy.layout.master')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('mycode/css/material-design.css') }}">
@endsection
{{--
@section('content')
    @php($i = 0)
    @foreach($cores as $cor)
        @if($i == 0)
            <div class="row">
        @endif
            <div class="col-md-2">
                <ul>
                    <li class="{{  $cor['nome'] }}">{{  $cor['nome'] }}</li>
                    @foreach($cor['cores'] as $subcor)
                        <li class="{{  $subcor['nome'] }}">{{  $subcor['nome'] }}</li>
                    @endforeach
                </ul>
            </div>
        @if($i == 3)
            </div>
            @php($i = 0)
        @else
            @php($i++)
        @endif
    @endforeach
@endsection
--}}

@section('content')

    <div class="col-md-2">
        <div id="accordion" role="tablist" aria-multiselectable="true">
            @php($i = 0)
            @foreach($cores as $cor)
                @php($nomeCor = $cor['nome'])
                @php($nomeCorCompleta = 'bg-' . $nomeCor)
                <div class="mb-1">
                    <div class="accordion-color {{  $nomeCorCompleta  }}" role="tab" id="heading{{$i}}" style="height: 45px;">
                        <h5 class="accordion-color-name-h5">
                            <a class="accordion-color-name {{  ' text-' . $cor['text-color'] }}" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">{{  $cor['nome'] }}</a>
                        </h5>
                    </div>

                    <div id="collapse{{$i}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$i}}">
                        @foreach($cor['cores'] as $subcor)
                            @php($nomeSubCor = $subcor['nome'])
                            @php($nomeSubCorCompleta = $nomeCorCompleta . '-' . $nomeSubCor)
                            <div class="{{  $nomeSubCorCompleta  . ' text-' . $subcor['text-color'] }}" style="height: 45px;">
                                <span style="font-size: 14px; font-weight: 500;">{{  $nomeSubCor  }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                @php($i++)
            @endforeach
        </div>
    </div>


@endsection