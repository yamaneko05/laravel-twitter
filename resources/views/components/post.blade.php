<div class="card">
    <div class="card-body">
        <a href="/posts/{{ $post->id }}" style="text-decoration: none; color: inherit;">
            <h5 class="card-title">
                <object>
                    <a href="/users/{{ $post->user->id }}">
                    {{ $post->user->name }}
                    </a>
                </object>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->created_at }}</h6>
            <p class="card-text">{{ $post->text }}</p>
        </a>
        </div>
        <div class="card-footer text-body-secondary">
        リプライ: {{ $post->children->count() }}
    </div>
</div>