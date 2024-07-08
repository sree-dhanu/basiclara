@if($selecteditem)
<p>selectedItem:{{$selecteditem->name}}</p>
<p>Items:{{$selecteditem->age}}</p>
<p>{{$selecteditem->class}}</p>
@else
<p>Items not found</p>
@endif