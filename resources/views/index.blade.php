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
                <th>crime type</th>
                <th>description</th>
                <th>Date complained logged</th>
                <th>Action taken</th>
                <th>Status</th>
                <th>More Data</th>
                <th>Change Privilege</th>
                <th>Edit User</th>
                <th>Disable User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Crimes as $row) <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['crime_type']}}</td>
                <td>{{$row['description']}}</td>
                <td>{{$row['created_at']}}</td>
                <td>{{$row['action_taken']}}</td>
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
    <div class='row'>
    <span>
    
    <a href="/newcrime" class="btn btn-outline-danger" role="button">Disacreate new</a></td>
    </span>
    </div>

    <body>
</html>