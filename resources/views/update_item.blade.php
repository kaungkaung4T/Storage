


<div style="margin: auto;width:300px;margin-top:200px;">

<form action="{{ route('update', $item->id) }}" method="POST" enctype="multipart/form-data">
@csrf
<div>
Name
<input type="text" name="name" style="margin-left:10px;" value="{{ $item->name }}">
</div>

<br>

<div>
Price
<input type="text" name="price" style="margin-left:15px;" value="{{ $item->price }}">
</div>
<br>

<button>Update</button>


</form>

</div>
