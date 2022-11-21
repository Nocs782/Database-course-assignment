<x-layouts.base title="Countries">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('countries.edit', ['cname' => 'new']) }}">
                    New Country
                </a>
                <h1>Countries</h1>
            </div>
            <table class="table table">
                <thead>
                <tr>
                    <th scope="col">cname</th>
                    <th scope="col">Population</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <th scope="row">{{ $country->cname }}</th>
                        <td>{{ $country->population }}</td>
                        <td>
                            <a  style="font-size: 14px;"
                                class="btn btn-warning text-white"
                                href="{{ route('countries.edit', ['cname' => $country->cname]) }}">
                                Action
                            </a>
                        </td>
                        <td>
                            <form style="display: inline-block" method="post" action="{{ route('countries.delete') }}">
                                @csrf
                                <input type="hidden" name="cname" value="{{ $country->cname }}">
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
                            <li class="page-item"><a class="page-link" href="{{ route('countries.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
