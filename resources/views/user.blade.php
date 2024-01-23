<x-app>
  <h2>{{ $user->name }}</h2>
	<dl>
		<dt>メールアドレス</dt><dd>{{ $user->email }}</dd>
		<dt>登録日</dt><dd>{{ $user->created_at }}</dd>
	</dl>
	@foreach ($user->posts as $post)
	<x-post :post="$post"/>
	@endforeach
</x-app>
