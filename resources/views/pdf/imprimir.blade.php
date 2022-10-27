<!DOCTYPE html>
<html>
<head>
<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Lista das Séries</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Serie</th>
    <th>Data</th>
  </tr>
  @if (count($series))
    @foreach ($series as $serie )
    <tr>
        <td>{{ $serie->id }}</td>
        <td>{{ $serie->nome }}</td>
        <td>{{ $serie->created_at }}</td>
    </tr>   
    @endforeach
    @else 
    <tr>
    <td colspan="3">Serie não encontrado!</td>
  </tr>
  @endif
  </table>
 
</body>
</html>


