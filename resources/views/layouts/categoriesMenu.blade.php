{{-- построение дерева родительских категорий
то что инклюдится, это чилд категории --}}


<ul>
    @foreach ($categories as $category)
    
    {{-- @if ($category->slug !=  null)
        @php
        echo url()->current();
            $activeClass = 'alert-link';
        @endphp
    @endif --}}
        <li><a class="{{ (request()->segment(2) == $category->slug) ? 'text-primary' : '' }}" href="{{ route('categories.single', ['slug' => $category->slug]) }}">{{ $category->title }}</a> <small class="text-muted">({{$category->products_count}})</small>
            <ul>

                @foreach ($category->childrenCategories as $childCategory)
                    @include('layouts.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
    @endforeach
    </li>
</ul>
