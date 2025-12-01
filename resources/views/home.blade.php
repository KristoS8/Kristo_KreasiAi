<x-layout>
    <x-navbar></x-navbar>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif

    @if (session()->has('success_login'))
        <div class="alert alert-success" role="alert">{{ session('success_login') }}</div>
    @endif

    <article class="cards-wrapper">

        @foreach ($articles as $data)
            <section class="card">
                <div class="card-image"><img src="{{ asset('images/' . $data->image) }}" alt="" class="card-image">
                </div>
                <h2 class="headline">{{ $data->title }}</h2>
                <h4 class="subheadline">{{ $data->slug }}</h4>
                <p class="body-text">
                    {{ Str::limit($data->deskripsi, 200, '.....') }}
                </p>
                <div class="buttons">
                    <a href="{{ route('article.edit', $data->slug) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('article.destroy', $data->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Yakin hapus?')">Delete</button>
                    </form>
                </div>
            </section>
        @endforeach

    </article>

</x-layout>
