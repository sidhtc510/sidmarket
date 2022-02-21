{{-- шаблон вложенных чилд категорий 
весь код ниже инклюдится в categoriesMenu.blade.php --}}


<li>
    <a class="{{ (request()->segment(2) == $child_category->slug) ? 'text-primary' : '' }}" href="{{ route('categories.single', ['slug' => $child_category->slug]) }}">{{ $child_category->title }}</a> <small class="text-muted">({{$child_category->products_count}})</small>
</li>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('layouts.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
