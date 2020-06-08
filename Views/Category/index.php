<h1>Categories</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/category/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new category</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        if (!empty($categories)) {
            foreach ($categories as $value) {
            echo '<tr>';
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['category_name'] . "</td>";
            echo "<td>" . $value['content'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/category/edit/" . $value["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/category/delete/" . $value["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
            }
        }else{
            echo " <tr><td colspan='4'><div class='alert alert-info' role='alert'>No record data</div></td></tr>";
        }
        ?>

    </table>
</div>
