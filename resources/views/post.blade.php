<x-app>
    <x-post :post="$post"/>
    @foreach ($post->children as $child)
    <x-post :post="$child"/>
    @endforeach
</x-app>
