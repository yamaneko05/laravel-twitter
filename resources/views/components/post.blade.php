<div class="card" style="width: 18rem;">
    <a href="/posts/{{ $post->id }}" style="text-decoration: none; color: inherit;">
        <div class="card-body">
            <h5 class="card-title">
                <object><a href="/users/{{ $post->user->id }}">
                    {{ $post->user->name }}
                </a></object>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->created_at }}</h6>
            <p class="card-text">{{ $post->text }}</p>
            <object>リプライ: {{ $post->children->count() }}</object>
        </div>
    </a>
</div>