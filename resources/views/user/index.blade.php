<html>
    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3">FOREACH</td>
                @foreach ($users as $user )
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>

                        <td>
                            <a href="{{ route('user.show', [
                                'userId' => $user['id']
                            ]) }}">Details</a>
                        </td>

                    </tr>
                @endforeach

                <td colspan="3">FOR</td>
                @for ($i=0; $i < count($users); $i++)
                    <tr>
                        <td>{{ $users[$i]['id'] }}</td>
                        <td>{{ $users[$i]['name'] }}</td>
                        <td>
                            <a href="{{ route('user.show', [
                                'userId' => $users[$i]['id']
                            ]) }}">Details</a>
                        </td>
                    </tr>
                @endfor

            </tr>
        </tbody>
    </table>
</html>
