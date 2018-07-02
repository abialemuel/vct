@extends('layouts.app')

@section('content')
<div id="mobils">
  <h2>Mobil <h2>
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>capacity</th>
      <th>Img</th>
    </tr>
    <thead>
  <tbody>
    <?php foreach ($mobil_list as $mobil): ?>
      <tr>
        <td>{{ $mobil->id }}</td>
        <td>{{ $mobil->name }}</td>
        <td>{{ $mobil->capacity }}</td>
        <td>{{ $mobil->image }}</td>
      </tr>
      <?php endforeach  ?>
  </tbody>

</table>
<input type="submit" name="text" value="asd">
</div>
@stop
