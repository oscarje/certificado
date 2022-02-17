@extends('layouts.app')

@section('content')
@if(true)
    <h2 class="text-center"> <p class="text-uppercase">Felicitaciones!!! </p>por haber culminado el curso de: {{DB::table('cursos')->where('id', $cursoId)->value('name');}}  en CourseWeb. </h2>
@endif
<figure class="figure border"  >
    <img src="{{DB::table('cursos')->where('id', $cursoId)->value('urlPlantilla');}}" alt="certificado" style="left:80%;width: 80%; margin:10%">
    <h2 class="text-center superpuesto card-text" style="top: 48%; left:38%;color:black;color:hsl(51, 50%, 16%);font-weight: bold">
    @if(true)
        {{Auth::user()->name}}
    @endif
    </h2>
    <h3 class="text-center superpuesto card-text" style="top: 55%; left:36%;color:hsl(51, 50%, 16%);">
    {{DB::table('cursos')->where('id', $cursoId)->value('name');}}
    </h3>
</figure>
@endsection