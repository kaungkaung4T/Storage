<h1>hello</h1>



<a href="/">gg</a>






<div style="margin: auto;width:300px;margin-top:50px;">

<form action="{{ route('search') }}" method='GET' enctype="multipart/form-data" style="margin-bottom: 40px;">
@csrf
    Search: 
    <input type="search" name="search" placeholder="search by name">

    <button>Submit</button>
</form>

@if($result != 'none')
@foreach($result as $one)
<h1>{{ $one->name }}</h1>
<h1 style="margin-bottom: 100px;">{{ $one->price }}</h1>
@endforeach
@endif

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

    <a href="{{ route('view_update', $each_item->id) }}" style="margin-left: 50px;">link</a>

    <button style="margin-left: 50px;">Submite</button>

    </form>
<br>
@endforeach
</div>