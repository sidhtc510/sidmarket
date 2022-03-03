{{-- построение дерева родительских категорий
то что инклюдится, это чилд категории --}}


<ul  class="list-group" id="categories">
    @foreach ($categories as $category)
        <li class="list-group-item"><i class="fa fa-arrow-right"></i><a class="{{ (request()->segment(2) == $category->slug) ? 'text-primary' : '' }}" href="{{ route('categories.single', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
            <ul  class="list-group" id="categories">

                @foreach ($category->childrenCategories as $childCategory)
                    @include('layouts.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
    @endforeach
    </li>
</ul>