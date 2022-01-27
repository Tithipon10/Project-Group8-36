<div class="category" >
    <div class="textprofile text-dark">ชนิดของสินค้า</div>
    <br>
    <div class="category-in category-in-phone" id="scrollbar">
        @foreach ($category as $category007)
            
                <div class="point"></div>
                    <p class="text-type">
                    <a href="{{ url('/product/category', $category007->id_type_product) }}">{{ $category007->type_product }}</a>
                    </p>
        @endforeach
    </div>
</div>
