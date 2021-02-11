<ul class="sub-menu">
    @foreach($children as $subcategory)

            <li><a href="{{route('categorybook',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>

        @endforeach

        </ul>

