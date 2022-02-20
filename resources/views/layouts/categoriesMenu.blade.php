{{-- построение дерева родительских категорий
то что инклюдится, это чилд категории --}}


<ul>
    @foreach ($categories as $category)
        <li><a href="{{ route('categories.single', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
            <ul>

                @foreach ($category->childrenCategories as $childCategory)
                    @include('layouts.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
    @endforeach
    </li>
</ul>
