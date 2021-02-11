@foreach($children as $subcategory)
    <ul class="sub-menu">
        @if(count($subcategory->children)){
            <li ><a href="#">{{$subcategory->title}}</a></li>
            <ul class="sub-menu">

                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
            <hr>}
        @else
{
            <li><a href="{{route('categorybook',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
}
                @endif




            </ul>

        @endforeach



