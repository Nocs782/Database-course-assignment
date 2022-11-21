<x-layouts.base title="Discoveries">

    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('discoveries.edit', ['cname' => 'new']) }}">
                    New Discover
                </a>
                <h1>Discoveries</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Country Name</th>
                    <th scope="col">Disease Code</th>
                    <th scope="col">First Encountered</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($discoveries as $discovery)
                    <tr>
                        <th scope="row">{{ $discovery->cname }}</th>
                        <td>{{ $discovery->disease_code }}</td>
                        <td>{{ \Carbon\Carbon::parse($discovery->first_enc_date)->format('Y-m-d') }}</td>
                        <td>
                            <a  style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('discoveries.edit', ['cname' => $discovery->cname, 'disease_code' => $discovery->disease_code]) }}">
                                Action
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('discoveries.delete') }}">
                                @csrf
                                <input type="hidden" name="cname" value="{{ $discovery->cname }}">
                                <input type="hidden" name="disease_code" value="{{ $discovery->disease_code }}">
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
                            <li class="page-item"><a class="page-link" href="{{ route('discoveries.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
