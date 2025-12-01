<x-layout>
    <x-navbar></x-navbar>

    <div class="content-form">
        <div class="container-fluid" style="max-width: 650px;">
            <h3 class="fw-bold mt-5 mb-3 text-center">Edit Data Article</h3>


            <div class="card shadow-sm p-4">
                <form method="POST" action="{{ route('article.update', $article->slug) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Title</label>
                        <input type="text" class="form-control" value="{{ $article->title }}" required
                            autocomplete="off" id="title" name="title" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Image</label>
                        <input type="file" class="form-control" required id="img" name="img" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea type="text" class="form-control" required id="deskripsi" name="deskripsi">{{ $article->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Slug</label>
                        <input type="text" class="form-control" required id="slug" name="slug" readonly
                            value="{{ $article->slug }}" />
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('article.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-success">Save Data</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</x-layout>
