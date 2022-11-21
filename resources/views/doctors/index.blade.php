<x-layouts.base title="Doctors">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('doctors.edit', ['email' => 'new']) }}">
                    New Doctor
                </a>
                <h1>Doctors</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">email</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($public_servants as $pServant)
                    <tr>
                        <th scope="row">{{ $pServant->email }}</th>
                        <td>{{ $pServant->degree }}</td>
                        <td>
                            <a  style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('doctors.edit', ['email' => $pServant->email]) }}">
                                Action
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('doctors.delete') }}">
                                @csrf
                                <input type="hidden" name="email" value="{{ $pServant->email }}">
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
                            <li class="page-item"><a class="page-link" href="{{ route('doctors.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
