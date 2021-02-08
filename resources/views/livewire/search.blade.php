<div>

    <input wire:model="search" class="form-control" name="search" type="text" list="mylist" placeholder="Aradığınız kitap..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->categories->title}}</option>
            @endforeach


        </datalist>

</div>
