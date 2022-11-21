<x-layouts.base title="Countries">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('diseases.edit', ['disease_code' => 'new']) }}">
                    New Disease
                </a>
                <h1>Diseases</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Disease Code</th>
                    <th scope="col">Pathogen</th>
                    <th scope="col">Description</th>
                    <th scope="col">Disease Type</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($diseases as $disease)
                    <tr>
                        <th scope="row">{{ $disease->disease_code }}</th>
                        <th>{{ $disease->pathogen }}</th>
                        <th>{{ $disease->description }}</th>
                        <th>{{ $types[$disease?->id]?->description ?? 'Unknown Type' }}</th>

                        <td>
                            <a style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('diseases.edit', ['disease_code' => $disease->disease_code]) }}">
                                Action
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('diseases.delete') }}">
                                @csrf
                                <input type="hidden" name="disease_code" value="{{ $disease->disease_code }}">
                                <button style="font-size: 14px; border: none;" type="submit" class="btn bg-danger text-white">
                                    Action
                                </button>
                            </form>
                        </td>
                        <td>{{ $disease->population }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg">
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item"><a class="page-link" href="{{ route('diseases.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
