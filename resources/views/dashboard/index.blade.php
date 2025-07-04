<htmL>
<table class="table" border="1">
    <thead>
        <tr>
            <th>nama</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<hr>
<br><br>
{{ $user->name }}
{{ $user->email }}

</htmL>
