<x-app>
	<div style="max-width: 400px;">
		@foreach ($posts as $post)
        <x-post :post="$post"/>
        @endforeach
	</div>
</x-app>
