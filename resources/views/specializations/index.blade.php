<x-layouts.base title="Specializations">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('specializations.edit', ['email' => 'new']) }}">
                    Bew Specialize
                </a>
                <h1>Specializes</h1>
            </div>
            <table style="min-height: 700px" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">Doctor</th>
                    <th scope="col">Disease type</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($specs as $spec)
                    <tr>
                            <?php  $user = $users[$spec->email]?>
                        <th scope="row">{{ $user->name . ' ' . $user->surname }}</th>
                        <td>{{ $dTypes[$spec->id]?->description }}</td>
                        <td>
                            <a  style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('specializations.edit', ['email' => $spec->email, 'id' => $spec->id]) }}">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('specializations.delete') }}">
                                @csrf
                                <input type="hidden" name="email" value="{{ $spec->email }}">
                                <input type="hidden" name="id" value="{{ $spec->id }}">
                                <button style="font-size: 14px; border: none;" type="submit" class="badge bg-danger rounded-pill">
                                    Delete
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
                            <li class="page-item"><a class="page-link" href="{{ route('specializations.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
