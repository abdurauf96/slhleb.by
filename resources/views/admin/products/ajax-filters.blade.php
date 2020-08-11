@foreach($filters as $filter)
<option  value="{{ $filter->id }}">{{ $filter->name }}</option>
@endforeach