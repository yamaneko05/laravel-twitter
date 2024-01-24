<x-app>
    <x-post :post="$post"/>
    <form action="/posts/{{ $post->id }}/reply" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">テキスト</label>
                <textarea name="text" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">返信</button>
        </div>
    </form>
    <hr>
    <div class="vstack gap-2">
        @foreach ($post->children as $child)
        <x-post :post="$child"/>
        @endforeach
    </div>
</x-app>
