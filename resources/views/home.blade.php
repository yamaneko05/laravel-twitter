<x-app>
	<div style="max-width: 400px;">
	<div class="vstack gap-2">
		@foreach ($posts as $post)
		<x-post :post="$post"/>
		@endforeach
	</div>
</div>
</x-app>
