<x-layout>
    <x-navbar></x-navbar>

    <div class="content-form">
        <div class="container-fluid" style="max-width: 650px;">
            <h3 class="fw-bold mt-4 mb-3 text-center">Create New Data Article</h3>


            <div class="card shadow-sm p-4">
                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Title</label>
                        <input type="text" class="form-control" placeholder="Masukkan Title..." required
                            autocomplete="off" id="title" name="title" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Image</label>
                        <input type="file" class="form-control" placeholder="Masukkan Image..." required
                            id="img" name="img" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea type="text" class="form-control" placeholder="Masukkan deskripsi..." required id="deskripsi"
                            name="deskripsi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Slug</label>
                        <input type="text" class="form-control" required id="slug" name="slug" readonly
                            value="{{ old('slug') }}" />
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('article.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-success">Save Data</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <script>
        document.getElementById('title').addEventListener('keyup', function() {
            let slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9\s]/g, '')
                .trim()
                .replace(/\s+/g, '-');

            document.getElementById('slug').value = slug;
        });
    </script>

</x-layout>
