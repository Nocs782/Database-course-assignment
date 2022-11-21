<x-layouts.base title="Disease Types">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('disease_types.edit', ['id' => 'new']) }}">
                    New Disease Type
                </a>
                <h1>Disease Types</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dTypes as $dType)
                    <tr>
                        <th scope="row">{{ $dType->id }}</th>
                        <td>{{ $dType->description }}</td>
                        <td>
                            <a  style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('disease_types.edit', ['id' => $dType->id]) }}">
                                Action
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('disease_types.delete') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dType->id }}">
                                <button style="font-size: 14px; border: none;" type="submit" class="btn bg-danger text-white">
                                    Action
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg">
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item"><a class="page-link" href="{{ route('disease-type.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
