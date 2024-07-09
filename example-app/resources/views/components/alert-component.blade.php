@props(['message', 'data' => 'info'])

@aware(['master'])

<div class="alert alert-{{$data}}" role="alert">
  <div class="text-center">{{$master}}</div>
</div>