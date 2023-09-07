{!! Form::open(['route' => [$route, $item], 'method' => 'DELETE', 'id' => 'formDeletar']) !!}
<button type="submit" class="link-dark" style="border: none; background-color: transparent;">
    <i class="{{$icon}}"></i>
</button>
{!! Form::close() !!}
