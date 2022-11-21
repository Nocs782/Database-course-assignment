<x-layouts.base title="Users">
    <div class="card">
        <div class="card-body p-5">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <a class="btn btn-toolbar btn-primary" href="{{ route('user.edit', ['email' => 'new']) }}">
                    New User
                </a>
                <h1>Users</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Change</th>
                    <th scope="col">Remove</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->email }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->salary }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->cname }}</td>
                            <td>
                                <a  style="font-size: 14px;"
                                    class="btn btn-warning text-white"
                                    href="{{ route('user.edit', ['email' => $user->email]) }}">
                                    Action
                                </a>
                            </td>
                            <td>
                                <form style="display: inline-block" method="post" action="{{ route('user.delete') }}">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $user->email }}">
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
                            <li class="page-item"><a class="page-link" href="{{ route('user.index', ['page' => $i]) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layouts.base>
