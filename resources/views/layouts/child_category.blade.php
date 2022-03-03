{{-- шаблон вложенных чилд категорий 
весь код ниже инклюдится в categoriesMenu.blade.php --}}
<li class="list-group-item"><i class="fa fa-arrow-right"></i>
    <a class="{{ (request()->segment(2) == $child_category->slug) ? 'text-primary' : '' }}" href="{{ route('categories.single', ['slug' => $child_category->slug]) }}">{{ $child_category->title }}</a> 
</li>
@if ($child_category->categories)
    <ul class="list-group-item">
        @foreach ($child_category->categories as $childCategory)
            @include('layouts.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif