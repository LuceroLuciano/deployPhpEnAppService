/ Hacemos un arreglo con datos de ejemplo
$data = [
    'title' => 'Untitled-1',
    'created' => '2015-01-01',
    'modified' => '2015-01-01',
    'id' => '1',
    'name' => 'Practica 1',
    ]

echo "
    <!-- Make a Table for the Data -->
        <table class='table table-striped table-bordered table-hover'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
";

// Para cada elemento del arreglo colocamos una fila
foreach($data as $key => $value){
    echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
        ";
}
echo "
        </tbody>
    </table>
";
<h1>Welcome to Tokio Japon</h1>
<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jrailpass.com%2Fblog%2Fes%2Flugares-y-tiendas-manga-anime-japon&psig=AOvVaw3uGl7UeFbuji0YmEQKbj7z&ust=1643488621760000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJCMn6-m1fUCFQAAAAAdAAAAABAD" alt="japon">

?>