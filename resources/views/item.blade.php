<h1>hello</h1>



<a href="/">gg</a>




<div style="margin: auto;width:300px;margin-top:200px;">


<form action="{{ route('create_item') }}" method="POST" enctype="multipart/form-data">
@csrf
<div>
Name
<input type="text" name="name" style="margin-left:10px;">
</div>

<br>

<div>
Price
<input type="text" name="price" style="margin-left:15px;">
</div>
<br>

<button>Submit</button>
</form>

<br><br><br>


@foreach ($all_items as $each_item)
<form action="{{ route('delete_item', $each_item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ $each_item->name }}
    {{ $each_item->price }}

    <button>Submite</button>
    </form>
<br>
@endforeach
</div>