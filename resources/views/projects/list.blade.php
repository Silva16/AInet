<div class="page-header">
    <h1>Projects</h1>
</div>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Project created successfully
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Homepage</th>
            <th colspan="2" class="col-xs-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>A simple project</td>
            <td><a href="http://www.dei.estg.ipleiria.pt">http://www.dei.estg.ipleiria.pt</a></td>
            <td>
                <a class="btn btn-primary" href="" role="button">Edit</a>
            </td>
            <td>
                <form action="" method="post">
                    <button type="submit" class="btn btn-danger">
                    Delete
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>The Guided Tour</td>
            <td></td>
            <td>
                <a class="btn btn-primary" href="" role="button">Edit</a>
            </td>
            <td>
                <form action="" method="post">
                    <button type="submit" class="btn btn-danger">
                    Delete
                    </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
<a class="btn btn-success" href="" role="button">Add New Project</a>

<div class="container">
	                @foreach($imgs as $img)
	                {{var_dump($img)}}
                        <img src="{{($img)}}" width="150px">
                    @endforeach
</div>

