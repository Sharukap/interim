<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
    <table class="table table-dark table-striped border-secondary rounded-lg mr-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>More Data</th>
                <th>Change Privilege</th>
                <th>Edit User</th>
                <th>Disable User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Users as $row) <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['name']}}</td>
                <td>Environment Ministry</td>
                <td>saman@gmail.com</td>
                <td>Admin</td>
                <td>Active</td>
                <td class="text-center"><a href="#" class="btn btn-outline-info" role="button" data-toggle="modal" data-target="#moreInfo">...</a></td>
                <td class="text-center"><a href="#" class="btn btn-outline-info" role="button" data-toggle="modal" data-target="#privilege">Privilege</a></td>
                <td><a href="#" class="btn btn-outline-warning" role="button" data-toggle="modal" data-target="#userEdit">Edit</a></td>
                <td><a href="#" class="btn btn-outline-danger" role="button">Disable</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <body>
</html>