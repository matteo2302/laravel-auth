@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h4>Fatto il:{{ $project->date }}</h4>
        <h4>Ultima revisione:{{ $project->last_update }}</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ullam nostrum doloribus voluptatibus quia
            dolorem porro sunt vero magni! Quia a optio nostrum sapiente dolor suscipit sequi eius voluptates eum!
            Blanditiis, enim dolore et inventore provident consequatur assumenda laboriosam nostrum, consectetur vitae hic
            iusto aut nobis numquam explicabo, similique accusamus cupiditate voluptate in? Ullam ad architecto quae
            quibusdam eligendi neque.
            Necessitatibus ipsum voluptas impedit inventore sapiente hic culpa aliquid incidunt amet? Odio quis tempore
            explicabo libero doloremque aliquid officiis at officia quos necessitatibus labore, non reprehenderit temporibus
            repellat, sunt nobis.</p>


        <footer class="d-flex justify-content-between">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <div class="d-flex justify-content-end"><a href="{{ route('admin.projects.edit', $project) }}"
                    class="btn btn-sm btn-warning me-2">
                    <i class="fas fa-pencil"></i>
                </a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>

        </footer>
    </div>
@endsection
