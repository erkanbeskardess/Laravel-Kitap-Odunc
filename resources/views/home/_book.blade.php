@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="page-content-product">
    <div class="main-product">
        <div class="container">
            <div class="row clearfix">
                <ul id="main-menu">
                    <li class="parent"> <a href="#">Kitaplar</a>
                        <ul class="sub-menu">
                        @foreach($parentCategories as $rs)

                        <li class="parent"><a href="#">{{$rs->title}}</a>

                                        @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                        @endif


                            </li>

                            @endforeach
                        </ul>
                            </li>

                </ul>








            </div>
        </div>
    </div>
</div>

